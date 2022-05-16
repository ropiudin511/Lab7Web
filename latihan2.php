<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan hasil inputan form</title>
</head>
<body>

<h2>Form Input</h2>

<form action="proses.php" method="POST">

Nama<br>
<input type="text" name="nama"><br>
Tanggal<br>
<input type="number" name="tanggal"><br>

Pekerjaan<br>
<input type="text" name="Perkerjaan"><br>

Jenis Kelamin<br>
<select name="jenis_kelamin">
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
</select>
<br>

Alamat<br>
<textarea name="alamat"></textarea>

<br>

<input type="submit" name="kirim" value="KIRIM">
<input type="reset" name="kosongkan" value="Kosongkan">

</form>
</body>
</html>