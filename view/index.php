<html>
<head>
<title>Aplikasi penyimpan data user</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div id="navcontainer">
        <ul id="navlist">
            <li><a href="index.php">Beranda</a></li>
<li><a href="index.php?page=masukandata">Masukan Data User</a></li>
<li><a href="lihat_data_useri.php">Lihat Data user</a></li>
<li><a href="index.php?page=login">Register</a>


</ul>
</div>
</div>
<div id="content">
    <?php
    $page=(isset($_GET['page']))?$_GET['page']:"main";
    switch($page) {
        case'masukandata':include"input_data_useri.php";break;
        case'login':include"login.php";break;
        case'logout':include"logout.php";break;
        case 'main':
        default:include"todo.php";
    }
    ?>
    </body>
    </html>