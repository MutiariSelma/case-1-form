<?php
// Directory to store uploaded files
$upload_dir = 'uploads/';

// Create the directory if it doesn't exist
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, true);
        // true = recursively create necessary parent directories if not existing.
}

// Get the form data and store them into variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Process the uploaded file
$photo_name = basename($_FILES['photo']['name']);
    // extract filename of uploaded image file using basename. Basename is used to prevent the full file path being used as the name.
$photo_tmp = $_FILES['photo']['tmp_name'];
    // temporary path of the image file on the server.
$photo_path = $upload_dir . $photo_name;
    // path to store image file in server storage.

move_uploaded_file($photo_tmp, $photo_path) or die("Error uploading file.");
    // Move the uploaded file to the server's uploads directory, If photo successfully moved, continue, if not, terminate code execution and output Error msg 


$data = "$name|$email|$phone|$address|$photo_path\n";
    // store data as text in $data, use | as delimiter, useful when reading data later.
$file = fopen('data.txt', 'a') or die('Unable to open file!');
    // fopen opens file for processing. takes arguments path and mode, a is append. Returns file pointer returned by fopen()
fwrite($file, $data);
    // write $data to $file. Append because 'a' is used as argument in fopen()
fclose($file);
    // close the file to finish file operation.

    echo "<div style='text-align: center;'>"; // for center elemen

    echo "<h2 style='color: black;'>Data berhasil disimpan!</h2>";
    echo "<br>";
    echo '<button style="background-color: #A8B1BA;
                        border: 0.5px solid black;
                        color: black;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                        border-radius: 5px;"
                    onclick="window.location.href=\'main.php\'">Kembali Ke Form</button>';
        // when clicked, redirects to main.php for user to submit another form

    echo '<button style="background-color: #A8B1BA;
                        border: 0.5px solid black;
                        color: black;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                        border-radius: 5px;"
                    onclick="window.location.href=\'stored_data.php\'">Lihat Data yang tersimpan</button>';
        // when clicked, redirects to stored_data.php for user to see stored data

