
<?php
$pageTitle = 'Home | Muggun Technologies';
$pageDescription = 'Muggun Technologies delivers custom software, ERP, web development, mobile applications, branding and UI/UX solutions.';
$keyword = "Muggun Technologies, Software Development Company Noida, IT Consulting Noida, Custom Software Development, ERP Solutions India, Web Application Engineering, Mobile App Development, Digital Transformation, IT Company Sector 122 Noida";

include 'includes/header.php';

// Services List
$pillars = [
    [
        'number' => '01',
        'title' => 'UI/UX & Web Design',
        'description' => 'High-converting visual interfaces backed by strategic user experience research.',
        'tags' => ['Information Architecture', 'Design Systems', 'Interactive Prototypes'],
        'image' => 'assets/img/photos/uidesign.jpg',
        'link_text' => 'Explore UI/UX Services'
    ],
    [
        'number' => '02',
        'title' => 'Full-Stack Engineering',
        'description' => 'Secure, high-speed web apps, client portals, and dynamic SaaS architectures.',
        'tags' => ['SaaS Platforms', 'Client Portals', 'API Engineering'],
        'image' => 'assets/img/photos/fullstack.jpg',
        'link_text' => 'Explore Web Engineering'
    ],
    [
        'number' => '03',
        'title' => 'Mobile App Solutions',
        'description' => 'Native and cross-platform mobile apps featuring real-time features and sync.',
        'tags' => ['Android & iOS', 'Cross-Platform', 'App Ecosystems'],
        'image' => 'assets/img/photos/mobileapp.jpg',
        'link_text' => 'Explore Mobile Apps'
    ],
    [
        'number' => '04',
        'title' => 'Custom Enterprise Software',
        'description' => 'Tailored ERP engines, workflow management systems, and business intelligence.',
        'tags' => ['Workflow Automation', 'Business Dashboards'],
        'image' => 'assets/img/photos/customer-softwere.jpg',
        'link_text' => 'Explore Software'
    ],
    [
        'number' => '05',
        'title' => 'Branding & Digital Growth',
        'description' => 'Strategic marketing campaigns, search engine optimization, and corporate identity.',
        'tags' => ['Brand Identity', 'SEO & Marketing'],
        'image' => 'assets/img/photos/brandingdigital.jpg',
        'link_text' => 'Explore Marketing'
    ],
    [
        'number' => '06',
        'title' => 'Cloud Infrastructure & DevOps',
        'description' => 'Reliable cloud architectures, automated deployment pipelines, and continuous monitoring.',
        'tags' => ['DevOps Automation', 'Cloud Migration'],
        'image' => 'assets/img/photos/branding.jpg',
        'link_text' => 'Explore Cloud Solutions'
    ]
];
?>

<!-- main Section -->
<section class="container py-3 py-md-5">
    <div class="row g-4 align-items-center">
        <div class="col-lg-7" data-aos="fade-up">
            <span class="badge rounded-pill mb-3 px-3 py-2 bg-primary">Technology - Innovation - Growth</span>
            <h1 class="fw-bold mt-3">We Build Digital Solutions
                <span class="text-primary">That Move Business Forward.</span>
            </h1>
            <p class="text-secondary mb-4 ">From custom software to modern web and mobile applications,we help turn business ideas into practical digital solutions.</p>
            <div class="d-flex flex-wrap gap-3">
                <a href="contact-us.php" class="btn btn-new btn-lg px-4">Start a Project</a>
                <a href="services.php"class="btn btn-outline-secondary btn-lg px-4">Explore Services</a>
            </div>

        </div>
        <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
            <div>
                <img src="assets/img/main-img.png" alt="Muggun Technologies Hero Image" class="img-fluid rounded-4">
            </div>
        </div>
    </div>
</section>


<!-- Services Section -->
<section class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-7">
                <span class="text-uppercase fw-bold text-primary" style="letter-spacing: 1px;">CORE COMPETENCIES</span>
                <h2 class="fw-bold mt-2 mb-0">Six Pillars of Engineering. <span class="text-primary">One Strategic Partner.</span></h2>
            </div>
            <div class="col-lg-5">
                <p class="text-secondary mb-0">From MVP prototyping to enterprise software migration, brand development to search optimization - we handle every layer of your digital stack.</p>
            </div>
        </div>
        <?php include 'includes/component/services-slider.php';?>
    </div>
</section>

