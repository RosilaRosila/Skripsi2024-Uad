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
                <li><a href="http://127.0.0.1:8000/Home">Home</a></li>
                <li class="active"><a href="http://127.0.0.1:8000/Info-Wisata">Info Wisata</a></li>
                <li><a href="">Pesan Tiket</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <div class="wstpnd">
            <a href="http://127.0.0.1:8000/Pantai-Pangandaran">
                <img src="{{ asset('/') }}assets/img/ptnpnd.jpg" />
                <p>Pantai Pangandaran</p>
            </a>
        </div>
        <div class="wstpk">
            <a href="">
                <img src="{{ asset('/') }}assets/img/ptkrp.jpg" />
                <p>Pantai Karapyak</p>
            </a>
        </div>
        <div class="wstpb">
            <a href="">
                <img src="{{ asset('/') }}assets/img/ptnbth.jpg" />
                <p>Pantai Batuhiu</p>
            </a>
        </div>
    </div>
    <!-- BARIS KE - DUA -->
    <div class="content1">
        <div class="wstpbtk">
            <a href="">
                <img src="{{ asset('/') }}assets/img/ptbtk.jpg" />
                <p>Pantai Batukaras</p>
            </a>
        </div>
        <div class="wstgc">
            <a href="">
                <img src="{{ asset('/') }}assets/img/grcanyon.jpg" />
                <p>Cukang Taneuh/Green Canyon</p>
            </a>
        </div>
        <div class="wstbrc">
            <a href="">
                <img src="{{ asset('/') }}assets/img/bdctm.jpg" />
                <p>Body Rafting Citumang</p>
            </a>
        </div>
    </div>
    <!-- BARIS KE - TIGA -->
    <div class="content2">
        <div class="tmca">
            <a href="">
                <img src="{{ asset('/') }}assets/img/cagaralam.jpg" />
                <p>Taman Wisata Alam Pangandaran (Cagar Alam)</p>
            </a>
        </div>
        <div class="ptkrn">
            <a href="">
                <img src="{{ asset('/') }}assets/img/ptkrn.jpg" />
                <p>Pantai Karangnini</p>
            </a>
        </div>
        <div class="crgbj">
            <a href="">
                <img src="{{ asset('/') }}assets/img/crbj.jpg" />
                <p>Curug Bojong</p>
            </a>
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