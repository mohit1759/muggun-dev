<?php
$pageTitle = "About Us | Muggun Technologies - Custom Software & IT Solutions";
$pageDescription = "Learn about Muggun Technologies, a leading IT consulting & custom software engineering firm delivering ERP systems, web, mobile, and cloud solutions.";
$keyword ="About Muggun Technologies, Software Engineers Noida, IT Agency Noida, Enterprise Tech Partner, Custom ERP Developers, Agile Software Development, Tech Stack Core PHP Bootstrap, Muggun Tech Team";

include 'includes/header.php';

$solutions = [
    [
        'title'       => 'Web Applications',
        'subtitle'    => '100+ delivered systems',
        'image'       => 'assets/img/photos/web-app.jpg',
        'alt'         => 'Web Engineering'
    ],
    [
        'title'       => 'Enterprise ERP Engines',
        'subtitle'    => '45+ custom workflows',
        'image'       => 'assets/img/photos/erp.jpg',
        'alt'         => 'Enterprise ERP'
    ],
    [
        'title'       => 'Cloud Infrastructure',
        'subtitle'    => '60+ automated deployments',
        'image'       => 'assets/img/photos/cloud.jpg',
        'alt'         => 'Cloud & DevOps'
    ],
    [
        'title'       => 'Mobile Ecosystems',
        'subtitle'    => '30+ cross-platform apps',
        'image'       => 'assets/img/photos/mobileapp.jpg',
        'alt'         => 'Mobile Ecosystems'
    ]
];
?>

