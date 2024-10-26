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
 
.edit{
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
	background: #46de4b;
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


<div class="edit">
    <p class="tulisan_login"></p>
    <h1>Edit Data Event</h1>

    <form action="<?= base_url ('data_event/update') ?>" method="POST">

        <input type="hidden" value="<?= $edit['id_jns'];?>" name="id_jns">
        <label for="">Nama Lomba</label><br>
        <input type="text" name="nama_lomba" value="<?= $edit['nama_lomba'];?>" >
        <br><br>
        <label for="">Penyelenggara</label><br>
        <input type="text" name="penyelenggara" value="<?= $edit['penyelenggara'];?>" >
        <br><br>
        <input type="submit" value="SIMPAN">
    </form>