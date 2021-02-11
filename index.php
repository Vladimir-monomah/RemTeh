 <?php 
 include("header.php"); 
 include('connection.php');
?>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <body class="index-index splash splash-video">

<section id="main-teaser" class="teaser">
  <div class="hv-video-container" >
   <img class="home-bg" src="img/home-img.jpg">
</div>


  <div class="main-teaser-content">
  <div class="container">
  <div class="min-space"></div>
  <div class="min-space"></div>
  <div class="min-space"></div>
    <div class="teaser-content">
    
      <h1 style="text-transform:uppercase;">Ваш местный помощник<br /></h1>
      <br>
        <span class="mbl-cnt">Дизайн вечен. <br>
А на остальное – 2 года гарантии.<br /></span>
      
      <div class="container">

      <div class="signup inline-submit">
        <form class="new_bid" id="booking_form" action="users/order.php" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
            <div class="row home-form">
             <div class="min-space"></div>

                <div class="col-md-4  col-sm-4">				
                    <select required="required" id="city" name="city" class="service"> 
                        <option value="">Select City</option>
                            <?php        
                                $res=mysqli_query($con,"select * from sv_city order by city_id");
                                while($row=mysqli_fetch_array($res))
                                {
                                    $city_id=mysqli_real_escape_string($con,$row['city_id']);
                                    $cname=mysqli_real_escape_string($con,$row['city_name']);            
                            ?>
                            <option value="<?php echo $row['city_name'];?>"><?php echo $cname;?></option>
                            <?php
                                }
                            ?>
                    </select>  
						<div class="err" id="city_err"></div>				
                </div>
                <div class="col-md-4  col-sm-4">				
                    <select required="required" id="services" name="services" class="service"> 
                        <option value="">Select services</option>
                        <?php        
                            $res=mysqli_query($con,"select * from sv_services order by services_id");
                            while($row=mysqli_fetch_array($res))
                            {
                                $services_id=mysqli_real_escape_string($con,$row['services_id']);
                                $sname=mysqli_real_escape_string($con,$row['services_name']);            
                        ?>
                        <option value="<?php echo $row['services_id'];?>"><?php echo $row['services_name'];?></option>
                        <?php
                            }
                        ?>
                    </select>
						<div class="err" id="services_err"></div>
                </div>    
                <div class="col-md-4 col-sm-4">
                <!--<input type="submit" name="commit" value="Book Now" class="btn-primary signup__button booknow " data-checkpostcode="true" />-->
				<button type="button" class="btn-primary signup__button sv_booknow" onclick="javascript:booking_function(this.value);">Забронируйте сейчас</button>
                </div>
        </div>
    </form>
</div>
</div>
</div>
    
    
    <div class="min-space"></div>
    <div class="min-space"></div>
     <div class="min-space"></div>
  </div>
  </div>
</section>

<section id="benefit-teaser" class="teaser">
     <div class="min-space"></div>
<h2>Услуги, которые мы предлагаем</h2>
<div class="container">
<div class="col-lg-12">
            <?php 
                $res1=mysqli_query($con,"select * from sv_services ORDER BY services_id ASC limit 0,4");
                $numrow=mysqli_num_rows($res1);
                while($row1=mysqli_fetch_array($res1))
                {
                    $services_name=mysqli_real_escape_string($con,$row1['services_name']);    
                    $service_img=mysqli_real_escape_string($con,$row1['service_img']);
            ?>
            <ul class="ser-img">
        <li class="col-md-3 col-sm-3"><img src="admincp/admin-logo/<?php echo $service_img;?>">
        <p class="ser-img-title"><?php echo $services_name; ?></p></li>
        </ul>
            <?php } ?>
        
    </div>
    
</div>    
 <div class="min-space"></div>
<?php 
$res2=mysqli_query($con,"select * from sv_services ORDER BY services_id ASC");
$numrow=mysqli_num_rows($res2);
if($numrow>='5')
{
?>
<a href="users/all_services.php" target="_blank" style="background-color:#66bb6a;color:#fff;padding:10px;">Посмотреть больше</a>
<?php } ?>
<div class="min-space"></div>
</section>



<?php 
$query=mysqli_fetch_array(mysqli_query($con,"select * from sv_pages where id=1"));
$content=$query['page_content'];
$page_name=$query['page_name'];
?>
<?php echo $content;?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

   <?php include("footer.php") ?>
    
    <div id="no-support" class="modal fade">
 </div>
   
  </body>

</html>
