<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Lubuk Linggau</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-image: url('assets/img/bg-hotel.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 15px;
            text-align: center;
            position: relative;
        }
        header img {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 70px;
            height: 70px;
        }
        header input {
            width: 50%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }
        nav {
            text-align: center;
            background-color: #f8f8f8;
            padding: 10px;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        nav a:hover {
            color: #00bcd4;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .content h2 {
            margin-bottom: 20px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            justify-items: center;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 300px;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card a {
            display: block;
            text-decoration: none;
            color: #00bcd4;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        footer .stats, footer .poll {
            display: inline-block;
            margin: 0 20px;
            text-align: left;
        }
        footer input[type="radio"] {
            margin-right: 10px;
        }
        footer button {
            background-color: #00bcd4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        footer button:hover {
            background-color: #008c9e;
        }
    </style>
</head>
<body>
    <header>
        <img src="https://via.placeholder.com/70" alt="Logo">
        <h1>WISATA LUBUK LINGGAU</h1>
        <input type="text" placeholder="Cari Destinasi...">
    </header>
    <nav>
        <a href="index.html">Home</a>
        <a href="#">About</a>
        <a href="tempat_wisata.php">Wisata</a>
        <a href="kuliner.php">Kuliner</a>
        <a href="hotel.php">Hotel</a>
    </nav>
    <div class="content">
        <h2>HOTEL</h2>
        <div class="cards">
            <div class="card">
                <img src="assets/img/hotel/apartement-ambasadorjaksel.jpg" alt="Apartement Ambassador Jaksel">
                <a href="aparteement-ambasaddor-jaksel.html">Apartement Ambassador Jaksel</a>
            </div>
            <div class="card">
                <img src="assets/img/hotel/pop-hotel-kemang.jpg" alt="Pop Hotel Kemang">
                <a href="pop-hotel-kemang.html">Pop Hotel Kemang</a>
            </div>
            <div class="card">
                <img src="assets/img/hotel/reddorznear-hayamwuruk.jpg" alt="Reddorz Near HayamWuruk">
                <a href="reddorznear-hayamwuruk.html">Reddorz Near Hayamwuruk</a>
            </div>
            <div class="card">
                <img src="assets/img/hotel/teduh-hostel.jpg" alt="Teduh Hostel">
                <a href="teduh-hostel.html">Teduh Hostel</a>
            </div>
            <div class="card">
                <img src="assets/img/hotel/urbanview-hotel.jpg" alt="UrbanView Hotel">
                <a href="urbanview.html">UrbanView Hotel</a>
            </div>
            <div class="card">
                <img src="assets/img/hotel/wonderloft-hostel.jpg" alt="Wonderloft Hostel">
                <a href="wonderloft-hostel.html">Wonderloft Hostel
                </a>
            </div>
        </div>
    </div>
    <footer>
        <div class="stats">
            <p>Jumlah Pengunjung:</p>
            <p>Hari Ini: <strong>50</strong></p>
            <p>Kemarin: <strong>100</strong></p>
            <p>Total: <strong>5000</strong></p>
        </div>
        <div class="poll">
            <p>Bagaimana tampilan website ini?</p>
            <label><input type="radio" name="poll" value="sangat_bagus"> Sangat Bagus</label><br>
            <label><input type="radio" name="poll" value="bagus"> Bagus</label><br>
            <label><input type="radio" name="poll" value="lumayan"> Lumayan</label><br>
            <button>Vote</button>
            <button>Lihat Hasil</button>
        </div>
    </footer>
</body>
</html>