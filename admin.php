<?php
$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <title>CarRental</title>
  <base href="/">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="./libary/style/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  <nav class="sticky-top navbar navbar-expand-lg navbar-light flex-grow-1">
    <h1 class="admin">WELCOME TO THE <strong>ADMIN</strong> SECTION</h1>
    <ul class="navbar-nav ml-auto flex-nowrap">
      <li class="nav-item"><a class="nav-link" href="./libary/index.php">LOGOUT</a></li>
    </ul>
  </nav>


  <div id="cars" class="container-fluid">
    <h1><b>CAR</b> SECTION</h1>

    <div class="row">
      <!-- php code for displaying cars from the database -->
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "carrental";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        $sql = "SELECT * FROM cardetails WHERE 1";
        $result = mysqli_query($conn, $sql);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }


        while($row = mysqli_fetch_assoc($result)) {
          if ($row["available"] == 0) {
            echo("
                <div  id=\"". $row["id"] ."\"class=\"col-xl-3 p-0 col-md-4 col-sm-12\">
                  <div class=\"innderdiv\">
                    <img style=\"opacity:0.5;\" src=\"" . $row["img"] ."\">
                    <h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4>
                    <h5><br>" . $row["price"] . " €/ hour<br>
                    <i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br>
                    <span class=\"green\">not available</span></h5><br>
                    <a href=\"libary/data_update.php\" target=\"popup\" onclick=\"window.open('../libary/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
                      <button>EDIT</button>
                    </a>
                    <a href=\"libary/update.php\" target=\"popup\" onclick=\"window.open('../libary/delete.php?id=".   $row["id"] . "','name','width=600, height=350')\">
                      <button>DELETE</button>
                    </a>
                  </div>
                </div>");
          }   
          if ($row["available"] == 1) {
            echo("
            <div  id=\"". $row["id"] ."\"class=\"col-xl-3 p-0 col-md-4 col-sm-12\">
            <div class=\"innderdiv\">
              <img src=\"" . $row["img"] ."\">
              <h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4>
              <h5><br>" . $row["price"] . " €/ hour<br>
              <i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br>
              <span class=\"green\">not available</span></h5><br>
              <a href=\"libary/data_update.php\" target=\"popup\" onclick=\"window.open('../libary/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
                <button>EDIT</button>
              </a>
              <a href=\"libary/update.php\" target=\"popup\" onclick=\"window.open('../libary/delete.php?id=".   $row["id"] . "','name','width=600, height=350')\">
                <button>DELETE</button>
              </a>
            </div>
          </div>");
          }
        }



        // Free result set
        mysqli_free_result($result);
        // Close connection
        mysqli_close($conn);
      ?>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv addcar"><span><a href="libary/update.php" target="popup" onclick="window.open('../libary/update.php','name','width=600,height=900')">+<br>ADD<br>CAR</a></span></div>
      </div>
    </div>
   </div>

  <div id="SUV" class="container-fluid">
    <h1><b>SPORT UTILITY VEHICLE (SUV)</b> SECTION</h1>
    <h5>CLICK ON YOUR VEHICLE OF CHOICE TO SEE MORE DETAILS!</h5>
    <div class="row">
    <!-- php code for displaying cars from the database -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carrental";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "SELECT * FROM suvdetails WHERE 1";
    $result = mysqli_query($conn, $sql);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    while($row = mysqli_fetch_assoc($result)) {
      if ($row["available"] == 0) {
        echo("<div class=\"col-xl-3 p-0 col-md-4 col-sm-12\"><div class=\"innderdiv\"><img style=\"opacity:0.5;\" src=\"" . $row["img"] ."\"><h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4><h5><br>" . $row["price"] . " €/ hour<br><i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br><span class=\"green\">not available</span></h5><br><button>EDIT</button><button>DELETE</button></div></div>");
      } 
      if ($row["available"] == 1) {
        echo("<div class=\"col-xl-3 p-0 col-md-4 col-sm-12\"><div class=\"innderdiv\"><img src=\"" . $row["img"] ."\"><h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4><h5><br>" . $row["price"] . " €/ hour<br><i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br><span class=\"green\">available</span></h5><br><button>EDIT</button><button>DELETE</button></div></div>");
      }
  }



    // Free result set
    mysqli_free_result($result);
    // Close connection
    mysqli_close($conn);
    ?>
    <div class="col-xl-3 p-0 col-md-4 col-sm-12">
    <div class="innderdiv addcar"><span><a href="libary/update.php" target="popup" onclick="window.open('../libary/update.php','name','width=600,height=900')">+<br>ADD<br>SUV</a></span></div>
      </div>

    </div>

  </div>

  <div id="bikes" class="container-fluid">
    <h1>FIND THE RIGHT <b>BIKE</b></h1>
    <h5>CLICK ON YOUR VEHICLE OF CHOICE TO SEE MORE DETAILS!</h5>
    <div class="row">
    <!-- php code for displaying cars from the database -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carrental";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "SELECT * FROM bikedetails WHERE 1";
    $result = mysqli_query($conn, $sql);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    while($row = mysqli_fetch_assoc($result)) {
      if ($row["available"] == 0) {
        echo("<div class=\"col-xl-3 p-0 col-md-4 col-sm-12\"><div class=\"innderdiv\"><img style=\"opacity:0.5;\" src=\"" . $row["img"] ."\"><h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4><h5><br>" . $row["price"] . " €/ hour<br><i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br><span class=\"green\">not available</span></h5><br><button>EDIT</button><button>DELETE</button></div></div>");
      } 
      if ($row["available"] == 1) {
        echo("<div class=\"col-xl-3 p-0 col-md-4 col-sm-12\"><div class=\"innderdiv\"><img src=\"" . $row["img"] ."\"><h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4><h5><br>" . $row["price"] . " €/ hour<br><i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br><span class=\"green\">available</span></h5><br><button>EDIT</button><button>DELETE</button></div></div>");
      }
  }



    // Free result set
    mysqli_free_result($result);
    // Close connection
    mysqli_close($conn);
    ?>
    <div class="col-xl-3 p-0 col-md-4 col-sm-12">
    <div class="innderdiv addcar"><span><a href="libary/update.php" target="popup" onclick="window.open('../libary/update.php','name','width=600,height=900')">+<br>ADD<br>BIKE</a></span></div>
      </div>

    </div>

  </div>

</body>

</html>