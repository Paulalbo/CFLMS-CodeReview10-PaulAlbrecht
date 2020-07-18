<?php
$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/styles.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Libary</title>
</head>
<body>

<header>
  <div class="left"></div>
  <div class="right">
    <h1 data-text="THE">THE</h1><h1 data-text="LIBARY">LIBARY</h1><h1 data-text="OF THE">OF THE</h1><h1 data-text="FUTURE">FUTURE</h1>
    <hr>

    <div class="libarysmall">
      <img src="https://images.unsplash.com/photo-1553448539-f6063db586a4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80">
      <img src="https://images.unsplash.com/photo-1553448540-fe069f7c95bf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80">
      <img src="https://images.unsplash.com/photo-1553448539-76016c055738?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80">
    </div>

    <h2 data-text="SEARCH">SEARCH</h2><h2 data-text="SELECT">SELECT</h2><h2 data-text="READ">READ</h2><h2 data-text="BUY">BUY</h2>

    <a href="#libary"><button>GO TO LIBARY</button></a>

  </div>
</header>


<!-- start online libary -->

<section>

<h1>SEARCH – SELECT – BUY</h1>
<div class="container">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "libary";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM product WHERE 1";

    $result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
      if ($row["status"] == 2) {
        echo("
        <div id=\"". $row["id"] ."\" class=\"product\">
          <div>
            <a class=\"edit\" href=\"libary/data_update.php\" target=\"popup\" onclick=\"window.open('../libary/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
              <i style=\"font-size:24px\" class=\"fa\">&#xf044;</i>
            </a>
          </div>
          <div>
            <a class=\"delete\" href=\"libary/delete.php\" target=\"popup\" onclick=\"window.open('../libary/delete.php?id=". $row["id"] . "','name','width=600,height=800')\">
              <i style=\"font-size:24px\" class=\"fa\">&#xf1f8;</i>
            </a>
          </div>
          <img src=\"" . $row["img"] ."\">
          <h4>
            <strong>RESERVED: " . $row["title"] . "</strong>
          </h4>
          <p>
            <strong>" . $row["author"] . "</strong><br>" . $row["description"] . "
          </p>
        </div>");
        }
      if ($row["status"] == 1) {
        echo("
        <div id=\"". $row["id"] ."\" class=\"product\">
          <div>
            <a class=\"edit\" href=\"libary/data_update.php\" target=\"popup\" onclick=\"window.open('../libary/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
              <i style=\"font-size:24px\" class=\"fa\">&#xf044;</i>
            </a>
          </div>
          <div>
            <a class=\"delete\" href=\"libary/delete.php\" target=\"popup\" onclick=\"window.open('../libary/delete.php?id=". $row["id"] . "','name','width=600,height=800')\">
              <i style=\"font-size:24px\" class=\"fa\">&#xf1f8;</i>
            </a>
          </div>
          <img src=\"" . $row["img"] ."\">
          <h4>
            <strong>" . $row["title"] . "</strong>
          </h4>
          <p>
            <strong>" . $row["author"] . "</strong><br>" . $row["description"] . "
          </p>
        </div>");
        }
        if ($row["status"] == 0) {
          echo("
          <div style=\"opacity:0.5\" id=\"". $row["id"] ."\" class=\"product\">
            <div>
              <a class=\"edit\" href=\"libary/data_update.php\" target=\"popup\" onclick=\"window.open('../libary/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
                <i style=\"font-size:24px\" class=\"fa\">&#xf044;</i>
              </a>
            </div>
            <div>
              <a class=\"delete\" href=\"libary/delete.php\" target=\"popup\" onclick=\"window.open('../libary/delete.php?id=". $row["id"] . "','name','width=600,height=800')\">
                <i style=\"font-size:24px\" class=\"fa\">&#xf1f8;</i>
              </a>
            </div>
            <img src=\"" . $row["img"] ."\">
            <h4>
              <strong>" . $row["title"] . "</strong>
            </h4>
            <p>
              <strong>" . $row["author"] . "</strong><br>" . $row["description"] . "
            </p>
          </div>");
          }
  }

    // Free result set
    mysqli_free_result($result);
    // Close connection
    mysqli_close($conn);
    ?>

<a href="libary/update.php" target="popup" onclick="window.open('../libary/update.php','name','width=600,height=900')"><div class="addnew"><i style="font-size:8vh" class="fa">&#xf0fe;</i><h1>ADD NEW</h1></div>

    </div>


</section>
  
</body>
</html>