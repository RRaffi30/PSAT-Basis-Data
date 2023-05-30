<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RRaffi30</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="Profile.jpg">

</head>

<body>
    

    <!--Memanggil Database-->
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "psat";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "";
        ?>

<!--Navigation Bar-->
<nav class="navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid">          
    <a class="navbar-brand" href="index.html" style="font-family:Tahoma; font-style: italic;">
      <img src="Profile.jpg" alt="Logo"
      width="10%" style="border-radius: 50%;">
      RRaffi30
    </a>
          
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><h1>- Produk</h1></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Pembelian.php"><h1>- Pembelian</h1></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!--yeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->

<br>

    <h1 align="center">PRODUK TAS</h1>

<br>

    <!--Tabel Produk-->
    <table border="5" align="center" width="70%" class="table1">

    <thead style="border-bottom: 10px solid;">
        <tr>
            <th class="padding1"><h4>No</h4></th>
            <th><h4>Jenis</h4></th>
            <th><h4>Ukuran</h4></th>
            <th><h4>Warna</h4></th>
            <th><h4>Harga</h4></th>
        </tr>
    </thead>

    <?php
    $tas = mysqli_query($conn, "select * from tas");
    ?>

    <tbody>

        <!--Fungsi pengulangan sehingga seluruh data pada tabel dapat ditampilkan-->
        <?php
            while($data = mysqli_fetch_array($tas)){
        ?>    

        <tr >
            <td class="padding2"><h4><?= $data['Id_barang'] ?></h4></td>
            <td><h4><?= $data['jenis'] ?></h4></td>
            <td><h4><?= $data['ukuran'] ?></h4></td>
            <td><h4><?= $data['warna'] ?></h4></td>
            <td><h4>Rp <?= $data['Harga'] ?></h4></td>
        </tr>

        <?php
            } 
        ?>

    </tbody>

</table>

<br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
</body>
  
</html>