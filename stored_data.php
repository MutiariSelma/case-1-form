<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Tersimpan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Tambahan gaya khusus untuk tampilan gambar */
        .card-img-bottom {
            max-height: 500px;
            object-fit: contain;
        }
        .judul{
            text-align: center;
            padding-bottom: 20px;
            padding-top: 30px;
        }
        .kembali-link {
            position: absolute;
            top: 100px;
            left: 50px;
            border-color: black;
    
        }
        body {
            padding-top: 60px;
        }
    </style>
</head>
<body>
    <a href="main.php" class="btn btn-primary kembali-link">Kembali ke Form</a>
    <div class="container">
    <div>
        </div>
        <h1 class="judul">DATA TERSIMPAN</h1>
        <?php
        $file = fopen('data.txt', 'r') or die('Unable to open file!');
        while (!feof($file)) {
            $data = fgets($file);
            if (!empty($data)) {
                $data_array = explode("|", $data);

                // Menampilkan data tersimpan dalam bentuk card Bootstrap.
                echo '<div class="card mb-4">';
                echo '<div class="card-body">';
                echo "<h4 class='card-title'>Name: " . $data_array[0] . "</h4>";
                echo "<p class='card-text'>Email: " . $data_array[1] . "</p>";
                echo "<p class='card-text'>Phone Number: " . $data_array[2] . "</p>";
                echo "<p class='card-text'>Address: " . $data_array[3] . "</p>";
                echo "<img class='card-img-bottom' src='" . $data_array[4] . "' alt='Uploaded Photo'>";
                echo '</div>';
                echo '</div>';
            }
        }
        fclose($file);
        ?>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>