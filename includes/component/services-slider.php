<div class="row g-4 flex-nowrap overflow-auto pb-4 custom-scrollbar" id="pillarsSlider">
            <?php foreach ($pillars as $index => $pillar): ?>
            <div class="col-12 col-md-6 col-lg-3 flex-shrink-0" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white hover-pillar-card">
                    <div class="pillar-img-wrapper">
                        <img src="<?= htmlspecialchars($pillar['image']) ?>" class="card-img-top pillar-img" alt="<?= htmlspecialchars($pillar['title']) ?>">
                    </div>
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div class="d-flex gap-2">
                                <h5 class="fw-bold d-block text-primary"><?= htmlspecialchars($pillar['number']) ?></h5>
                                <div>
                                    <h5 class="mb-3 fw-bold"><?= htmlspecialchars($pillar['title']) ?></h5>
                                </div>
                            </div>
                            <p class="text-secondary mb-3"><?= htmlspecialchars($pillar['description']) ?></p>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <?php foreach ($pillar['tags'] as $tag): ?>
                                    <span class="badge bg-light text-dark border-0 fw-normal px-2 py-2 rounded-2"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                            <a href="services.php" class="fw-semibold text-decoration-none"><?= htmlspecialchars($pillar['link_text']) ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>