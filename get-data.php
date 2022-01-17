<?php
 
    //Variabel database
    $servername = "sql450.main-hosting.eu";
    $username = "u235343471_teem";
    $password = "Kamiludin123";
    $dbname = "u235343471_angkot54";
 
    $conn = mysqli_connect("$servername", "$username", "$password","$dbname");
 
    // Prepare the SQL statement
    
    $result = mysqli_query ($conn,"SELECT * FROM user WHERE nfc_uid='".$_GET["nfc_uid"]."'");    

    //var_dump(http_response_code(404));

    // Get the new response code
    //var_dump(http_response_code());

    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($conn));
        }  
?>