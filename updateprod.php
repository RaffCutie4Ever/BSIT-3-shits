<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<?php
 mysql_connect("localhost","root","1234");
 mysql_select_db('shopping');
$query="select * from products";
$result=mysql_query($query);
?>

<table class="table table-striped table-hover" align="center" border="1px" style="width: 600px; line-height: 40px;">

<tr>
    <td><b>Name</b></td>
    <td><b>Description</b></td>
    <td><b>Price</b></td>
    <td><b>Picture</b></td>
    <td><b>Action</b></td>
</tr>

<?php
$i=0;
while($rows=mysql_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['description']; ?></td>
    <td><?php echo $rows['price']; ?></td>
    <td><img src="./images/<?php echo $rows['picture'];?>" height="150px" width="150px"></td>
    <td><a href="#?id=<?php echo $row["serial"]; ?>">Update</a></td>
</tr>
<?php 

$i++;
}
?>
</table>
</body>
</html>