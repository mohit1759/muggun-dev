
<?php
$pageTitle = "Our Services | Muggun Technologies";
$pageDescription = "Explore software development, ERP solutions, web and mobile app development, branding, digital marketing, and UI/UX design services by Muggun Technologies.";
$keyword ="Custom Software Development, ERP Software Development, Web Application Development, Mobile App Development, Branding and Digital Marketing, UI UX Design Services, Cloud DevOps Infrastructure, IT Solutions Noida";

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

<!-- Services main Section -->
<section class="bg-secondary">
    <div class="container py-3 py-md-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-8" data-aos="fade-right">
                <span class="badge rounded-pill mb-3 px-3 py-2 bg-primary">WHAT WE DO</span>
                <h1 class="fw-bold mb-4 text-white">Technology Solutions for</br><span class="text-primary">Your Business</span></h1>
                <p class="text-secondary mb-4">From custom software to digital experiences, we help businesses build practical technology solutions for their evolving needs.</p>
                <a href="contact-us.php" class="btn btn-new text-white">Discuss Your Project</a>
            </div>

            <div class="col-lg-4" data-aos="fade-left">
                <div class="bg-white text-dark rounded-4 shadow p-4">
                    <h2 class="fw-bold mb-3">Our Expertise</h2>
                    <p class="text-secondary mb-3">Technology that supports your business goals.</p>
                    <div class="d-flex align-items-center mb-3">
                        <span class="rounded-circle me-3 d-flex align-items-center justify-content-center text-white bg-primary"style="width: 42px; height: 42px;">
                            01
                        </span>
                        <span class="fw-semibold">Software Solutions</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <span class="rounded-circle me-3 d-flex align-items-center justify-content-center text-white bg-primary"style="width: 42px; height: 42px;">
                            02
                        </span>
                        <span class="fw-semibold">Web & Mobile Development</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="rounded-circle me-3 d-flex align-items-center justify-content-center text-white bg-primary"style="width: 42px; height: 42px;">
                            03
                        </span>
                        <span class="fw-semibold">Design & Digital Growth</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-3 py-md-5 bg-light">
    <div class="container">
            <div class="text-center mx-auto mb-4"data-aos="fade-up">
                <span class="text-uppercase fw-bold text-primary">OUR SERVICES</span>
                <h2 class="fw-bold text-dark mt-2 mb-2">What We Can Do for You</h2>
                <p class="text-secondary mb-0">Explore our range of technology and digital services designed to address different business requirements.</p>
            </div>
        <?php include 'includes/component/services-slider.php';?>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-3 py-md-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="text-primary fw-bold text-uppercase">Why Choose Us</span>
                <h2 class="fw-bold mt-2 mb-4">A Practical Approach to Technology</h2>
                <p class="text-secondary mb-4"> Every business has different challenges. Choosing the right technology starts with understanding your needs and defining a clear approach to the solution.</p>
                <a href="about.php" class="btn btn-primary">Learn About Us</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-4 rounded-4 mb-3 card">
                    <h5 class="fw-bold">Business-Focused Solutions</h5>
                    <p class="text-secondary mb-0">Solutions planned around your requirements and business objectives.</p>
                </div>
                <div class="p-4 rounded-4 card mb-3"style="background-color: #F8FAFC;">
                    <h5 class="fw-bold">Responsive User Experiences</h5>
                    <p class="text-secondary mb-0">Interfaces designed to work across desktop, tablet, and mobile screens.</p>
                </div>
                <div class="p-4 rounded-4 card"style="background-color: #FFFBEB;">
                    <h5 class="fw-bold">Focus on Quality</h5>
                    <p class="text-secondary mb-0">Attention to usability, maintainability, and the needs of your project.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-3 py-md-5 mb-4 mb-md-0">
    <div class="container">
        <div class="rounded-5 p-4 p-md-5 text-white text-center shadow-lg bg-secondary">
            <h5 class="display-6 fw-bold mb-3">Have a Project in Mind?</h5>
            <p class="text-secondary mx-auto">Tell us about your business requirements and explore the right technology solution for your project.</p>
            <a href="contact-us.php" class="btn btn-primary">Contact Our Team</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
