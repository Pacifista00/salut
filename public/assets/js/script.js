window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.getElementById("hamburgerBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const closeBtn = document.getElementById("closeBtn");

    hamburgerBtn.addEventListener("click", () => {
        mobileMenu.classList.add("show");
    });

    closeBtn.addEventListener("click", () => {
        mobileMenu.classList.remove("show");
    });
});

function animateCounters() {
    const counters = document.querySelectorAll(".stat-number");

    counters.forEach((counter) => {
        const target = +counter.getAttribute("data-target");
        let current = 0;
        const duration = 1000; // durasi total animasi (ms)
        const increment = Math.ceil(target / (duration / 16)); // anggap 60fps

        const update = () => {
            current += increment;
            if (current > target) current = target;
            counter.textContent = current;
            if (current < target) requestAnimationFrame(update);
        };

        update();
    });
}

// Jalankan saat semua konten dimuat
window.addEventListener("load", animateCounters);
