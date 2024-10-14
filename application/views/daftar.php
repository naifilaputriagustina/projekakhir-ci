<style>

 
.login
{
    background-color: rgb(89, 180, 184);
    background-color: aliceblue;
    width: 350px;
    padding: 20px;
    margin: auto;
    border: 2px solid black;
    margin-top: 50px;
    font-size: 18px;
}
 
h1
{
    
    text-align: center;
    
    padding: 10px;
    border-radius: 7px;
}
 
input
{
    width: 100%;
    padding: 12px 10px;
    box-sizing: border-box;
    font-size: 18px;
}
 
input[type=submit]
{
    background-color: violet;
    border-radius:18px;
    color: white;
} 
</style>

<div class="login">
<h1>Tambah User</h1>
<form action="<?= base_url() ?>daftar/simpan" method="POST">
    
    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
    <br><br>
    <input type="text" name="username" placeholder="Masukkan Username">
    <br><br>
    <input type="password" name="password" placeholder="Masukkan Password">
    <br><br>
   
    <br><br>
    <input type="submit" value="SIMPAN">
</form>
</div>