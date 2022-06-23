<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=v, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="headerr">
<div class="link">
          <a href="#"><p>Users</p></a>  
          <a href="#"><p style="color: #fff;">Product</p></a>    
          <a href="stockin.php"><p>Stock In</p></a>    
          <a href="stockout.php"><p>Stock Out</p></a>
          <div class="product_report">
               <p>Product Report</p>
          </div>
</div>
</div>
<div class="containerr">
     <center>
          <table>
               <tr>
                    <th>product name</th>
                    <th>product price</th>
                    <th>Current quantity</th>
                    <th>Operation</th>
               </tr>
               <?php
include("connect.php");
$select = "SELECT * FROM product";
if($check = mysqli_query($con,$select)){
     if(mysqli_num_rows($check)>0){
          while($row=mysqli_fetch_assoc($check)){
               $id=$row['productid'];
               $pname=$row['productname'];
               $quantity=$row['curentquantity'];

               echo"<tr>
               <td>$id</td>
               <td>$pname</td>
               <td>$quantity</td>
               <td><button class='primary'><a href='stockin.php?id=$id'>Import</a></button>
                   <button class='primary'><a href='stockout.php?id=$id'>Export</a></button>
                   <button class='primary'><a href='update.php?id=$id'>Add</a></button></td>
           </tr>";
          }
     }else {
          echo"<td colspan='3'><center>No any Available Product</center></td>";
     }
}else{
     echo"query error";
}
?>      
     </center>
</div>
</body>
</html>