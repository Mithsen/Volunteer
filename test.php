<?php

include 'db/dbconnect.php';


$scho = $_POST["scho"];
$addr = $_POST["addr"];
$prov = $_POST["prov"];
$cont = $_POST["cont"];

$name = $_POST["pname"];
$occu = $_POST["occu"];
$pcont = $_POST["pcont"];
$email = $_POST["email"];

$query = "INSERT INTO school_details
            (school_name,address,province,school_telno,contact_person,occupation,contact_no,email)
             VALUES
             ('$scho','$addr','$prov','$cont','$name','$occu','$pcont','$email')";

if(mysqli_query($mysqli, $query) or die(mysqli_error($mysqli))) {
    
        echo '<script language="javascript">';
        echo 'alert("Successfully added")';
        echo '</script>';
}

$quary = "SELECT school_id FROM school_details WHERE school_name ='$scho'";
$result = mysqli_query($mysqli, $quary) or die(mysqli_error($mysqli));
$row = mysqli_fetch_array($result);
$id = $row[0];


if (isset($_POST['one']) or isset($_POST["item1"])) {
    $x = $_POST['one'];
    $last = "item" . $x;
    if(isset($_POST["$last"])) {
        $x++;
    }
    for ($i = 1; $i <= $x; $i++) {
        $d = "item" . $i;
        $p = "qty" . $i;

        if (!empty($_POST[$d])) {


            $item = $_POST[$d];
            $qty = $_POST[$p];
            
$query = "INSERT INTO edu_resources
            (school_id,edu_item,e_quantity)
             VALUES
             ('$id','$item','$qty')";
            mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        }
    }
}







mysqli_close($mysqli);
?>
