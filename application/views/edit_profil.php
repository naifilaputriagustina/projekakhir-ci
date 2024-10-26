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
.login

{

background-color: white;

width: 350px;

padding: 20px;

margin: auto;

margin-top: 100px;

border: 2px solid black;

font-size: 18px;

}

 

h2

{
text-align: center;

color: black;

padding: 10px;

border-radius: 7px;

}

 

input

{
padding: 12px 10px;

box-sizing: border-box;

font-size: 18px;

}

 

input[type=submit]

{

background-color: crimson;

border-radius:18px;

color: white;

}
</style>


<div class=""></div>
<h2>Edit Profil</h2>
<form action="<?= base_url() ?>profil/updateProfil" method="post">
    <input type="hidden" name="id" value="<?=$user['id']?>"><br><br>
    <input type="text" name="nama" value="<?=$user['nama']?>"><br><br>
    <input type="text" name="username" value="<?=$user['username']?>"><br><br>
    <input type="password" name="password" value="<?=$user['password']?>"><br><br>
    <input type="submit" value="Edit Profil">
</form>