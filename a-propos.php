<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative h-[60vh] flex items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 bg-black/60 z-10"></div>
        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" class="absolute inset-0 w-full h-full object-cover" alt="Salle du restaurant">
        <div class="relative z-20 max-w-4xl px-4">
            <h1 class="text-white text-5xl md:text-7xl font-serif mb-4">Notre Histoire</h1>
            <p class="text-primary uppercase tracking-[4px] text-sm">De la passion à l'excellence</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 px-[5%] bg-white dark:bg-dark transition-theme">
        <div class="max-w-4xl mx-auto space-y-16">
            <div class="text-center">
                <h2 class="text-3xl font-serif mb-8 text-secondary dark:text-primary">Une Vision Culinaire</h2>
                <p class="text-gray-500 dark:text-gray-400 leading-loose text-lg italic">
                    "Nous ne servons pas seulement de la nourriture, nous créons des souvenirs."
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-start text-gray-500 dark:text-gray-400 text-sm leading-loose">
                <div class="space-y-6">
                    <h3 class="text-black dark:text-white font-serif text-xl mb-4">L'Origine</h3>
                    <p>Fondé en 2015 par le Chef Jean-Pierre Lucas, L'Art Culinaire est né d'une volonté simple : redonner ses lettres de noblesse au produit brut. Dans un monde qui va trop vite, nous avons choisi de prendre le temps.</p>
                    <p>Chaque ingrédient qui entre dans notre cuisine est sélectionné avec une rigueur absolue auprès de producteurs locaux qui partagent nos valeurs de respect de la terre et des cycles naturels.</p>
                </div>
                <div class="space-y-6">
                    <h3 class="text-black dark:text-white font-serif text-xl mb-4">La Philosophie</h3>
                    <p>Notre cuisine se définit par l'équilibre. L'équilibre entre tradition et innovation, entre puissance et subtilité. Nous croyons que la perfection réside dans les détails les plus infimes.</p>
                    <p>Le décor, pensé comme un écrin de sérénité, a été conçu pour laisser toute la place à l'expérience gustative, créant un dialogue harmonieux entre le lieu et l'assiette.</p>
                </div>
            </div>

            <div class="pt-12 border-t border-gray-100 dark:border-surface">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <span class="block text-3xl font-serif text-primary mb-2">10</span>
                        <span class="text-[10px] uppercase tracking-widest text-gray-400">Années de passion</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-serif text-primary mb-2">2</span>
                        <span class="text-[10px] uppercase tracking-widest text-gray-400">Étoiles Michelin</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-serif text-primary mb-2">450</span>
                        <span class="text-[10px] uppercase tracking-widest text-gray-400">Vins d'exception</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-serif text-primary mb-2">12</span>
                        <span class="text-[10px] uppercase tracking-widest text-gray-400">Producteurs locaux</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
