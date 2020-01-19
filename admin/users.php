<?php 
include "includes/header.php"; 

?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Furnace Photos</a>
            </div>


            <!-- Top Menu Items -->

<?php
    include "includes/top_nav.php";
 ?>



            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<?php 
    include "includes/side_nav.php";
 ?>

            <!-- /.navbar-collapse -->
        </nav>



        <div id="page-wrapper">  <!-- page content -->

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users
                            <small><br /> _   _ ___ _ __ ___ <br />
 | |  o| / __| '__/ __|<br />
 | |_|0   \__ \ |  \__ \<br />
  \__,_|___/_|  |___/</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->



        </div><!-- /#page-wrapper  end-->

  <?php include("includes/footer.php"); ?>