<!-- About Preview Section -->
<section class="container py-5">
    <div class="row align-items-center g-4 py-lg-4">
        <div class="col-lg-6" data-aos="fade-right">
            <span class="text-primary fw-bold uppercase tracking-wider mb-3 d-block" style="letter-spacing: 1px;"> ABOUT OUR COMPANY</span>
            <h2 class="display-6 fw-bold mt-2 mb-3">Technology With a Purpose</h2>
            <p class="text-secondary">We focus on combining technology, functionality and thoughtful design to create digital solutions that address business needs.</p>
            <p class="text-secondary"> Our approach centres on understanding requirements, building practical solutions and creating useful digital experiences.</p>
            <a href="about.php" class="btn btn-new mt-2"> Discover Our Company</a>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
            <div class="rounded-4 p-4 p-md-5"style="background-color: #EFF6FF;">
                <h3 class="fw-bold mb-4">Our Approach</h3>
                <div class="d-flex gap-3 mb-4">
                    <span class="text-primary fw-bold">01.</span>
                    <div>
                        <h4 class="small fw-bold">Understand</h4>
                        <p class="text-secondary mb-0">Identify business goals and requirements.</p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-4">
                    <span class="text-primary fw-bold">02.</span>
                    <div>
                        <h4 class="small fw-bold">Develop</h4>
                        <p class="text-secondary mb-0">Create solutions with usability in mind.</p>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <span class="text-primary fw-bold">03.</span>
                    <div>
                        <h4 class="small fw-bold">Improve</h4>
                        <p class="text-secondary mb-0">Refine the experience around user needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Infrastructure & Integration Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="feature-dark-card p-4 p-md-4 d-flex flex-column justify-content-between shadow-lg">
                    <div>
                        <div class="mb-4">
                        </div>
                        <h2 class="text-white">Cloud & IT Infrastructure</h2>
                        <p class="mb-4">Modernize your systems with cloud migration, secure hosting, DevOps automation, and reliable infrastructure management.</p>
                        <ul class="list-unstyled text-white mb-4">
                            <li class="mb-2 d-flex align-items-center"><span class="badge bg-warning rounded-circle p-1 me-2" style="width: 8px; height: 8px;"></span> Cloud Migration</li>
                            <li class="mb-2 d-flex align-items-center"><span class="badge bg-warning rounded-circle p-1 me-2" style="width: 8px; height: 8px;"></span> Server Management</li>
                            <li class="d-flex align-items-center"><span class="badge bg-warning rounded-circle p-1 me-2" style="width: 8px; height: 8px;"></span> DevOps Support</li>
                        </ul>
                    </div>
                    <div>
                        <a href="services.php" class="read-more-link">Read More </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-left">
                <div class="feature-white-card p-4 p-md-5 d-flex flex-column justify-content-between shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h2 class="h3 fw-bold text-dark mb-0">Seamless Technology Integration</h2>
                            <span class="badge rounded-pill px-3 py-1 fw-semibold d-flex align-items-center gap-1" style="background-color: #fff7ed !important;  border: 1px solid #ffedd5;">
                                <span class="rounded-circle bg-warning" style="width: 6px; height: 6px; display: inline-block;"></span>
                                 Live
                            </span>
                        </div>
                        <p class="text-secondary mb-4">Connect your ERP, CRM, website, mobile apps, payment systems, and reporting tools with clean APIs and dependable workflows that reduce manual work.</p>
                    </div>
                    <div class="mt-4 pt-2">
                        <div class="chart-container">
                            <div class="chart-bar-item">
                                <span class="small fw-bold text-dark mb-2 counter" data-target="37" style="font-size: 11px;">0%</span>
                                <div class="chart-bar" data-height="40px"></div>
                                <span class="text-muted mt-2" style="font-size: 10px;">01 Jun</span>
                            </div>
                            <div class="chart-bar-item">
                                <span class="small fw-bold text-dark mb-2 counter" data-target="56" style="font-size: 11px;">0%</span>
                                <div class="chart-bar" data-height="65px"></div>
                                <span class="text-muted mt-2" style="font-size: 10px;">02 Jun</span>
                            </div>
                            <div class="chart-bar-item">
                                <span class="small fw-bold text-dark mb-2 counter" data-target="68" style="font-size: 11px;">0%</span>
                                <div class="chart-bar" data-height="85px"></div>
                                <span class="text-muted mt-2" style="font-size: 10px;">03 Jun</span>
                            </div>
                            <div class="chart-bar-item">
                                <span class="small fw-bold text-dark mb-2 counter" data-target="91" style="font-size: 12px;">0%</span>
                                <div class="chart-bar active shadow-sm" data-height="120px"></div>
                                <span class="text-dark fw-bold mt-2" style="font-size: 10px;">15 Jun</span>
                            </div>
                            <div class="chart-bar-item">
                                <span class="small fw-bold text-dark mb-2 counter" data-target="62" style="font-size: 11px;">0%</span>
                                <div class="chart-bar" data-height="75px"></div>
                                <span class="text-muted mt-2" style="font-size: 10px;">20 Jun</span>
                            </div>
                            <div class="chart-bar-item">
                                <span class="small fw-bold text-dark mb-2 counter" data-target="88" style="font-size: 11px;">0%</span>
                                <div class="chart-bar" data-height="110px"></div>
                                <span class="text-muted mt-2" style="font-size: 10px;">27 Jun</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mt-3 mt-lg-4" data-aos="fade-up">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="h-100 p-4 rounded-5 bg-primary bg-opacity-50"style="min-height: 400px;">
                    <div class="d-flex align-items-center justify-content-center  rounded-4 mb-4"style="width: 60px; height: 60px;">
                         <a href="/"target="_blank" class="social-link instagram" aria-label="Instagram">
                            <img src="assets/img/live.svg" alt="Instagram" class="social-img">
                        </a>
                    </div>
                    <h4 class="fw-bold text-dark">Live Insights</h4>
                    <p class="mb-0">Monitor project, system, and business metrics as they happen.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="h-100 p-4 rounded-5"style=" min-height: 400px;background-color: #f97316;">
                    <div class="d-flex align-items-center justify-content-center  rounded-4 mb-4"style="width: 60px; height: 60px;">
                         <a href="/"target="_blank" class="social-link instagram" aria-label="Instagram">
                            <img src="assets/img/faster.svg" alt="Instagram" class="social-img">
                        </a>
                    </div>
                    <h4 class="fw-bold text-white">Faster Decisions</h4>
                    <p class="text-white mb-0">Turn technology data into clear decisions for your business.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="h-100 p-3 bg-white border rounded-5">
                    <img src="assets/img/photos/support.jpg"alt="Managed IT Support"class="img-fluid w-100 rounded-4 mb-4"style="height: 220px; object-fit: cover;">
                    <div class="px-2 pb-2">
                        <h4 class="fw-bold">Managed IT Support</h4>
                        <p class="text-secondary mb-0">Proactive monitoring, troubleshooting, maintenance,backups, and responsive technical support.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="h-100 p-3 bg-white border rounded-5">
                    <img src="assets/img/photos/ai-solutions.jpg"alt="Automation and AI Solutions"class="img-fluid w-100 rounded-4 mb-4"style="height: 220px; object-fit: contain;">
                    <div class="px-2 pb-2">
                        <h4 class="fw-bold">Automation &amp; AI Solutions</h4>
                        <p class="text-secondary mb-0">AI-enabled workflows that reduce repetitive tasksand make business processes faster and more accurate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Talent Incubation & Live Projects Banner Section -->
