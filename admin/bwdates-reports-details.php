
<!doctype html>
<html class="no-js" lang="en">
<head>
   
    <title>LRMS Reports</title>
   

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
                        <h1>View Lecturers</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="bwdates-report-ds.php">Between Dates Reports</a></li>
                            <li class="active">Lecturer</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                <strong class=" col-md-4 card-title">View Lecturer</strong>
                            </div>
                            <h5  class=" pull-right btn btn-success btn-sm"onclick="window.print();">PRINT REPORT</h5>
                            </div>
                            <div class="card-body">
<h4 class="m-t-0 header-title">Between Dates Reports</h4>
                         
<h5 align="center" style="color:blue">Report from 23/04/2020 to 13/01/2019</h5>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th>S.NO</th>
                                            <th> Name</th>
                                            <th>Stuff Number/ID</th>
                                            <th>Email Address</th>  
                                            <th>Tel</th>
                                            <th>School</th>
                                            <th>Department</th> 
                                            <th>Teaching Courses</th>    
                                            <th>Campus</th>
                </tr>
                                        
                                        </thead>
                                        </tr>
                <td>1</td>
                <td> prof. Issac Kosgey</td>
                <td>34567893</td>
                <td>isaackosgey@mu.ac</td>
                <td>+254712569875</td>
                <td>Information Science</td>
                <td>Informatics and Graphic design</td>
                <td>IT 400/BBIT 317/GSL 430</td>
                <td>Main Campus</td>
                </tr>

           </tr>
                <td>2</td>
                <td> Mr.Edwin Chepkoros</td>
                <td>679346326</td>
                <td>edubuda@mu.ac</td>
                <td>+254778456783</td>
                <td>Medicine</td>
                <td>Anatomy</td>
                <td>ACT 417/MID 112/GID 415</td>
                <td>Town Campus</td>
            </tr>

           </tr>
                <td>3</td>
                <td> prof. Ken Tarus</td>
                <td>452364254</td>
                <td>tarus@mu.ac</td>
                <td>+2547889445762</td>
                <td> Science And Aerospace Studies</td>
                <td>Statistics And Computing</td>
                <td>Com 410/COM 318/COM 423/AST 411</td>
                <td>main Campus</td></tr>
            </tr>

           </tr>
                <td>4</td>
                <td> Dk. Millicent Chepchirchir</td>
                <td>87324567</td>
                <td>milly@mu.ac</td>
                <td>+2547186563543</td>
                <td>Education</td>
                <td>language</td>
                <td>EDF 112/SAS 310/MIT 330/EDF 400</td>
                <td>Coast Campus</td>
            </tr>

           </tr>
                <td>5</td>
                <td> Dk.Moses Pilly</td>
                <td>46747673</td>
                <td>pilly@mu.ac</td>
                <td>+254712569875</td>
                <td>Arts And Social Sciences</td>
                <td>Linguistics and Media Studies</td><td>ACT 417/MID 112/GID 415</td>
                <td>Main Campus</td>
            </tr>

           </tr>
                <td>6</td>
                <td> prof. Abdul Mohamudd</td>
                <td>3647864</td>
                <td>abdul@mu.ac</td>
                <td>+254712569875</td>
                <td>Agriculture</td>
                <td>Economics</td>
                <td>BIS 417/BGM 112/BDS 415/BBIT 100</td>
                <td>West Campus</td>
            </tr>
                  

                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
