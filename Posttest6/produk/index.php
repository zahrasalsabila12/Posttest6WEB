<?php
    include "../connector.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title> Salsa Cookies </title>
    <link rel="icon" href="../Logo Salsa Cookies.png">
    <link rel="stylesheet" href="../style.css">
    <script src="../javascript.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        h3{
            padding-top: 50px;
            font-size: 32px;
        }
        #tambah-button{
            background-color: #87805E;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 150px;
            text-decoration: none;
        }
        table th {
            text-align: center;
            background-color: #87805E;
            color: black;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            border: 2px solid black;
        }
        table td, table th {
            border: 1px solid black;
            background-color: #87805E;
            padding: 6px;
            width: 100px;
        }
        table tr td a {
            color: white;
        }
        .hapus a {
            color: white;
            text-decoration: none;
        }
        tr td .edit{
            background-color: #32CD32;
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            /* margin-left: 50px; */
            text-decoration: none;
        }
        tr td .delete{
            background-color: #FF0000;
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            /* margin-left: 25px; */
            text-decoration: none;
        }
	</style>
    <form method="post">
</head>
<body class="body">
    <!-- Header -->
    <header>
        <h1> <img src="Logo Salsa Cookies.png" alt="Logo" width="60" height="60"> <br> Salsa Cookies </h1>
    </header>
    <!-- Nav bar -->
    <nav class="navigator">
        <ul>
            <li><a href="../index.php"> HOME </a></li>
            <li><a href="../produk/index.php"> PRODUCT </a></li>
            <li><a href="#"> SUGGESTION </a></li>
            <li><a href="../About Me.html"> ABOUT ME </a><li>
            <li><a href="../index.php#section2"> ORDER </a></li>
        </ul>
        <i class='bx bx-sun' id="lightMode"></i>
    </nav>
    <form action="" method="POST">
        <h3 align="center">LIST MENU</h3>
        <a href="tambah.php" id="tambah-button"> Tambah</a>
        <table align="center" border="0" class="table">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Tanggal dan Waktu</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>

                <?php
                    $no = 1;
                    $tableProduk = mysqli_query($connect, "SELECT * FROM detailproduk ");
                    while($rowProduk = mysqli_fetch_array($tableProduk)){
                ?>

            <tr>
                <th><?= $no++ ?></th>
                <td><input type="text" size="15" readonly value="<?= $rowProduk['namaProduk'] ?>"></td>
                <td><input type="text" size="15" readonly value="<?= $rowProduk['harga'] ?>"></td>
                <td><input type="text" size="15" readonly value="<?= $rowProduk['tanggal'] ?>"></td>
                <td><img width="60px" src="../img/<?=$rowProduk['gambar']?>" alt="<?=$rowProduk['gambar']?>"></td>
                <td><a href="update.php?id=<?= $rowProduk['id']?>" class="edit"> Edit</a> <a href="delete.php?id=<?= $rowProduk['id'] ?>" class="delete"> Hapus </a></td>
            </tr>

                <?php }?>
        </table>
        </form>
    <br>
    <br>
    <footer>
            <div class="footer">
                <img src="../Logo-Salsa Cookies.png" alt="Logo"> 
                <h3> Salsa Cookies. </h3>
                <ul>
                    <li> <a href="About Me.html"> 👥 About Me </a></li>
                    <li> <a href="#section2"> 📞 Contact Me </a></li>
                </ul>
                <br>
            </div>
    </footer>
    <h5 class="bottom"> ©Copyright2022-Zahra Salsabila </h5> 
</body>
</html>