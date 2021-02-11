<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../connection.php"); ?>
<?php 
	$res=mysqli_query($con, "select * from sv_admin_login");
	$row=mysqli_num_rows($res);
		if($row==0)
	 	{
			$admin_id="";
			$email_id="";	
			$admin_name="";
			$site_name="";
			$logo="";
			$favicon="";
			$site_desc="";
			$keyword="";
			$site_url="";
			$paypal_id="";			
			$cmode="";
			$smode="";		
			
		}
		else
		{			
			$fet=mysqli_fetch_array($res);	
			$admin_id=mysqli_real_escape_string($con, $fet['admin_id']);
			$email_id=mysqli_real_escape_string($con, $fet['email_id']);
			$admin_name=mysqli_real_escape_string($con, $fet['user_name']);	
			$site_name=mysqli_real_escape_string($con, $fet['site_name']);
			$logo=mysqli_real_escape_string($con, $fet['logo']);	
			$favicon=mysqli_real_escape_string($con, $fet['favicon']);	
			$site_desc=mysqli_real_escape_string($con, $fet['site_desc']);	
			$keyword=mysqli_real_escape_string($con, $fet['keyword']);
			$site_url=mysqli_real_escape_string($con, $fet['site_url']);
			$paypal_id=mysqli_real_escape_string($con, $fet['paypal_id']);
			$cmode=mysqli_real_escape_string($con, $fet['currency_mode']);
			$smode=mysqli_real_escape_string($con, $fet['paypal_site_mode']);
			
		}	
		$page = 'setting';
?>

<body>
    <div id="wrapper">
        <?php include("top_menu.php") ?>
        <!--/. NAV TOP  -->
        <?php include("side_menu.php") ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
						Настройка
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="dashboard.php">Главная</a></li>
					  <li><a href="#">Настройка</a></li>
					</ol>		
		</div>
            <div id="page-inner">
			    <div class="panel-body">
			<div class="text-center">
				<?php
if(isset($_REQUEST['msg']))
{
	$msg=$_REQUEST['msg'];
		if($msg=="Inserted")
		{
		      echo '<div class="succ-msg">Inserted Successfully</div>';
		}
		else if($msg=="Updated")
			{
		      echo '<div class="succ-msg">Updated Successfully</div>';		
			}
}
else
	$msg="";
?>					</div>

