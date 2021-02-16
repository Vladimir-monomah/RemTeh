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
		      echo '<div class="succ-msg">Успешно обновлено</div>';		
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
									<option value="EUR" <?php { if($cmode=="EUR") echo "selected='selected'"; }?>>EUR</option>
									<option value="RUB" <?php { if($cmode=="RUB") echo "selected='selected'"; }?>>РУБ</option>
								</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<label>Режим сайта Paypal</label>	
								<select id="smode" name="smode" class="form-control">
									<option value="">Выбрать</option>
									<option value="test" <?php { if($smode=="test") echo "selected='selected'"; }?>>Тестовый</option>
									<option value="live" <?php { if($smode=="live") echo "selected='selected'"; }?>>Реальный</option>
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
