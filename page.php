<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling dan Form Validation</title>
</head>

<body>

    <?php
    $nim = '22090079';
    $name = isset($_POST['name']) ? $_POST['name'] : 'Muhammad Tri Bayu Sutiono';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validasi Nama
        if (empty($_POST['name'])) {
            $errors['name'] = '*Nama wajib diisi.';
        } else {
            $name = $_POST['name'];
        }
    }
    ?>

    <form action="" method="post">
        Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
        E-mail: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo htmlspecialchars($alamat); ?>"><br>
        <input type="submit">
    </form>
    <?php
    echo "<br>";
    echo "";
    echo "<br>";
    echo "" . htmlspecialchars($nim) . "<br>";
    echo "" . htmlspecialchars($name) . "<br>";
    echo "" . htmlspecialchars($email) . "<br>";
    echo "" . htmlspecialchars($alamat) . "<br>";
    ?>

</body>

</html>