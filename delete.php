<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "libary";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    if ($_GET['id']) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM product WHERE id = {$id}" ;
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();

        $conn->close();
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

      <form action="./deletingdata.php" method="post">
        <img src="<?php echo $data['img'] ?>">
          <h1>ARE YOU SURE YOU WANT TO DELETE THIS VEHICLE</h1><br>
          <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
          <input type="submit" class="btn" value="YESS DELETE IT">
        </form>

</body>
</html>
<?php
}
?>