<section class="container py-3 py-md-5">
    <div class="incubation-banner position-relative overflow-hidden p-4 p-md-5 rounded-5 shadow-sm">
        <div class="watermark-text-large" >
            BUILD<br>YOUR<br>FUTURE.
        </div>
        <div class="row align-items-center position-relative g-4" style="z-index: 2;" data-aos="zoom-in">
            <div class="col-lg-8">
                <span class="text-uppercase fw-bold tracking-wider mb-3 d-block incubation-tagline">TALENT INCUBATION & LIVE PROJECTS</span>
                <h2 class="display-5 fw-bold text-dark mb-2 lh-sm">Master modern tech stacks.<br>
                    <span class="text-primary">Engineered for real-world growth.</span>
                </h2>
                <p class="text-secondary fs-6 mt-3 mb-0 pe-lg-4" style="max-width: 640px; line-height: 1.6;">Work directly alongside senior engineers at Muggun Technologies. Gain hands-on exposure to enterprise ERP architectures, full-stack web engineering, cloud deployment, and live client projects with structured technical mentorship.</p>
                <div class="d-flex flex-wrap gap-2 mt-3">
                    <span class="badge bg-white text-dark border px-3 py-2 fw-normal rounded-pill shadow-sm">
                        <i class="text-primary"></i> Full-Stack & Web Development
                    </span>
                    <span class="badge bg-white text-dark border px-3 py-2 fw-normal rounded-pill shadow-sm">
                        <i class="text-primary"></i> Mobile Application Engineering
                    </span>
                    <span class="badge bg-white text-dark border px-3 py-2 fw-normal rounded-pill shadow-sm">
                        <i class="text-primary"></i> Enterprise ERP & Cloud Systems
                    </span>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="internship.php" class="btn btn-new">
                    <span>Explore Internship Programs</span>
                </a>
            </div>
    </div>
    </div>
</section>

<section class="container py-3 py-md-5 mb-4 mb-md-0">
    <div class="rounded-5 p-4 p-md-5 text-white text-center shadow-lg bg-secondary">
        <h2 class="display-6 fw-bold">Have an Idea? Let's Build It.</h2>
        <p class="text-secondary mx-auto">Tell us about your project and explore the right digital solution for your business.</p>
        <a href="contact-us.php" class="btn btn-primary">Get in Touch</a>
    </div>
</section>

<?php include 'includes/footer.php';?>
