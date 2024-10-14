 <style>
* {
    margin: 0;
    padding: 0;
}
 .menu {
    background-color:#cfad64;
    height: 50px;
    padding: 10px;
    width: 300%;
    font-size: 100%;
}
.menu a {
    
    text-decoration: none;
    padding: 15px;
    color: black;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
   
    
}
 </style>
 <div class="menu">

     <a href="<?= base_url(); ?>admin">SMK</a>
     <a href="<?= base_url(); ?>admin">Beranda</a>
    <a href="<?= base_url(); ?>pendaftaran">Pendaftaran</a>
    <a href="<?= base_url(); ?>event">Data Event</a>
    <a href="<?= base_url(); ?>login/logout">LOGOUT</a>
    </div>