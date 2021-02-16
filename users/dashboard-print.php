<?php 
$page = 'dashboard';
@session_start();
if(isset($_SESSION['phone_no']))
{
?>
<?php include("../connection.php");
@session_start();
if(isset($_SESSION['phone_no']))
{		
$phone_no=mysqli_real_escape_string($con, $_SESSION['phone_no']);
$query=mysqli_fetch_array(mysqli_query($con, "select * from sv_user_profile where phone_no='$phone_no'"));
$address=mysqli_real_escape_string($con, $query['address']);		
}	
?>
<?php 
if(isset($_REQUEST['postal_code']))
{
$postal_code=$_REQUEST['postal_code'];
}
else{$postal_code="";}

$res=mysqli_fetch_array(mysqli_query($con, "select * from sv_admin_login"));
$site_name=mysqli_real_escape_string($con,$res['site_name']);
$favicon=mysqli_real_escape_string($con,$res['favicon']);
$currency_code=mysqli_real_escape_string($con,$res['currency_mode']);
?>
<title><?php echo $site_name;?></title>
  <link rel="icon" href="admincp/admin-logo/<?php echo $favicon;?>" >
<body class="splash-index" onload="window.print()">
<section class="teaser">
    <div class="min-space"></div>
    <div class="container">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <center><h3>Информация для заказа</h3></center>
        <div class="table-responsive">
          <table border=1>
            <thead>
              <tr>
                <th>№</th>		
                <th>Город</th>
                <th>Адрес</th>
                <th>Услуга</th>
                <th>Дополнительные услуги </th>
				<th>ID заказа</th>
                <th>Дата заказа</th>
                <th>Время заказа</th>
                <th>Требование </th>
				<th>Цена</th>
				<th>Режим оплаты</th>
				<th>Статус платежа</th>
				<th>Валюта</th>
              </tr>
            </thead>
            <?php
				$sno=0;
				$res=mysqli_query($con, "select * from sv_user_order where phone_no='$phone_no' ORDER BY order_id DESC");
				while($row=mysqli_fetch_array($res))
				{
					$sno++;
					$services=mysqli_real_escape_string($con, $row['services']);
					$sub_id=mysqli_real_escape_string($con, $row['sub_services']);
					$query=mysqli_fetch_array(mysqli_query($con, "select * from sv_services where services_id='$services'"));			
					$date=mysqli_real_escape_string($con, date("d-m-Y",strtotime($row['date'])));	
					$city_id=mysqli_real_escape_string($con, $row['city_name']);
					$city=mysqli_fetch_array(mysqli_query($con, "select * from sv_city where city_id='$city_id'"));
					$sub=mysqli_fetch_array(mysqli_query($con, "select * from sv_services_sub where sid='$sub_id'"));			
			?>  
            <tbody>
              <tr>
                <td> <?php echo $sno; ?></td>
                <td><?php echo $city['city_name']; ?></td>
                <td> <?php echo $row['address']; ?></td>
                <td> <?php echo $query['services_name'];?></td>
                <td><?php echo $sub['services_sub_name']; ?></td>
				<td><?php echo $row['order_id']; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $row['order_time']; ?></td>
                <td><?php echo $row['requirement']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['payment_mode']; ?></td>
				<td><?php echo $row['payment_status']; ?></td>
				<td><?php echo $currency_code; ?></td>
              </tr>
            </tbody>
            <?php } ?>	
          </table>
        </div>
      </div>
    </div>
    <div class="min-space">
    </div>
  </section>
  </html>
<?php } else { header('Location:sign_in.php'); }?>
