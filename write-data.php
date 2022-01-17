<?php
 
    //Variabel database
    $servername = "sql210.epizy.com";
    $username = "epiz_27529409";
    $password = "t4CE64Upp3kgWA4";
    $dbname = "epiz_27529409_angkot54";
 
    $conn = mysqli_connect("$servername", "$username", "$password","$dbname");
 
    // Prepare the SQL statement
    
    $result = mysqli_query ($conn,"INSERT INTO transaksi ('waktu', 'nfc_uid', 'totalbiaya') VALUES (current_timestamp(), '".$_GET["nfc_uid"]."', '".$_GET["totalbiaya"]."')");    
    
    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($conn));
        }  
?>