
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Searchpin:Indian Pin Code Search</title>
      <meta name="description" content="searchpin is a search engine for Postal (ZIP) code of India. Site contains more than 150000 Indian Post Office Pin Codes.">
      <link rel="canonical" href="http://searchpin.in/">
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
                  <?php
          $conn=mysqli_connect('localhost','root','','pincode');
          
          ?>
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <h1>Indian Pin Codes Search</h1>
               <p>searchpin.in is a web directory to search Indian Post Office Pin codes and addresses. Use our search box to track your PIN code. Simply enter the location and hit the search button.</p>
               <div>
                  <ul class="list-group">
                     <li class="list-group-item list-group-item-info"><span style="font-size:150%; font-weight:bold;">Select Your State</span></li>
                  </ul>
               </div>
               <div class="table-responsive">
                  <table class="table table-striped table-bordered tablefont">
                     <tr><td>
                      <?php
          echo '<div id="detail">';
          $sql2="SELECT DISTINCT statename FROM `TABLE 8` ORDER BY statename";
          $res2=mysqli_query($conn,$sql2);
          echo '<form id="form1" method="get" action="districts.php">';
          while($p=mysqli_fetch_array($res2))
          {
          $iname=$p['statename'];
          $iname2=explode(" ",$iname);
          $iname5="";
          for($i=0;$i<count($iname2);$i++)
          {
            $iname3=$iname2[$i];
            $iname4=ucfirst(strtolower($iname3));
            $iname5.=$iname4;
          }
          
          $pieces = preg_split('/(?=[A-Z])/',$iname5);    
                 $pieces2=implode($pieces,"-");
                 $piece3=ltrim($pieces2,"-");
          ?><tr><td rowspan='6' colspan='6'>
          <a href="districts.php?statename=<?php echo $p['statename'];?>"><?php $piece3?> <?php echo $p['statename'];
         
         
           }
          echo '</div>';?></a>
          </td></tr>
          </td>
          </tr>
         
                  </table>
                  
               </div>
               <!-- Ads -->
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
                  </div>
                  <div class"col-md-12">
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
                     <li><span style="color:#fff;">SEARCHPIN.IN &copy; 2016<!---<?php echo date("Y");?>--></span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
