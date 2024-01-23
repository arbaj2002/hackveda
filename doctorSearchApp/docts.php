<!DOCTYPE html>
<head>
<style>
    /* Style for team section */
    body {
        /* background-color: #343a40; Dark background for the entire page */
    }
    .navbar{
        background-color:#2a2ea8;
        margin-top: 15px;
    }
    
    


    .team_section {
        background-color: #f8f8f8;
        padding: 50px 0;
    }

    .carousel-wrap {
        margin-top: 30px;
    }

    .item {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        margin: 15px;
        overflow: hidden;
        transition: transform 0.3s ease;
        width: calc(25% - 30px); /* Adjusted width for four items in a row with margins */
        float: left;
        box-sizing: border-box;
    }

    .item:hover {
        transform: scale(1.05);
        cursor: pointer;
    
        /* transform: translateY(-10px); */
         transition-duration: 1.3s ;
    
        box-shadow:0px 0px 30px 20px #2a2ea8;
    }

    .box {
        padding: 20px;
    }

    .img-box img {
        width: 100%;
        height: auto; /* Maintain aspect ratio */
        border-bottom: 1px solid #e1e1e1;
        padding-bottom: 15px;
    }

    .detail-box {
        text-align: center;
    }

    h5 {
        margin: 10px 0;
        font-size: 20px;
        color: #333;
    }

    h6 {
        margin: 5px 0;
        font-size: 16px;
        color: #666;
    }

    /* Additional styles for responsiveness */
    @media (max-width: 1200px) {
        .item {
            width: calc(33.3333% - 30px); /* Adjusted width for three items in a row with margins */
        }
    }

    @media (max-width: 768px) {
        .item {
            width: calc(50% - 30px); /* Adjusted width for two items in a row with margins */
        }
    }

    @media (max-width: 576px) {
        .item {
            width: 100%; /* Full width for small screens */
            margin-right: 0;
        }
    }
</style>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
<!-- starter template -->
  <!-- <meta charset="utf-8"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- bootstrap latest css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awssesom -->

  <link href="css/font-awesome.min.css" rel="stylesheet" />


  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />



</head>
<body>





  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
<!-- </body>
</html> -->


<?php
// Assuming you have a database connection, modify the following variables accordingly
include 'connect.php';
// // Create a database connection
// $conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch records from the 'doctors' table
$sql = "SELECT * FROM search";

$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
    die("Error in query: " . mysqli_error($conn));
}
// $result = $conn->query($sql);

// Close the database connection
// $conn->close();
?>


<!-- <body class="sub_page"> -->

    <!-- Your existing HTML code goes here -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>





<div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav" style="margin: 15px 20px;">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="docts.php">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Sign Up
              </span>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
<!-- </header> -->


    <!-- team section -->
    <section class="team_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>Doctors</span>
                </h2>
            </div>
            <div class="carousel-wrap">
                <div class="owl-carousel team_carousel">
                    <?php
                    // Loop through the fetched records and display them in cards
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="<?php echo'images/doctor.jpg'; ?>" alt="mydoctor image" />
                                </div>
                                <div class="detail-box">
                                    <h5 class="card-title"><?php echo $row['Dname'] ?> </h5>
                                    <div class="card-text"><?php echo "CITY :". $row['Darea'] ?></div>
                                        
                                    <div class="card-text"><?php echo "Experience :" .$row['Dexp'] ?></div>
                                        
                                    <div  class="card-text"><?php echo "Age :".$row['Dage'] ?></div>
                                    
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->

    <!-- Rest of your HTML code goes here -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>




       <!-- jQery -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>



  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-rBsXx4m1dI12x9Kb98ePLVjsBXNlF6PUF6s9xQXJT6Sc4z9QQW75RofcAa9PjTf"
    crossorigin="anonymous"></script>
  <!-- Nice Select JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
    integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- Owl slider JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Datepicker JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- Custom JS -->
  <script src="js/custom.js"></script>

</body>

</html>
