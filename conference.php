<?php
    include 'connection.php';
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="conference management system">
        <meta name="description" content="UDUS CMS">
        <meta name="author" content="abdulrasheed abdulrahedd">
        <meta name="author" content="Abdullahi Muustapha">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Conference Management System</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

        <script src="assets/js/modernizr.min.js"></script>

    </head>
     <style type="text/css">
     #conference-title{
        font-style: italic;
        text-shadow: 1px 2px lightblue;
        font-weight: bold;
    }
    </style>

    <body>


       <?php
        include 'topnav.php';
       ?>
        <div class="wrapper">
            <div class="container">
                   
             <div class="row">
             
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-center" id="conference-title">Available Conference News</h3> 
                            <?php
                     $sql = mysqli_query($con, "SELECT * FROM conference_tb ORDER BY id DESC");
                     if (mysqli_num_rows($sql) > 0) {
                         while ($row = mysqli_fetch_assoc($sql)) {
                            $image_back = $row['conf_image'];
                     ?>
                        
                        <div class="property-card property-horizontal" style="height: auto;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="property-image" style="background: url('<?= 'admin/'.$image_back;?>') center center / cover no-repeat;">
                                        <span class="property-label label label-warning">Conference image</span>
                                    </div>
                                </div>
                                <!-- /col 4 -->
                                <div class="col-sm-8">
                                    <div class="property-content" style="height: auto;">
                                        <div class="listingInfo" style="border-bottom: none;">
                                            <div class="">
                                            <h3> 
                                                <a href="#" class="text-blue"><?=$row['conf_title']?> </a>
                                            </h3>
                                                <h4 class="text-success m-t-0"><span>Conference Price: </span><?=$row['conf_fee']?></h4>
                                            </div>
                                            <div class="" style="text-align: justify;padding-bottom: 30px;">
                                                
                                                <p class="text-muted"> Venue<i class="mdi mdi-map-marker-radius m-r-5"></i><?=$row['conf_venue'] ." ". "On ". " " .$row['conf_date']." ". "By ". " " .$row['conf_time'] ?></p>

                                                <p class="font-15 text-muted m-b-0" style="height: auto;"><?=$row['conf_desc']?></p>
                                            </div>
                                        </div>
                                        <div class="property-action" style="margin-top: 18px;">
                                            <a href="#" target="new_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="280 particpate"><i class="mdi mdi-view-grid"></i><span>280</span></a>
                                            <a href="#" target="new_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="4 Bedroom House"><i class="mdi mdi-hotel"></i><span>4</span></a>
                                            <a href="#" target="new_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="2 Parking space"><i class="mdi mdi-car"></i><span>2</span></a>
                                            <a href="#" target="new_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="24h Electricity"><i class="mdi mdi-battery-charging-80"></i><span> 24H</span></a>
                                            <div class="pull-right">
                                                <a href="login.php" class="btn btn-success btn-rounded"><i class="mdi mdi-account-check"></i><span>Attend</span></a>
                                            </div>
                                        </div>
                                        <!-- end. Card actions -->
                                    </div>
                                </div>
                                <!-- /col 8 -->
                            </div>
                            <!-- /inner row -->
                        </div>
                        <!-- End property item -->
                        <?php
                                            }
                                        }
                                        else{
                                            echo '<p class="text-center">No Conference Available</p>';
                                        }
                                       ?>

                    </div> <!-- end col -->

               
                </div> 
                 

                
            <!-- footer section -->
            <?php
            include 'footer.php';
            ?>
            <!-- end of footer -->
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>