<style>
   .login
{
    background-color: rgb(89, 180, 184);
    background-color: aliceblue;
    width: 350px;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
    border: 2px solid black;
    font-size: 18px;
}
 
h1
{
    
    text-align: center;
    
    padding: 10px;
    border-radius: 7px;
}
 
.input
{
    margin: 0 auto;
    width: 550px;
   
    box-sizing: border-box;
    font-size: 18px;
}
 
input[type=submit]
{
    padding: 12px 10px;
    background-color: violet;
    border-radius:18px;
    color: white;
    width: 100px;
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
