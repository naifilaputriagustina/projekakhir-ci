<style>
          body{
	font-family: sans-serif;
	background:  #B9BBB6;
          }
.tambah
{
    
    
    width: 400px;
    padding: 20px;
    margin: auto;
    margin-top: 100px;

    background: white;
    border: 2px solid black;
    font-size: 18px;

}

.tambah [type=text]{
    width: 95%;
    color: #7a1717;
    padding: 6px 7px;
    border-radius: 10px;
    
    border: none;
    cursor: pointer;
}
.tambah [type=password] {
    width: 95%;
    color: #7a1717;
    padding: 6px 7px;
    border-radius: 10px;
    
    border: none;
    
    cursor: pointer;
}
.tambah [type=submit]{
    width: 30%;
    color: white;
    padding: 6px 7px;
    border-radius: 10px;
    background-color: #363636;
    border: none;
    
    cursor: pointer;
}
</style>

<div class="tambah">
    <h1 class="h1t">Tambah Event</h1>
        <form class="input" action="tambah2/tambah2" method="POST">
            
            <label for="">Nama Lomba</label>
            <input type="text" name="nama_lomba" placeholder="Masukan Nama" required>
            <br><br>
            <label for="">Penyelenggara</label>
            <input type="text"  name="penyelenggara" placeholder="Masukan penyelenggara" required>
            <br><br>
            <input type="submit" value="Simpan">
        </form>
        </div>
