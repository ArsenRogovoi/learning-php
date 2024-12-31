<?php
require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, PATCH, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

$dbFile = "db.json";

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        $data = json_decode(file_get_contents('php://input'), true);
        $data = create($data);
        responseData("success", $data);
        break;
    case "GET":
        break;
    case "PATCH":
        break;
    case "DELETE":
        break;
    default:
        responseMessage("error", "Invalid request method");
}

function responseMessage($status, $message)
{
    echo json_encode(['status' => $status, 'message' => $message]);
};
function responseData($status, $data)
{
    echo json_encode(['status' => $status, 'data' => $data]);
};
