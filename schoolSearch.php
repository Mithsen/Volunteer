<?php 
include 'db/dbconnect.php'; 

   
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT DISTINCT school_name FROM school_details WHERE school_name LIKE '".$_POST["query"]."%'";  
      $result = mysqli_query($mysqli, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li id="lim">'.$row["school_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li id="lim">School is not found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 } 
 
 
 ?>  