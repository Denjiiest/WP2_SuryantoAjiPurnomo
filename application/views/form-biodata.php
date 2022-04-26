<html>
    <head>
        <tittle></tittle>
</head>
<style>
    .kursor{
        cursor:pointer;
    }
    </style>
<body>
    <form action="<?php echo base_url("biodata/keluaran_biodata1"); ?>" method="post">
    <table border="1" cellpadding="2" cellspacing="2">
<!-- Tabel zero -->
<tr>
    <td colspan="3"><center>Form Input Biodata Siswa</center></td>
</tr>
<!--Tabel 1-->
<tr>
<td>Nama Siswa</td>
<td>:</td>
<td>
    <input type = "text", name="nama", id="nama">
</td>
</tr>
<!--Tabel 2-->
<tr>
<td>NIS</td>
<td>:</td>
<td>
    <input type="text", name="nis", id="nis">
</td>
</tr>
<!--Tabel 3-->
<tr>
<td>Kelas</td>
<td>:</td>
<td>
    <input type="text", name="kelas", id="kelas">
</td>
</tr>
<!--Tabel 4-->
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td>
    <input type="date", name="tanggal_lahir", id="tanggal_lahir">
</td>
</tr>
<!--Tabel 5-->
<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td>
    <input type="search", name="tempat_lahir", id="tempat_lahir"> 
</td>
</tr>
<!--Tabel 6-->
<tr>
<td>alamat</td>
<td>:</td>
<td>
    <input type="text", name="alamat", id="alamat">
</td>
</tr>
<!--Tabel 7-->
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>
    <input type="radio", name="kelamin", value="laki-laki">Laki-laki<br>
    <input type="radio", name="kelamin", value="perempuan">Perempuan<br>
</td>
</tr>
<!--Tabel 8-->
<tr>
<td>Agama</td>
<td>:</td>
<td>
    <select name="agama", id="agama">
        <option value=" ">-> Pilih <-</option>
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="budha">Budha</option>
        <option value="hindu">Hindu</option>
        <option value="protestan">Protestan</option>
        <option value="khonghucu">Khonghucu</option>
</select>
</td>
</tr>
<!--Submit-->
<tr>
    <td colspan="3"><center>
       <button>Masukkan Data</button>
</center>
    </td>
</tr>
</table>
</form>
<font color="red"><?php echo validation_errors(); ?></font>
</body>
    </html>