<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:rmsdev02.database.windows.net,1433; Database = rmsdev02", "rmsadmin", "$$wtf123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rmsadmin@rmsdev02", "pwd" => "$$wtf123", "Database" => "rmsdev02", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rmsdev02.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>