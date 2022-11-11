<?php
session_start();
include "db-conn.php";

if (isset($_POST['adduser'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $passwordmd5 = md5($password);

    // upload image
    $target_dir = "uploads/users/";
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $target_file = $target_dir . basename($image['name']);

        $check_username = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username'");
        $check_newuser = mysqli_num_rows($check_username);

        if ($check_newuser != 0) {
            echo "<script>alert('Username is Already');document.location='../../admin';</script>";
        } else {
            if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
                $query = "INSERT INTO users (nama, username, pswd, image_url, level) VALUES ('$nama', '$username', '$passwordmd5', '$target_file', '$level')";

                if (mysqli_query($conn, $query)) {
                    echo "<script>alert('Has been save');document.location='../../admin';</script>";
                } else {
                    echo "<script>alert('Can't Save');document.location='../../admin';</script>";
                }
            }
        }
    }
    
}

// siginin
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['pswd'];

    $cekpswd = md5($password);

    $sql = "SELECT * FROM users WHERE username = '$username' and pswd = '$cekpswd'";

    $query = mysqli_query($conn, $sql);
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        header("location: ../../admin");

        $user = mysqli_fetch_array($query);

        $_SESSION["username"] = $user['username'];
        $_SESSION["nama"] = $user['nama'];
        $_SESSION["pswd"] = $user['pswd'];
        $_SESSION["level"] = $user['level'];
        $_SESSION["image"] = $user['image_url'];
    } else {
        echo "<script>alert('Data Anda tidak valid!');location.href='../../signin/';</script>";
        // echo $cekpswd;

    }
}


// Back
if (isset($_POST['back'])) {
    echo "<script>location.href='../../admin/index.php?page=datatable';</script>";
}

// data-customer
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tagline = $_POST['tagline'];
    $jenis = $_POST['jenis'];
    $berat = $_POST['berat'];
    $catatan = $_POST['catatan'];
    $tgl_pesan = strtotime(date('Y-m-d'));
    $tgl_ambil = strtotime($_POST['tgl_ambil']);

    $sql = "INSERT INTO orderan (nama, tagline, jenis, berat, catatan, tgl_pesan, tgl_ambil)VALUES ('$nama', '$tagline', '$jenis', '$berat', '$catatan', '$tgl_pesan', '$tgl_ambil')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>location.href='../../admin/';</script>";
    }
}

//carousel
if (isset($_POST['addCarousel'])) {
    $tagline = $_POST['tagline'];
    $deskripsi = $_POST['deskripsi'];
    $status = 0;

    $target_dir = "uploads/carousel/";
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $target_file = $target_dir . basename($image['name']);

        if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
            $query = "INSERT INTO carosel (tagline, deskripsi, image_url, status) VALUES ('$tagline', '$deskripsi', '$target_file', '$status')";

            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Has been save');document.location='../../admin';</script>";
            } else {
                echo "<script>alert('Can't Save');document.location='../../admin';</script>";
            }
        }
    }
}


if (isset($_POST['addPromo'])) {
    $tagline = $_POST['tagline'];
    $masaberlaku = strtotime($_POST['masaberlaku']);
    $deskripsi = $_POST['deskripsi'];
    $status = 1;

    // upload image
    $target_dir = "uploads/promo/";
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $target_file = $target_dir . basename($image['name']);

        $check_tagline = mysqli_query($conn, "SELECT * FROM promo WHERE tagline ='$tagline'");
        $check_news = mysqli_num_rows($check_tagline);

        if ($check_news > 0) {
            echo "<script>alert('Tagline is Already');document.location='../../admin';</script>";
        } else {
            if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
                $query = "INSERT INTO promo (tagline, deskripsi, masaberlaku, image_url, status) VALUES ('$tagline', '$deskripsi', '$masaberlaku', '$target_file', '$status')";

                if (mysqli_query($conn, $query)) {
                    echo "<script>alert('Has been save');document.location='../../admin';</script>";
                } else {
                    echo "<script>alert('Can't Save');document.location='../../admin';</script>";
                }
            }
        }
    }
}

if (isset($_POST['addServis'])) {
    $tagline = $_POST['tagline'];
    $deskripsi = $_POST['deskripsi'];
    $note = $_POST['note'];

    $target_dir = "uploads/servis/";
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $target_file = $target_dir . basename($image['name']);

        $check_tagline = mysqli_query($conn, "SELECT * FROM servis WHERE tagline ='$tagline'");
        $check_news = mysqli_num_rows($check_tagline);

        if ($check_news > 0) {
            echo "<script>alert('Tagline is Already');document.location='../../admin';</script>";
        } else {
            if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
                $query = "INSERT INTO servis (tagline, deskripsi, note, image_url) VALUES ('$tagline', '$deskripsi', '$note', '$target_file')";

                if (mysqli_query($conn, $query)) {
                    echo "<script>alert('Has been save');document.location='../../admin';</script>";
                } else {
                    echo "<script>alert('Can't Save');document.location='../../admin';</script>";
                }
            }
        }
    }
}

// Add Profil
if (isset($_POST['addInformasi'])) {
    $tagline = $_POST['tagline'];
    $deskripsi = $_POST['deskripsi'];

    // upload image
    $target_dir = "uploads/informasi/";
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $target_file = $target_dir . basename($image['name']);

        if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
            $query = "INSERT INTO informasi (tagline, deskripsi, image_url) VALUES ('$tagline', '$deskripsi', '$target_file')";

            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Has been save');document.location='../../admin/?page=data informasi';</script>";
            } else {
                echo "<script>alert('Can't Save');document.location='../../admin/?page=add informasi';</script>";
            }
        }
    }
}

// delete user
if (isset($_GET['userdelid'])) {
    $id = $_GET['userdelid'];

    $sql = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>window.location='../../admin/index.php?page=data%20user';</script>";
    }
}

// delete data
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM orderan WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>window.location='../../admin';</script>";
    }
}

// delete data
if (isset($_GET['deletecarouselid'])) {
    $id = $_GET['deletecarouselid'];

    $sql = "DELETE FROM carosel WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>window.location='../../admin/index.php?page=data carousel';</script>";
    }
}

// delete data promo
if (isset($_GET['deletepromoid'])) {
    $id = $_GET['deletepromoid'];

    $sql = "DELETE FROM promo WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>window.location='../../admin/index.php?page=data promo';</script>";
    }
}

if (isset($_GET['informasiDelId'])) {
    $id = $_GET['informasiDelId'];

    $sql = "DELETE FROM informasi WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>window.location='../../admin/index.php?page=data informasi';</script>";
    }
}
//  else {
    // echo "<script>alert('ID not change');window.location='../../admin'</script>";
// }
