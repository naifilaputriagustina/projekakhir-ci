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
<h1>halaman login</h1>
<?= $this->session->flashdata('message'); ?>
    <br>
    <form action="<?= base_url() ?>login/verifikasi" method="POST">
    <input type="text" placeholder="masukkan username" name="username"> 
    <br> <br>
    <input type="password" placeholder="masukkan password"  name="password">
    <br> <br>
    <input type="submit" value="LOGIN">
    </form>


<p>Belum Punya Akun ? <a  href="<?= base_url() ?>daftar">Daftar</a></p>
</div>