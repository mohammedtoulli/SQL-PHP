<?php 
$host = "localhost";
$dbname = "testing";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Safi rak connecté <br>";
} catch (PDOException $e) {
    die("Erreur de connexion à $dbname: " . $e->getMessage());
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nom"];
    $email = $_POST["email"];

    if (empty($name)) {
        die("Entrez votre nom");
    }
    if (empty($email)) {
        die("Entrez votre email");
    }

    echo "Hi $name, your email is $email <br>";
} else {
    echo "Bro, you have an error";
}

try {
    $sql = "INSERT INTO user (nom, email) VALUES (:nom, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ":nom" => $name,
        ":email" => $email
    ]);
    echo "✅ Inscription réussie!";
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}



?>