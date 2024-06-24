<?php
include('koneksi.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
}

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/profil.css">
    <title>Profil</title>
    <style>
        svg:hover{
            transform: scale(1.1);
            transition: transform 0.2s;
        }
    </style>
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5 mx-auto">
        <div class="arrow border-right" style="width: 41vh">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" onclick="window.location.href = 'materi.php'" style="cursor:pointer" class="bi bi-arrow-return-left mt-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
            </svg>
        </div>
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <?php
                    while ($d = mysqli_fetch_assoc($result)) {
                        ?>
                        <span class="font-weight-bold">
                            <?php
                            echo $d['username'];
                            ?>
                        </span>
                        <span class="text-black-50">
                            <?php
                            echo $d['email'];
                            ?>
                        </span>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profil</h4>
                        </div>
                        <form action="updateProfile.php" method="POST">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="labels">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username"
                                        value="<?php echo $d['username'] ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Nomor Handphone</label>
                                    <input type="tel" class="form-control" placeholder="Masukkan nomor telepon"
                                        name="handphone" value="<?php echo $d['handphone'] ?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Email</label>
                                    <input type="email" class="form-control" placeholder="Masukkan email" name="email"
                                        value="<?php echo $d['email'] ?>" readonly>
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="submit" name="submit">Save Profile</button>
                            </div>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>