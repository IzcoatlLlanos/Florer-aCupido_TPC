<?php
session_start();
if (isset($_POST['btnA'])){

  if ( (isset ($_POST['E'])) || (isset ($_POST['E'])) ) {

    $Nombre = $_POST['E'];
    $Pass = $_POST['E1'];

  }else {
    header("location: Index.php");
  }

}else {
  header("location: Index.php");
}


 ?>
