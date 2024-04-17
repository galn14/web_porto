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
                                <li class="nav-item"><a class="nav-link" href="#project">Project</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Header-->
                <header class="py-5" data-aos="fade-in" data-aos-duration="1000">
                    <div class="container px-5 pb-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-xxl-5">
                                <!-- Header text content with AOS-->
                                <div class="text-center text-xxl-start">
                                    <div class="badge text-gradient bg-gradient-primary-to-secondary mb-4" data-aos="fade-right" data-aos-delay="200">
                                        <div class="text-uppercase">Computer Science Student</div>
                                    </div>
                                    <h1 class="display-5 fw-bolder mb-2" data-aos="fade-left" data-aos-delay="300">
                                        <span class="text-gradient d-inline">{{ $about->judul }}</span>
                                    </h1>
                                    <div class="fs-10 fw-light text-muted mb-4" data-aos="fade-up" data-aos-delay="400">{!! $about->isi !!}</div>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3" data-aos="zoom-in" data-aos-delay="500">
                                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="#resume">Resume</a>
                                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="#project">Project</a>
                                    </div>
                                    <div class="d-flex justify-content-left fs-2 gap-5" data-aos="fade-up">
                                        <a class="text-gradient" href="#"><i class="bi bi-twitter"></i></a>
                                        <a class="text-gradient" href="#"><i class="bi bi-linkedin"></i></a>
                                        <a class="text-gradient" href="#"><i class="bi bi-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7" data-aos="fade-left" data-aos-delay="600">
                                <!-- Header profile picture-->
                                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                    <div class="profile bg-gradient-primary-to-secondary">
                                        <img class="profile-img" src="{{ asset('foto') . '/' . get_meta_value('_foto')}}" alt="Profile Image">
                                        </div>
                                    </div>
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
                                    <p class="lead fw-light mb-4" data-aos="fade-right">{!! $interest->isi !!}</p>
                                    <p class="text-muted" data-aos="fade-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="reveal">
                    <section id="projects" class="py-5 bg-light">
                        <div class="container px-5 mb-5">
                            <div class="text-center mb-5">
                                <h1 class="display-5 fw-bolder">Projects</h1>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Carousel wrapper -->
                                    <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <!-- Indicators -->
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <!-- Slides -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 rounded" src="https://dummyimage.com/900x500/343a40/6c757d" alt="Project Name 1">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Project Name 1</h5>
                                                    <p>Brief description or context of Project 1.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 rounded" src="https://dummyimage.com/900x500/204080/6c757d" alt="Project Name 2">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Project Name 2</h5>
                                                    <p>Brief description or context of Project 2.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 rounded" src="https://dummyimage.com/900x500/789040/6c757d" alt="Project Name 3">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Project Name 3</h5>
                                                    <p>Brief description or context of Project 3.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Left and right controls -->
                                        <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <!-- End of Carousel wrapper -->
                                </div>
                            </div>
                        </div>
                    </section>                    
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
                                                                <div class="small text-muted">{{ $item->info2 }}'s</div>
                                                                <div class="small text-muted">{{ $item->info3 }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </section>
                                    </section>
                                    <!-- Divider-->
                                    <section class="reveal">
                                    <div class="pb-5"></div>
                                    <!-- Skills Section-->
                                    <section>
                                        <!-- Skillset Card-->
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <div class="card-body p-5">
                                                <!-- Professional skills list-->
                                                <div class="mb-5">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SEO/SEM Marketing</div></div>
                                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Statistical Analysis</div></div>
                                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div></div>
                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-3">
                                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network Security</div></div>
                                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Software Suite</div></div>
                                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface Design</div></div>
                                                    </div>
                                                </div>
                                                <!-- Languages list-->
                                                <div class="mb-0">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-3">
                                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Ruby</div></div>
                                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </main>
                </section>
                       
            <section id="contact">
                <!-- Contact content goes here -->
            </main>
            <!-- Footer-->
            <footer class="bg-white py-4 mt-auto">
                <div class="container px-5">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                        <div class="col-auto">
                            <a class="small" href="#!">Privacy</a>
                            <span class="mx-1">&middot;</span>
                            <a class="small" href="#!">Terms</a>
                            <span class="mx-1">&middot;</span>
                            <a class="small" href="#!">Contact</a>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
            
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
