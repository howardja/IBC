<!DOCTYPE html>
<html>
<head>



</head>
<body>

<?php

$con = mysqli_connect('localhost','root','mysql','mydb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
try {
    // First of all, let's begin a transaction
    $db->beginTransaction();

    // A set of queries; if one fails, an exception should be thrown
    $db->query('first query');
    $db->query('second query');
    $db->query('third query');

    // If we arrive here, it means that no exception was thrown
    // i.e. no query has failed, and we can commit the transaction
    $db->commit();
} catch (Exception $e) {
    // An exception has been thrown
    // We must rollback the transaction
    $db->rollback();
}

echo "<script >";
echo "alert('".$nom1." ".$nom2."');"; 
echo "</script>";

mysqli_select_db($con,"ajax_demo");

$sql="UPDATE IGNORE NoVidente SET telefono=".$_GET['telefono'].", celular=".$_GET['celular'].", telefonoReferencia=".$_GET['telefonoReferencia'].", email='".$_GET['email']."' WHERE id = ".$_GET['idAfiliado'];
 mysqli_query($con,$sql);

echo $sql;
mysqli_close($con);
?>
</body>
</html>