<html>
<head>
    <title>Tampil Data</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/styles.css">
</head>
<body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tampil Data Transaksi Sepatu</h3></div>
                                    <div class="card-body">
 <center>
    <table>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td>
            <?= $nm; ?>
            </td>
        </tr>
        <tr>
            <td>No Handphone</td>
            <td>:</td>
            <td>
            <?= $no; ?>
            </td>
        </tr>
        <tr>
            <td>Merk Sepatu</td>
            <td>:</td>
            <td>
            <?= $mk; ?>
            </td>
        </tr>
        <tr>
            <td>No Sepatu</td>
            <td>:</td>
            <td>
            <?= $uk; ?>
            </td>
        </tr>
        <tr>
            <td>Subtotal</td>
            <td>:</td>
            <td>
            300.000
            </td>
        </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('review'); 
?>">Kembali</a>
 </td>
