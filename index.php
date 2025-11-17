<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>John Smith</title>
  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- #region Header Section -->
  <header id="header" class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="index.php">John Smith</a>

        <!-- Toggle Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
          <i class="fa-solid fa-xmark d-none"></i>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- Center Links -->
          <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item"><a class="nav-link fw-bold active" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="#resume">Resume</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="#portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="#faq">FAQ</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="#clients">Clients</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="#contact">Contact</a></li>
          </ul>

          <!-- Right Social Icons (Desktop) -->
          <div class="social-icons d-none d-lg-flex">
            <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
          </div>

          <!-- Mobile Social Icons -->
          <div class="social-icons d-lg-none text-center mt-3">
            <a href="#" class="text-dark mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- #endregion -->

  <!-- #region Hero Section -->
  <section id="home" class="hero-section container-fluid bg-warning d-flex align-items-center min-vh-100">
    <div class="container py-5">
      <div class="row align-items-center">

        <!-- Left Column (Text) -->
        <div class="col-lg-6 col-md-6 order-2 order-md-1 text-center text-md-start mb-4 mb-md-0">
          <p class="text-dark fw-semibold mb-2">HI, I'M A FREELANCER</p>
          <h1 class="fw-bold display-5 text-dark mb-3">
            <span id="typing"></span><span class="cursor">|</span>
          </h1>
          <p class="text-dark mb-4">Based in Los Angeles, USA</p>

          <div class="d-flex justify-content-center justify-content-md-start gap-3">
            <a href="#portfolio" class="btn btn-dark px-4 py-2 rounded-0">View My Works</a>
            <a href="#contact" class="btn btn-outline-dark px-4 py-2 d-flex align-items-center gap-2 rounded-0">
              Contact Me
              <i class="fa-solid fa-download"></i>
            </a>
          </div>
        </div>

        <!-- Right Column (Image) -->
        <div class="col-lg-6 col-md-6 order-1 order-md-2 d-flex justify-content-center align-items-center mb-4 mb-md-0">
          <div
            class="d-flex justify-content-center align-items-center rounded-circle bg-dark border border-5 border-white hero-img-wrapper">
            <img src="assets/images/profile.png.png" alt="Profile Image" class="rounded-circle shadow-lg hero-img">
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region About Me Section -->
  <section id="about" class="container-fluid py-5 bg-white">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-5">
        <p class="text-uppercase fw-semibold d-inline-block px-3 py-1 rounded bg-warning text-dark">
          About Me
        </p>
        <h2 class="fw-bold text-dark mt-3">Know Me More</h2>
      </div>

      <!-- Two Columns -->
      <div class="row align-items-center mb-5">
        <!-- Left Text Column -->
        <div class="col-lg-8 col-md-7">
          <p class="fs-5 text-dark">
            Hi, I'm
            <strong class="text-decoration-underline">John Smith</strong><br />
            a passionate Web Developer and UI/UX Designer. I enjoy creating
            interactive, user-friendly websites and bringing creative ideas to
            life.
          </p>
        </div>

        <!-- Right Circle Column -->
        <div class="col-lg-4 col-md-5 text-center">
          <div class="d-inline-flex flex-column align-items-center">
            <!-- Circle -->
            <div class="rounded-circle d-flex justify-content-center align-items-center shadow bg-warning about-circle">
              <span class="fw-bold text-dark display-1 lh-1">7</span>
            </div>

            <!-- Experience Text -->
            <p class="text-dark fs-5 mt-3 mb-0">
              Years of <strong>Experience</strong>
            </p>
          </div>
        </div>

        <!-- Four Info Columns -->
        <div class="row text-center text-md-start gy-4">
          <div class="col-md-3 col-sm-6">
            <h5 class="fw-bold text-dark">Name</h5>
            <p class="mb-0 text-dark">John Smith</p>
          </div>
          <div class="col-md-3 col-sm-6">
            <h5 class="fw-bold text-dark">Email</h5>
            <p class="mb-0 text-dark">PERSONAL@example.com</p>
          </div>
          <div class="col-md-3 col-sm-6">
            <h5 class="fw-bold text-dark">Date of Birth</h5>
            <p class="mb-0 text-dark">15 Oct 1998</p>
          </div>
          <div class="col-md-3 col-sm-6">
            <h5 class="fw-bold text-dark">From</h5>
            <p class="mb-0 text-dark">Los Angeles, USA</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region Services Section -->
  <section id="services" class="container-fluid py-5 bg-light">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-5">
        <p class="text-uppercase fw-semibold d-inline-block px-3 py-1 rounded bg-warning text-dark">
          What I Do?
        </p>
        <h4 class="fw-bold mt-3 text-dark">
          How I Can Help Your Next Project
        </h4>
      </div>

      <!-- Service Grid -->
      <div class="row g-4">
        <!-- Service Item 1 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center p-4 border rounded h-100 bg-white">
            <i class="fas fa-pencil-ruler fa-3x mb-3 text-warning"></i>
            <h5 class="fw-semibold mb-2 text-dark">Graphic Design</h5>
            <p class="text-secondary">
              Creative and modern graphic designs that make your brand stand out.
            </p>
          </div>
        </div>

        <!-- Service Item 2 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center p-4 border rounded h-100 bg-white">
            <i class="fas fa-desktop fa-3x mb-3 text-warning"></i>
            <h5 class="fw-semibold mb-2 text-dark">Web Design</h5>
            <p class="text-secondary">
              Responsive and aesthetic web designs tailored to your business needs.
            </p>
          </div>
        </div>

        <!-- Service Item 3 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center p-4 border rounded h-100 bg-white">
            <i class="fas fa-code fa-3x mb-3 text-warning"></i>
            <h5 class="fw-semibold mb-2 text-dark">Web Development</h5>
            <p class="text-secondary">
              Clean, optimized and scalable web applications built with modern tech.
            </p>
          </div>
        </div>

        <!-- Service Item 4 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center p-4 border rounded h-100 bg-white">
            <i class="fas fa-lightbulb fa-3x mb-3 text-warning"></i>
            <h5 class="fw-semibold mb-2 text-dark">Brand Identity</h5>
            <p class="text-secondary">
              Build a unique and memorable brand identity that resonates with your audience.
            </p>
          </div>
        </div>

        <!-- Service Item 5 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center p-4 border rounded h-100 bg-white">
            <i class="fas fa-chart-line fa-3x mb-3 text-warning"></i>
            <h5 class="fw-semibold mb-2 text-dark">Business Analysis</h5>
            <p class="text-secondary">
              Analyzing data and trends to improve your business growth and performance.
            </p>
          </div>
        </div>

        <!-- Service Item 6 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center p-4 border rounded h-100 bg-white">
            <i class="fas fa-bullhorn fa-3x mb-3 text-warning"></i>
            <h5 class="fw-semibold mb-2 text-dark">Digital Marketing</h5>
            <p class="text-secondary">
              Promote your brand effectively through digital channels and social media.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region Resume Section -->
  <section id="resume" class="container-fluid py-5 bg-white">
    <div class="container text-center">
      <!-- Section Header -->
      <h5 class="mb-2 text-uppercase fw-semibold d-inline-block px-3 py-1 rounded bg-warning text-dark">
        Resume
      </h5>
      <h2 class="fw-bold mb-5">A Summary of My Resume</h2>

      <!-- Resume Content -->
      <div class="row g-4 text-start mb-5">
        <!-- Education Column -->
        <div class="col-12 col-lg-6">
          <h3 class="mb-4 border-bottom border-3 border-warning d-inline-block pb-2">
            My Education
          </h3>
          <div class="resume-item mb-3">
            <h5 class="fw-semibold">Bachelor of Computer Science</h5>
            <p class="text-muted">University of Dhaka (2020 - 2024)</p>
          </div>
          <div class="resume-item mb-3">
            <h5 class="fw-semibold">Higher Secondary Certificate</h5>
            <p class="text-muted">Govt. College (2018 - 2020)</p>
          </div>
          <div class="resume-item">
            <h5 class="fw-semibold">Secondary School Certificate</h5>
            <p class="text-muted">High School (2016 - 2018)</p>
          </div>
        </div>

        <!-- Experience Column -->
        <div class="col-12 col-lg-6">
          <h3 class="mb-4 border-bottom border-3 border-warning d-inline-block pb-2">
            My Experience
          </h3>
          <div class="resume-item mb-3">
            <h5 class="fw-semibold">Web Developer</h5>
            <p class="text-muted">Freelancer (2023 - Present)</p>
          </div>
          <div class="resume-item mb-3">
            <h5 class="fw-semibold">Frontend Developer</h5>
            <p class="text-muted">TechDiscoverly (2022 - 2023)</p>
          </div>
          <div class="resume-item">
            <h5 class="fw-semibold">Intern Developer</h5>
            <p class="text-muted">SuiteSpot (2021 - 2022)</p>
          </div>
        </div>
      </div>

      <!-- Skills Section -->
      <div class="mb-5 text-start">
        <h3 class="mb-4 fw-bold">My Skills</h3>
        <div class="row g-3">
          <!-- Skill Item -->
          <div class="col-12 col-md-6">
            <p class="mb-1 fw-semibold">Web Design</p>
            <div class="progress resume-progress">
              <div class="progress-bar bg-warning" role="progressbar" data-progress="65">
                <span class="progress-value">0%</span>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <p class="mb-1 fw-semibold">HTML / CSS</p>
            <div class="progress resume-progress">
              <div class="progress-bar bg-warning" role="progressbar" data-progress="95">
                <span class="progress-value">0%</span>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <p class="mb-1 fw-semibold">JavaScript</p>
            <div class="progress resume-progress">
              <div class="progress-bar bg-warning" role="progressbar" data-progress="80">
                <span class="progress-value">0%</span>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <p class="mb-1 fw-semibold">React</p>
            <div class="progress resume-progress">
              <div class="progress-bar bg-warning" role="progressbar" data-progress="70">
                <span class="progress-value">0%</span>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <p class="mb-1 fw-semibold">Angular JS</p>
            <div class="progress resume-progress">
              <div class="progress-bar bg-warning" role="progressbar" data-progress="60">
                <span class="progress-value">0%</span>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <p class="mb-1 fw-semibold">Bootstrap</p>
            <div class="progress resume-progress">
              <div class="progress-bar bg-warning" role="progressbar" data-progress="99">
                <span class="progress-value">0%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Download CV Button -->
      <a href="#" class="btn btn-warning text-dark fw-bold px-4 py-2 rounded-pill">
        Download CV
      </a>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region Portfolio Section -->
  <section id="portfolio" class="container-fluid py-5 bg-body-tertiary">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center mb-5">
        <p class="text-uppercase fw-semibold d-inline-block px-3 py-1 rounded bg-warning text-dark">
          Portfolio
        </p>
        <h4 class="fw-bold mt-3">Some of My Most Recent Projects</h4>
      </div>

      <!-- Filter Buttons -->
      <div class="d-flex justify-content-center flex-wrap mb-4 gap-3">
        <button class="btn btn-outline-dark active filter-btn" data-filter="all">
          All
        </button>
        <button class="btn btn-outline-dark filter-btn" data-filter="detailed">
          Detailed
        </button>
        <button class="btn btn-outline-dark filter-btn" data-filter="mockups">
          Mockups
        </button>
        <button class="btn btn-outline-dark filter-btn" data-filter="youtube">
          YouTube Videos
        </button>
        <button class="btn btn-outline-dark filter-btn" data-filter="vimeo">
          Vimeo Videos
        </button>
      </div>

      <!-- Project Grid -->
      <div class="row g-4">
        <!-- Project Item 1 -->
        <div class="col-12 col-sm-6 col-md-4 project-item detailed">
          <div class="card h-100 shadow-sm border-0">
            <img src="assets/images/2208.i101.040.F.m004.c9.project management isomeitric.jpg" class="card-img-top"
              alt="Project 1" />
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Project 1</h5>
            </div>
          </div>
        </div>

        <!-- Project Item 2 -->
        <div class="col-12 col-sm-6 col-md-4 project-item mockups">
          <div class="card h-100 shadow-sm border-0">
            <img src="assets/images/19199.jpg" class="card-img-top" alt="Project 2" />
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Project 2</h5>
            </div>
          </div>
        </div>

        <!-- Project Item 3 -->
        <div class="col-12 col-sm-6 col-md-4 project-item youtube">
          <div class="card h-100 shadow-sm border-0">
            <img src="assets/images/269374-P5FJAX-875.jpg" class="card-img-top" alt="Project 3" />
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Project 3</h5>
            </div>
          </div>
        </div>

        <!-- Project Item 4 -->
        <div class="col-12 col-sm-6 col-md-4 project-item vimeo">
          <div class="card h-100 shadow-sm border-0">
            <img src="assets/images/283232-P6EXNY-687.jpg" class="card-img-top" alt="Project 4" />
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Project 4</h5>
            </div>
          </div>
        </div>

        <!-- Project Item 5 -->
        <div class="col-12 col-sm-6 col-md-4 project-item detailed">
          <div class="card h-100 shadow-sm border-0">
            <img src="assets/images/328842-P9ZNA7-604.jpg" class="card-img-top" alt="Project 5" />
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Project 5</h5>
            </div>
          </div>
        </div>

        <!-- Project Item 6 -->
        <div class="col-12 col-sm-6 col-md-4 project-item mockups">
          <div class="card h-100 shadow-sm border-0">
            <img src="assets/images/2208.i101.040.F.m004.c9.project management isomeitric.jpg" class="card-img-top"
              alt="Project 6" />
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Project 6</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region Call to Action Section -->
  <section class="cta-section">
    <!-- Upper Row -->
    <div class="cta-row text-center cta-fixed-height">
      <h2 class="fw-bold text-white">Interested in working with me?</h2>
    </div>

    <!-- Lower Row -->
    <div class="cta-row position-relative cta-fixed-height">
      <!-- Image -->
      <img src="assets/images/little-girl-glasses-blue-backpack-with-oranges-created-with-generative-ai-technology.jpg"
        class="cta-img w-100" alt="Working Together" />

      <!-- Black Overlay -->
      <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

      <!-- Centered Button -->
      <div class="cta-btn-wrapper position-absolute top-50 start-50 translate-middle text-center">
        <a href="#contact" class="btn btn-warning btn-lg fw-bold">Hire Me</a>
      </div>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region FAQ Section -->
  <section id="faq" class="faq-section container-fluid py-5 bg-body-tertiary">
    <div class="container">
      <div class="row align-items-center g-4">
        <!-- Left Column -->
        <div class="col-lg-6">
          <!-- Section Title -->
          <span class="d-inline-block px-3 py-1 mb-3 bg-warning fw-semibold rounded text-dark">
            FAQ
          </span>
          <h3 class="fw-bold text-dark mb-4">Have any questions?</h3>

          <!-- Accordion -->
          <div class="accordion" id="faqAccordion">
            <!-- Accordion Item 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed fw-bold text-dark accordion-left-icon" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                  aria-controls="collapseOne">
                  What is PERSONAL?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body text-dark">
                  PERSONAL is a multipurpose template designed to make creating
                  modern websites fast and easy.
                </div>
              </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-bold text-dark accordion-left-icon" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  How can I help you?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body text-dark">
                  I provide services such as web design, development, and
                  digital solutions for your business needs.
                </div>
              </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fw-bold text-dark accordion-left-icon" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  Simple process of workflow?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body text-dark">
                  Our workflow includes planning, designing, developing, and
                  delivering your project efficiently.
                </div>
              </div>
            </div>

            <!-- Accordion Item 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed fw-bold text-dark accordion-left-icon" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                  aria-controls="collapseFour">
                  Is PERSONAL a multi-purpose template?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body text-dark">
                  Yes, PERSONAL can be used for portfolios, corporate websites,
                  personal blogs, and more.
                </div>
              </div>
            </div>

            <!-- Accordion Item 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed fw-bold text-dark accordion-left-icon" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                  aria-controls="collapseFive">
                  Why responsive one-page template?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body text-dark">
                  Being responsive ensures your website looks perfect on all
                  devices, providing a great user experience.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-6 text-center">
          <img src="assets/images/light.jpg.png" class="img-fluid rounded" alt="FAQ Illustration" />
        </div>
      </div>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region Client Section -->
  <section id="clients" class="client-section container-fluid py-5 bg-secondary">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center mb-5 text-white">
        <p class="text-warning fw-semibold mb-2">Client Speak</p>
        <h2 class="fw-bold">What Some of My Clients Say</h2>
      </div>

      <!-- Bootstrap Carousel -->
      <div id="clientCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators / Pagination Dots -->
        <div class="carousel-indicators mb-4">
          <button type="button" data-bs-target="#clientCarousel" data-bs-slide-to="0" class="active rounded-circle"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#clientCarousel" data-bs-slide-to="1" class="rounded-circle"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#clientCarousel" data-bs-slide-to="2" class="rounded-circle"
            aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Items -->
        <div class="carousel-inner text-center">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="testimonial-card p-4 rounded mx-auto bg-secondary text-white">
              <p class="testimonial-text fst-italic mb-3">
                "I am happy working with Printing and typesetting industry.
                Quidam lisque persius interessethi."
              </p>
              <div class="client-info d-flex flex-column align-items-center">
                <img src="https://i.pravatar.cc/100?img=1" alt="Client 1" class="rounded-circle mb-2" width="80" />
                <h5 class="mb-0 fw-bold">John Doe</h5>
                <small class="text-white-50">CEO, Company A</small>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="testimonial-card p-4 rounded mx-auto bg-secondary text-white">
              <p class="testimonial-text fst-italic mb-3">
                "Amazing experience! Great communication and on-time
                delivery."
              </p>
              <div class="client-info d-flex flex-column align-items-center">
                <img src="https://i.pravatar.cc/100?img=5" alt="Client 2" class="rounded-circle mb-2" width="80" />
                <h5 class="mb-0 fw-bold">Sarah Lee</h5>
                <small class="text-white-50">Manager, Company B</small>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="testimonial-card p-4 rounded mx-auto bg-secondary text-white">
              <p class="testimonial-text fst-italic mb-3">
                "Very professional and skilled developer. Highly recommend!"
              </p>
              <div class="client-info d-flex flex-column align-items-center">
                <img src="https://i.pravatar.cc/100?img=8" alt="Client 3" class="rounded-circle mb-2" width="80" />
                <h5 class="mb-0 fw-bold">Alex Carter</h5>
                <small class="text-white-50">Founder, Startup C</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#clientCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#clientCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region Contact Section -->
  <section id="contact" class="container-fluid contact-section py-5 bg-warning">
    <div class="container">
      <div class="row g-4 align-items-start">
        <!-- Left Column -->
        <div class="col-12 col-md-6 text-center text-md-start">
          <h4 class="fw-bold mb-3 text-dark">Let's get in touch</h4>
          <p class="mb-3 text-dark">
            I enjoy discussing new projects and design. Please share as much
            info as possible so we can get the most out of our first catch-up.
          </p>
          <p class="mb-2 text-dark">
            <strong>Living In:</strong><br />
            30 Shacham Street, Los Angeles, USA
          </p>
          <p class="mb-4 text-dark">
            <strong>Call:</strong><br />
            (+060) 444 434 444
          </p>
          <div class="d-flex justify-content-center justify-content-md-start gap-3">
            <a href="#" class="text-dark fs-4"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-dark fs-4"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-dark fs-4"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-dark fs-4"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-12 col-md-6">
          <h4 class="fw-bold mb-4 text-center text-md-start text-dark">
            Estimate your project?
          </h4>

          <form>
            <div class="mb-3">
              <label class="form-label fw-semibold text-dark">What is your Name</label>
              <input type="text" class="form-control border-0 border-bottom bg-transparent rounded-0 text-dark"
                placeholder="Enter your name" required />
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold text-dark">Your Email Address</label>
              <input type="email" class="form-control border-0 border-bottom bg-transparent rounded-0 text-dark"
                placeholder="Enter your email" required />
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold text-dark">How can I help you?</label>
              <textarea class="form-control border-0 border-bottom bg-transparent rounded-0 text-dark" rows="4"
                placeholder="Describe your project..." required></textarea>
            </div>

            <div class="text-center text-md-start">
              <button type="submit" class="btn btn-dark btn-sm px-4 py-2 mt-2">
                Send
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- #endregion -->

  <!-- #region Footer Section -->
  <footer class="container-fluid bg-dark py-3 text-white">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Column -->
        <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
          <p class="mb-0">
            © 2021
            <a href="https://your-PERSONAL-link.com" target="_blank" class="text-warning text-decoration-none">
              John Smith
            </a>. All rights reserved.
          </p>
        </div>

        <!-- Right Column -->
        <div class="col-12 col-md-6 text-center text-md-end">
          <p class="mb-0">
            Designed by
            <a href="#" target="_blank" class="text-warning text-decoration-none">
              John Smith
            </a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- #endregion -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="assets/js/main.js"></script>
</body>

</html>