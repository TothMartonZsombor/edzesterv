<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edzesnaplo_db";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Adatbázis kapcsolat hiba!"]));
}

// 🔹 GET - Összes bejegyzés lekérdezése
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $sql = "SELECT * FROM bejegyzesek ORDER BY datum DESC";
    $result = $conn->query($sql);
    
    $entries = [];
    while ($row = $result->fetch_assoc()) {
        $entries[] = $row;
    }
    
    echo json_encode($entries);
    exit;
}

// 🔹 POST - Új bejegyzés rögzítése
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    
    if (!isset($data["gyakorlat"]) || !isset($data["ismetlesszam"])) {
        echo json_encode(["success" => false, "message" => "Hiányzó adatok!"]);
        exit;
    }
    
    $gyakorlat = $conn->real_escape_string($data["gyakorlat"]);
    $ismetlesszam = (int)$data["ismetlesszam"];
    
    if ($ismetlesszam < 1 || $ismetlesszam > 8) {
        echo json_encode(["success" => false, "message" => "Érvénytelen ismétlésszám!"]);
        exit;
    }
    
    $sql = "INSERT INTO bejegyzesek (gyakorlat, ismetlesszam) VALUES ('$gyakorlat', '$ismetlesszam')";
    
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Sikeres rögzítés!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Hiba történt!"]);
    }
    exit;
}

$conn->close();
?>
