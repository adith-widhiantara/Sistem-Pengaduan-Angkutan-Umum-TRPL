@extends('navbar')

@section('content')

<!--==========================
    Hero Section
  ============================-->
<section id="hero">
    <div class="hero-container">
        <h1>Selamat Datang di Sidu Buscare</h1>
        <h2>Sistem Pengaduan Angkutan Umum</h2>
        <a href="#about" class="btn-get-started">Mari Mulai</a>
    </div>
</section>
<!-- #hero -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">
            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <h2 class="title">Tentang Kami</h2>
                    <p>
                        Project ini dibuat dengan tujuan untuk membantu memudahkan masyarakat dalam mengadukan keluhan
                        maupun kritikan ketidaknyaman yang mereka alami saat menggunakan kendaraan umum khususnya armada
                        bus dan juga memudahkan masyarakat untuk memilih angkutan umum bus yang akan mereka gunakan,
                        sesuai dengan kebutuhan.
                    </p>

                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                viewBox="0 0 172 172" style=" fill:#000000;">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                    stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                    text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#2ecc71">
                                        <path
                                            d="M147.92,34.4c-12.69016,0 -25.79656,-8.52776 -37.3584,-16.05448c-9.45312,-6.15072 -17.61624,-11.46552 -24.5616,-11.46552c-6.94536,0 -15.10848,5.3148 -24.5616,11.46552c-11.56184,7.52672 -24.66824,16.05448 -37.3584,16.05448c-1.90232,0 -3.44,1.53768 -3.44,3.44v24.08c0,8.88896 1.2384,17.89144 3.39872,26.68408c0.06536,0.28208 0.09632,0.54352 0.16856,0.83592h0.02752c10.15144,40.1448 39.73544,75.68 61.7652,75.68c27.00056,0 65.36,-53.37504 65.36,-103.2v-24.08c0,-1.90232 -1.53768,-3.44 -3.44,-3.44zM144.48,61.92c0,9.32584 -1.36224,18.60352 -3.70488,27.52h-54.77512v66.00328v2.79672c-17.36512,0 -44.87824,-31.12512 -54.77512,-68.8h54.77512v-75.68c4.902,0 12.62824,5.02928 20.80856,10.3544c11.39672,7.41664 24.19696,15.74832 37.67144,17.00392z">
                                        </path>
                                    </g>
                                </g>
                            </svg></div>
                        <h4 class="title"><a href="">Dinas Perhubungan</a></h4>
                        <p class="description">Mempunyai tugas pokok melaksanakan urusan pemerintahan di bidang
                            perhubungan</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                viewBox="0 0 172 172" style=" fill:#000000;">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                    stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                    text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#2ecc71">
                                        <path
                                            d="M50.16667,35.83333c-27.70633,0 -50.16667,22.46033 -50.16667,50.16667c0,27.70633 22.46033,50.16667 50.16667,50.16667c22.72313,0 41.89756,-15.11458 48.06706,-35.83333h30.76628v21.5h28.66667v-21.5h14.33333v-28.66667h-73.76628c-6.1695,-20.71875 -25.34393,-35.83333 -48.06706,-35.83333zM50.16667,64.5c11.87517,0 21.5,9.62483 21.5,21.5c0,11.87517 -9.62483,21.5 -21.5,21.5c-11.87517,0 -21.5,-9.62483 -21.5,-21.5c0,-11.87517 9.62483,-21.5 21.5,-21.5z">
                                        </path>
                                    </g>
                                </g>
                            </svg></div>
                        <h4 class="title"><a href="">Owner Armada</a></h4>
                        <p class="description">Pemilik usaha dalam mengelola bisnis pelaporan</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                viewBox="0 0 172 172" style=" fill:#000000;">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                    stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                    text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#2ecc71">
                                        <path
                                            d="M86,7.16667c-20.58426,0 -37.84782,14.66404 -42.11816,34.30762l14.01139,3.05143c2.89632,-13.32309 14.29103,-23.02572 28.10677,-23.02572c16.3127,0 28.66667,12.35397 28.66667,28.66667v7.16667h-71.66667c-7.88333,0 -14.33333,6.45 -14.33333,14.33333v71.66667c0,7.88333 6.45,14.33333 14.33333,14.33333h86c7.88333,0 14.33333,-6.45 14.33333,-14.33333v-71.66667c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333v-7.16667c0,-23.82063 -19.17936,-43 -43,-43zM86,93.16667c7.88333,0 14.33333,6.45 14.33333,14.33333c0,7.88333 -6.45,14.33333 -14.33333,14.33333c-7.88333,0 -14.33333,-6.45 -14.33333,-14.33333c0,-7.88333 6.45,-14.33333 14.33333,-14.33333z">
                                        </path>
                                    </g>
                                </g>
                            </svg></i></div>
                        <h4 class="title"><a href="">Public User</a></h4>
                        <p class="description">Pengguna untuk membuat pengaduan</p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Fakta</h3>
                <p class="section-description">Pengerjaan selama tugas projek SIDU BUSCARE</p>
            </div>
            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">232</span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">521</span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,463</span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">15</span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section><!-- #facts -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Anggota</h3>
                <p class="section-description">Daftar Anggota Teknik Rekayasa Perangkat Lunak B Kelompok 1B</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/team-3.jpg" alt=""></div>
                        <h4>Aditya Saktyawan Widhiantara</h4>
                        <span>172410101108</span>
                        <span>Product Manager</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/team-4.jpg" alt=""></div>
                        <h4>Tiara Amalinda Prabawati</h4>
                        <span>172410101027</span>
                        <span>Analyst</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/team-2.jpg" alt=""></div>
                        <h4>Maulina Azizah</h4>
                        <span>162410101107</span>
                        <span>Designer</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/team-1.jpg" alt=""></div>
                        <h4>Ghana Muhammad Wahyu Alifi</h4>
                        <span>172410101032</span>
                        <span>Programmer</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Hubungi</h3>
                <p class="section-description">Jika terjadi masalah pada website segera hubungi</p>
            </div>
        </div>

        <!-- Uncomment below if you wan to use dynamic maps -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.0431495410403!2d113.62862401433097!3d-8.198407984497418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69176d9e76d41%3A0x4e4c6e9a855a4fdf!2sTerminal%20Tawang%20Alun%20Jember!5e0!3m2!1sid!2sid!4v1568986070347!5m2!1sid!2sid"
            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="container wow fadeInUp mt-5">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-4">

                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Sistem Informasi<br>Fakultas Ilmu Komputer, Universitas Jember</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>sidubuscare@unej.ac.id</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+62 812 3456 7890</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                                    data-rule="minlen:4" data-msg="Silakan masukkan setidaknya 4 karakter" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    data-rule="email" data-msg="Tolong masukkan email yang benar" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subyek"
                                    data-rule="minlen:4" data-msg="Silakan masukkan setidaknya 8 karakter subjek" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Tolong tuliskan sesuatu untuk kami" placeholder="Pesan"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

@endsection
