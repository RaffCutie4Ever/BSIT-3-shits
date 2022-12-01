<?php
include("val.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:products.php");
		exit();
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		.box {
			width: 800px;
			height: 700px;
			overflow: scroll;
			overflow-x: hidden;
		}
	</style>
</head>


<body>
	
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
	
	<div class="container-fluid">
	<iframe src="shoppingcart.php" height="900" width="700" 
	title="Iframe Example" style="float: right; height: 700px; width: 699px;" frameborder="0"></iframe>
	</div>
	
<div align="left" class="box">
	<h1 align="center">Products</h1>
	<table border="0" cellpadding="2px" width="600px">
	
		<?php
			$result=mysql_query("select * from products") or die("select * from products"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
    	<tr>
        	<td><img src="<?php echo $row['picture']?>" /></td>
            <td>   	<b><?php echo $row['name']?></b><br />
            		<?php echo $row['description']?><br />
                    Price:<big style="color:green">
                    	$<?php echo $row['price']?></big><br /><br />
                   <!-- <input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['serial']?>)" /> -->
				<button type="button" class="btn btn-danger" onclick="addtocart(<?php echo $row['serial']?>)">Add to Cart</button>
				 
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
	
</div>
</body>
</html>
