<?php
require_once 'config.php';

// Connect using mysqli
$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$dbConn) {
    die('MySQL connection failed: ' . mysqli_connect_error());
}

// Wrapper functions
function dbQuery($sql) {
    global $dbConn;
    return mysqli_query($dbConn, $sql);
}

function dbAffectedRows() {
    global $dbConn;
    return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQLI_NUM) {
    return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result) {
    return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) {
    return mysqli_fetch_row($result);
}

function dbFreeResult($result) {
    return mysqli_free_result($result);
}

function dbNumRows($result) {
    return mysqli_num_rows($result);
}

function dbInsertId() {
    global $dbConn;
    return mysqli_insert_id($dbConn);
}
?>
