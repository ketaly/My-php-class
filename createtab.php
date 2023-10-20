<?php include ('conn.php');?>

<?php
$tableName = "registration";
$query = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    user VARCHAR(255) NOT NULL,
    password VARCHAR(255)   NOT NULL,
    phone_no  VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$tableName2 = "picture";
$query = "CREATE TABLE IF NOT EXISTS $tableName2 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    picture VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$tableName3 = "All_Users";
$query = "CREATE TABLE IF NOT EXISTS $tableName3 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    user VARCHAR(255) NOT NULL,
    password VARCHAR(255)   NOT NULL,
    phone_no  VARCHAR(20) NOT NULL,
    picture VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    write_up VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($connect, $query)) {
    echo "Table '$tableName3' created successfully";
} else {
    die("Error creating table: " . mysqli_error($connect));
}


// Close the connection
mysqli_close($connect);
?>