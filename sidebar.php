<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    /* Tambahkan properti CSS untuk membuat sidebar dan konten kanan dapat di-scroll */
    .scrollable-sidebar {
      height: 100vh; /* Tinggi maksimum sidebar sesuai tinggi layar */
      overflow-y: auto; /* Tambahkan scroll jika isi sidebar lebih tinggi dari tinggi layar */
    }

    .scrollable-content {
      height: 100vh; /* Tinggi maksimum konten kanan sesuai tinggi layar */
      overflow-y: auto; /* Tambahkan scroll jika isi konten lebih tinggi dari tinggi layar */
    }
  </style>
  <title>Dashboard</title>
</head>
<body>

<div class="container-fluid d-flex">
  <div class="row flex-column">
    <!-- Jumbotron (8 kolom) -->
    <div class="col-md-8 scrollable-content">
      <div class="jumbotron">
        <h1 class="display-4">Selamat Datang!</h1>
        <p class="lead">Ini adalah bagian kiri dashboard Anda menggunakan Bootstrap 4.6.</p>
        <hr class="my-4">
        <p>Jumbotron ini dapat digunakan untuk menampilkan informasi atau konten penting lainnya.</p>
      </div>
    </div>
  </div>

  <!-- Jadwal Kegiatan (4 kolom) -->
  <div class="col-md-4 scrollable-sidebar">
    <div class="card">
      <div class="card-header">
        Jadwal Kegiatan
      </div>
      <ul class="list-group list-group-flush">
        <!-- Isi dengan jadwal kegiatan -->
        <li class="list-group-item">Kegiatan 1</li>
        <li class="list-group-item">Kegiatan 2</li>
        <li class="list-group-item">Kegiatan 3</li>
        <!-- Tambahkan lebih banyak item jika diperlukan -->
      </ul>
    </div>
  </div>

</div>

<!-- Bootstrap JS dan Popper.js (diperlukan untuk beberapa komponen Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
