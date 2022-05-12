<?php

if (isset($_POST['username']) && $_POST['email'] && $_POST['subject']) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    try
    {
        $conn = new mysqli('abizgi34.beget.tech', 'abizgi34_ip', 'ILzKH*Z7', 'abizgi34_ip', 3306);
        
        if ($conn->connect_error) {
            die("Ошибка подключения: " . $conn->connect_error);
        }

        $sql = "INSERT INTO `reviews`(`username`, `email`, `subject`) 
                VALUES ('{$username}','{$email}','{$subject}')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('success' => true));
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    catch (Exception $e)
    {
        echo 'Ошибка: ', $e->getMessage(), "\n";
    }
} else {
    echo json_encode(array('success' => false));
}
