<?php

include 'db/dbconnect.php';

if (isset($_POST['txtschool'])) {
    $scho = $_POST['txtschool'];
} else {

    $scho = $_POST["scho"];
    $addr = $_POST["addr"];
    $prov = $_POST["prov"];
    $cont = $_POST["cont"];



    $query = "INSERT INTO school_details
            (school_name,address,province,school_telno)
             VALUES
                 ('$scho','$addr','$prov','$cont')";
    //(school_name,address,province,school_telno,contact_person,occupation,contact_no,email)  
    //('$scho','$addr','$prov','$cont','$name','$occu','$pcont','$email')";

    if (mysqli_query($mysqli, $query) or die(mysqli_error($mysqli))) {

        echo '<script language="javascript">';
        echo 'alert("Successfully added")';
        echo '</script>';
    }
}

$quary = "SELECT school_id FROM school_details WHERE school_name ='$scho'";
$result = mysqli_query($mysqli, $quary) or die(mysqli_error($mysqli));
$row = mysqli_fetch_array($result);
$id = $row[0];


if (isset($_POST['one']) or isset($_POST["itema"])) {
    if (isset($_POST['one'])) {
        $x = $_POST['one'];
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
    if (isset($_POST["itema"])) {
        $item = $_POST["itema"];
        $qty = $_POST["qtya"];

        $query = "INSERT INTO edu_resources
            (school_id,edu_item,e_quantity)
             VALUES
             ('$id','$item','$qty')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}


if (isset($_POST['two']) or isset($_POST["itemtwo"])) {
    
    if (isset($_POST['two'])) {
        $x = $_POST['two'];
        for ($i = 1; $i <= $x; $i++) {
            $d = "itemtwo" . $i;
            $p = "qtytwo" . $i;

            if (!empty($_POST[$d])) {


                $item = $_POST[$d];
                $qty = $_POST[$p];

                $query = "INSERT INTO sports_equipment
            (school_id,sports_item,s_qunatity)
             VALUES
             ('$id','$item','$qty')";
                mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
            }
        }
    }
    if (isset($_POST["itemtwo"])) {
        $item = $_POST["itemtwo"];
        $qty = $_POST["qtytwo"];

        $query = "INSERT INTO sports_equipment
            (school_id,sports_item,s_qunatity)
             VALUES
             ('$id','$item','$qty')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}

if (isset($_POST['twob']) or isset($_POST["sport"])) {
    if (isset($_POST['twob'])) {
        $x =  $_POST['twob'];
        for ($i = 1; $i <= $x; $i++) {
            $d = "sport2" . $i;
            

            if (!empty($_POST[$d])) {


                $sp = $_POST[$d];
                

                $query = "INSERT INTO sports_coaches
            (school_id,sport)
             VALUES
             ('$id','$sp')";
                mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
            }
        }
    }
    if (isset($_POST["sport"])) {
        $sp = $_POST["sport"];
        

        $query = "INSERT INTO sports_coaches
            (school_id,sport)
             VALUES
             ('$id','$sp')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}












mysqli_close($mysqli);
?>
