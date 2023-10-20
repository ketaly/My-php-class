<?php
include("conn.php");

//select Query
$sql = mysqli_query($connect,"SELECT * FROM All_Users order by id desc")or die ("Could Not Select Profile".mysqli_error($connect));

$count = 0;//$count is used to identify the first value
//check if there is something in the table
if(mysqli_num_rows($sql)>$count){
	//fetch each array
	while($row=mysqli_fetch_assoc($sql))
	{
		//select whatever is in the table
		$id[] = $row["id"];
		$email[] = $row["email"];
		$user[] = $row["user"];
		$password[] = $row["password"];
        $phone_no[] = $row["phone_no"];
		$picture[] = $row["picture"];
        $title[] = $row["title"];
        $write_up[] = $row["write_up"];
		
		
		$count++;
	}
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<table width="800" border="1" align="center">
<tr>
	<td width="50">ID</td>
	<td width="120">email</td>
	<td width="100">username</td>
	<td width="130">password</td>
    <td width="130">phoneNumber</td>
	<td width="180">Picture</td>
	<td width="180">title</td>
    <td width="130">write up</td>
	<td width="80">&nbsp;</td>
	<td width="60">&nbsp;</td>
	<td></td>
	</tr>
	<?php for($s=0; $s<$count;$s++){?>
<tr>
	<td><?php echo $id[$s] ?></td>
	<td><?php echo $email[$s] ?></td>
	<td><?php echo $user[$s] ?></td>
	<td><?php echo $password[$s] ?></td>
	<td><?php echo $phone_no[$s] ?></td>
	<td><img src="blog/<?php echo $picture[$s] ?>"></img></td>
    <td><?php echo $title[$s] ?></td>
    <td><?php echo $write_up[$s] ?></td>
    
	<td><a href="editblog.php?id=<?php echo $id[$s]?>">Edit</td>
	<td id="del" onClick="alert('DELETED')"><a href="viewblog.php?id=<?php echo $id[$s]?>">Delete</td>
	<?php }?>
	</tr>
</body>
</html>