<html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
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
           <center> <h2>DATA TOKO SEPATU YONGKI</h2> </center>
        </section>
        </div>
        <section class="content">
        <center><a class = "btn btn-outline-primary" href="<?= base_url();?>Sepatu/tambah">Tambah Data</a></center>
        <table class="w3-table-all">
            <thead>
                <tr class="w3-red">
                    <th>ID SEPATU</th>
                    <th>MERK SEPATU</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    <th>HARGA</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php foreach ($Sepatu as $spt): ?>
                <tr>
                    <td><?= $spt['id_sepatu']; ?></td>
                    <td><?= $spt['merk']; ?></td>
                    <td><?= $spt['ukuran']; ?></td>
                    <td><?= $spt['warna']; ?></td>
                    <td><?= $spt['harga']; ?></td>
                    <td>
                    
                    <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>Sepatu/ubah/<?php echo $spt['id_sepatu']?>">Ubah</a>
                    <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>Sepatu/hapus/<?php echo $spt['id_sepatu']?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                    </td>
                </tr>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </section>
    </main>
    <script src="<?= base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
