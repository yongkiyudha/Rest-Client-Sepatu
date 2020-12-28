<html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Toko Sepatu Yongki</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/starter-template.css" rel="stylesheet">
</head>

<body>

<main class="container">
<div class="content-wrapper">
        <section class="content-header">
           <center> <h2>FORM TAMBAH DATA SEPATU</h2> </center>
        </section>
        <br>
        </div>
    <div class="row mt-3">
        <div class="col-md-15">
            <div class="card">
                <div class="card-body">
                <form action="<?= base_url();?>Sepatu/tambah" method="post">          
                         
                        <div class="form-group">
                            <label for="merk">Nama Sepatu</label>
                            <input type="text" name="merk" class="form-control" id="merk" >
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran Sepatu</label>
                            <input type="text" name="ukuran" class="form-control" id="ukuran">               
                                  </div>
                        <div class="form-group">
                            <label for="warna">Warna Sepatu</label>
                            <input type="text" name="warna" class="form-control" id="warna" >
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Sepatu</label>
                            <input type="text" name="harga" class="form-control" id="harga" >
                        </div> <br>
                        <div class="form-group">
                            <a href="<?= base_url();?>Sepatu/data_sepatu/" class="btn btn-danger" >Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                           </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </main>
    <script src="<?= base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
