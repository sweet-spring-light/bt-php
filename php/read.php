<?php

include "db_conn.php";

if(isset($_POST['search'])) {
    $searchKey = $_POST['search'];
    $sql = "SELECT * FROM baiviet WHERE tenbv LIKE '%$searchKey%' ORDER BY mabv ASC";
}else
$sql = "SELECT * FROM baiviet ORDER BY mabv ASC";

$result = mysqli_query($conn, $sql);
