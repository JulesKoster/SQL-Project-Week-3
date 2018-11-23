<?php 
    include "db_connection.php";
    //include "select.php"
?>  

<!DOCTYPE html>
<html>

    <head>
        <title>Laptops</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <!-- <script src="main.js"></script> --> 

    </head>

    <body>

    <!-- Nav Start -->
    <nav>
        <div id="navbar">
            <a href="index.php">Home</a>
            <a href="orderby1.php">Query 1</a>
            <a href="orderby2.php">Query 2</a>
            <a href="#">Page 4</a> 
            <a href="#">Page 5</a>
        </div>
    <nav>
    <!-- Nav Ends-->



    <!-- Responsive Table Start --> 
 
 <h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">Responsive</pan></h1>
 <h2><a href="index.php" target="_blank">Back to overview of Gorilla Laptops</a></h2>
 
 <table class="container">
     <thead>
         <tr>
            <th><h1><User></h1></th>       
            <th><h1>Model</h1></th>
			<th><h1>Brand</h1></th>
			<th><h1>CPU</h1></th>
			<th><h1>GPU</h1></th>
			<th><h1>RAM</h1></th>
            <th><h1>HDD</h1></th>
        </tr>
     </thead>
     <tbody>  

    <?php 
    
    $sql = "SELECT brand FROM laptoptable WHERE brand='DELL'";
    
    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        $tableOutput ="";     
        $tableOutput .= '<tr>';
        $tableOutput .= '<td>'; 
        $tableOutput .= '</td>';  
        $tableOutput .= '<td>'; 
        $tableOutput .= '</td>'; 
        $tableOutput .= '<td>'; 
        $tableOutput .= $row['brand'] . " ";  
        $tableOutput .= '</td>';
        $tableOutput .= '<td>'; 
        $tableOutput .= '</td>'; 
        $tableOutput .= '<td>';
        $tableOutput .= '</td>'; 
        $tableOutput .= '<td>';
        $tableOutput .= '</td>'; 
        $tableOutput .= '<td>';
        $tableOutput .= '</td>'; 
        $tableOutput .= '</tr>';
        echo $tableOutput;        
    }  
  
?>


       </tbody>
</table>

<!-- Responsive Table End -->
 
        
    </body>

</html>