<?php
 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
 
?>
 
<table border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th>
            <th>TGLDAFTAR</th>
            <th>PBID</th>
            <th>GEL</th>
            <th>THP</th>
            <th>Nama</th>
            <th>Sex</th>
            <th>TempatLahir</th>
            <th>TanggalLahir</th>
            <th>Agama</th>
            <th>TB</th>
            <th>BB</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>NamaOrtu</th>
            <th>PkjOrtu</th>
            <th>AsalSekolah</th>
            <th>KotaSklh</th>
            <th>Jurusan</th>
            <th>ThnLls</th>
            <th>Sumbangan</th>
            <th>Ujikes</th>
            <th>TPA</th>
            <th>Wawancara</th>
            <th>Pewawancara</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($mahasiswa as $row) { ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row->tanggal; ?></td>
                <td><?php echo $row->pmbid; ?></td>
                <td><?php echo $row->gelombang; ?></td>
                <td><?php echo $row->tahap; ?></td>
                <td><?php echo $row->namalengkap; ?></td>
                <td><?php echo $row->jeniskelamin; ?></td>
                <td><?php echo $row->tempatlahir; ?></td>
                <td><?php echo $row->tanggallahir; ?></td>
                <td><?php echo $row->agama; ?></td>
                <td><?php echo $row->tinggi; ?></td>
                <td><?php echo $row->berat; ?></td>
                <td><?php echo $row->jalan; ?></td>
                <td><?php echo $row->kabupaten; ?></td>
                <td><?php echo $row->provinsi; ?></td>
                <td><?php echo $row->namaibukandung; ?></td>
                <td><?php echo $row->pekerjaanwali; ?></td>
                <td><?php echo $row->asalsekolah; ?></td>
                <td><?php echo $row->kabupatensekolah; ?></td>
                <td><?php echo $row->jurusan; ?></td>
                <td><?php echo $row->tahunlulus; ?></td>
                <td><?php echo $row->sumbangan; ?></td>
                <td><?php echo $row->ujikes; ?></td>
                <td><?php echo $row->tpa; ?></td>
                <td><?php echo $row->wawancara; ?></td>
                <td><?php echo $row->pewawancara; ?></td>
                <td><?php echo $row->hasil; ?></td>
            </tr>
        <?php $i++; } ?>
    </tbody>
</table>