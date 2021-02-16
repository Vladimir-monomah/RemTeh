<body class="splash-index">
  <?php include("../header.php") ?>
  <section class="teaser bg-top">
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
    <h1 class="sub-title">Станьте поставщиком услуг
    </h1>
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
  </section>
  <div class="container">
    <?php
if(isset($_REQUEST['msg']))
{
$msg=$_REQUEST['msg'];
if($msg=="Inserted")
{
echo '<div class="succ-msg">Your Application send successfully. We will get back to you soon..</div>';
}
else if($msg=="Error")
{
echo '<div class="err-msg">Server Error</div>';		
}
}
else
$msg="";
?>
    <!--<div class="err-msg" id="err_id"><?php echo $msg;?></div>-->
  </div>
  <section class="teaser" style="margin-top:30px;">
    <form class="form-large" action="javascript:cleaner('add')" accept-charset="UTF-8" method="post">
      <div class="container apply_form">
        <div class="min-space">
        </div>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Email
              </span>
              <input type="email" value="" required="required" class="user-login__input user-login__input" id="email" >
			  <div id="email_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Подтвердите Email
              </span>
              <input type="email" value="" required="required" class="user-login__input user-login__input" id="cemail" >
			  <div id="cemail_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Имя
              </span>
              <input type="text" value="" required="required" class="user-login__input user-login__input" id="fname" >
			  	<div id="name_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Фамилия
              </span>
              <input type="text" value="" required="required" class="user-login__input user-login__input" id="lname" >
			  <div id="lname_err" class="err"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Телефон
              </span>
              <input type="text" value=""  required="required" class="user-login__input user-login__input" id="mob_no" >
			  <div id="pho_no_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Индекс
              </span>
              <input type="text" value="" required="required" class="user-login__input user-login__input" id="post_code" >
			  <div id="post_code_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Опыт
              </span>
              <select id="exp" class="user-login__input user-login__input" required="required"> 
                <option value="">Ни один из перечисленных
                </option>	
                <option value="1">я никогда раньше не ремонтировал
                </option>
                <option value="2">1-5 месяцев
                </option>
                <option value="3">6-12 месяцев
                </option>
                <option value="4">1-3 года
                </option>
                <option value="5">Я мастер
                </option>
              </select>
			  <div id="exp_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Выполняете ли вы сейчас какие-либо оплачиваемые работы по ремонту?
              </span>
              <select id="paid_work" class="user-login__input user-login__input" required="required"> 
                <option value="">Ни один из перечисленных
                </option>	
                <option value="1">нет, на данный момент нет
                </option>
                <option value="2">1-10 часов в неделю
                </option>
                <option value="3">10-20 часов в неделю
                </option>
                <option value="4">+20 часов в неделю
                </option>
              </select>
			  <div id="paid_work_err" class="err"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Пол
              </span>
              <select id="gender" class="user-login__input user-login__input" required="required" > 
                <option value="">Ни один из перечисленных
                </option>	
                <option value="1">мужской
                </option>
                <option value="2">женский
                </option>
              </select>
			  <div id="select_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Дата рождения
              </span>
              <input type="text" id="datepicker" name="datepicker" required="required" placeholder="Выбор даты" class="user-login__input user-login__input">
			  <div id="date_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Национальность
              </span>
              <input type="text" id="nation" name="nation" required="required" class="user-login__input user-login__input">
			  <div id="nation_err" class="err"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Расположение
              </span>
              <input type="text" id="suburb" name="datepicker" required="required" placeholder="" class="user-login__input user-login__input">
			  	<div id="suburb_err" class="err"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span class="title">Адрес
              </span>
              <textarea id="address" required="required" class="user-login__input user-login__input req">
              </textarea>
			  <div id="address_err" class="err"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span class="title">Где вы услышали о нас?
              </span>
              <select id="abt" class="user-login__input user-login__input" required="required" > 
                <option value="">Ни один из перечисленных
                </option>	
                <option value="1">Новости
                </option>
                <option value="2">Объявление
                </option>
                <option value="3">Друзья
                </option>
              </select>
			  <div id="abt_err" class="err"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <input type="submit" class="user-login__action" value="Завершить мою заявку">
        </div>
      </div>
    </form>
    <div class="min-space">
    </div>
  </section>
  <?php include("../footer.php") ?>
  <script src="../js/jquery-1.9.1.js">
  </script>
  <script src="../js/jquery-ui.js">
  </script>
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <script>
    $(function(){
      $( "#datepicker" ).datepicker({
        dateFormat: 'dd-mm-yy'}
                                   );
    }
     );
  </script>
</body>
</html>
