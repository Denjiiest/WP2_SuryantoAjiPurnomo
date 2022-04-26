<html>
    <head>
        <tittle></tittle>
        <style>
.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
            </style>
</head>
<body>
    <form>
        <table border="1", cellpadding="0", cellspacing="2">
            <!--Table nama-->
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <!--Table nis-->
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <!--Table kelas-->
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo $kelas;?></td>
            </tr>
            <!--Table Tanggal Lahir-->
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $tanggal_lahir ?></td>
            </tr>
            <!--Table Tempat Lahir-->
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php echo $tempat_lahir; ?> </td>
            </tr>
            <!--Table Alamat-->
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?php echo $alamat; ?>
                </td>
            </tr>
            <!--Table Jenis Kelamin-->
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?php echo $kelamin; ?>
                </td>
            </tr>
            <!--Table Agama-->
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?php echo $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan ="3"><a href = "<?php echo base_url('biodata')?>">KEMBALI</td>
        </tr>
</table>
</form>
</body>
    </html>