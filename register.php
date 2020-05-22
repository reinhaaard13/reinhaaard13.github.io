<?php

require 'function.php';
$data = mysqli_query($conn, "SELECT * FROM ibadah");

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $kd_ibadah = $_POST['kd_ibadah'];

    mysqli_query($conn,"INSERT INTO tabel_jemaat values('','$nama','$email','$no_telp','$kd_ibadah')");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>GBI 1D Ticketing</title>
    <link rel="shortcut icon" href="src/Logo 1D.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="src/Logo 1D.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            GBI Rayon 1D Online Ticketing
        </a>
        <span class="navbar-text">
            Online Service Ticketing RSVP
        </span>
    </nav>

    <div class="container-fluid">
        <div class="container">
            <br>
            <h1 class="display-4">Fill out this form</h1>
            <form action="" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Full Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">E-mail Address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Your E-mail Address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Phone Number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                        </div>
                        <input type="number" class="form-control" placeholder="Phone Number" name="no_telp" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jam Ibadah</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="kd_ibadah">
                        <?php foreach ($data as $gabung) { ?>
                            <option value="<?php echo $gabung['kd_ibadah'] ?>"><?php echo $gabung['nama_ibadah'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Dengan ini saya menyatakan bahwa saya akan datang ibadah dengan tepat waktu sesuai dengan jam ibadah yang telah saya pilih.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>