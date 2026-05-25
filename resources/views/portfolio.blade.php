@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> 
    <div class="container">
        <a class="navbar-brand" href="#">{{ Auth::user()->name ?? 'Fizwan' }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Tentang Saya</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#education">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Pengalaman</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li> --}}
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="hero">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 text-center">
                <!-- Foto Profil dengan Bingkai -->
                <div class="profile-frame mb-4">
                    <div class="profile-image-wrapper">
                        <img src="{{ asset('/images/profile-porto.png') }}" alt="Fizwan Abdurrohman" class="profile-image">
                        <div class="profile-border"></div>
                    </div>
                </div>
                
                <h1 class="display-4 fw-bold">Halo, Saya</h1>
                <h2 class="display-5 mb-4">Fizwan Abdurrohman</h2>
                <p class="lead">Pelajar SMK</p>
                <p class="mb-4">Portofolio ini menampilkan proyek dan kontribusi saya sebagai pengembang di bidang teknologi.</p>
                <div class="social-links">
                    <a href="https://github.com/zwanss285" class="btn btn-outline-light btn-sm m-1"><i class="fab fa-github"></i> GitHub</a>
                    {{-- <a href="#" class="btn btn-outline-light btn-sm m-1"><i class="fab fa-linkedin"></i> LinkedIn</a> --}}
                    <a href="https://www.instagram.com/zwanss.id/" class="btn btn-outline-light btn-sm m-1"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">TENTANG SAYA</h2>
                <div class="divider"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h3 class="mb-4">Siswa SMK Jurusan Pengembangan Perangkat Lunak dan Gim</h3>
                <p class="lead mb-4">Saya adalah seorang siswa SMK dengan konsentrasi jurusan RPL dengan semangat belajar yang tinggi dalam pengembangan solusi perangkat lunak berbasis web. Saat ini saya sedang memperdalam ilmu pemrograman dan siap untuk mengaplikasikannya dalam proyek nyata.</p>
                
                <h4 class="mt-5 mb-3">Prestasi & Kegiatan</h4>
                <ul class="skills-list">
                    <li><strong>🏆 Juara Lomba</strong> - OSCAR Tingkat Sekolah 2025</li>
                    {{-- <li><strong>📚 Magang/PKL</strong> - [Nama Perusahaan/Instansi] (Jika sudah)</li> --}}
                    <li><strong>💻 Project Sekolah</strong> - Mengembangkan Project Reservasi Hotel, Service Elektronik, Web UMKM Makanan, Portfoio untuk tugas akhir</li>
                    <li><strong>👥 Organisasi</strong> - SATGAS / Ketua 2023-2024</li>
                    {{-- <li><strong>🎓 Workshop/Seminar</strong> - [Nama workshop] yang pernah diikuti</li> --}}
                </ul>
                
                <h4 class="mt-5 mb-3">Tech Stack yang Dipelajari</h4>
                <p>Saat ini saya sedang fokus mempelajari dan mengembangkan kemampuan di:</p>
                <ul class="skills-list">
                    <li><strong>🌐 Frontend</strong> - HTML, CSS, JavaScript, Bootstrap, Tailwind CSS</li>
                    <li><strong>⚙️ Backend</strong> - PHP (Dasar hingga Framework Laravel)</li>
                    <li><strong>🗄️ Database</strong> - MySQL, phpMyAdmin</li>
                    <li><strong>🛠️ Tools</strong> - Git, GitHub, VS Code, Laragon</li>
                </ul>
                
                <h4 class="mt-5 mb-3">Tujuan Karir</h4>
                <p>Saya bercita cita menjadi seorang pengusaha dibidang teknologi serta saya ingin berkontribusi dalam dunia Programming dan Teknologi, saat ini saya masih mempelajari banyak hal baru tentang Pemrogramman dan Dunia IT, mengikuti bootcamp online.</p>
                
                <h4 class="mt-5 mb-3">Mari Terkoneksi</h4>
                <p>Saya selalu terbuka untuk berkolaborasi, belajar bersama, atau sekedar bertukar pikiran. Silakan hubungi saya melalui email atau media sosial di bawah ini.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Portfolio</h2>
                <div class="divider"></div>
                <p class="mt-3">Berikut beberapa project yang pernah dikembangkan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4 d-flex">
                <div class="project-card w-100">
                    <div class="card h-100">
                        <img src="{{ asset('images/hotel2.png') }}" class="card-img-top" alt="Reservasi Hotel">
                        <div class="card-body">
                            <h5 class="card-title">Reservasi Hotel</h5>
                            <p class="card-text">Web Reservasi Hotel dibuat dengan Laravel, style bootstrap, dan mysql dibuat sebagai tugas akhir semester.</p>
                            <div class="badges-container mb-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-secondary">MySQL</span>
                                <span class="badge bg-info">Bootstrap</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="https://github.com/username/reservasi-hotel" target="_blank" class="btn btn-dark btn-sm">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt"></i> View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 d-flex">
                <div class="project-card w-100">
                    <div class="card h-100">
                        <img src="{{ asset('images/sambal gondes.png') }}" class="card-img-top" alt="E-Commerce">
                        <div class="card-body">
                            <h5 class="card-title">UMKM Sambal Gondes</h5>
                            <p class="card-text">Platform umkm sederhana dengan fitur keranjang belanja dan payment gateway.</p>
                            <div class="badges-container mb-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-secondary">MySQL</span>
                                <span class="badge bg-info">Midtrans</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="https://github.com/zwanss285/umkm-sambel-gondes" target="_blank" class="btn btn-dark btn-sm">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt"></i> View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 d-flex">
                <div class="project-card w-100">
                    <div class="card h-100">
                        <img src="{{ asset('images/finance.png') }}" class="card-img-top" alt="Sistem Inventory">
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi keuangan</h5>
                            <p class="card-text">Sistem manajemen uang dengan fitur CRUD dan laporan.</p>
                            <div class="badges-container mb-3">
                                <span class="badge bg-primary">Android Studio</span>
                                <span class="badge bg-secondary">Laravel</span>
                                <span class="badge bg-info">API Sanctum</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="https://github.com/zwanss285/api-aplikasi-keuangan-android" target="_blank" class="btn btn-dark btn-sm">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt"></i> View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 d-flex">
                <div class="project-card w-100">
                    <div class="card h-100">
                        <img src="{{ asset('images/tekno.png') }}" class="card-img-top" alt="Sistem Perpustakaan">
                        <div class="card-body">
                            <h5 class="card-title">Service Elektronik</h5>
                            <p class="card-text">Aplikasi Service Hp dan Laptop dengan fitur CRUD, Laporan Teknis, Laporan Bulanan.</p>
                            <div class="badges-container mb-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-secondary">MySQL</span>
                                <span class="badge bg-info">Tailwind</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="https://github.com/zwanss285/tugas-bu-hilda" target="_blank" class="btn btn-dark btn-sm">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt"></i> View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 d-flex">
                <div class="project-card w-100">
                    <div class="card h-100">
                        <img src="{{ asset('images/portfolio.png') }}" class="card-img-top" alt="Portfolio Website">
                        <div class="card-body">
                            <h5 class="card-title">Portfolio Website</h5>
                            <p class="card-text">Website portfolio pribadi untuk menampilkan skill dan project yang pernah dibuat.</p>
                            <div class="badges-container mb-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-secondary">Bootstrap</span>
                                <span class="badge bg-info">CSS</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="https://github.com/zwanss285/Portfolio" target="_blank" class="btn btn-dark btn-sm">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt"></i> View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 d-flex">
                <div class="project-card w-100">
                    <div class="card h-100">
                        <img src="{{ asset('images/school.png') }}" class="card-img-top" alt="Aplikasi Absensi">
                        <div class="card-body">
                            <h5 class="card-title">Web sekolah</h5>
                            <p class="card-text">Web tentang sekolah dan form pendaftaran.</p>
                            <div class="badges-container mb-3">
                                <span class="badge bg-primary">HTML</span>
                                <span class="badge bg-secondary">CSS</span>
                                <span class="badge bg-info">PHP Native</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="https://github.com/zwanss285/web-sekolah" target="_blank" class="btn btn-dark btn-sm">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt"></i> View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="education">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Pendidikan & Bootcamp</h2>
                <div class="divider"></div>
                <p class="mt-3">Riwayat Pendidikan & Bootcamp</p>
                <p class="text-muted">Pernah dan sedang belajar pada program dan sekolah berikut</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 d-flex">
                <div class="education-card w-100">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="education-icon">
                                    <i class="fas fa-university fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">SMKN 1 DEPOK</h5>
                                    <small class="text-muted">2024 - Sekarang</small>
                                </div>
                            </div>
                            <h6>Pengembangan Perangkat Lunak dan Gim</h6>
                            <p>Konsentrasi RPL</p>
                            <div class="mt-auto">
                                <small class="text-muted">
                                    <i class="fas fa-graduation-cap"></i> Siswa Aktif
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4 d-flex">
                <div class="education-card w-100">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="education-icon">
                                    <i class="fas fa-university fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">MTs Al-Hidayah Sukatani</h5>
                                    <small class="text-muted">2021 - 2024</small>
                                </div>
                            </div>
                            <h6>Pendidikan Islam</h6>
                            <p>Lulusan dengan prestasi akademik</p>
                            <div class="mt-auto">
                                <small class="text-muted">
                                    <i class="fas fa-certificate"></i> Lulus
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4 d-flex">
                <div class="education-card w-100">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="education-icon">
                                    <i class="fas fa-university fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">SDN Sukatani 7</h5>
                                    <small class="text-muted">2015 - 2021</small>
                                </div>
                            </div>
                            <div class="mt-auto">
                                <small class="text-muted">
                                    <i class="fas fa-certificate"></i> Lulus
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="experience">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Pengalaman & Magang</h2>
                <div class="divider"></div>
                <p class="mt-3">Pengalaman Belajar, Magang, & Project Sekolah</p>
                <p class="text-muted">Perjalanan belajar saya di dunia programming</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="experience-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="company-logo">
                                    <i class="fas fa-school fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">SMK NEGERI 1 DEPOK</h5>
                                    <small class="text-muted">2024 - Sekarang</small>
                                </div>
                            </div>
                            <h6>Siswa Jurusan PPLG</h6>
                            <ul>
                                <li>Mempelajari dasar-dasar pemrograman web</li>
                                <li>Mengerjakan project-project sekolah (website, aplikasi sederhana)</li>
                                <li>Aktif dalam kegiatan perlombaan terkait IT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="experience-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="company-logo">
                                    <i class="fas fa-laptop-code fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">Prakerin / PKL</h5>
                                    <small class="text-muted">2026</small>
                                </div>
                            </div>
                            <h6>[Posisi Magang]</h6>
                            <ul>
                                <li>Mempelajari workflow pengembangan software di perusahaan</li>
                                <li>Membantu tim dalam pembuatan website sederhana</li>
                                <li>Belajar menggunakan tools profesional (Git, VS Code, dll)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="experience-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="company-logo">
                                    <i class="fas fa-project-diagram fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">Project Sekolah</h5>
                                    <small class="text-muted">2024 - Sekarang</small>
                                </div>
                            </div>
                            <h6>Website UMKM Sambal Gondes</h6>
                            <ul>
                                <li>Membangun website Sambal Gondes menggunakan Laravel</li>
                                <li>Mendesain database MySQL untuk menyimpan data</li>
                                <li>Mengimplementasikan fitur CRUD (Create, Read, Update, Delete)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="experience-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="company-logo">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">Komunitas</h5>
                                    <small class="text-muted">2024 - 2026</small>
                                </div>
                            </div>
                            <h6>Marching Band</h6>
                            <ul>
                                <li>Bergabung dalam komunitas musik Band</li>
                                <li>Berpartisipasi dalam marching & battle competition</li>
                                <li>Belajar bersama dan sharing knowledge dengan teman-teman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="experience-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="company-logo">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">Organisas</h5>
                                    <small class="text-muted">2022 - 2023</small>
                                </div>
                            </div>
                            <h6>SATGAS</h6>
                            <ul>
                                <li>Bergabung dalam Organisasi SATGAS untuk melatih disiplin dan tanggung jawab</li>
                                <li>Berpartisipasi dalam Event sekolah dan membantu kedisiplinan siswa</li>
                                <li>Belajar bersama dan sharing knowledge dengan teman-teman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
{{-- <section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Blog</h2>
                <div class="divider"></div>
                <p class="mt-3">Tulisan Blog</p>
                <p class="text-muted">Beberapa tulisan blog yang saya buat</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="blog-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="blog-icon mb-3">
                                <i class="fas fa-code fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title">Tips Belajar Laravel untuk Pemula</h5>
                            <p class="card-text">Panduan lengkap memulai framework Laravel dari dasar hingga mahir.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="blog-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="blog-icon mb-3">
                                <i class="fas fa-database fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title">Optimasi Query MySQL</h5>
                            <p class="card-text">Teknik meningkatkan performa database dengan query optimization.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="blog-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="blog-icon mb-3">
                                <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title">Membuat RESTful API dengan Laravel</h5>
                            <p class="card-text">Tutorial lengkap membuat API yang scalable dan secure.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Kontak</h2>
                <div class="divider"></div>
                <p class="mt-3">Hubungi Saya</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <div class="contact-info">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-4">Ananda Satria Ariyanto</h4>
                            <p><i class="fas fa-envelope"></i> fizwanabdurrohman8@gmail.com</p>
                            <p><i class="fas fa-phone"></i> +62 896-8533-9438</p>
                            <p><i class="fab fa-github"></i> github.com/zwanss285</p>
                            {{-- <p><i class="fab fa-linkedin"></i> linkedin.com/in/username</p> --}}
                            
                            <hr>
                            <h5 class="mb-3">Kategori Tulisan</h5>
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge bg-primary">Programming</span>
                                <span class="badge bg-secondary">Teknologi</span>
                            </div>
                            
                            <hr>
                            <h5 class="mb-3">Tautan</h5>
                            <ul class="list-unstyled">
                                <li><a href="#home" class="text-decoration-none">Beranda</a></li>
                                <li><a href="#about" class="text-decoration-none">Tentang Saya</a></li>
                                <li><a href="#portfolio" class="text-decoration-none">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 mb-4">
                <div class="contact-form">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-4">Kirim Pesan</h4>
                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="subject" class="form-control" placeholder="Subjek">
                                </div>
                                <div class="mb-3">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Pesan" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guestbook Section (DITAMBAHKAN DI AKHIR) -->
<section id="guestbook" class="guestbook">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Buku Tamu</h2>
                <div class="divider"></div>
                <p class="mt-3">Tinggalkan pesan dan kesan Anda</p>
            </div>
        </div>
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="guestbook-form">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-4">Tulis Pesan</h4>
                            <form action="{{ route('guestbook.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Anda *" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email Anda *" required>
                                </div>
                                <div class="mb-3">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Pesan / Kesan Anda *" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane"></i> Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="guestbook-messages">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-4">Pesan Terbaru</h4>
                            <div class="messages-list">
                                @forelse($guestbooks as $guestbook)
                                    <div class="message-item mb-3">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <strong>{{ $guestbook->name }}</strong>
                                                <small class="text-muted d-block">{{ $guestbook->created_at->format('d M Y, H:i') }}</small>
                                            </div>
                                            <small class="text-muted">{{ $guestbook->created_at->diffForHumans() }}</small>
                                        </div>
                                        <p class="mt-2 mb-0">{{ $guestbook->message }}</p>
                                        <hr class="mt-3">
                                    </div>
                                @empty
                                    <div class="text-center py-4">
                                        <i class="fas fa-comment-dots fa-3x text-muted mb-3"></i>
                                        <p class="text-muted">Belum ada pesan. Jadilah yang pertama!</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2025 Fizwan. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#home" class="text-white me-3">Kembali ke Atas</a>
            </div>
        </div>
    </div>
</footer>
@endsection