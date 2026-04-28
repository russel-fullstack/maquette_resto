document.addEventListener('DOMContentLoaded', () => {
    // --- MODE SOMBRE ---
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.documentElement;

    // Charger le thème sauvegardé
    if (localStorage.getItem('theme') === 'light') {
        html.classList.remove('dark');
    }

    themeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
    });

    // --- CAROUSEL ---
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach(s => s.classList.add('opacity-0'));
        dots.forEach(d => d.classList.replace('bg-primary', 'bg-white/30'));
        dots.forEach(d => d.classList.remove('w-16'));

        slides[index].classList.remove('opacity-0');
        slides[index].classList.add('opacity-100');
        dots[index].classList.replace('bg-white/30', 'bg-primary');
        dots[index].classList.add('w-16');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Auto play
    let slideInterval = setInterval(nextSlide, 5000);

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            currentSlide = i;
            showSlide(currentSlide);
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        });
    });

    // Initialisation
    showSlide(0);

    // --- TÉMOIGNAGES ---
    const testimonials = [
        {
            text: "Une expérience transcendante. La symphonie des goûts et la précision du service font de ce lieu une adresse incontournable.",
            author: "Marc-Antoine V. — Critique Gastronomique"
        },
        {
            text: "Le menu dégustation est un voyage sans faute. Mention spéciale pour le turbot, une pure merveille de justesse.",
            author: "Sophie L. — Épicurienne"
        },
        {
            text: "L'élégance du lieu n'a d'égale que la finesse des assiettes. Un moment suspendu dans le temps.",
            author: "Jean-Philippe R. — Guide Local"
        }
    ];

    const testimonialContainer = document.getElementById('testimonial-slider');
    if (testimonialContainer) {
        let currentTestimonial = 0;
        
        function updateTestimonial() {
            testimonialContainer.classList.add('opacity-0');
            setTimeout(() => {
                const t = testimonials[currentTestimonial];
                testimonialContainer.innerHTML = `
                    <div class="testimonial-item">
                        <p class="text-xl md:text-2xl font-serif mb-8 text-gray-800 dark:text-gray-200">"${t.text}"</p>
                        <h4 class="text-primary uppercase tracking-[2px] text-xs font-bold">${t.author}</h4>
                    </div>
                `;
                testimonialContainer.classList.remove('opacity-0');
                testimonialContainer.classList.add('transition-opacity', 'duration-500');
                currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            }, 500);
        }

        setInterval(updateTestimonial, 8000);
    }
    const filterBtns = document.querySelectorAll('.filter-btn');
    const menuItems = document.querySelectorAll('.menu-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            // Update UI boutons
            filterBtns.forEach(b => {
                b.classList.remove('text-primary', 'border-primary');
                b.classList.add('text-gray-400', 'border-transparent');
            });
            btn.classList.add('text-primary', 'border-primary');
            btn.classList.remove('text-gray-400', 'border-transparent');

            // Filtrer les éléments
            menuItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                    item.classList.add('fade-in');
                } else {
                    item.style.display = 'none';
                    item.classList.remove('fade-in');
                }
            });
        });
    });
});
