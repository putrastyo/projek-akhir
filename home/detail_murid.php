<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style/style.css">

  <style>
    .pfp-detail {
    width: 60vh;
    }

    .sosmed-siswa {
        width: 40px;
    }

    .h4name {
        font-weight: bold;
        margin-left: 100px;
    }

    .data-siswa {
        margin-left: -190px;
    }

    .quotecard {
        margin-top: 120px;
        width: 80vh;
        margin-left: 90px
    }

    .quotehead {
       background-color: #A40808;
       color: white;
    }

  </style>
  
</head>


<body>
  <!-- Navbar -->
  <div class="navbar bg-danger">
    <nav class="navbar navbar-expand-sm navbar-light w-100">
      <div class="container">
        <a class="navbar-brand" href="#">XI RPL 1 </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0 ull ">
            <li class="nav-item lii">
              <a class="nav-link " href="#" aria-current="page">Murid</a>
            </li>
            <li class="nav-item dropdown lii">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Jadwal
              </a>
              <ul class="dropdown-menu ull">
                <li><a class="dropdown-item" href="#">Jadwal Pelajaran</a></li>
                <li><a class="dropdown-item" href="#">Jadwal Piket</a></li>
              </ul>
            </li>
            <li class="nav-item lii">
              <a class="nav-link" href="#">Galeri</a>
            </li>
            <li class="nav-item lii">
              <a class="nav-link" href="#">Tugas</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>
  <!-- END NAVBAR -->

  <div class="container mt-4">
    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Murid</li>
        <li class="breadcrumb-item active" aria-current="page">Detail Murid</li>
      </ol>
    </nav>
    <!-- END BREADCRUMB -->

    <div class="row">

        <div class="col">
            <h4 class="detail-tittle mt-5">Detail Murid</h4>
            <img class="pfp-detail rounded-circle mt-4 ms-3" src="../gambar/jennie.jfif" alt="">

            <br><br>

            <div class="d-flex mt-2">
               <a href=""> <img class="sosmed-siswa ms-4" src="../assets/icons/instagram.png" alt=""> </a>
               <a href=""> <img class="sosmed-siswa ms-3" src="../assets/icons/facebook.png" alt=""> </a>
               <a href=""> <img class="sosmed-siswa ms-3" src="../assets/icons/twitter.png" alt=""> </a>
               <a href=""> <img class="sosmed-siswa ms-3" src="../assets/icons/youtube.png" alt=""> </a>
               <a href=""> <img class="sosmed-siswa ms-3" src="../assets/icons/github.png" alt=""> </a>
               <a href=""> <img class="sosmed-siswa ms-3" src="../assets/icons/tik-tok.png" alt=""> </a>
            </div>


            <h4 class="h4name mt-5">Nama Siswa</h4>
            <center class="mt-4">
                <p class="data-siswa">Nis</p>
                <p class="data-siswa">Kelas</p>
                <p class="data-siswa">Agama</p>
                <p class="data-siswa">Jenis Kelamin</p>
            </center>


        </div>

        <div class="col">
            
            <div class="card quotecard">
                <div class="card-header quotehead">
                    Quote
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Jangan stress dulu, belom ketemu chanyeol</p>
                    <footer class="blockquote-footer mt-2">Nadyne <cite title="Source Title">Lourensia Saebrina</cite></footer>
                    </blockquote>
                </div>
             </div>
        </div>

    </div>
    

  </div>











  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>