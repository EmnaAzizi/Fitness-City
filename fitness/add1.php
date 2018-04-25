<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness city";
$conn = new mysqli($servername, $username, $password, $dbname);
$nom=$_POST["nom"];
$psw1=$_POST["psw1"];
$psw=$_POST["psw"];
$mail=$_POST["mail"];
$user=$_POST["username"];
$tlp=$_POST["tlp"];
$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));

$abn = $_POST['abn'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql='INSERT INTO `client`(`nom`, `login`, `password`, `nom_abonnement`,'
        . ' `mail`, `telephone`, `photo`) '
        . 'VALUES ("'.$nom.'","'.$user.'","'.$psw.'","'.$abn.'","'.$mail.'","'.$tlp.'","'.$image.'")';
if ($conn->query($sql) === TRUE) {
    
        echo "<script type='text/javascript'>alert('Votre Compte a ete ajoute ! Vous pouvez vous connecter maintenant ');
window.location='client.php';
</script>";
} else { echo "<script type='text/javascript'>alert('Nom d utilisateur existe deja');
window.location='inscription.php';
</script>";
  
}



$conn->close();
?>