<!--<div class="err-msg" id="err_id"><?php echo $msg;?></div>	</div>-->
		<input type="hidden" id="id" name="id" value="<?php echo $admin_id;?>">
		<form class="" name="admin_s" id="admin_s" method="post" enctype="multipart/form-data" action="admin_setting_addcode.php">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Имя пользователя</label>				
						<input type="text" id="admin_name" required="" class="form-control" name="admin_name" value="<?php echo $admin_name;?>">
					</div>
					<div class="err" id="admin_name_err"></div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Email</label>				
						<input type="text" id="email_id" class="form-control" name="email_id" value="<?php echo $email_id;?>">
					</div>
					<div class="err" id="email_err"></div>
				</div>
							
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Название сайта</label>				
						<input type="text" id="site_name" class="form-control" name="site_name" value="<?php echo $site_name;?>">
					</div>
					<div class="err" id="site_name_err"></div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Логотип сайта</label>		
							<div class="err" style="padding:10px;" id="">[Пожалуйста, выберите изображение 160px / 40px]</div>
							<input type="file" id="logo" class="form-control" name="logo" value="<?php echo $fet['logo'];?>">
						<?php
						if($logo=="") { ?>	
						<a href="#"><img style="background: #ddd;margin-top:20px;" src="admin-logo/default-logo.png" alt="" ></a>
	
						<?php
							}
							else
							{
							?>
						<a href="admin-logo/<?php echo $logo;?>" target="blank"><img style="background: #ddd;margin-top:20px;" src="admin-logo/<?php echo $logo;?>" alt=""></a>
						<?php } ?>							
					</div>
					<div class="err" id="logo_err"></div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Иконка сайта</label>	
						<div style="padding:10px;" class="err"  id="">[Пожалуйста, выберите изображение 16px / 24px]</div>			
						<input type="file" id="favicon" class="form-control" name="favicon" value="<?php echo ""?>">
						<?php
						if($favicon=="") { 	?>				
						<?php } else { ?>
					<a href="admin-logo/<?php echo $favicon;?>" target="blank"><img src="admin-logo/<?php echo $favicon;?>" alt=""  style="margin-top:20px;"></a>
					<?php
						}
					?>	
					</div>
					<div class="err" id="favicon_err"></div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Описание сайта</label>				
						<input type="text" id="site_desc" class="form-control" name="site_desc" value="<?php echo $site_desc?>">
					</div>
					<div class="err" id="site_desc_err"></div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Ключевое слово сайта</label>				
						<input type="text" id="keyword" class="form-control" name="keyword" value="<?php echo $keyword;?>">
					</div>
					<div class="err" id="site_kwd_err"></div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4"></div>
								<div class="col-lg-4 col-md-4 col-sm-4"></div>

				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Url сайта</label>				
						<input type="text" id="site_url" class="form-control" name="site_url" value="<?php echo $site_url;?>">
					</div>
					<div class="err" id="site_url_err"></div>
				</div>
				
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="text-center">Настройки Paypal</h3>
						<div class="col-lg-4 col-md-4 col-sm-4">
						<label>Идентификатор Paypal</label>	
							<input type="text" id="paypal_id" class="form-control" name="paypal_id" value="<?php echo $paypal_id;?>">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<label>Валютный режим</label>	
								<select id="cmode" name="cmode" class="form-control">
									<option value="">выбрать валюту</option>
									<option value="USD" <?php { if($cmode=="USD") echo "selected='selected'"; }?>>USD</option>
									<option value="CZK" <?php { if($cmode=="CZK") echo "selected='selected'"; }?>>CZK</option>
									<option value="DKK" <?php { if($cmode=="DKK") echo "selected='selected'"; }?>>DKK</option>
									<option value="HKD" <?php { if($cmode=="HKD") echo "selected='selected'"; }?>>HKD</option>
									<option value="HUF" <?php { if($cmode=="HUF") echo "selected='selected'"; }?>>HUF</option>
									<option value="ILS" <?php { if($cmode=="ILS") echo "selected='selected'"; }?>>ILS</option>
									<option value="JPY" <?php { if($cmode=="JPY") echo "selected='selected'"; }?>>JPY</option>
									<option value="MXN" <?php { if($cmode=="MXN") echo "selected='selected'"; }?>>MXN</option>
									<option value="NZD" <?php { if($cmode=="NZD") echo "selected='selected'"; }?>>NZD </option>
									<option value="NOK" <?php { if($cmode=="NOK") echo "selected='selected'"; }?>>NOK</option>
									<option value="PHP" <?php { if($cmode=="PHP") echo "selected='selected'"; }?>>PHP</option>
									<option value="PLN" <?php { if($cmode=="PLN") echo "selected='selected'"; }?>>PLN</option>
									<option value="SGD" <?php { if($cmode=="SGD") echo "selected='selected'"; }?>>SGD</option>
									<option value="SEK" <?php { if($cmode=="SEK") echo "selected='selected'"; }?>>SEK</option>
									<option value="CHF" <?php { if($cmode=="CHF") echo "selected='selected'"; }?>>CHF</option>																	
									<option value="THB " <?php { if($cmode=="THB") echo "selected='selected'"; }?>>THB</option>

									<option value="AUD" <?php { if($cmode=="AUD") echo "selected='selected'"; }?>>AUD</option>
									<option value="CAD" <?php { if($cmode=="CAD") echo "selected='selected'"; }?>>CAD</option>
									<option value="EUR" <?php { if($cmode=="EUR") echo "selected='selected'"; }?>>EUR</option>
									<option value="GBP" <?php { if($cmode=="GBP") echo "selected='selected'"; }?>>GBP</option>
									
									<option value="BRL" <?php { if($cmode=="BRL") echo "selected='selected'"; }?>>BRL </option>
									<option value="MYR" <?php { if($cmode=="MYR") echo "selected='selected'"; }?>>MYR</option>
									<option value="NOK" <?php { if($cmode=="NOK") echo "selected='selected'"; }?>>NOK</option>
									<option value="TWD" <?php { if($cmode=="TWD") echo "selected='selected'"; }?>>TWD</option>
									<option value="TRY" <?php { if($cmode=="TRY") echo "selected='selected'"; }?>>TRY</option>
		  
										
									<option value="DZD" <?php { if($cmode=="DZD") echo "selected='selected'"; }?>>DZD </option>
									<option value="AZN" <?php { if($cmode=="AZN") echo "selected='selected'"; }?>>AZN</option>
									<option value="BHD" <?php { if($cmode=="BHD") echo "selected='selected'"; }?>>BHD</option>
									<option value="BYR" <?php { if($cmode=="BYR") echo "selected='selected'"; }?>>BYR</option>
									<option value="BAM" <?php { if($cmode=="BAM") echo "selected='selected'"; }?>>BAM</option>
									<option value="BWP" <?php { if($cmode=="BWP") echo "selected='selected'"; }?>>BWP</option>
									<option value="BND" <?php { if($cmode=="BND") echo "selected='selected'"; }?>>BND </option>
									<option value="BGN" <?php { if($cmode=="BGN") echo "selected='selected'"; }?>>BGN</option>
									<option value="KYD" <?php { if($cmode=="KYD") echo "selected='selected'"; }?>>KYD</option>
									<option value="COP" <?php { if($cmode=="COP") echo "selected='selected'"; }?>>COP</option>
									<option value="XOF" <?php { if($cmode=="XOF") echo "selected='selected'"; }?>>XOF</option>
									<option value="XAF" <?php { if($cmode=="XAF") echo "selected='selected'"; }?>>XAF</option>
									
									<option value="CDF" <?php { if($cmode=="CDF") echo "selected='selected'"; }?>>CDF </option>
									<option value="HRK" <?php { if($cmode=="HRK") echo "selected='selected'"; }?>>HRK</option>
									<option value="CYP" <?php { if($cmode=="CYP") echo "selected='selected'"; }?>>CYP</option>
									<option value="CZK" <?php { if($cmode=="CZK") echo "selected='selected'"; }?>>CZK</option>
									<option value="DKK" <?php { if($cmode=="DKK") echo "selected='selected'"; }?>>DKK</option>
									<option value="DJF" <?php { if($cmode=="DJF") echo "selected='selected'"; }?>>DJF</option>
									<option value="EGP" <?php { if($cmode=="EGP") echo "selected='selected'"; }?>>EGP </option>
									<option value="ERN" <?php { if($cmode=="ERN") echo "selected='selected'"; }?>>ERN</option>
									<option value="INR" <?php { if($cmode=="INR") echo "selected='selected'"; }?>>INR</option>
									<option value="IDR" <?php { if($cmode=="IDR") echo "selected='selected'"; }?>>IDR</option>
									<option value="IRR" <?php { if($cmode=="IRR") echo "selected='selected'"; }?>>IRR</option>
									<option value="RSD" <?php { if($cmode=="RSD") echo "selected='selected'"; }?>>RSD</option>
								</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<label>Режим сайта Paypal</label>	
								<select id="smode" name="smode" class="form-control">
									<option value="">Выбрать</option>
									<option value="test" <?php { if($smode=="test") echo "selected='selected'"; }?>>Тестовый</option>
									<option value="live" <?php { if($smode=="live") echo "selected='selected'"; }?>>Рельный</option>
								</select>
						</div>
				</div>
				
								
				<div class="col-lg-12" style="margin-top:25px;">
					<button type="button" class="btn btn-primary" onclick="javascript:admin_email()">Сохранить</button>
				</div>
			</form>
			</div>
				 <?php include("footer.php") ?>

    </div>
	</div>
             <!-- /. PAGE INNER  -->
       
</body>


</html>
