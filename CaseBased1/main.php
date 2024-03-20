<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Kursus Ngoding</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            font-family: sans-serif;
            padding-top: 60px;
        }
        
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .form-container {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background-color: #D7F8FF;
            border-radius: 20px;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        
        .form-control {
            border: 1px solid black; 
            border-radius: 5px; 
        }

    </style>
</head>

<body>
    <div class="container-fluid center-container">
        <div class="form-container">
            <h2 class="text-center">FORM PENDAFTARAN KURSUS NGODING</h2>
            <form method="post" action="process_form.php" enctype="multipart/form-data">
                <!--
                // post method is used because the best practice for sending form data is using POST, so that the data is not visible in the URL, but rather coded in the HTTP header.
                // action="process_form.php" tells the web browser to send the form data to that directory upon submitting
                // enctype multipart must be used if the form wants to accept file upload.
                -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan namamu disini" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan emailmu disini" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Masukkan nomor hp disini" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea class="form-control" name="address" id="address" placeholder="Masukkan alamatmu disini" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="photo">Photo:</label>
                            <input type="file" class="form-control-file" name="photo" id="photo" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>