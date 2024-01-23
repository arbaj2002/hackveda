<!-- require 'styles.css'; -->

<!DOCTYPE html>
<head>

 
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- bootstrap latest css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  <link href="css/responsive.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">  
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <style>
     body {
        background-color: #343a40; /* Dark background for the entire page */
        color: #fff; /* Text color on dark background */
    }
    .Card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .card {
        width: 17rem;
        margin: 20px;

        background-color: #343a40; /* Dark background color */
        border: 1px solid #6c757d; /* Border color */
        border-radius: 8px; /* Optional: Add border-radius for rounded corners */
        overflow: hidden; /* Optional: Hide overflowing content */
        transition: background-color 0.3s ease;  /* Transition for smooth hover effect */
    }
  .card:hover {
    
    transform: translateY(-10px);
   transition-duration: 1.3s ;
   
    box-shadow:0px 0px 90px 20px #2a2ea8;
    }
    .card img {
        width: 100%;
        height: auto;
    }
    .card-body {
        color: #fff; /* Text color on dark background */
    }

</style>
</head>

<body>
  

    <!-- bootsrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php
// Connect to your database (replace with your actual database credentials)
include 'connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
    $name = isset($_POST['Dname'])?$_POST['Dname'] : '';
    $area = isset($_POST['Darea'])?$_POST['Darea'] : '';

    // $query = "SELECT * FROM search  ";
    $query = "SELECT * FROM search WHERE Dname = '$name' OR Darea = '$area'";


// Perform the query
$result = mysqli_query($conn, $query);

// Check for errors
if (!$result) {
    die("Error in query: " . mysqli_error($conn));
}
?>
<div class="Card-container">

    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          // Your code to handle each row of data
          // echo $row;
          ?>
          <div class="card" style="width: 17rem; margin: 20px">
              <img src="images/doctor.jpg" class="card-img-top" alt="..." style="height:250px;">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $row['Dname'] ?> </h5>
                      <div class="card-text"><?php echo "CITY :". $row['Darea'] ?></div>
                          
                      <div class="card-text"><?php echo "Experience :" .$row['Dexp'] ?></div>
                          
                      <div  class="card-text"><?php echo "Age :".$row['Dage'] ?></div>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
            </div>
          <?php
        }
    }else{
      ?>
     <div style="text-align: center; margin-top: 20px;">
        <h3>No records found</h3>
      </div>
    <?php
    }
}    
// Close the connection
mysqli_close($conn);
?>

    


