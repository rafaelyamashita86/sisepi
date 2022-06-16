<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM epi WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        echo "<script language='javascript' type/text='javascript'>window.location.href='visuepi.php'</script>";
    }
    else {
        echo "<script language='javascript' type/text='javascript'>window.location.href='visuepi.php'</script>";
    }
?>