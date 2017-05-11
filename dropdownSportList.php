<?php
include 'db/dbconnect.php';

$sport = $_POST["query"];
$query0 = "SELECT * FROM adminsport WHERE name LIKE '$sport%'";
$result0 = mysqli_query($mysqli, $query0);
$row0 = mysqli_fetch_array($result0);
$id = $row0["id"];

$output = '';
$query = "SELECT * FROM admin_sport_equipment WHERE sport_id ='$id' ";
$result = mysqli_query($mysqli, $query);
$output = '<select name="itemtwo" id="itemtwo" style="background:wheat;">';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output .='<option value=' . $row["equipment"] . '>' . $row["equipment"] . '</option>';
    }
}

$output .= '</select>';
echo $output;
?>
