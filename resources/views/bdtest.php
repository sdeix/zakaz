<?php
$database = 'Dostav';
$uid = '';
$pass = '';
$serverName = 'localhost';

$connection = [
    "Database" => $database,
    "Uid" => $uid,
    'PWD' => $pass,
    'CharacterSet' => 'UTF-8'
];

$conn = sqlsrv_connect($serverName, $connection);

if ($conn === false) {
    echo "не удалось. \n";
    die(print_r(sqlsrv_errors(), true));
}

$sql = 'SELECT Имя FROM Пользователь';

$stmt = sqlsrv_query($conn, $sql, array(), array('Charset' => 'UTF-8'));

$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
    echo "не удалось. \n";
    die(print_r(sqlsrv_errors(), true));
}

$results = array();

while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo 'Доход: ' . $row['Имя'] . "<br/>";
}



sqlsrv_close($conn);

?>
