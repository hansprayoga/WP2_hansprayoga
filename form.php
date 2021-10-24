<html>
<head>
 <title>Form Input</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Form Input Transaksi Sepatu</h3></div>
                                    <div class="card-body">
 <center>
    <form action="<?= base_url('review/cetak'); ?>" method="post">
 <table>
    <tr>
        <th>Nama Pembeli</th>
        <th>:</th>
        <td><input type="text" name="nm" id="nm"></td>
    </tr>
    <tr>
        <th>No Handphone</th>
        <td>:</td>
        <td><input type="text" name="no" id="no"></td>
    </tr>
    <tr>
        <th>Merk Sepatu</th>
        <td>:</td>
        <td><select name="mk" onchange="price()">
            <option value="">Pilih Sepatu</option>
            <option value="Nike" harga="375.000">Nike</option>
            <option value="Adidas" harga="300.000">Adidas</option>
            <option value="Kickers" harga="250.000">Kickers</option>
            <option value="Eiger" harga="275.000">Eiger</option>
            <option value="Bucherri" harga="400.000">Bucherri</option>
        </select>
        <? 
        $total=$_POST['mk', 'harga']
        ?>
    </td>
    </tr>
    <tr>
        <th>No Sepatu</th>
        <td>:</td>
        <td><select name="uk" id="uk">
            <option value="">Pilih Ukuran</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            
    <tr>
        <td colspan="3" align="center">
        <input type="submit" value="Submit">
      </td>
    </tr>
 </table>
 </form>
 </center>
</body>
</html>
