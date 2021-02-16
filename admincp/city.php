<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include("../connection.php"); ?>
  <?php 
if(isset($_REQUEST['city_id']))
{		
$city_id=mysqli_real_escape_string($con, $_REQUEST['city_id']);
$res=mysqli_query($con, "select * from sv_city where city_id='$city_id'");
$row=mysqli_num_rows($res);
if($row==0)
{
$city_id="";
$city_name="";
}
else
{			
$fet=mysqli_fetch_array($res);	
$city_name=mysqli_real_escape_string($con, $fet['city_name']);	
}		
}
else
{
$city_id="";
$city_name="";
}
$page = 'city';
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
            Города
          </h1>
          <ol class="breadcrumb">
            <li>
              <a href="dashboard.php">Главная
              </a>
            </li>
            <li>
              <a href="#">Города
              </a>
            </li>
          </ol>		
        </div>
        <input type="hidden" id="hid" name="hid" value="<?php echo $city_id;?>">
        <div id="page-inner">
          <div class="panel-body">
            <div class="text-center">
              <?php
if(isset($_REQUEST['msg']))
{
$msg=$_REQUEST['msg'];
if($msg=="Inserted")
{
echo '<div class="succ-msg">Добавлено успешно.</div>';
}
else if($msg=="Updated")
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
              <!--<div class="err-msg" id="err_id"><?php echo $msg;?></div>	</div>-->
              <div class="col-lg-3 col-md-3 col-sm-3">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 table-bg">
                <div class="form-group">
                  <label>Название города
                  </label>				
                  <input type="text" required="required" class="form-control" id="cname" name="cname" value="<?php echo $city_name;?>">
                </div>
                <div class="text-center">
                  <?php if(isset($_REQUEST['city_id'])) { ?>
                  <button type="button" class="btn btn-primary" onclick="javascript:city_funct('update')">Обновить
                  </button>
                  <?php } else { ?>
                  <button type="button" class="btn btn-primary" onclick="javascript:city_funct('add')">Добавить
                  </button>
                  <?php } ?>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
              </div>
            </div>
            <div id="page-inner"> 
              <div class="row">
                <div class="col-md-12">
                  <!-- Advanced Tables -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      City
                    </div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                            <tr>
                              <th>№
                              </th>
                              <th>Название города
                              </th>
                              <th>Обновить
                              </th>
                              <th>Удалить
                              </th>	
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$sno=0;
$res=mysqli_query($con, "select * from sv_city ORDER BY city_id DESC");
while($row=mysqli_fetch_array($res))
{
$sno++;
$city_id=mysqli_real_escape_string($con, $row['city_id']);				
$city_name=mysqli_real_escape_string($con, $row['city_name']);				
?>  									
                            <tr>
                              <td>
                                <?php echo $sno; ?>
                              </td>
                              <td>
                                <?php echo $city_name; ?>
                              </td>
                              <td>
                                <a href="city.php?city_id=<?php echo $city_id;?>">
                                  <img src="images/file_edit.png"  alt="update" title="update" >
                                </a>
                              </td>
                              <td>
                                <a href="javascript:city_del('<?php echo $city_id;?>');">
                                  <img src="images/delete.png" alt="" title="delete">
                                </a>
                              </td>
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
        </div>
        </body>
      </html>
