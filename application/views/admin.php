<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border =1 cellspacing= 0>

<tr>
    <th>Id</th>
    <th>Id Lomba</th>
    <th>Nama Pendaftar</th>
    <th>Kelas</th>
    <th>No HP</th>
    <th>Tgl Daftar</th>
    <th colspan="2">Aksi</th>
</tr>
<?php foreach ($pendaftar as $pdf) :?>
    <tr>

        <td><?php echo $pdf['id']; ?></td>
        <td><?php echo $pdf['id_lomba']; ?></td>
        <td><?php echo $pdf['nama pendaftar']; ?></td>
        <td><?php echo $pdf['kelas']; ?></td>
        <td><?php echo $pdf['no_hp']; ?></td>
        <td><?php echo format_indo(date($pdf['tgl_daftar'])); ?></td>
        
        <td><a href="<?= base_url (); ?>admin/edit/<?= $pdf['id'] ?>">Edit</a></td>

        <td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url (); ?>admin/hapus/<?= $pdf['id'] ?>">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
</body>
</html>