<?php 
    include "db_connection.php";
?>  

<!DOCTYPE html>
<html>

    <head>
        <title>Laptops</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- <script src="main.js"></script> --> 

    </head>

    <body>
    
   <!-- Nav Start -->
   <nav>
        <div id="navbar">
            <a href="index.html">Home</a>
            <a href="orderby1.php">Query 1</a>
            <a href="orderby2.php">Query 2</a>
            <a href="products.html">Products</a> 
            <a href="#">Pagina 5</a>
        </div>
    <nav>
    <!-- Nav Ends-->
   

    <!-- Responsive Table Start --> 
 
 <h1><span class="blue">&lt;</span>Gorilla<span class="blue">&gt;</span> <span class="yellow">Laptops</h1>
 <h2><a href="" target="_blank">This is a overview of Gorilla Laptops</a></h2>
 
 <table class="container">
     <thead>
         <tr>             
            <th><h1>User</h1></th> 
            <th><h1>Brand</h1></th>
			<th><h1>Model</h1></th>
			<th><h1>CPU</h1></th>
			<th><h1>GPU</h1></th>
			<th><h1>RAM</h1></th>
            <th><h1>HDD</h1></th>
        </tr>
     </thead>
     <tbody>  

     <?php
    $sql="SELECT *
    FROM users
    INNER JOIN laptoptable ON users.laptop_data=laptoptable.laptop_id";
    // $sql = "SELECT brand, model, cpu, gpu,ram,hdd FROM laptoptable"; //
    
    $data = $conn->query($sql);  

    foreach ($data as $row)
    {  
    $tableOutput ="";     
    $tableOutput .= '<tr>';  
    $tableOutput .='<td>';
    $tableOutput .=$row['user_name'] . " ";  
    $tableOutput .='</td>'; 
    $tableOutput .='<td>'; 
    $tableOutput .=$row['brand'] . " ";  
    $tableOutput .='</td>';
    $tableOutput .='<td>';
    $tableOutput .=$row['model'] . " ";
    $tableOutput .='</td>';
    $tableOutput .='<td>';
    $tableOutput .=$row['cpu'] . " "; 
    $tableOutput .='</td>';
    $tableOutput .='<td>';
    $tableOutput .=$row['gpu'] . " "; 
    $tableOutput .='</td>';
    $tableOutput .='<td>';
    $tableOutput .=$row['ram'] . " "; 
    $tableOutput .='</td>';
    $tableOutput .='<td>';
    $tableOutput .=$row['hdd'] . " ";
    $tableOutput .='</td>';
    $tableOutput .="</tr>";
    echo $tableOutput;
    }  
  
?>
       </tbody>
</table>

<!-- Responsive Table End -->
       
<script type='text/javascript' language='javascript' src='javascript.js'></script>        
</body>
  
</html>