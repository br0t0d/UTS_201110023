<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kesehatan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="daftar.php"><b>CEK MENTAL</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-3">
                            <a class="nav-link text-light" href="daftar.php"><b>Daftar Gejala</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-light" href="cek.php"><b>Cek Mental</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="index.html" onclick="return confirm('Lanjutkan untuk keluar');"><b>Log Out</b></a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h3>Daftar Gejala</h3>
        <hr>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Gejala</th>
                    <th scope="col">Nama Gejala</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>G1</td>
                    <td>Sering merasa sedih</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>G2</td>
                    <td>Kehilangan kemampuan untuk berkonsentrasi.</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>G3</td>
                    <td>Ketakutan atau kekhawatiran yang berlebihan atau perasaan bersalah yang menghantui.</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>G4</td>
                    <td>Perubahan mood atau suasana hati yang drastis.</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>G5</td>
                    <td>Tampak menarik diri dari teman dan lingkungan sosial.</td>
                </tr>
            </tbody>
        </table>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>
