<?php

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:rms-go.database.windows.net,1433; Database = webapp-sql-group-db", "rmsadmin", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rmsadmin@rms-go", "pwd" => '$Deviation!', "Database" => "webapp-sql-group-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rms-go.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>