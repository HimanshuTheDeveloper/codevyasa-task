<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "task";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);

    $name = isset($data['name']) ? $data['name'] : null;
    $email = isset($data['email']) ? $data['email'] : null;
    $password = isset($data['password']) ? $data['password'] : null;
    $username = isset($data['username']) ? $data['username'] : null;

    if (empty($name) || empty($email)) {
        $response = array('error' => 'Name and email are required.');
    } else {

        $sql = "INSERT INTO users (name, email,user_name,password) VALUES ('$name', '$email' ,'$username','$password')";

        if (mysqli_query($conn, $sql)) {
            $response = array('success' => 'Data submitted successfully!');
        } else {
            $error = "Error: " . $sql . "<br>" . mysqli_error($conn);
            $response = array('success' => $error);
        }
    }
} else {
    $response = array('error' => 'Invalid request method.');
}

header('Content-Type: application/json');

echo json_encode($response);
