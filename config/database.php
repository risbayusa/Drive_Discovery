<?php
$db = mysqli_connect('localhost', 'root', '', 'db-drivediscovery');

if (!$db) {
    echo 'koneksi gagal';
} else {
    echo 'koneksi berhasil';
}
