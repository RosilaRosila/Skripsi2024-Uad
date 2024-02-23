<!DOCTYPE html>
<html>

<head>
    <title>WISATA KABUPATEN PANGANDARAN</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}halaman_pengunjung/css/info-wisata.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('/') }}assets/img/logokp.png" />
</head>

<body>
    <header>

        <!-- ------ NAVBAR ------ -->
        <nav class="container">
            <p><img src="{{ asset('/') }}assets/img/logokp.png" style="float:left; width:60px" />Wisata Kabupaten Pangandaran</p>
            <ul>
                <li><a href="http://127.0.0.1:8000/home">Home</a></li>
                <li class="active"><a href="http://127.0.0.1:8000/wisata">Info Wisata</a></li>
                <li><a href="{{ route('register') }}">Pesan Tiket</a></li>
            </ul>
        </nav>
    </header>

    <div class="contentisi">
        <div class="isi">

        </div>

    </div>
    <br>
    <br>

    <!-- ------ FOOTER ------ -->
    <footer class="footer">
        <p>&copy 2000018193 - Rosila - Informatika - Universitas Ahmad Dahlan - Skripsi 2024</p>
    </footer>
</body>

</html>