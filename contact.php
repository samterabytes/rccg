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
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="blog.php">Blog</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="fellowship.php">House Fellowship Centres</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contact
          <strong>MEDIA UNIT</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-8">
            <tr>
    <th height="326" colspan="4" bgcolor="#FFFFFF" scope="col"><iframe src="index1.html" style="width:700px;height:354px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe></th>
  </tr>
            </div>
          <div class="col-lg-4">
            <h5 class="mb-0">Phone:</h5>
            <div class="mb-4"></div>
            <h5 class="mb-0">Email:</h5>
            <div class="mb-4">
              <a href="mailto:name@example.com">gloriousmedia@gmail.com</a>
            </div>
            <h5 class="mb-0">Address:</h5>
            <div class="mb-4">
              Kwara Province 4, Olorunsogo area,Ilorin Kwara State
            </div>
          </div>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contact
          <strong>Form</strong>
        </h2>
        <hr class="divider">
        <form method = 'post' action = "formp.php">
          <div class="row">

            <div class="form-group col-lg-4">
              <label class="text-heading">Name</label>
              <input type="text" class="form-control" name="names">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Email Address</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Phone Number</label>
              <input type="tel" class="form-control" name="phone">
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Message</label>
              <textarea class="form-control" rows="6" name="message"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
          </div>
        </form>
      </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Zoom when clicked function for Google Map -->
    <script>
      $('.map-container').click(function () {
        $(this).find('iframe').addClass('clicked')
      }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
      });
    </script>

  </body>

</html>
