<?php
//Database config
$host = "localhost";
$db_name = "glu_cart";
$username = "root";
$password = "";
$conn;
    
try
{
    $conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
}
catch(Exception $e)
{
    echo "Error while trying to create a connection: " . $e->getMessage();
}
?>