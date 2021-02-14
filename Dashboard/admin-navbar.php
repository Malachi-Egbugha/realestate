<nav class="navbar navbar-default top-navbar" role="navigation"  style="background-color: #2c544d; color: white">
            <div class="navbar-header"  style="background-color: #2c544d; color: white">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html" style="background-color: #2c544d; font-size: 20px;">  <strong><img src="assets/img/BAYMON.PNG" height="40" width="50"> Bayinoest</strong></a>
				
		<div id="sideNav" href=""  style="background-color: #2c544d; color: white"><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"  style="background-color: #2c544d;"> 
				
				  <li><a class="dropdown-button waves-effect waves-dark text-light" href="#!" data-activates="dropdown1" style="color: white"><i class="fa fa-user fa-fw" style="color: white"></i> <b><?php echo  $_SESSION['firstname']." ".$_SESSION['lastname']." ".$_SESSION['othernames']; ?></b> <i class="material-icons right" style="color: white">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Change Password</a>
</li> 
<li><a href="logout2.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
