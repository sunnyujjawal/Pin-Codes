<?php
          $conn=mysqli_connect('localhost','root','','pincode');
          $Districtname=$_GET['Districtname'];
		$name12=explode("-",$Districtname);
		$name13=implode($name12," ");
          ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?php echo $name13;?>  Pin Code: District Wise Pin Code List</title>
      <meta name="description" content="Check pin code of <?php echo $name13;?>  district. Select your post office location from <?php echo $name13;?>  Pin Code table.">
      <link rel="canonical" href="http://searchpin.in/pin-code-<?php echo $name13;?>">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
         .google-maps {
         position: relative;
         padding-bottom: 75%; // This is the aspect ratio
         height: 0;
         overflow: hidden;
         }
         .google-maps iframe {
         position: absolute;
         top: 0;
         left: 0;
         width: 100% !important;
         height: 100% !important;
         }
      </style>
   </head>
   <body>
      <div class="main-navigation">
         <nav role="navigation" class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a href="index.php" class="navbar-brand">SEARCHPIN.IN</a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
               </ul>
               <form role="search" class="navbar-form navbar-right" method="get" action="http://www.google.co.in/search" target="_blank">
                  <div class="form-group">
                     <input type="text" placeholder="Search" name="as_q" class="form-control">
                     <input type="hidden" name="sitesearch" value="searchpin.in" />
                  </div>
               </form>
            </div>
         </nav>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <!-- Ads -->
            </div>
         </div>
      </div>
      
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <h1><?php echo $name13;?> PIN CODE</h1>
               <div class="table-responsive">
                  <table class="table table-striped table-bordered tablefont">
                     <tr>
                        <th>Location</th>
                        <th>Pin Code</th>
                     </tr>
                     <tr>
                        <td><?php
          echo '<div id="detail">';
          $sql4 = "SELECT officename FROM `TABLE 8` WHERE Districtname='$name13'";
          $res4=mysqli_query($conn,$sql4);
          while($p=mysqli_fetch_array($res4))
          {
          $na=$p['officename'];
          $na2=explode(" ",$na);
          $na5="";
          for($i=0;$i<count($na2);$i++)
          {
            $na3=$na2[$i];
            $na4=ucfirst(strtolower($na3));
            $na5.=$na4;
          }
          $pieces10 = preg_split('/(?=[A-Z])/',$na5);    
                 $pieces11=implode($pieces10,"-");
                 $piece12=ltrim($pieces11,"-");
          
          ?><a href="pincode.php?officename=<?php echo $p['officename'];?>"><?php $piece12?><?php echo $p['officename'].'<br/>';
          }
          echo '</div>';
          ?></a></td><td><?php
          echo '<div id="detail">';
          $sql4 = "SELECT pincode FROM `TABLE 8` WHERE Districtname='$name13'";
          $res4=mysqli_query($conn,$sql4);
          while($p=mysqli_fetch_array($res4))
          {
          $na=$p['pincode'];
          $na2=explode(" ",$na);
          $na5="";
          for($i=0;$i<count($na2);$i++)
          {
            $na3=$na2[$i];
            $na4=ucfirst(strtolower($na3));
            $na5.=$na4;
          }
          $pieces10 = preg_split('/(?=[A-Z])/',$na5);    
                 $pieces11=implode($pieces10,"-");
                 $piece12=ltrim($pieces11,"-");
          
          echo $p['pincode'].'<br/>';
          }
          echo '</div>';
          ?></td>
                       
                     </tr>
                     
                  </table>
               </div>
               <div class="google-maps">
                  <iframe width="380" height="280" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo$name13;?>India&key=AIzaSyCfXfD0Cs-KhSFhoxFfi24iqcWro4qiLZE"></iframe>
               </div>
            </div>
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-12" style="padding-left:2%;">
                     Add-this widget
                  </div>
                  <div class="col-md-12" style="padding-left:2%;margin-bottom:3%;">
                     <img src="http://placehold.it/300x250">			
                  </div>
                  <div class"col-md-12" >
                     <p>Pin code of <?php echo $name13;?> district have been listed here. People who checked pin code of <?php echo $name13;?>, also checked pin code of states listed below.</p>
                  </div>
                  <div class"col-md-12">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered tablefont">
                           <tr><td>
                             <?php
          echo '<div id="detail">';
          $sql2="SELECT DISTINCT statename FROM `TABLE 8` ORDER BY statename";
          $res2=mysqli_query($conn,$sql2);
          while($p=mysqli_fetch_array($res2))
          {
          $iname=$p['statename'];
          $iname2=explode(" ",$iname);
          $iname5="";
          for($i=0;$i<count($iname2);$i++)
          {
            $iname13=$iname2[$i];
            $iname4=ucfirst(strtolower($iname13));
            $iname5.=$iname4;
          }
          $pieces = preg_split('/(?=[A-Z])/',$iname5);    
                 $pieces2=implode($pieces,"-");
                 $piece3=ltrim($pieces2,"-");
          
       ?><tr><td rowspan='12'>
          <a href="districts.php?statename=<?php echo $p['statename'];?>"><?php $piece3?> <?php echo $p['statename'];
          }
          echo '</div>';
          ?>      </td> </tr>
                            </td>   </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12" style="background:#3598DC; color:#ffffff; padding-top:10px; margin-top:5px;">
               <div class="col-md-12">
                  <ul class="list-unstyled" style="text-align:center;">
                     <li><span style="color:#fff;">{Searchpin.In &copy; 2016-<?php echo date("Y");?></span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>