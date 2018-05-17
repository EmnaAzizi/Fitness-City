<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness city";
$conn = new mysqli($servername, $username, $password, $dbname);
$login=$_POST["username"];
$pass=$_POST["password"];
$sql = "SELECT * FROM client where login='".$login."' and password='".$pass."' ";
$result = $conn->query($sql);
$row = mysqli_fetch_row($result);
if($row!=null)
{session_start();
$_SESSION["nom"] = $row[0];
$_SESSION["login"] = $row[1];
$_SESSION["password"]= $row[2];

$_SESSION["nom_abonnement"]= $row[3];
$_SESSION["mail"] = $row[4];  
$_SESSION["tlp"] = $row[5]; 
$_SESSION["photo"] = $row[6];

if (isset($_SESSION['param'])){
	echo"
<script type=\"text/javascript\">
window.location = \"Paiement.php\";
</script> ";
} else {
header('Location: service_client.php');}
}
else {
        echo "<script type='text/javascript'>
window.location='client.php';
alert('Compte introuvable');
</script>";
}
$conn->close();
?>