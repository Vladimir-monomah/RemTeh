<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../connection.php"); ?>
<?php 
if(isset($_REQUEST['cid']))
	{		
		$cid=$_REQUEST['cid'];
		$res=mysqli_query($con, "select * from sv_service_provider where id='$cid'");
		$row=mysqli_num_rows($res);
		if($row==0)
	 	{
		  $cid="";
		  $email="";
		  $cemail="";
		  $fname="";
		  $lname="";	
		  $mob_no="";
		  $post_code="";
		  $exp="";
		  $paid_work="";
		  $gender="";
		  $dob="";
		  $nation="";
		  $address="";
		  $suburb="";
		  $abt_us="";
		}
		else
		{			
			$fet=mysqli_fetch_array($res);	
			$email=mysqli_real_escape_string($con, $fet['email']);	
			$cemail=mysqli_real_escape_string($con, $fet['confirm_email']);	
			$fname=mysqli_real_escape_string($con, $fet['first_name']);	
			$lname=mysqli_real_escape_string($con, $fet['last_name']);	
			$mob_no=mysqli_real_escape_string($con, $fet['mob_no']);	
			$post_code=mysqli_real_escape_string($con, $fet['post_code']);	
			$exp=mysqli_real_escape_string($con, $fet['exp']);	
			$paid_work=mysqli_real_escape_string($con, $fet['paid_work']);	
			$gender=mysqli_real_escape_string($con, $fet['gender']);	
			$dob=mysqli_real_escape_string($con, $fet['dob']);
			$dob1 = mysqli_real_escape_string($con, date("d-m-Y", strtotime($dob)));	
			$nation=mysqli_real_escape_string($con, $fet['nationality']);	
					
			$address=mysqli_real_escape_string($con, $fet['address']);	
			$suburb=mysqli_real_escape_string($con, $fet['suburb']);	
			$abt_us=mysqli_real_escape_string($con, $fet['abt_us']);	
									
		}		
	}
	else
	{
		$cid="";
		  $email="";
		  $cemail="";
		  $fname="";
		  $lname="";	
		  $mob_no="";
		  $post_code="";
		  $exp="";
		  $paid_work="";
		  $gender="";
		  $dob="";
		  $nation="";
		  $address="";
		  $suburb="";
		  $abt_us="";
	}
	$page = 'cleaner';

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
						Личное дело сотрудника
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="dashboard.php">Главная</a></li>
					  <li><a href="#">Личное дело сотрудника</a></li>
					  
					</ol>		
		</div>
              <input type="hidden" id="hid" name="hid" value="<?php echo $cid;?>">
            <div id="">
			    <div class="panel-body">
				<div class="text-center">
				<?php
if(isset($_REQUEST['msg']))
{
	$msg=$_REQUEST['msg'];
		 if($msg=="Updated")
			{
		      echo '<div class="succ-msg">Обновлено успешно</div>';		
			}
			else if($msg=="Deleted")
			{
		      echo '<div class="succ-msg">Удалено успешно</div>';		
			}
}

else
	$msg="";
