 <style>

 *{
    margin: 0;
    padding: 0;
}


.menu{
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #696969;
}
.menu a{
    background-color: #696969;
    text-decoration: none;
    padding: 10px;
    color: white;
    margin-bottom: 20px;
    margin-left: 10px;
    font-size: 20px;
}




 </style>
 
 
 <div class="container-tambah">
    <h1>Edit Pendaftaran</h1>

    <form action="<?= base_url ('pendaftaran/update') ?>" method="POST">
        <label for="">Jenis Lomba</label><br>
            <select name="nama_lomba">
            <?php foreach($jenis_lomba as $jns) : ?>
                <option value="<?= $jns['id_jns']?>"><?= $jns['nama_lomba'] ?></option>
                <?php endforeach ; ?>
            </select> 
            <br><br>
            <label for="">Nama Pendaftar</label><br>
        <input type="text" name="nama_pendaftar" value="<?= $edit['nama_pendaftar']?>" >
        <br><br>   
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="<?= $edit['kelas']?>" >
        <br><br>
        <label for="">No HP</label>
        <input type="text" name="no_hp" value="<?= $edit['no_hp']?>" >
        <br><br>
        <label for="">Tanggal Daftar</label>
        <input type="date" name="tgl_daftar" value="<?= $edit['tgl_daftar']?>" >
        <br><br>
        <input type="submit" value="SIMPAN">
    </form>


</div>