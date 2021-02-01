

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>TRMS|| Update Teacher</title>
  
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
                        <h1>Update Lecturer Detail</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="manage-teacher.php">Update Lecturer</a></li>
                            <li class="active">Update</li>
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
                            <div class="card-header"><strong>Lecturer</strong><small> Detail</small></div>
                            <form name="" method="post" action="" enctype="multipart/form-data">
                                
                            <div class="card-body card-block">
 
<div class="form-group">
<label for="company" class=" form-control-label"> Name</label>
<input type="text" name="tname" value="Prof.Ken Tarus" class="form-control" >
</div>

<div class="form-group">
<label for="company" class=" form-control-label">Stuff Number/ID</label>  
<input  disabled type="text" name="tname" value="45667738" class="form-control" >
</div>

<div class="form-group">
<label for="street" class=" form-control-label"> Email Address</label>
<input  disabled type="email" value="kentarus@mu.ac" class="form-control">
</div>

<div class="form-group">
<label for="street" class=" form-control-label"> Mobile Number</label>
<input type="text" name="email" value="+254789023456"  class="form-control">
</div>

<div class="form-group">
<label for="street" class=" form-control-label"> Qualification</label>
<input type="text" name="email" value="phd,masters,undegraduate"  class="form-control">
</div>

<div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">School</label>
                                                    <select class="form-control">
                                                        <option selected>Science And Aerospace Studies</option>
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
                                                        <option selected>Computing,mathematics and physics</option>
                                                        <option>Statistics</option>
                                                        <option>Botany</option>
                                                        <option>Aerospace</option>
                                                        <option>Microbilogy</option>
                               
                            </select>    
                                                </div>
                                                    </div>
                                                    </div>


<p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit"><i class="fa fa-dot-circle-o"></i> Update</button></p> 
                                                     
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
