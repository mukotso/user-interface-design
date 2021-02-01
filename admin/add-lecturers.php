

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>TRMS Add lecturer</title>
  

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
                        <h1>Lecturer Details</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="add-teacher.php">Lecturer Details</a></li>
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
                            <div class="card-header"><strong>Lecturer </strong><small> Details</small></div>
                            <form name="" method="post" action="" enctype="multipart/form-data">
                                
                            <div class="card-body card-block">
 
                                <div class="form-group"><label for="company" class=" form-control-label">Name</label><input type="text" name="tname" value="" class="form-control" id="tname" required="true"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Stuff Number/ID</label><input type="number" name="propic" value="" class="form-control" id="propic" required="true"></div>
                                                                          
                                        <div class="form-group"><label for="street" class=" form-control-label"> Email Address</label><input type="text" name="email" value="" id="email" class="form-control" required="true"></div>
                                        <div class=" form-group">
                                                
                                                    <div class="form-group"><label for="city" class=" form-control-label">Mobile Number</label><input type="number" name="mobilenumber" id="mobilenumber" value="" class="form-control" required="true" maxlength="10" pattern="[0-9]+"></div>
                                                    
                                        <div class="row form-group">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label"> Qualifications(Separeted by comma)</label><input type="text" name="qualifications" id="qualifications" value="" class="form-control" required="true"></div>
                                                    </div>
                                        
                                                    
                                                    </div>
                                                   
                                                   
                                                    <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">School</label>
                                                    <select class="form-control">
                                                        <option selected disabled>Select School</option>
                                                        <option>Science And Aerospace Studies</option>
                                                        <option>Engineering</option>
                                                        <option>Information Science</option>
                                                        <option>Education</option>
                                                        <option>Human Resource Development</option>
                               
                            </select>
                                                </div>
                                                    </div>
                                                    <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">Department</label>
                                                    <select class="form-control">
                                                        <option selected disabled>Select Department</option>
                                                        <option>Computing,mathematics and physics</option>
                                                        <option>Statistics</option>
                                                        <option>Botany</option>
                                                        <option>Aerospace</option>
                                                        <option>Microbilogy</option>
                               
                            </select>    
                                                </div>
                                                    </div>
                                                    </div>
                                                    
                                                    <div class="row form-group">
                                                <div class="col-12">
   <div class="form-group"><label for="city" class=" form-control-label">Address</label><textarea type="text" name="address" id="address" value="" class="form-control" rows="4" cols="12" required="true"></textarea></div>
                                                    </div>
                                                   
                                                    
                                                    </div>
                                                     <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i>  Add
                                                        </button></p>
                                                    
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