<main class="container">
    <section class="py-3 py-md-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7" data-aos="fade-up">
                <span class="badge rounded-pill mb-3 px-3 py-2 bg-primary">About Muggun Technologies · Innovation · Growth</span>
                <h1 class="fw-bold">Empowering Businesses With 
                    <span class="text-primary">Advanced Digital Solutions.</span>
                </h1>
                <p class="text-secondary mb-3">We are a premier software engineering and IT consulting firm based in Noida. Since our inception, we specialize in building scalable custom software, enterprise ERP architectures, high-performance web applications, and mobile ecosystems tailored around your business goals.</p>
                <p class="text-secondary mb-4 ">From startup MVPs to large-scale enterprise automation, our multidisciplinary team handles end-to-end development, UI/UX design, and cloud DevOps infrastructure.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="contact-us.php" class="btn btn-new btn-lg px-4">Start a Project</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="150">
                <div>
                    <img src="assets/img/photos/about-us.png" alt="Muggun Technologies Hero Image" class="img-fluid ">
                </div>
            </div>
        </div>
    </section>  

    <section class="py-3 py-md-4 py-lg-5">
        <div class="row g-4 align-items-center mb-2 mb-md-5" data-aos="fade-up">
            <div class="col-lg-6">
                <h2 class="fw-bold text-dark mb-3">About Us</h2>
                <p class="text-secondary mb-3">Muggun Technologies is a premier full-service technology engineering and digital consulting firm. Since our inception, we have been helping companies-from high-growth startups to enterprise corporations-find, design, build, and deploy high-performance web applications, ERP architectures, and mobile ecosystems.</p>
                <p class="text-secondary mb-0">Our multidisciplinary team handles end-to-end strategy, UI/UX prototyping, full-stack code implementation, quality assurance, and DevOps pipelines until continuous product scale is achieved.</p>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <div class="p-3">
                            <h2 class="fw-bold text-dark mb-1">10+</h2>
                            <p class="text-secondary mb-0">years of engineering experience</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <h2 class="fw-bold text-dark mb-1">100+</h2>
                            <p class="text-secondary mb-0">successful digital deliveries</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <h2 class="fw-bold text-dark mb-1">50+</h2>
                            <p class="text-secondary mb-0">enterprise clients served</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <h2 class="fw-bold text-dark mb-1">98%</h2>
                            <p class="text-secondary mb-0">satisfied client retention</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-between py-4 border-top border-bottom border-light-subtle opacity-75" data-aos="fade-up">
            <div class="col-4 col-md-2 text-center"><span d-block fw-bold text-muted">Bootstrap 5</span></div>
            <div class="col-4 col-md-2 text-center"><span d-block fw-bold text-muted">Core PHP</span></div>
            <div class="col-4 col-md-2 text-center"><span d-block fw-bold text-muted">MySQL</span></div>
            <div class="col-4 col-md-2 text-center"><span d-block fw-bold text-muted">AWS Cloud</span></div>
            <div class="col-4 col-md-2 text-center"><span d-block fw-bold text-muted">Mobile Apps</span></div>
            <div class="col-4 col-md-2 text-center"><span d-block fw-bold text-muted">DevOps</span></div>
        </div>
    </section>

    <section class="py-3 py-md-4 py-lg-5">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4" data-aos="fade-up">
            <div>
                <h2 class="fw-bold text-dark mb-2">Engineering Solutions</h2>
                <p class="text-secondary mb-0">A wide selection of custom software capabilities tailored for your business</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center p-0" id="slidePrev" style="width: 42px; height: 42px;" aria-label="Previous Slide">
                    <i class="bi bi-chevron-left"><</i>
                </button>
                <button class="btn btn-dark rounded-circle d-flex align-items-center justify-content-center p-0" id="slideNext" style="width: 42px; height: 42px; background-color: var(--secondary);" aria-label="Next Slide">
                    <i class="bi bi-chevron-right">></i>
                </button>
            </div>
        </div>

        <div class="row g-4 flex-nowrap overflow-auto custom-slider-container pb-3" id="solutionSlider" data-aos="fade-up">
            <?php foreach ($solutions as $item): ?>
                <div class="col-12 col-sm-6 col-md-4 flex-shrink-0">
                    <div class="card border-0 rounded-5 overflow-hidden shadow-sm h-100 bg-light">
                        <img src="<?= htmlspecialchars($item['image']) ?>" class="card-img-top object-fit-cover" alt="<?= htmlspecialchars($item['alt']) ?>" style="height: 200px;">
                        <div class="card-body p-4 bg-white">
                            <h3 class="h5 fw-bold text-dark mb-1"><?= htmlspecialchars($item['title']) ?></h3>
                            <p class="text-secondary mb-0"><?= htmlspecialchars($item['subtitle']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mb-5 mb-md-5 mb-lg-6">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5" data-aos="fade-up">
                <div>
                    <img src="assets/img/photos/work.jpg" class="img-fluid rounded-5 w-100 object-fit-cover" alt="How We Work" style="min-height: 400px; max-height: 580px;">
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-up">
                <div class="">
                    <h3 class="display-7 fw-bold text-dark mb-2">How we work</h3>
                    <p class="text-secondary mb-4">We have made the process of working with us as simple, transparent, and agile as possible</p>

                    <div class="d-flex flex-column gap-4">
                        <!-- Step 1 -->
                        <div class="d-flex align-items-start gap-3 pb-3 border-bottom border-light-subtle">
                            <div class="rounded-circle text-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 44px; height: 44px; background-color: var(--secondary);">
                                <i class="bi bi-chat-dots-fill fs-5"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Free Consultation</h5>
                                <p class="text-secondary mb-0">Requirement gathering and needs analysis. At this stage, we determine the exact software scope you require.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 pb-3 border-bottom border-light-subtle">
                            <div class="rounded-circle text-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 44px; height: 44px; background-color: var(--secondary);">
                                <i class="bi bi-search fs-5"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Architecture & Tech Stack Selection</h5>
                                <p class="text-secondary mb-0">We design scalable database schemas and select modern frameworks that fit your budget, timeline, and growth goals.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 pb-3 border-bottom border-light-subtle">
                            <div class="rounded-circle text-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 44px; height: 44px; background-color: var(--secondary);">
                                <i class="bi bi-code-slash fs-5"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Agile Development & Sprint Review</h5>
                                <p class="text-secondary mb-0">We build in iterative milestones, providing transparent code updates, preview links, and complete progress overviews.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 pb-3 border-bottom border-light-subtle">
                            <div class="rounded-circle text-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 44px; height: 44px; background-color: var(--secondary);">
                                <i class="bi bi-shield-check fs-5"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">QA Testing & Security Audit</h5>
                                <p class="text-secondary mb-0">We conduct comprehensive code reviews, vulnerability checks, and speed optimization across all device viewports.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="rounded-circle text-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 44px; height: 44px; background-color: var(--secondary);">
                                <i class="bi bi-rocket-takeoff-fill fs-5"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Production Deployment & Ongoing Support</h5>
                                <p class="text-secondary mb-0">We manage live server launches, continuous CI/CD pipelines, and accompany you with post-release maintenance.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
</main>

<?php include 'includes/footer.php';?>
