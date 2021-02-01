
<style>
    .right-panel{
      
	background-color: antiquewhite;
    }
   
    
    </style>
    <aside id="left-panel" class="left-panel bg-info">
        <nav class="navbar navbar-expand-sm navbar-default bg-info  ">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 
                <img src="images/moilogo.png" height="100px" width="150px">
                <a class="navbar-brand" href="dashboard.php">LRMS ADMIN | </a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Programmes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="add-programme.php">Add programme</a></li>
                            <li><i class="menu-icon fa fa-file-o"></i><a href="manage-programmes.php">Manage programmes</a></li>
                        </ul>
                    </li>
<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Courses</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="add-unit.php">Add Course</a></li>
                            <li><i class="menu-icon fa fa-file-o"></i><a href="manage-units.php">Manage Course</a></li>
                        </ul>
                    </li>
                   
                    <li class="active">
                        <a href="manage-lecturers.php"> <i class="menu-icon fa fa-file"></i>Lecturers </a>
                    </li>

  <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="bwdates-report-ds.php">Between Dates Report</a></li>
                           
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>