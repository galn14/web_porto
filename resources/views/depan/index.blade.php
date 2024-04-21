<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>galn</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('depan') }}/css/styles.css" rel="stylesheet" />
        <!-- In your head tag -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">

        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
          
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
        <section id="home">
            <!-- Home content goes here -->
            <!-- Sticky Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top">
                    <div class="container px-5">
                        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">galn.</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                                <li class="nav-item"><a class="nav-link" href="#skill">Skill</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Header-->
                <!-- Header-->
                <header class="py-5" data-aos="fade-in" data-aos-duration="1000" style="min-height: 100vh; display: flex; align-items: center;">
                    <div class="container px-5 pb-5">
                        <div class="row gx-5 align-items-center">
                            <!-- Text Content -->
                            <div class="col-lg-5 text-center text-lg-start">
                                <div class="badge mb-4" data-aos="fade-right" data-aos-delay="200">
                                    <span class="text-uppercase text-gradient">Computer Science Student</span>
                                </div>
                                <h1 class="display-5 fw-bolder text-gradient mb-2" data-aos="fade-left" data-aos-delay="300">
                                    {{ $about->judul }}
                                </h1>
                                <p class="fs-5 fw-light text-muted mb-4" data-aos="fade-up" data-aos-delay="400">{!! $about->isi !!}</p>
                               
                                <div class="d-flex justify-content-center justify-content-lg-start fs-2 gap-5" data-aos="fade-up">
                                    <a class="text-gradient" href="https://www.instagram.com/galeno_f.a/" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                                    <a class="text-gradient" href="https://www.linkedin.com/in/galenofilberto?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/galn14 " aria-label="GitHub"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                            <!-- Profile Picture -->
                            <div class="col-lg-7 d-flex justify-content-center" data-aos="fade-left" data-aos-delay="600">
                                <div class="profile bg-gradient-primary-to-secondary">
                                    <img class="profile-img" src="{{ asset('foto') . '/' . get_meta_value('_foto')}}" alt="Profile Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- About Section-->
                <section class="bg-light py-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="container px-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-xxl-8">
                                <div class="text-center my-5">
                                    <h2 class="display-5 fw-bolder" data-aos="zoom-in">
                                        <span class="text-gradient d-inline">{{$interest->judul}}</span>
                                    </h2>
                                    <p class="text-muted" data-aos="fade-left">{!! $interest->isi !!}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="resume">
                    <!-- Resume content goes here -->
                        <!-- Page Content-->
                        <div class="container px-5 my-5">
                            <div class="text-center mb-5">
                                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                            </div>
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-11 col-xl-9 col-xxl-8">
                                        <!-- Experience Section-->
                                        <section class="reveal">
                                        <section>
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                            </div>
                                            @foreach ($experience as $item)
                                                <!-- Experience Card 1-->
                                            <div class="card shadow border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-primary fw-bolder mb-2">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</div>
                                                                <div class="small fw-bolder">{{ $item->judul }}</div>
                                                                <div class="small text-muted">{{ $item->info1 }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8"><div>{!! $item->isi !!}</div></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </section>
                                        </section>
                                    <!-- Education Section-->
                                    <section class="reveal">
                                    <section>
                                        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                                        @foreach ($education as $item)
                                            <!-- Education Card 1-->
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <div class="card-body p-5">
                                                <div class="row align-items-center gx-5">
                                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                        <div class="bg-light p-4 rounded-4">
                                                            <div class="text-secondary fw-bolder mb-2">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</div>
                                                            <div class="mb-2">
                                                                <div class="small fw-bolder">{{ $item->judul }}</div>
                                                                <div class="small text-muted"> {{ $item->info1 }}</div>
                                                            </div>
                                                            <div class="fst-italic">
                                                                <div class="small text-muted">{{ $item->info2 }}</div>                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </section>
                                    </section>
                                    <!-- Divider-->
                                </div>
                            </div>
                        </div>
                    </main>
                </section>
                <section class="reveal">
                <section id="skill">
                    <div class="pb-5"></div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <section>
                                <!-- Skillset Card-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <ul class="list-inline">
                                        <!-- Professional skills list-->
                                        <div class="mb-5">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                            </div>
                                            <!-- Set a new row for each set of skills -->
                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-4">
                                                {!! set_list_workflow(get_meta_value('_workflow')) !!}
                                            </div>
                                        </div>
                                       <!-- Languages list-->
                                        <div class="mb-0">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                                    <i class="bi bi-code-slash"></i>
                                                </div>
                                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                            </div>
                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                                                <!-- Dynamic creation of language icons -->
                                                @foreach (explode(', ', get_meta_value('_language')) as $item)
                                                    <div class="col text-center">
                                                        <i class="devicon-{{ strtolower($item) }}-plain colored" style="font-size: 3rem;"></i>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
                <section id="contact">
                    <!-- Contact Section -->
                    <section id="contact" class="py-5" data-aos="fade-up" data-aos-duration="1000">
                        <div class="container px-5">
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8">
                                    <div class="text-center my-5">
                                        <h2 class="display-5 fw-bolder text-gradient" data-aos="zoom-in">Let's Connect</h2>
                                        <p class="lead fw-light text-muted mb-5" data-aos="fade-right">I am always open to discussing your projects and talking about new technologies or creative ideas.
                                        </p>
                                        <div class="d-grid gap-3">
                                            <a class="btn btn-primary btn-lg" href="mailto:your.email@example.com" data-aos="zoom-in" data-aos-delay="300">galenofilberto@gmail.com</a>
                                        </div>
                                        <p class="fs-5 mt-4 text-muted" data-aos="fade-up" data-aos-delay="400">Feel free to drop me an email or follow me on social media.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    </section>
    </body>
            <!-- Footer -->
            <footer class="bg-white py-4 mt-auto">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-auto text-center">
                            <div class="small m-0">
                                Copyright &copy; galn14 2023. All rights reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


        <!-- Core theme JS-->
        <script src="{{ asset('depan') }}/js/scripts.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var reveals = document.querySelectorAll('.reveal');
            
                function revealOnScroll() {
                    var windowHeight = window.innerHeight;
                    var scrollY = window.scrollY || window.pageYOffset;
            
                    reveals.forEach((el, index) => {
                        var elementTop = el.getBoundingClientRect().top + scrollY;
                        var elementVisible = 200; // Adjust based on when you want the element to show
            
                        if (scrollY + windowHeight - elementVisible > elementTop) {
                            el.classList.add('active');
                        } else {
                            el.classList.remove('active'); // Optionally remove the class if element goes out of view
                        }
                    });
                }
            
                window.addEventListener('scroll', revealOnScroll);
            });
            </script>

            <!-- At the end of your body section in the layout file -->
            <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

            <script>
            AOS.init();
            </script>

    </body>
</html>
