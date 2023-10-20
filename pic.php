<?php
include("conn.php");

if(isset($_POST['submit'])){
    $pic= $_FILES['picture']['name'];
    $p = 'blog/'.$pic;
    move_uploaded_file($_FILES['picture']['tmp_name'],$p);


    $query = "INSERT INTO picture(picture) VALUES (?)";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "s", $pic);
if (mysqli_stmt_execute($stmt)) {
  echo "Registration successful!";
  exit();
} else {
  echo "Error: " . mysqli_stmt_error($stmt);
}
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="picture" id="file" >
    <input type="submit" name="submit">
</form>
</body>
</html>