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
        $x = $_POST['twob'];
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






if (isset($_POST['four']) or isset($_POST["subject"])) {
    if (isset($_POST['four'])) {
        $x = $_POST['four'];
        for ($i = 1; $i <= $x; $i++) {
            $d = "subject" . $i;
            $p = "grade" . $i;

            if (!empty($_POST[$d])) {


                $category = $_POST[$d];
                $no = $_POST[$p];

                $query = "INSERT INTO non_acedemic_staff
            (school_id,category,number)
             VALUES
             ('$id','$category','$no')";
                mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
            }
        }
    }
    if (isset($_POST["category"])) {
        $category = $_POST["category"];
        $no = $_POST["no"];


        $query = "INSERT INTO non_acedemic_staff
            (school_id,category,number)
             VALUES
             ('$id','$category','$no')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}


if (isset($_POST["water"])) {
    $water = $_POST["water"];
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT water FROM others WHERE school_id = '$id'"))) {
        $query = "update others set water=1 where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,water)
             VALUES
             ('$id','1')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}


if (isset($_POST["ele"])) {
   
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT electricity FROM others WHERE school_id = '$id'"))) {
        $query = "update others set electricity=1 where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,electricity)
             VALUES
             ('$id','1')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}


if ($_POST["wash"]!=0) {
    $wash = $_POST["wash"];
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT electricity FROM others WHERE school_id = '$id'"))) {
        $query = "update others set washrooms=$wash where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,washrooms)
             VALUES
             ('$id','$wash')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}


if (isset($_POST['seven']) or isset($_POST["funit"])) {
    if (isset($_POST['seven'])) {
        $x = $_POST['seven'];
        for ($i = 1; $i <= $x; $i++) {
            $d = "funit" . $i;
            $p = "fqty" . $i;

            if (!empty($_POST[$d])) {


                $funit = $_POST[$d];
                $fqty = $_POST[$p];

                $query = "INSERT INTO furniture
            (school_id,unit_type,u_qunatity)
             VALUES
             ('$id','$funit','$fqty')";
                mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
            }
        }
    }
    if (isset($_POST["funit"])) {
        $funit = $_POST["funit"];
        $fqty = $_POST["fqty"];


        $query = "INSERT INTO furniture
            (school_id,unit_type,u_qunatity)
             VALUES
             ('$id','$funit','$fqty')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}

if (isset($_POST["lab"])) {
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT lab_facility FROM others WHERE school_id = '$id'"))) {
        $query = "update others set lab_facility=1 where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,lab_facility)
             VALUES
             ('$id','1')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}
if (isset($_POST["build"])) {
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT buildings FROM others WHERE school_id = '$id'"))) {
        $query = "update others set buildings=1 where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,buildings)
             VALUES
             ('$id','1')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}

if (isset($_POST["internet"])) {
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT internet FROM others WHERE school_id = '$id'"))) {
        $query = "update others set internet=1 where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,internet)
             VALUES
             ('$id','1')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}

if (isset($_POST["garbage1"])) {
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM others WHERE school_id = '$id'"))) {
        $query = "update others set garbage_disposal=1 where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,garbage_disposal)
             VALUES
             ('$id','1')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}

if (isset($_POST["garbage2"])) {
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM others WHERE school_id = '$id'"))) {
        $query = "update others set collection_dates=1 where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,collection_dates)
             VALUES
             ('$id','1')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}
if (isset($_POST["dra"])) {
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM others WHERE school_id = '$id'"))) {
        $query = "update others set drainage_system=1 where school_id='$id'";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
    else {
        $query = "INSERT INTO others
            (school_id,drainage_system)
             VALUES
             ('$id','1')";
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    }
}
header( "Location: event.php" );
mysqli_close($mysqli);
?>
