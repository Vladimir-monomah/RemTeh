
  <body class="splash-index">
    
<?php include("../header.php")?>

<section class="teaser main-teaser bg-top">
<div class="min-space"></div>
<div class="min-space"></div>
<div class="min-space"></div>
<h1 class="sub-title">Войти / Зарегистрироваться</h1>
<div class="min-space"></div>
<div class="min-space"></div>
</section>

<div class="user-login-container">
  <div class="user-login-errors">
    
  </div>
  <div class="container">

<?php
if(isset($_REQUEST['msg']))
{
	$msg=$_REQUEST['msg'];
		if($msg=="success")
		{
		      echo '<div class="succ-msg">Аккаунт успешно создан. пожалуйста, войдите в свою учетную запись </div>';
		}	
			else if($msg=="Exist")
			{
		      echo '<div class="err-msg">Телефон уже существует</div>';		
			}
			else if($msg=="Invalid")
			{
		      echo '<div class="err-msg">Неправильное имя пользователя или пароль</div>';		
			}			
}
else
	$msg="";
?>
<!--<div class="err-msg" id="err_id"><?php echo $msg;?></div>-->
</div>
 
		<div class="container">
		<div class="min-space"></div>
		<div class="col-lg-6 col-md-6 col-sm-6">
		<div class="container user-login">
	        <h1 class="user-login__heading">Войдите в свой аккаунт</h1>
			<form class="form-large" action="javascript:login();" accept-charset="UTF-8" method="post">
				<input placeholder="Телефон" type="tel"  required="required" class="user-login__input user-login__input" name="phone_no" id="phone_no" />
				<input placeholder="Пароль" required="required" class="user-login__input user-login__input--password" type="password" name="password" id="password" />
				<input type="submit" value="Войти в систему" class="user-login__action" />
				
				<a class="user-login__forgot-password" href="forgot.php">Забыли Ваш пароль?</a>
				<input value="true" type="hidden" name="user[remember_me]" id="user_remember_me" />
				<input type="hidden" name="initial_origin" id="initial_origin" />				
			</form>
		</div>
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6">
		<div class="container user-login">
        <h1 class="user-login__heading">Завести аккаунт</h1>
		<form class="form-large" action="signup_add_code.php" id="login_form" name="login_form" accept-charset="UTF-8" method="post">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<input type="text" placeholder="Имя" required="required" class="user-login__input user-login__input" name="name" id="name">
			<div class="err" id="name_err"></div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<input type="email" placeholder="Email" required="required" class="user-login__input user-login__input--email" name="email_id" id="email_id">
			<div class="err" id="email_err"></div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
		<input type="tel" placeholder="Телефон"   required="required" class="user-login__input user-login__input--tel" name="pho_no" id="pho_no">
		<div class="err" id="pho_no_err"></div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<input type="password" placeholder="Пароль" required="required" class="user-login__input user-login__input" name="pwd" id="pwd">
			<div class="err" id="pwd_err"></div>
		</div>	
		
		<div class="col-lg-6 col-md-6 col-sm-6">
			<input type="text" placeholder="Город" required="required" class="user-login__input user-login__input" name="city" id="city">
			<div class="err" id="city_err"></div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<input type="text" placeholder="Адрес" required="required" class="user-login__input user-login__input" name="address" id="address">
			<div class="err" id="address_err"></div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<input type="text" placeholder="Индекс" required="required" class="user-login__input user-login__input" name="pin_code" id="pin_code">
			<div class="err" id="pin_code_err"></div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<select id="gender" name="gender" class="user-login__input user-login__input" required="required">
				<option value="1">Мужской</option>
				<option value="2">Женский</option>
			</select>
			
		</div>
		<input type="button" value="Зарегистрироваться" class="user-login__action" onclick="javascript:login_validation()">
		</form>
		</div>
		</div>
		</div>
</div>

    <?php include("../footer.php") ?>
	

</html>
