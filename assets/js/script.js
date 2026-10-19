document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter');
    const bars = document.querySelectorAll('.chart-bar');
    let animated = false;

    function runAnimations() {
        // 1. Number Increment Counter Animation
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const speed = target / 30;

            const updateCount = () => {
                count += speed;
                if (count < target) {
                    counter.innerText = Math.ceil(count) + '%';
                    setTimeout(updateCount, 30);
                } else {
                    counter.innerText = target + '%';
                }
            };
            updateCount();
        });

        // 2. Bar Height Growth Animation (Upar ki taraf badhna)
        bars.forEach(bar => {
            const targetHeight = bar.getAttribute('data-height');
            bar.style.height = targetHeight;
        });
    }

    // Trigger animation when visible on scroll
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                runAnimations();
                animated = true;
            }
        });
    }, { threshold: 0.3 });

    const chartSection = document.querySelector('.chart-container');
    if (chartSection) {
        observer.observe(chartSection);
    }
});


// Pillars Slider — smooth horizontal wheel + drag + boundary pass-through
document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("pillarsSlider");
    if (!slider) return;

    /* ── Wheel scrolling with smooth animation ── */
    let targetScrollLeft = slider.scrollLeft;
    let animating = false;
    const SCROLL_SPEED = 1.2;   // multiplier for deltaY → horizontal px
    const LERP = 0.15;          // smoothing factor (0–1, lower = smoother)

    function animateScroll() {
        const diff = targetScrollLeft - slider.scrollLeft;
        if (Math.abs(diff) < 0.5) {
            slider.scrollLeft = targetScrollLeft;
            animating = false;
            return;
        }
        slider.scrollLeft += diff * LERP;
        requestAnimationFrame(animateScroll);
    }

    slider.addEventListener("wheel", function (e) {
        if (e.deltaY === 0) return;               // only handle vertical wheel

        const maxScroll = slider.scrollWidth - slider.clientWidth;
        // Use targetScrollLeft (where slider is heading) — not current scrollLeft
        const atStart = targetScrollLeft <= 0;
        const atEnd   = targetScrollLeft >= maxScroll - 1;

        // At boundary and user wants to continue in that direction → let page scroll
        if ((atStart && e.deltaY < 0) || (atEnd && e.deltaY > 0)) return;

        e.preventDefault();
        targetScrollLeft = Math.max(0, Math.min(maxScroll,
            targetScrollLeft + e.deltaY * SCROLL_SPEED));

        if (!animating) {
            animating = true;
            requestAnimationFrame(animateScroll);
        }
    }, { passive: false });

    // Keep targetScrollLeft in sync when user scrolls by other means (touch, scrollbar drag)
    slider.addEventListener("scroll", function () {
        if (!animating) targetScrollLeft = slider.scrollLeft;
    }, { passive: true });

    /* ── Click-and-drag scrolling ── */
    let isDragging = false, dragStartX, dragScrollLeft;

    slider.addEventListener("mousedown", function (e) {
        // Ignore clicks on links / buttons
        if (e.target.closest("a, button")) return;
        isDragging = true;
        slider.classList.add("is-dragging");
        dragStartX = e.pageX - slider.offsetLeft;
        dragScrollLeft = slider.scrollLeft;
    });

    document.addEventListener("mousemove", function (e) {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - dragStartX) * 1.5;
        slider.scrollLeft = dragScrollLeft - walk;
        targetScrollLeft = slider.scrollLeft;
    });

    function endDrag() {
        if (!isDragging) return;
        isDragging = false;
        slider.classList.remove("is-dragging");
    }

    document.addEventListener("mouseup", endDrag);
    document.addEventListener("mouseleave", endDrag);
});

// about us Slider js
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('solutionSlider');
    const prevBtn = document.getElementById('slidePrev');
    const nextBtn = document.getElementById('slideNext');

    if (slider && prevBtn && nextBtn) {
        // Arrow Buttons Scroll Click
        nextBtn.addEventListener('click', function () {
            slider.scrollBy({ left: 340, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', function () {
            slider.scrollBy({ left: -340, behavior: 'smooth' });
        });

        // Mouse Drag / Touch Swipe for Slider
        let isDown = false;
        let startX, scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => { isDown = false; });
        slider.addEventListener('mouseup', () => { isDown = false; });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;
        });
    }
});





