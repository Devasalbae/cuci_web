<?php

include 'db.php';

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Harga Laundry</title>
  </head>
  <body>


    <!-- ini navbar Bosq-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">Laundry Native</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="harga.php">Harga</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                  Data Costumer
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="minggu.php">Data Minggu Ini</a></li>
                    <li><a class="dropdown-item" href="bulan.php">Data Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="tahun.php">Data Tahun Ini</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    <!-- Ini Akhir Navbar Bosq-->



        <!--ini awal content-->
        <h3><p class="text-center mt-4">Data Masuk Tahun Ini</p></h3>

          <center><table class="table-bordered mt-4" width="1000px">
              <tr>
             <td><center>No</td>
         		 <td><center>Nama</td>
         		 <td><center>Alamat</td>
         		 <td><center>Nomor Hp</td>
         		 <td><center>Berat</td>
         		 <td><center>Jenis Barang</td>
             <td><center>Tanggal</td>
             <td><center>Total </td>
             <td><center>Hapus</td>
               </tr>

               <?php
              	  $query = mysqli_query($conn, "SELECT * FROM data_tahun");
              	  while($row = mysqli_fetch_array($query)){
              	  ?>
                  <tr>
                  <td><center><?php echo $row['id'] ?></td>
                  <td><center><?php echo $row['nama'] ?></td>
                  <td><center><?php echo $row['alamat'] ?></td>
                  <td><center><?php echo $row['nomor'] ?></td>
                  <td><center><?php echo $row['berat'] ?></td>
                  <td><center><?php echo $row['jenis'] ?></td>
                  <td><center><?php echo $row['tanggal'] ?></td>
                  <td><center>Rp.<?php echo $row['jumlah'] ?></td>
                  <td><center><a href="delete_tahun.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-warning">
                    <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                    Hapus</button></a></td>

                   </tr>
        <?php
        }
          ?>

        </table></center>

        <div class="row">

        <div class="col-sm-6">


        </div>


        <div class="col-sm-3">

        </div>


        <div class="col-sm-3">



        <a href="export.php"><button type="button" class="btn btn-info mt-4">
          <svg class="bi bi-book mr-1" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 0 0 1 2.82z"/>
            <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
          </svg>Export Excel</button></a>
        </div>

        </div>




        <!--ini akhir content bosq-->



    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
