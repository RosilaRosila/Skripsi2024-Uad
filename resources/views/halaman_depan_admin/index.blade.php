<!DOCTYPE html>
<html>

<head>
    <title>HALAMAN ADMIN</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}halaman_admin/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Icon logo -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/img/logokp.png" />
</head>

<body>
    <div class="content"></div>
    <header>
        <div class="container">
            <p><img src="{{ asset('/') }}assets/img/logokp.png" style="float:left; width:60px" />Halaman Login dan Register Admin</p>
            <ul>
                <li class="active"><a href="{{ route('halaman_depan') }}">Home</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </div>
    </header>
    <section class="gambar">
        <h2>Selamat Datang Di Halaman Admin Silahkan Login dan Register Untuk mengelola Data pengunjung</h2>
    </section>
    <div class="footer">
        <p>&copy 2000018193 - Rosila - Teknik Informatika - Universitas Ahmad Dahlan - Skripsi 2024</p>
    </div>
</body>

</html>