
<?php
			$conn=mysqli_connect('localhost','root','','pincode');
        $officename=$_GET['officename'];
		$name22=explode("-",$officename);
		$name23=implode($name22," ");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
     <title><?php echo $name23;?> Pin Code: <?php echo $name23;?>, <?php $sql4="SELECT Taluk FROM `TABLE 8` WHERE officename='$name23'";
          $res4=mysqli_query($conn,$sql4);
          while($p=mysqli_fetch_array($res4))
          {
          $ina=$p['Taluk'];
          $ina2=explode(" ",$ina);
          $ina5="";
         echo $ina;
          }
          echo '</div>';
          ?>, <?php $sql5="SELECT divisionname FROM `TABLE 8` WHERE officename='$name23'";
          $res5=mysqli_query($conn,$sql5);
          while($p=mysqli_fetch_array($res5))
          {
          $inai=$p['divisionname'];
          $ina2i=explode(" ",$inai);
          $ina5i="";
         echo $inai;
          }
          echo '</div>';
          ?>, <?php $sql6="SELECT Districtname FROM `TABLE 8` WHERE officename='$name23'";
          $res6=mysqli_query($conn,$sql6);
          while($p=mysqli_fetch_array($res6))
          {
          $iina=$p['Districtname'];
          $iina2=explode(" ",$iina);
          $iina5="";
         echo $iina;
          }
          echo '</div>';
          ?> Post Office Code & Address with Map</title>
      <meta name="description" content="This page provides pin code of <?php echo $name23;?> which comes under <?php echo $name23;?>, <?php $sql4="SELECT Taluk FROM `TABLE 8` WHERE officename='$name23'";
          $res4=mysqli_query($conn,$sql4);
          while($p=mysqli_fetch_array($res4))
          {
          $ina=$p['Taluk'];
          $ina2=explode(" ",$ina);
          $ina5="";
         echo $ina;
          }
          echo '</div>';
          ?>, <?php $sql5="SELECT divisionname FROM `TABLE 8` WHERE officename='$name23'";
          $res5=mysqli_query($conn,$sql5);
          while($p=mysqli_fetch_array($res5))
          {
          $inai=$p['divisionname'];
          $ina2i=explode(" ",$inai);
          $ina5i="";
         echo $inai;
          }
          echo '</div>';
          ?>, <?php $sql6="SELECT Districtname FROM `TABLE 8` WHERE officename='$name23'";
          $res6=mysqli_query($conn,$sql6);
          while($p=mysqli_fetch_array($res6))
          {
          $iina=$p['Districtname'];
          $iina2=explode(" ",$iina);
          $iina5="";
         echo $iina;
          }
          echo '</div>';
          ?>, <?php $sql7="SELECT statename FROM `TABLE 8` WHERE officename='$name23'";
          $res7=mysqli_query($conn,$sql7);
          while($p=mysqli_fetch_array($res7))
          {
          $nia=$p['statename'];
          $nia2=explode(" ",$nia);
          $nia5="";
         echo $nia;
          }
          echo '</div>';
          ?>. Visit this page to check <?php echo $name23;?> post office address and pin code with map.">
      <link rel="canonical" href="http://searchpin.in/<?php echo $name23;?>-pin-code">
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
               <h1><?php echo $name23;?> Pin Code</h1>
               <div>
                  <ul class="list-group">
                     <li class="list-group-item list-group-item-info"><span style="font-size:250%; font-weight:bold;"><?php $sql3="SELECT pincode FROM `TABLE 8` WHERE officename='$name23'";
          $res3=mysqli_query($conn,$sql3);
          while($p=mysqli_fetch_array($res3))
          {
          $na=$p['pincode'];
          $na2=explode(" ",$na);
          $na5="";
         echo $na;
          }
          echo '</div>';
          ?></span></li>
                  </ul>
               </div>
               <div class="table-responsive">
                  <table class="table table-striped table-bordered tablefont">
                     <tr>
                        <th>Place</th>
                        <th>Pin Code</th>
                        <th>Taluk</th>
                        <th>Division</th>
                        <th>District</th>
                        <th>State</th>
                     </tr>
                     <tr>
                        <td><?php echo $name23;?></td>
                        <td><?php $sql3="SELECT pincode FROM `TABLE 8` WHERE officename='$name23'";
          $res3=mysqli_query($conn,$sql3);
          while($p=mysqli_fetch_array($res3))
          {
          $na=$p['pincode'];
          $na2=explode(" ",$na);
          $na5="";
         echo $na;
          }
          echo '</div>';
          ?></td>
                        <td><?php $sql4="SELECT Taluk FROM `TABLE 8` WHERE officename='$name23'";
          $res4=mysqli_query($conn,$sql4);
          while($p=mysqli_fetch_array($res4))
          {
          $ina=$p['Taluk'];
          $ina2=explode(" ",$ina);
          $ina5="";
         echo $ina;
          }
          echo '</div>';
          ?></td>
                        <td><?php $sql5="SELECT divisionname FROM `TABLE 8` WHERE officename='$name23'";
          $res5=mysqli_query($conn,$sql5);
          while($p=mysqli_fetch_array($res5))
          {
          $inai=$p['divisionname'];
          $ina2i=explode(" ",$inai);
          $ina5i="";
         echo $inai;
          }
          echo '</div>';
          ?></td>
                        <td><?php $sql6="SELECT Districtname FROM `TABLE 8` WHERE officename='$name23'";
          $res6=mysqli_query($conn,$sql6);
          while($p=mysqli_fetch_array($res6))
          {
          $iina=$p['Districtname'];
          $iina2=explode(" ",$iina);
          $iina5="";
         echo $iina;
          }
          echo '</div>';
          ?></td>
                        <td><?php $sql7="SELECT statename FROM `TABLE 8` WHERE officename='$name23'";
          $res7=mysqli_query($conn,$sql7);
          while($p=mysqli_fetch_array($res7))
          {
          $nia=$p['statename'];
          $nia2=explode(" ",$nia);
          $nia5="";
         echo $nia;
          }
          echo '</div>';
          ?></td>
                     </tr>
                  </table>
               </div>
               <br/>
               <h1>Post Office details of <?php echo $name23;?></h1>
			   <div class="table-responsive">
                  <table class="table table-striped table-bordered tablefont">
                     <tr>
                        <th><h4>DESCRIPTION</h4></th>
                        <th><h4>DETAILS</h4></th>
                     </tr>
                     <tr>
                        <td><b>Post Office Name:</b></td>
                        <td><?php echo $name23;?></a></td>
                     </tr>
                     <tr>
                        <td><b>Pin Code:</b></td>
                        <td><?php $sql3="SELECT pincode FROM `TABLE 8` WHERE officename='$name23'";
          $res3=mysqli_query($conn,$sql3);
          while($p=mysqli_fetch_array($res3))
          {
          $na=$p['pincode'];
          $na2=explode(" ",$na);
          $na5="";
         echo $na;
          }
          echo '</div>';
          ?></td>
                     </tr>
                     <tr>
                        <td><b>Taluk or Block:</b></td>
                        <td><?php $sql4="SELECT Taluk FROM `TABLE 8` WHERE officename='$name23'";
          $res4=mysqli_query($conn,$sql4);
          while($p=mysqli_fetch_array($res4))
          {
          $ina=$p['Taluk'];
          $ina2=explode(" ",$ina);
          $ina5="";
         echo $ina;
          }
          echo '</div>';
          ?></td>
                     </tr>
                     <tr>
                        <td><b>District</b></td>
                        <td><?php $sql6="SELECT Districtname FROM `TABLE 8` WHERE officename='$name23'";
          $res6=mysqli_query($conn,$sql6);
          while($p=mysqli_fetch_array($res6))
          {
          $iina=$p['Districtname'];
          $iina2=explode(" ",$iina);
          $iina5="";
         echo $iina;
          }
          echo '</div>';
          ?></td>
                     </tr>
                     <tr>
                        <td><b>State</b></td>
                        <td><?php $sql7="SELECT statename FROM `TABLE 8` WHERE officename='$name23'";
          $res7=mysqli_query($conn,$sql7);
          while($p=mysqli_fetch_array($res7))
          {
          $nia=$p['statename'];
          $nia2=explode(" ",$nia);
          $nia5="";
         echo $nia;
          }
          echo '</div>';
          ?></td>
                     </tr>
					 <tr>
                        <td><b>Post Office Address:</b></td>
                        <td><?php echo $name23;?>, <?php $sql4="SELECT Taluk FROM `TABLE 8` WHERE officename='$name23'";
          $res4=mysqli_query($conn,$sql4);
          while($p=mysqli_fetch_array($res4))
          {
          $ina=$p['Taluk'];
          $ina2=explode(" ",$ina);
          $ina5="";
         echo $ina;
          }
          echo '</div>';
          ?>, <?php $sql6="SELECT Districtname FROM `TABLE 8` WHERE officename='$name23'";
          $res6=mysqli_query($conn,$sql6);
          while($p=mysqli_fetch_array($res6))
          {
          $iina=$p['Districtname'];
          $iina2=explode(" ",$iina);
          $iina5="";
         echo $iina;
          }
          echo '</div>';
          ?>, <?php $sql7="SELECT statename FROM `TABLE 8` WHERE officename='$name23'";
          $res7=mysqli_query($conn,$sql7);
          while($p=mysqli_fetch_array($res7))
          {
          $nia=$p['statename'];
          $nia2=explode(" ",$nia);
          $nia5="";
         echo $nia;
          }
          echo '</div>';
          ?> - <?php $sql3="SELECT pincode FROM `TABLE 8` WHERE officename='$name23'";
          $res3=mysqli_query($conn,$sql3);
          while($p=mysqli_fetch_array($res3))
          {
          $na=$p['pincode'];
          $na2=explode(" ",$na);
          $na5="";
         echo $na;
          }
          echo '</div>';
          ?></td>
                     </tr>
					 <tr>
                        <td><b>Location by Division, Region & Circle Name:</b></td>
                        <td><?php $sql5="SELECT divisionname FROM `TABLE 8` WHERE officename='$name23'";
          $res5=mysqli_query($conn,$sql5);
          while($p=mysqli_fetch_array($res5))
          {
          $inai=$p['divisionname'];
          $ina2i=explode(" ",$inai);
          $ina5i="";
         echo $inai;
          }
          echo '</div>';
          ?>, <?php $sql10="SELECT regionname FROM `TABLE 8` WHERE officename='$name23'";
          $res10=mysqli_query($conn,$sql10);
          while($p=mysqli_fetch_array($res10))
          {
          $inaii=$p['regionname'];
          $ina2ii=explode(" ",$inaii);
          $ina5ii="";
         echo $inaii;
          }
          echo '</div>';
          ?>, <?php $sql9="SELECT circlename FROM `TABLE 8` WHERE officename='$name23'";
          $res9=mysqli_query($conn,$sql9);
          while($p=mysqli_fetch_array($res9))
          {
          $iniaii=$p['circlename'];
          $inai2ii=explode(" ",$iniaii);
          $inai5ii="";
         echo $iniaii;
          }
          echo '</div>';
          ?></td>
                     </tr>
					 <tr>
                        <td><b>Post Office Type & Delivery Status:</b></td>
                        <td><?php $sql16="SELECT officeType FROM `TABLE 8` WHERE officename='$name23'";
          $res16=mysqli_query($conn,$sql16);
          while($p=mysqli_fetch_array($res16))
          {
          $ni4=$p['officeType'];
          $ni5=explode(" ",$ni4);
          $ni6="";
         echo $ni4;
          }
          echo '</div>';
          ?>, <?php $sql15="SELECT Deliverystatus FROM `TABLE 8` WHERE officename='$name23'";
          $res15=mysqli_query($conn,$sql15);
          while($p=mysqli_fetch_array($res15))
          {
          $ni=$p['Deliverystatus'];
          $ni2=explode(" ",$ni);
          $ni3="";
         echo $ni;
          }
          echo '</div>';
          ?> </td>
                     </tr>
					 <tr>
                        <td><b>Contact Number</b></td>
                        <td><?php $sql20="SELECT Telephone FROM `TABLE 8` WHERE officename='$name23'";
          $res20=mysqli_query($conn,$sql20);
          while($p=mysqli_fetch_array($res20))
          {
          $ni7=$p['Telephone'];
          $ni8=explode(" ",$ni7);
          $ni9="";
         echo $ni7;
          }
          echo '</div>';
          ?></td>
                     </tr>
					 <tr>
                        <td><b>Related Sub-Office</b></td>
                        <td><?php $sql21="SELECT Related_Suboffice FROM `TABLE 8` WHERE officename='$name23'";
          $res21=mysqli_query($conn,$sql21);
          while($p=mysqli_fetch_array($res21))
          {
          $ni10=$p['Related_Suboffice'];
          $ni11=explode(" ",$ni10);
          $ni12="";
         echo $ni10;
          }
          echo '</div>';
          ?></td>
                     </tr>
					 <tr>
                        <td><b>Related Head-Office</b></td>
                        <td><?php $sql22="SELECT Related_Headoffice FROM `TABLE 8` WHERE officename='$name23'";
          $res22=mysqli_query($conn,$sql22);
          while($p=mysqli_fetch_array($res22))
          {
          $ni13=$p['Related_Headoffice'];
          $ni14=explode(" ",$ni13);
          $ni15="";
         echo $ni13;
          }
          echo '</div>';
          ?></td>
                     </tr>
                  </table>
               </div>
			   <br>
			   <div>
                  <ul class="list-group">
                     <li class="list-group-item list-group-item-info">
                        <p>Pin code of <?php echo $name23;?> is <?php $sql3="SELECT pincode FROM `TABLE 8` WHERE officename='$name23'";
          $res3=mysqli_query($conn,$sql3);
          while($p=mysqli_fetch_array($res3))
          {
          $na=$p['pincode'];
          $na2=explode(" ",$na);
          $na5="";
         echo $na;
          }
          echo '</div>';
          ?>. <?php echo $name23;?> Indian post office is located in <?php echo $name23;?>, <?php $sql4="SELECT Taluk FROM `TABLE 8` WHERE officename='$name23'";
          $res4=mysqli_query($conn,$sql4);
          while($p=mysqli_fetch_array($res4))
          {
          $ina=$p['Taluk'];
          $ina2=explode(" ",$ina);
          $ina5="";
         echo $ina;
          }
          echo '</div>';
          ?>, <?php $sql5="SELECT divisionname FROM `TABLE 8` WHERE officename='$name13'";
          $res5=mysqli_query($conn,$sql5);
          while($p=mysqli_fetch_array($res5))
          {
          $inai=$p['divisionname'];
          $ina2i=explode(" ",$inai);
          $ina5i="";
         echo $inai;
          }
          echo '</div>';
          ?>,<?php $sql6="SELECT Districtname FROM `TABLE 8` WHERE officename='$name23'";
          $res6=mysqli_query($conn,$sql6);
          while($p=mysqli_fetch_array($res6))
          {
          $iina=$p['Districtname'];
          $iina2=explode(" ",$iina);
          $iina5="";
         echo $iina;
          }
          echo '</div>';
          ?> is one of the famous district in <?php $sql7="SELECT statename FROM `TABLE 8` WHERE officename='$name23'";
          $res7=mysqli_query($conn,$sql7);
          while($p=mysqli_fetch_array($res7))
          {
          $nia=$p['statename'];
          $nia2=explode(" ",$nia);
          $nia5="";
         echo $nia;
          }
          echo '</div>';
          ?> state. We have marked the location of <?php echo $name23;?> on Google map.</p>
                     </li>
                  </ul>
               </div>
               <div class="google-maps">
                  <iframe width="380" height="280" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo$name23?>India&key=AIzaSyCfXfD0Cs-KhSFhoxFfi24iqcWro4qiLZE"></iframe>
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
                     <p><?php echo $name23;?> pin code has total six digits. People who checked pin code of <?php echo $name23;?>, also checked pin code of places listed below.</p>
                  </div>
                  <div class"col-md-12">
                     <a href="#" class="btn btn-info btn-block ho1" >{other.districtname}</a>
                     <a href="#" class="btn btn-info btn-block ho1" >{other.districtname}</a>
                     <a href="#" class="btn btn-info btn-block ho1" >{other.districtname}</a>
                     <a href="#" class="btn btn-info btn-block ho1" >{other.districtname}</a>
                     <p>Frequently asked questions:<br>1) What is the zip code of <?php echo $name23;?>?
                        <br/>2) Where is <?php echo $name23;?> located on map?
                        <br/>3) <?php $sql3="SELECT pincode FROM `TABLE 8` WHERE officename='$name23'";
          $res3=mysqli_query($conn,$sql3);
          while($p=mysqli_fetch_array($res3))
          {
          $na=$p['pincode'];
          $na2=explode(" ",$na);
          $na5="";
         echo $na;
          }
          echo '</div>';
          ?> pin code is for which area?<br/>4) Is it a B.O (Branch Office) or S.O (Sub Office)?
                     </p>
                     <p>About Searchpin.in: It is a website for searching Indian postal codes. Bookmark us for future visits.</p>
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
                     <li><span style="color:#fff;">SEARCHPIN.IN &copy; 2016</span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>