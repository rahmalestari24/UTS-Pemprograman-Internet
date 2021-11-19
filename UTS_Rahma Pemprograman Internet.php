<html>
<head>
    <title>::Penjumlahan::</title>
</head>
<body>
	<p>Masukan Angka 1</p>
    <form name="form1" action="" method="POST">
    <input type="text" name="angka1">
    <p>Masukan Angka 2</p>
    <input type="text" name="angka2">
    <p></p>
    <input type="submit" name="submit" value="Jumlahkan">
    <p></p>
    <?php
        $jumlah=$_POST[angka1]+$_POST[angka2];
        echo"<input type=text name=jumlah value='$jumlah'>";
    ?>
<body>
</html>