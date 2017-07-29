<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DashBoard</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
               <li><a><i class="fa fa-table"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.php">ADD</a></li>
                    </ul>
                  </li>


                 
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

       
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  
                  </a>
                 
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detailed <small>List</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Click to update,edit, terminate
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Customer ID</th>
                          <th>Plan Name</th>
                          <th>Band Width</th>
                          <th>Form</th>
                          <th>Circuit</th>
                          <th>oppo</th>
                          <th>Supplier</th>
                          <th>Supplier BW</th>
                          <th>Cost to supplier</th>
                          <th>Cost from Customer</th>
                          <th>BPM Status</th>
                          <th>Network Status</th>
                          <th>Testing Status</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        
                        <?php
                              $custn = 'ABC011';
                              // $pass = 'sanket123';
                               $servername = getenv('IP');
                                  $username = getenv('C9_USER');
                                  $password = "";
                                  $database = "test";
                                  $dbport = 3306;
                              
                              $conn = new mysqli($servername, $username, $password, $database, $dbport);
                              // Check connection
                                  if ($db->connect_error) {
                                      die("Connection failed: " . $db->connect_error);
                                  } 

                              $check=$conn->query("SELECT * FROM custdata where custn = '$custn'");
                              if($check->num_rows > 0)
                              {
                            
                              
                              ?>
                              
                              
                              <?php


                                  $result = $conn->query("SELECT * FROM custdata where custn = '$custn'");
                                          if ($result->num_rows > 0) {
                                              // output data of each row
                                              while($row = $result->fetch_assoc()){
                                  ?>
                                          <tr val="<?php echo $row["copf"] ?>">
                                                  <td class="clickable"><?php echo $row["custn"] ?></td>
                                                  <td class="clickable"><?php echo $row["pname"] ?></td>
                                                  <td class="clickable"><?php echo $row["b_billed"] ?></td>
                                                  <td class="clickable"><?php echo $row["copf"] ?></td>
                                                  <td class="clickable"><?php echo $row["cir_id"] ?></td>
                                                  <td class="clickable"><?php echo $row["oppo"] ?></td>
                                                   <td class="clickable"><?php echo $row["supp"] ?></td>
                                                    <td class="clickable"><?php echo $row["q_speed"] ?></td>
                                                     <td class="clickable"><?php echo $row["cp"] ?></td>
                                                      <td class="clickable"><?php echo $row["sp"] ?></td>
                                                       <td class="clickable"><?php echo $row["s_bpm"] ?></td>
                                                        <td class="clickable"><?php echo $row["s_network"] ?></td>
                                                         <td class="clickable"><?php echo $row["s_testing"] ?></td>
                                                          <td class="clickable"><?php echo $row["date"] ?></td>
                                                          <td class="clickable"><?php echo $row["date"] ?></td>
                                  
                                                          </tr>
                                  <?php
                                              }
                                          }
                                  }else
                                  {
                                          echo"Check User Id and Password";
                                  }
                                  ?>
                              
                              
                              
                              
                       
                         
                      </tbody>
                    </table>
<div id='out'></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    
        <script src="app.js"></script>

    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>