<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Udaan - CSSE, Lendi Institute of Engineering and Technology, Vizianagaram</title>

  <meta name="description" content="Udaan is the premier technical fest organized by the CSSE department at Lendi Institute of Engineering and Technology, Vizianagaram. Join us for an exciting event featuring tech innovations, workshops, and competitions.">

  <meta name="keywords" content="Udaancsse, Udaan, Udaan Lendi, Udaan in Lendi Institute of Engineering and Technology, CSSE Lendi, CSSE in Lendi Institute of Engineering and Technology, Computer Science and System Engineering, Computer Science and System Engineering in Lendi, Lendi CSSE, Lendi Udaan, Lendi Institute of Engineering and Technology Events, Lendi Technical Fest, Udaan Technical Fest, Udaan in Vizianagaram, Lendi in Vizianagaram, CSSE in Vizianagaram, Computer Science and System Engineering in Vizianagaram, Engineering Fest in Vizianagaram">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style_1.css">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <style>
    #aa {
      color: #a158cd;
    }

    #aa:hover {
      color: white;
    }

    #reg {
      display: none;
    }

    button {
      width: 150px;
      height: 40px;
      outline: none;
      border: 2px solid white;
      border-radius: 20px;
      background-color: transparent;
      color: white;
      position: relative;
      overflow: hidden;
      transition: color 0.4s ease-in-out;
    }

    button::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background-color: #a158cd;
      transition: left 0.4s ease-in-out;
      z-index: -1;
      color: white;
    }

    button:hover::before {
      left: 0;
    }

    button:hover {
      color: white;
      font: 1.1rem;
    }

    button:hover #aa {
      color: white;
      font: 1.1rem;
    }

    #foot {
      padding: 0px;
      width: 100%;
      height: 180px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;

    }

    .main-logo {
      width: 50rem;
      height: auto;
      padding: 0px;
      margin: 0px;
    }

    .box {
      background-image: url('images/back.gif');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      width: 100%;
      min-height: 100vh;
    }

    h3 {
      color: white;
    }

    .logo {
      width: 150px;
    }

    ul {
      list-style-type: none;
    }

    @media (max-width:1000px) {
      .re-button {
        display: none;
      }

      .icon {
        color: #a158cd;
      }
    }

    @media (min-width:500px) {
      #foot {
        justify-content: space-between;
      }
      
    }
    .ull{
        width:13rem;
      
        
      }

    @media (max-width:500px) {
      #foot {
     
      justify-content:center;

    }
      .ull{
        width:350px;
        padding: 0px ;
        margin-left:0px;

      }
    
      #f-p {
        margin-top: 20px;
      }

      .main-logo {
        width: 26rem;
      }

      .logo {
        width: 120px;
      }

      .re-button {
        display: none;

      }

      button {
        display: none;
      }

      #about-section {
        margin-left: 10px;
        margin-right: 10px;

      }
      #dep-section {
        margin-left: 10px;
        margin-right: 10px;

      }

      #projects-section {
        margin-left: 10px;
        margin-right: 10px;

      }

      #contact-section {
        margin-left: 10px;
        margin-right: 10px;

      }

      #foot {
        padding: 0px;
        width: 100%;
        height: 400px;
        display: flex;
        align-items: center;
        flex-direction: column;

      }

      .child2 {
        margin-top: 40px;
      }

      #reg {
        display: block;
      }
    }
  </style>
</head>
<div class="box">

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="box">

      <div id="overlayer"></div>
      <div class="loader">
        <div class="spinner-border text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>


      <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>

        <?php include 'components/navbar.php' ?>


        <div class="site-blocks-cover overlay " id="home-section" style="padding-top:0px">

          <div class="container" style="margin-top:0px">
            <div class="row justify-content-center">

              <div class="col-12 text-center align-self-center text-intro">
                <div class="row justify-content-center" style="padding-top: 147px ;">
                  <div style="margin: 0px;">
                    <a href=""><img class="main-logo" src="./images/mainlogoo.gif" alt=""></a>

                  </div>

                </div>
              </div>
              <div>
                <h1 class="m-0 site-logo">
                  <a href="index.html">
                    <img style="height:120px; width:20rem" class="logo" src="./images/ass.gif" alt="Logo">
                  </a>
                </h1>

              </div>
            </div>

          </div>

        </div>

        <?php 
        include 'components/about.php';
        include 'components/department.php';
        include 'components/product.php';
        include 'components/contact.php';
        include 'components/footer.php';
        ?>






      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <script src="js/main.js"></script>

  </body>

</html>