<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Les</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <a class="navbar-brand " href="#">Al-Fath Home Education</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="#Home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#courses-section">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="#About-section">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact-section">Contact</a></li>

    <!-- Button Login/Daftar with Modal Trigger -->
                <li class="nav-item">
                    <a href="#" class="btn btn-primary ml-3" data-toggle="modal" data-target="#loginRegisterModal">Login/Daftar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="Home" class="hero text-center">
        <div class="container">
            <h1>Belajar untuk jadi yang Terbaik</h1>
            <p>Temukan kursus yang sesuai dengan minat dan tingkatkan keterampilan Anda!</br> dengan jenjang pendidikan yang sedang anda tempuh</p>
        </div>
    </section>

    <!-- Login/Daftar Modal -->
    <div class="modal fade" id="loginRegisterModal" tabindex="-1" aria-labelledby="loginRegisterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginRegisterModalLabel">Masuk ke akun Al-Fath Home Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Login -->
                    <form>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Kata sandi*</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        <p class="text-center mt-2"><a href="#">Lupa kata sandi</a></p>
                    </form>
                    <!-- Register Option -->
                    <p class="text-center mt-4">Belum memiliki akun? <a href="#" id="showRegisterForm" class="text-primary">Silakan Daftar</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Form -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Daftar Akun Al-Fath Home Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Registrasi -->
                    <form method="post" action="register.php">
                        <div class="form-group">
                            <label for="fullName">Nama Lengkap*</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor Handphone*</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder=" " required>
                        </div>
                        <div class="form-group">
                            <label for="password">Kata Sandi*</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Konfirmasi Kata Sandi*</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Konfirmasi Kata Sandi" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheck" name="termsCheck" required>
                            <label class="form-check-label" for="termsCheck">
                                Dengan menandai kotak di samping, Anda telah membaca dan menyetujui Ketentuan Penggunaan dan Kebijakan Privasi.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Section -->
    <section id="courses-section" class="courses py-5">
        <div class="container">
            <h2 class="text-center">Tingkat Sekolah</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="image1.png" class="card-img-top" alt="Course 1">
                        <div class="card-body">
                            <h5 class="card-title">SD</h5>
                            <p class="card-text">Belajar dasar-dasar HTML, CSS, dan JavaScript.</p>
                            <a href="course-sd.php" class="btn btn-primary">Lihat Kursus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img2.jpg" class="card-img-top" alt="Course 2">
                        <div class="card-body">
                            <h5 class="card-title">SMP</h5>
                            <p class="card-text">Analisis data dan machine learning untuk pemula.</p>
                            <a href="course-smp.php" class="btn btn-primary">Lihat Kursus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img3.jpg" class="card-img-top" alt="Course 3">
                        <div class="card-body">
                            <h5 class="card-title">SMA</h5>
                            <p class="card-text">Pelajari dasar-dasar desain dengan alat profesional.</p>
                            <a href="course-sma.php" class="btn btn-primary">Lihat Kursus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <<section id="About-section" class="contact text-center">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px;"
                <!-- Image Column -->
                <div style="flex: 1; text-align: left;">
                    <img src="image.png" alt="Al-Fath Home Education" class="img-fluid" style="width: 400px; height: auto;">
                </div>
                <!-- Text Column -->
                <div class="col-md-5 text-md-start text-center">
                    <h1 class="text-primary">Al-Fath Home Education</h1>
                    <p>Selamat datang di Al-Fath Home Education!

                        Kami adalah lembaga les privat terpercaya yang berkomitmen untuk membantu siswa dari jenjang SD hingga SMA mencapai potensi terbaik mereka. Dengan pendekatan belajar yang personal dan metode pengajaran yang interaktif, kami hadir untuk mendukung siswa memahami pelajaran dengan lebih mendalam, membangun kepercayaan diri, dan meraih prestasi akademik yang gemilang.</p>
                    <p>Misi kami adalah membantu Anda berkomunikasi dengan percaya diri dalam bahasa pilihan Anda, kapan saja dan di mana saja. Mari mulai perjalanan bahasa Anda bersama kami!</p>
                </div>
            </div>
        </div>
    </section> </br>

    <!-- Contact Section -->
 <section id="contact-section" class="contact text-center">
    <div class="container">
        <h2>Kontak Kami</h2>
        <p>Jika anda merasa bingung atau ragu, hubungi kami. Kami akan dengan senang hati membantu</p>
        <div class="contact-icons">
            <a href="mailto:zaskiad03@gmail.com" title="Email Kami"><i class="fas fa-envelope"></i></a>
            <a href="https://wa.me/6285691008745" target="_blank" title="WhatsApp Kami"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="expand-sm bg-secondary navbar-dark text-white text-center py-3">
        <p>&copy; 2024 Al-Fath Home Education. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script>
        document.getElementById('showRegisterForm').addEventListener('click', function() {
            $('#loginRegisterModal').modal('hide');
            $('#registerModal').modal('show');
        });
    </script>
</body>
</html>