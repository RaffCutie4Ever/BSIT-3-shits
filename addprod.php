<?php
$conn=mysql_connect("localhost","root","1234");
mysql_select_db('shopping');

if(isset($_POST['save']))

$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "./images/" . $filename;
{
    $name = $_POST['prodname'];
    $desc = $_POST['prodesc'];
    $price = $_POST['prodprice'];
    $img = $_FILES["image"]["name"];
    $sql = "INSERT INTO products (name, description, price, picture) 
    VALUES ('$name', '$desc', '$price', '$img')";
    if(mysql_query($sql))
        {
    move_uploaded_file($tempname,$folder);
    echo"<script>alert('Product Saved Successfully!!');window.location='admin.html'</script>";
        } else {
            echo "Error:" .$sql . "
    " . mysql_error($conn);
        }
        mysql_close($conn);
}

?>