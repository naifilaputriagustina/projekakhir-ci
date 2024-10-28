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
body{
	font-family: sans-serif;
	background: #ADD8E6;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.edit2{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 20px;
}
 
form{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
input[type = "submit"]{
	background: #8b8989;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
input[type = "text"]{
    width: 300px;
	background: white;
    padding: 10px;
	/*meletakkan form ke tengah*/
	
	
}




 </style>
 
 
 <div class="edit2">
    <h1>Edit Pendaftaran</h1>

    <form action="<?= base_url ('pendaftaran/update') ?>" method="POST">
    <input type="hidden" value="<?= $edit['id'];?>" name="id">
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