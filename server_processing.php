<?php
require_once('conn.php');
 
$query = $conn->query("SELECT count(id) FROM login");
$totalRecords = $query->fetch_row()[0];
 
$length = $_GET['length'];
$start = $_GET['start'];
 
$sql = "SELECT id, fname, mname, lname, bday, age FROM login";
 
if (isset($_GET['search']) && !empty($_GET['search']['value'])) {
    $search = $_GET['search']['value'];
    $sql .= sprintf(" WHERE fname like '%s' OR lname like '%s'", '%'.$conn->real_escape_string($search).'%', '%'.$conn->real_escape_string($search).'%');
}

// $sql .= " LIMIT $start, $length";
// $query = $conn->query($sql);
// $result = [];
// while ($row = $query->fetch_assoc()) {
//     $result[] = [
//         $row['fullname'],
//         $row['email'],
//         "<a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."''>Delete</a>"
//     ];
// }

// echo json_encode([
//     'draw' => $_GET['draw'],
//     'recordsTotal' => $totalRecords,
//     'recordsFiltered' => $totalRecords,
//     'data' => $result,
// ]);