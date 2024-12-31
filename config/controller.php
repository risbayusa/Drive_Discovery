<?php
//ini untuk fungsi select
include "config/database.php";
function select($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
//fungsi create siswa
function create_pegawai($post)
{
    global $db;

    $namapegawai =strip_tags ($post['namalengkap']);
    $jk =strip_tags ($post['jk']);
    $alamat =strip_tags ($post['alamat']);
    $tanggallahir =strip_tags ($post['tanggallahir']);
    
    

    //memeriksa upload file foto
    // if (!$foto) {
    //     return false;
    // }
    //query tambah data
    $query = "INSERT INTO pegawai VALUES(null,'$namapegawai','$jk','$alamat','$tanggallahir')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//ini untuk fungsi create
function create_unit($post)
{
    global $db;
    $namaunit =strip_tags ($post['namaunit']);
    $idpegawai =strip_tags ($post['idpegawai']);
   
    //query tambah data
    $query = "INSERT into unit VALUES(null,'$namaunit','$idpegawai')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update_unit($post)
{
    global $db;
    $idunit = strip_tags($post['idunit']);
    $namaunit = strip_tags($post['namaunit']);
    $idpegawai =strip_tags ($post['idpegawai']);
    
    //query tambah data
    $query = "UPDATE unit SET namaunit='$namaunit', idpegawai='$idpegawai'
    WHERE idunit=$idunit";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update_akun($post)
{
    global $db;
    $idakun =strip_tags ($post['idakun']);
    $nama =strip_tags ($post['nama']);
    $username =strip_tags ($post['username']);
    $email =strip_tags ($post['email']);
    $password =strip_tags ($post['password']);
    $level =strip_tags ($post['level']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    //query update akun
    $query = "UPDATE akun SET nama='$nama', username='$username', email='$email', password='$password', level='$level'
    WHERE idakun=$idakun";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}


//ini untuk fungsi create akun
function create_akun($post)
{
    global $db;
    $nama =strip_tags ($post['nama']);
    $username =strip_tags ($post['username']);
    $email =strip_tags ($post['email']);
    $pass =strip_tags ($post['password']);
    $level =strip_tags ($post['level']);
    //enkripsi password
    $password = password_hash($pass, PASSWORD_DEFAULT);
    //query tambah data akun
    $query = "INSERT into akun
    VALUES(null,'$nama','$username','$email','$password','$level')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update_pegawai($post)
{
    global $db;
    $idpegawai =strip_tags ($post['idpegawai']);
    $namalengkap =strip_tags ($post['namalengkap']);
    $jk =strip_tags ($post['jk']);
    $alamat =strip_tags ($post['alamat']);
    $tanggallahir =strip_tags ($post['tanggallahir']);
    //query tambah data
    $query = "UPDATE pegawai SET namalengkap='$namalengkap',jk='$jk',alamat='$alamat',tanggallahir='$tanggallahir'WHERE idpegawai=$idpegawai";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//fungsi hapus barang
function delete_unit($idunit)
{
    global $db;

    //query tambah data
    $query = "DELETE FROM unit WHERE idunit=$idunit";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//fungsi hapus siswa
function delete_pegawai($idpegawai)
{
    global $db;

    //query tambah data
    $query = "DELETE FROM pegawai WHERE idpegawai=$idpegawai";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function delete_akun($idakun)
{
    global $db;

    //query tambah data
    $query = "DELETE FROM akun WHERE idakun=$idakun";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//ini untuk fungsi create
function create_barang($post)
{
    global $db;
    $namabarang =strip_tags ($post['namabarang']);
    $jumlah =strip_tags ($post['jumlah']);
    $harga =strip_tags ($post['harga']);
    $barcode =strip_tags(rand(100000,999999));
    //query tambah data
    $query = "INSERT into barang VALUES(null,'$namabarang','$jumlah','$harga','$barcode', CURRENT_TIMESTAMP())";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update_barang($post)
{
    global $db;
    $kodebarang = strip_tags($post['kodebarang']);
    $namabarang =strip_tags ($post['namabarang']);
    $jumlah =strip_tags ($post['jumlah']);
    $harga =strip_tags ($post['harga']);
    //query tambah data
    $query = "UPDATE barang SET namabarang='$namabarang', jumlah='$jumlah', harga='$harga'
    WHERE kodebarang=$kodebarang";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//fungsi hapus barang
function delete_barang($kodebarang)
{
    global $db;

    //query tambah data
    $query = "DELETE FROM barang WHERE kodebarang=$kodebarang";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//fungsi upload foto
function upload_file()
{
    $namaFile   = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error      = $_FILES['foto']['error'];
    $tmpName    = $_FILES['foto']['tmp_name'];

    // check file yang diupload
    $extensifileValid = ['jpg', 'jpeg', 'png'];
    $extensifile      = explode('.', $namaFile);
    $extensifile      = strtolower(end($extensifile));

    // check format/extensi file
    if (!in_array($extensifile, $extensifileValid)) {

        // pesan gagal
        echo "<script>
                alert('Format File Tidak Valid');
                document.location.href = 'tambahsiswa.php';
              </script>";
        die();
    }

    // check ukuran file 20 mb
    if ($ukuranFile > 20048000) {

        // pesan gagal
        echo "<script>
                alert('Ukuran File Max 2 MB');
                document.location.href = 'tambahsiswa.php';
              </script>";
        die();
    }

    // generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensifile;

    // pindahkan ke folder local 
    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}
