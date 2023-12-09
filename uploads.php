<?php
// include database file
include './db-conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_FILES['file']) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];

        // Move the uploaded file to a directory (adjust the path as needed)
        $upload_path = './assets/uploads/';
        move_uploaded_file($file_tmp, $upload_path . $file_name);

        // Store file information in the database
        $sql = "INSERT INTO `files` (`filename`, `file_path`) VALUES ('$file_name', '$upload_path')";

        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully";
            // Redirect after 1 second - behave like page reload
            // sleep(1);
            // header('Location: index.html');
            // exit();
            // redirect after 3 sec into frontpage
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "index.html";
                    }, 3000);
                 </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
