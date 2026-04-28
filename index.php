<?php include 'includes/header.php'; ?>

<main>
    <!-- Section Hero Carousel -->
    <section id="accueil" class="relative h-screen w-full overflow-hidden bg-black">
        <div id="carousel" class="h-full w-full">
            <!-- Slide 1 -->
            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out flex items-center justify-center text-center px-4" 
                 style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
                <div class="max-w-4xl">
                    <h2 class="text-white uppercase tracking-[4px] text-sm mb-4 font-sans slide-up">Une expérience sensorielle</h2>
                    <h1 class="text-white text-5xl md:text-7xl font-bold font-serif mb-8 slide-up">L'Éveil des Sens</h1>
                    <a href="#menu" class="inline-block border border-primary text-white px-10 py-4 uppercase text-xs tracking-widest hover:bg-primary hover:text-black transition-all slide-up">Voir la Carte</a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out flex items-center justify-center text-center px-4" 
                 style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
                <div class="max-w-4xl">
                    <h2 class="text-white uppercase tracking-[4px] text-sm mb-4 font-sans">La Fraîcheur du Terroir</h2>
                    <h1 class="text-white text-5xl md:text-7xl font-bold font-serif mb-8">Produits d'Exception</h1>
                    <a href="#reservation" class="inline-block border border-primary text-white px-10 py-4 uppercase text-xs tracking-widest hover:bg-primary hover:text-black transition-all">Réserver une Table</a>
                </div>
            </div>
        </div>
        
        <!-- Indicateurs -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex gap-4 z-10">
            <button class="dot w-10 h-[2px] bg-white/30 transition-all"></button>
            <button class="dot w-10 h-[2px] bg-white/30 transition-all"></button>
        </div>
    </section>

    <!-- Section Menu -->
    <section id="menu" class="py-24 px-[5%] bg-white dark:bg-dark transition-theme">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif mb-8">Gastronomie</h2>
                <div class="flex flex-wrap justify-center gap-6 md:gap-12">
                    <button class="filter-btn text-xs uppercase tracking-widest font-semibold text-primary border-b border-primary pb-1" data-filter="all">Tous</button>
                    <button class="filter-btn text-xs uppercase tracking-widest font-semibold text-gray-400 hover:text-primary transition-colors pb-1 border-b border-transparent" data-filter="entree">Entrées</button>
                    <button class="filter-btn text-xs uppercase tracking-widest font-semibold text-gray-400 hover:text-primary transition-colors pb-1 border-b border-transparent" data-filter="plat">Plats</button>
                    <button class="filter-btn text-xs uppercase tracking-widest font-semibold text-gray-400 hover:text-primary transition-colors pb-1 border-b border-transparent" data-filter="dessert">Desserts</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-12">
                <!-- Item 1 -->
                <div class="menu-item group" data-category="entree">
                    <div class="flex justify-between items-baseline mb-2">
                        <h3 class="text-xl font-medium font-serif group-hover:text-primary transition-colors">Foie Gras Poêlé</h3>
                        <span class="text-primary font-semibold">28€</span>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 italic text-sm">Figues rôties au miel et pain brioché artisanal.</p>
                    <div class="h-[1px] bg-gray-100 dark:bg-surface mt-4"></div>
                </div>
                <!-- Item 2 -->
                <div class="menu-item group" data-category="plat">
                    <div class="flex justify-between items-baseline mb-2">
                        <h3 class="text-xl font-medium font-serif group-hover:text-primary transition-colors">Filet de Bœuf Rossini</h3>
                        <span class="text-primary font-semibold">45€</span>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 italic text-sm">Truffes fraîches du Périgord et jus corsé au Porto.</p>
                    <div class="h-[1px] bg-gray-100 dark:bg-surface mt-4"></div>
                </div>
                <!-- Item 3 -->
                <div class="menu-item group" data-category="dessert">
                    <div class="flex justify-between items-baseline mb-2">
                        <h3 class="text-xl font-medium font-serif group-hover:text-primary transition-colors">Dôme Chocolat Noir</h3>
                        <span class="text-primary font-semibold">16€</span>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 italic text-sm">Cœur coulant caramel beurre salé et éclats d'or.</p>
                    <div class="h-[1px] bg-gray-100 dark:bg-surface mt-4"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Chef -->
    <section class="py-24 px-[5%] bg-white dark:bg-dark overflow-hidden transition-theme">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 relative group">
                <div class="absolute -inset-4 border border-primary/20 translate-x-8 translate-y-8 group-hover:translate-x-4 group-hover:translate-y-4 transition-transform duration-500"></div>
                <img src="https://images.unsplash.com/photo-1583394238182-6f71f218a66e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Chef Jean-Pierre" class="relative z-10 w-full h-[600px] object-cover grayscale group-hover:grayscale-0 transition-all duration-700 shadow-2xl">
            </div>
            <div class="md:w-1/2">
                <h3 class="text-primary font-semibold tracking-[3px] uppercase text-xs mb-4">L'Âme de la Cuisine</h3>
                <h2 class="text-4xl md:text-5xl font-serif mb-8">Chef Jean-Pierre Lucas</h2>
                <p class="text-gray-500 dark:text-gray-400 italic mb-8 leading-relaxed text-lg">
                    "La cuisine n'est pas une simple technique, c'est un langage pour exprimer ce que les mots ne peuvent dire."
                </p>
                <div class="space-y-6 text-gray-500 dark:text-gray-400 text-sm leading-loose">
                    <p>Originaire de Bretagne, le Chef Jean-Pierre a forgé son talent dans les plus grandes cuisines étoilées avant de fonder L'Art Culinaire. Son secret ? Le respect absolu de la saisonnalité et une obsession pour la pureté des saveurs.</p>
                    <p>Chaque plat qu'il conçoit est un hommage au terroir français, revisité avec une audace contemporaine qui surprend autant qu'elle réconforte.</p>
                </div>
                <a href="a-propos.php" class="inline-block mt-10 text-primary border-b border-primary/30 pb-2 hover:border-primary transition-all uppercase text-[10px] tracking-widest font-bold">Découvrir son parcours</a>
            </div>
        </div>
    </section>

    <!-- Section Témoignages -->
    <section class="py-24 bg-gray-50 dark:bg-surface transition-theme">
        <div class="max-w-4xl mx-auto px-[5%] text-center">
            <div class="mb-12">
                <span class="text-5xl text-primary font-serif opacity-50 italic">"</span>
            </div>
            <div id="testimonial-slider">
                <div class="testimonial-item">
                    <p class="text-xl md:text-2xl font-serif mb-8 text-gray-800 dark:text-gray-200">
                        "Une expérience transcendante. La symphonie des goûts et la précision du service font de ce lieu une adresse incontournable pour les vrais passionnés de gastronomie."
                    </p>
                    <h4 class="text-primary uppercase tracking-[2px] text-xs font-bold">Marc-Antoine V. — Critique Gastronomique</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Réservation -->
    <section id="reservation" class="py-24 px-[5%] bg-gray-50 dark:bg-surface transition-theme">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl font-serif mb-6">Réserver une Table</h2>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-8">
                    Une invitation au voyage culinaire. Chaque table est une promesse d'excellence. 
                    Nous vous accueillons du mardi au samedi pour le déjeuner et le dîner.
                </p>
                <div class="text-primary font-semibold tracking-widest text-sm uppercase">
                    <p class="mb-2">01 23 45 67 89</p>
                    <p>contact@artculinaire.fr</p>
                </div>
            </div>

            <form action="process-booking.php" method="POST" class="space-y-6 bg-white dark:bg-dark p-8 shadow-xl dark:shadow-none border border-gray-100 dark:border-surface">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Nom complet" required 
                           class="w-full bg-transparent border border-gray-200 dark:border-surface p-3 outline-none focus:border-primary transition-colors text-sm">
                    <input type="email" name="email" placeholder="Email" required 
                           class="w-full bg-transparent border border-gray-200 dark:border-surface p-3 outline-none focus:border-primary transition-colors text-sm">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <input type="date" name="date" required 
                           class="w-full bg-transparent border border-gray-200 dark:border-surface p-3 outline-none focus:border-primary transition-colors text-sm">
                    <select name="guests" class="w-full bg-transparent border border-gray-200 dark:border-surface p-3 outline-none focus:border-primary transition-colors text-sm">
                        <option value="2">2 Personnes</option>
                        <option value="3">3 Personnes</option>
                        <option value="4">4 Personnes</option>
                        <option value="more">Plus de 4</option>
                    </select>
                </div>
                <textarea name="message" placeholder="Demandes particulières" rows="4" 
                          class="w-full bg-transparent border border-gray-200 dark:border-surface p-3 outline-none focus:border-primary transition-colors text-sm resize-none"></textarea>
                <button type="submit" class="w-full bg-primary text-black font-bold uppercase text-xs tracking-widest py-4 hover:bg-white hover:border-primary border border-transparent transition-all">
                    Confirmer la Réservation
                </button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
