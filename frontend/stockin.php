<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=v, initial-scale=1.0">
    <title>Stock in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="headerr">
<div class="link">
          <a href="#"><p>Users</p></a>  
          <a href="product.php"><p>Product</p></a>    
          <a href="#"><p style="color: #fff;">Stock In</p></a>    
          <a href="stockout.php"><p>Stock Out</p></a>
          <div class="product_report">
               <p>Stock In Report</p>
          </div>
</div>
</div>
<div class="containerr">
     <center>
          <table>
               <tr>
                    <th>Product Id</th>
                    <th>Date</th>
                    <th>Stockin Quantity</th>
                    <th>Total Price</th>
                    <th>Operation</th>
               </tr>
<?php
$con = mysqli_connect('localhost','root','','anne')
or die("database connection failed");
$sql ="SELECT * FROM  stockin";
$check = mysqli_query($con,$sql);
if(!$check){
echo"<script> alert('empty set') </script>";
}else{
if(mysqli_num_rows($check)>0){
while($row = mysqli_fetch_array($check)){
$a = $row['productid'];
$b = $row['date'];
$c= $row['stockinquantity'];
$e= $row['totalprice'];
echo"
<tr>
<td>$a</td>
<td>$b</td>
<td>$c</td>
<td>$e</td>
<td><button class='primary'>Add</button> 
<button class='denger'>Remove</button></td>
 </tr>";
 }
}
}
mysqli_close($con);
?>
                    
</tr>
</table>
</center>
</div>
</body>
</html>