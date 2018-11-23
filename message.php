<?php
session_start();
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GLORIOUS CATHEDRAL CHURCH</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
  
	<link rel="stylesheet" href="css/bootstrap.min.css">
	


  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">R.C.C.G GLORIOUS CATHEDRAL</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Kwara Province 4, Olorunsogo area,Ilorin Kwara State</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">GLORIOUS CATHEDRAL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="adminpage.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="#">Add Blog Post</a>
            </li>
          
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Message.php">Messages Received</a>
            </li>
             
          </ul>
        </div>
      </div>
    </nav><br>

   <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Message 
          <strong>Received from Members</strong>
        </h2>
        <hr class="divider">
        
<div class="container-fluid">
  <div class="form-group col-lg-12">
              <form method="post" action="delete.php" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed table-bordered" id="example">
                            
                            <thead>
            
                                <tr>
                                    
                                    <th>ID</th>
                                    <th>NAMES</th>
                                   <th>PHONE NUMBER</th>
                                   <th>Email Address</th>
                  <th>MESSAGES</th>
                  <th>DELETE MESSAGES</th>
                  
                                </tr>
                            </thead>
                            <tbody>
              <?php 
              $query=mysql_query("select * from users ORDER BY id DESC")or die(mysql_error());
              while($row=mysql_fetch_array($query)){
              $id=$row['id'];
              $names=$row['names'];
              $phone=$row['phone'];
              $email=$row['email'];
              $message=$row['message'];
              
              ?>
                              
                    <tr>
                    
                                         <td><?php echo $row['id'] ?></td>
                                         <td><?php echo $row['names'] ?></td>
                                         <td><?php echo $row['phone'] ?></td>
                                         <td><?php echo $row['email'] ?></td>
                                         <td><?php echo $row['message'] ?></td>
                                         
          <td>
        <a href="delete2.php?del=<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
        </td>
                                </tr>
        
                                </tr>
                         
                      <?php } ?>
                            </tbody>
                        </table>
  
                            </div>
          
          </form>


              

</div>
  </div>
  
</div><br>
      

    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container-fluid">
        <p class="m-0">Copyright &copy;2018 by da_terabyte</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
