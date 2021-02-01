

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>TRMS Add Teachers</title>
  

    <link rel="apple-touch-icon" href="apple-icon.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('includes/header.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Course Details</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="add-subjects.php">Course Details</a></li>
                            <li class="active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Course </strong><small> Details</small></div>
                            <form name="" method="post" action="">
                                
                            <div class="card-body card-block">
                            <div class="form-group"><label for="School" class=" form-control-label">School</label>
                            <select class="form-control">
                                <option selected disabled>Select School</option>
                                <option>Science And Aerospace Studies</option>
                                <option>Engineering</option>
                                <option>Information Science</option>
                                <option>Education</option>
                                <option>Human Resource Development</option>
                               
                            </select>
                                              <p style="text-align: center;">
                                              </p>
                            </div>

                            <div class="form-group"><label for="course" class=" form-control-label">Programme</label>
                            <select class="form-control">
                                <option selected disabled>Select Programme</option>
                                <option>Bachelor Of Science ComputerScience</option>
                                <option>Bachelor Of Science Statistics</option>
                                <option>Bachelor Of Science Biochemisry</option>
                                <option>Bachelor Of Botany</option>
                                <option>Bachelor Of Science Education</option>
                                <option>Bachelor Of Science Acturial Science</option>
                                <option>Bachelor Of Science Microbiology</option>
                               
                            </select>
                                              <p style="text-align: center;">
                                              </p>
                            </div>
                            <div class="form-group"><label for="company" class=" form-control-label">Course Code</label><input type="text" value="" class="form-control" placeholder="e.g COM 410"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Course Tittle</label><input type="text" name="subjects" value="" class="form-control" id="subjects" ></div>
                                              <p style="text-align: center;">
                                              <a href="manage-units.php" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i>  Add
                                                        </a></p>
                                                    
                                                </div>
                                                </form>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
