<?php
session_start();
include ('../connection.php');
include ('../header.php');
if(isset($_SESSION['phone_no']))
{
$order_id=  mysqli_real_escape_string($con, $_SESSION["order_id"]);
//Set useful variables for paypal form 
$query=mysqli_fetch_array(mysqli_query($con, "select * from sv_admin_login"));
$site_mode=$query['paypal_site_mode'];
$cur_code=$query['currency_mode'];

$paypal_id = $query['paypal_id']; //Business Email

if($site_mode=="test")
	$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
else if($site_mode=="live")
	$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //Live PayPal API URL

?>
 <section class="teaser bg-top ">
 <div class="min-space"></div><div class="min-space"></div><div class="min-space"></div>
 <h3 class="sub-title">Подтверждение об оплате</h3>
<div class="min-space"></div>
<div class="min-space"></div>
</section>
<!--fetch products from the database--->
<?php
		$results = mysqli_query($con, "select * from sv_user_order where order_id='$order_id'");
		while($row=mysqli_fetch_array($results))
		{
			$services_id=mysqli_real_escape_string($con, $row['services']);
			$sub_services_id=mysqli_real_escape_string($con, $row['sub_services']);
			$services=mysqli_fetch_array(mysqli_query($con, "select * from sv_services where services_id='$services_id'"));
			$sname=$services['services_name'];
			$sub_services=mysqli_fetch_array(mysqli_query($con, "select * from sv_services_sub where sid='$sub_services_id'"));
			$sub_sname=$sub_services['services_sub_name'];
			$price=$row['price'];
			$payment_mode=$row['payment_mode'];
?>

	
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Заказ</title>

</head>
<body>
<div class="user-login-container">

<div class="container text-center">
<div class="min-space"></div>
	<label>Наименование услуги </label> - <?php echo $services['services_name']; ?><br>
     <label>Имя дополнительной услуги</label> -  <?php echo $sub_services['services_sub_name']; ?><br>
    <label>Price</label> - <?php echo $row['price']; ?>
    <form action="<?php echo $paypal_url; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $sname; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['order_id'];?>">
        <input type="hidden" name="amount" value="<?php echo $price; ?>">
        <input type="hidden" name="currency_code" value="<?php echo $cur_code; ?>">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='<?php echo $query['site_url'];?>/users/cancel.php'>
		<input type='hidden' name='return' value='<?php echo $query['site_url'];?>/users/success.php'>
		<input type="submit" name="submit" value="Pay now" class="paynow">
     
    
    </form>
    <?php } ?>
	</div>
	
</div>	
</body>

<?php include('../footer.php'); ?>
</html>
<?php } else { header('Location:sign_in.php'); }?>
