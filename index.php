Hello world
<?php
$servername = "sql.free.fr";
$username = "sylvan.buhard";
$password = "Souris03";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!-- <?php
	session_start();
	$currentPage = "Accueil";

	include 'includes/database.php';
	global $db;
	$con = mysql_connect("sql.free.fr","sylvan.buhard","","Souris03");
	$sql = "SELECT * from users";
	if ($result = mysql_query($con, $sql)) {
	
    // Return the number of rows in result set
    $rowcount = mysql_num_rows( $result );
}

        //     $servername = 'localhost';
        //     $username = 'root';
        //     $password = 'root';
            
        //     //On établit la connexion
        //     $conn = new mysqli($servername, $username, $password);
            
        //     //On vérifie la connexion
        //     if($conn->connect_error){
        //         die('Erreur : ' .$conn->connect_error);
        //     }
        //     echo 'Connexion réussie';
// Close the connection
mysql_close($con);
?> -->