?>
				<!--	<div class="err-msg" id="err_id"><?php echo $msg;?></div>	</div>-->
							<?php if(isset($_REQUEST['cid'])) { ?>
					<form class="form-large" action="javascript:cleaner('add')" accept-charset="UTF-8" method="post">
							<div class="col-lg-3 col-md-3 col-sm-3" >
								<div class="form-group">
									<label>Email</label>
								<input type="email" id="email" required="required" class="form-control" value="<?php echo $email;?>"></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Подтвердить Email</label>		
							<input type="email" id="cemail" class="form-control" required="required" name="name" value="<?php echo $cemail;?>"></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Имя</label>
							<input type="text" id="fname" class="form-control" required="required" name="fname" value="<?php echo $fname;?>"></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Фамилия</label>	
							<input type="text" id="lname" class="form-control" required="required" name="lname" value="<?php echo $lname;?>"></div>
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Телефон</label>	
							<input type="text" id="mob_no" class="form-control" required="required" value="<?php echo $mob_no;?>"></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Почтовый индекс</label>
							<input type="text" id="post_code" class="form-control" required="required" value="<?php echo $post_code;?>"></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Опыт</label>	
							<select id="exp" class="form-control" required="required"> 
								<option value="">выберите свой опыт</option>	
								<option value="1" <?php { if($exp=="1") echo "selected='selected'"; }?>>я никогда раньше не занимался ремонтом бытовой техники</option>
								<option value="2" <?php { if($exp=="2") echo "selected='selected'"; }?>>1-5 месяцев</option>
								<option value="3" <?php { if($exp=="3") echo "selected='selected'"; }?>>6-12 месяцев</option>
								<option value="4" <?php { if($exp=="4") echo "selected='selected'"; }?>>1-3 года</option>
								<option value="5" <?php { if($exp=="5") echo "selected='selected'"; }?>>Я мастер в этом деле</option>
							</select></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>в настоящее время работаете?</label>	
							<select id="paid_work" class="form-control" required="required"> 
								<option value="">select anyone</option>	
								<option value="1" <?php { if($paid_work=="1") echo "selected='selected'"; }?>>нет, на данный момент нет</option>
								<option value="2" <?php { if($paid_work=="2") echo "selected='selected'"; }?>>1-10 часов в неделю</option>
								<option value="3" <?php { if($paid_work=="3") echo "selected='selected'"; }?>>10-20 часов в неделю</option>
								<option value="4" <?php { if($paid_work=="4") echo "selected='selected'"; }?>>+20 часов в неделю</option>
							</select>	</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Пол</label>	
								<select id="gender" class="form-control" required="required" > 
									<option value="">Выберите пол</option>	
									<option value="1" <?php { if($gender=="1") echo "selected='selected'"; }?>>мужской</option>
									<option value="2" <?php { if($gender=="2") echo "selected='selected'"; }?>>женский</option>
								</select>								
							</div>
						</div>						
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Дата рождения</label>	
							<input type="text" id="datepicker" class="form-control" required="required"  value="<?php echo $dob1;?>"></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Национальность</label>	
								<input type="text" id="nation" class="form-control" required="required" value="<?php echo $nation;?>"></div>
							</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Адрес</label>	
							<input type="text" id="address" class="form-control" required="required" value="<?php echo $address;?>"></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Расположение</label>
							<input type="text" id="suburb" class="form-control" required="required" value="<?php echo $suburb;?>"></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3" >
							<div class="form-group">
								<label>Где вы услышали о нас?</label>		
							<select id="abt" class="form-control" required="required" > 
								<option value="">Выбрать</option>	
								<option value="1" <?php { if($abt_us=="1") echo "selected='selected'"; }?>>Новости</option>
								<option value="2" <?php { if($abt_us=="2") echo "selected='selected'"; }?>>Объявление</option>
								<option value="3" <?php { if($abt_us=="3") echo "selected='selected'"; }?>>Друзья</option>
							</select></div>
							</div>
						<div class="col-md-12">			
							<button type="submit" class="btn btn-primary" style="margin:22px 25px;float:left" onclick="">Обновить</button>
						</div>
						</form>
						<?php } ?>
					</div>
				</div>
				</div>			

            <div id="page-inner">              
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
						Поставщик услуг
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>№</th>
											<th>Email</th>
											<th>Подтердите Email</th>
											<th>Имя</th>
											<th>Фамилия</th>
											<th>Телефон</th>
											<th>Почтовый индекс</th>
											<th>Опыт</th>
											<th>Другая работа</th>
											<th>Пол</th>
											<th>Дата рождения</th>
											<th>Национальность</th>
											<th>Адрес</th>
											<th>Расположение</th>
											<th>О нас</th>
											<th>Обновить</th>
											<th>Удалить</th>
                                        </tr>
                                    </thead>
									<tbody>
									<?php		
									$sno=0;
									$res=mysqli_query($con, "select * from sv_service_provider ORDER BY id DESC");
									while($row=mysqli_fetch_array($res))
									{
										$sno++;
										$cid=mysqli_real_escape_string($con, $row['id']);
										$exp=mysqli_real_escape_string($con, $row['exp']);	
										if($exp==1)
											$exp="i have never cleaned professionally before";
										else if($exp==2)
											$exp="1-5 months";
										else if($exp==3)
											$exp="6-12 months";
										else if($exp==4)
											$exp="1-3 years";
										else if($exp==5)
											$exp="I am running a household";
										$gender=mysqli_real_escape_string($con, $row['gender']);
										if($gender==1)
											$gender="male";
										else if($gender==2)
											$gender="female";
										$nation=mysqli_real_escape_string($con, $row['nationality']);
										if($nation==1)
											$nation="Afghanistan";
										else if($nation==2)
											$nation="Albania";
										$paid_work=mysqli_real_escape_string($con, $row['paid_work']);
										if($paid_work==1)
											$paid_work="no,none at the moment";
										else if($paid_work==2)
											$paid_work="1-10 hours/week";
										else if($paid_work==3)
											$paid_work="10-20 hours/week";
										else if($paid_work==4)
											$paid_work="+20 hours per week";																			
										$dob=mysqli_real_escape_string($con, date("d-m-Y",strtotime($row['dob'])));
										$abt_us=mysqli_real_escape_string($con, $row['abt_us']);
										if($abt_us==1)
											$abt_us="Events";
										else if($abt_us==2)
											$abt_us="Advert";
										else if($abt_us==3)
											$abt_us="Friend";
											
									?>
									
										<tr>
											<td><?php echo $sno; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['confirm_email']; ?></td>
											<td><?php echo $row['first_name'] ?></td>
											<td><?php echo $row['last_name'] ?></td>
											<td><?php echo $row['mob_no']; ?></td>
											<td><?php echo $row['post_code']; ?></td>
											<td><?php echo $exp; ?></td>
											<td><?php echo $paid_work; ?></td>
											<td><?php echo $gender; ?></td>
											<td><?php echo $dob; ?></td>
											<td><?php echo $nation; ?></td>
											<td><?php echo $row['address']; ?></td>
											<td><?php echo $row['suburb']; ?></td>
											<td><?php echo $abt_us; ?></td>
											<td><a href="cleaner.php?cid=<?php echo $cid;?>"><img src="images/file_edit.png"  alt="update" title="update" ></a></td>
											<td><a href="javascript:cleaner_del('<?php echo $cid;?>');"><img src="images/delete.png" alt="" title="delete"></a></td>
										</tr>
										<?php } ?>		
									</tbody>
															
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                   </div>
				   				<?php include("footer.php") ?>

    </div>
             <!-- /. PAGE INNER  -->
        
    
	<script src="<?php echo $site_url;?>/js/jquery-1.9.1.js"></script>
		<script src="<?php echo $site_url;?>/js/jquery-ui.js"></script>		
				<link rel="stylesheet" href="<?php echo $site_url; ?>/css/jquery-ui.css">
			<script>
		 $(function(){
		 	   $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy',constrainInput: false, changeMonth: false, changeYear: false,minDate: 0 });
		 	});
		</script>
</body>


</html>
