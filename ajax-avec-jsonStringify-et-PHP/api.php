<?php
header("Content-Type: application/json; charset=UTF-8");

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => "Aucune donnée reçue"
    ]);
    exit;
}

echo json_encode([
    "success" => true,
    "message" => "Étudiant reçu avec succès",
    "etudiant" => $data
], JSON_UNESCAPED_UNICODE);
?>