<?php include 'includes/header.php'; ?>

<main class="pt-32 pb-24 px-[5%] bg-white dark:bg-dark transition-theme">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-serif mb-4">Galerie Visuelle</h1>
            <p class="text-primary uppercase tracking-[4px] text-xs">L'Art Culinaire en images</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Image 1 -->
            <div class="group relative overflow-hidden h-80 bg-gray-100 dark:bg-surface">
                <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Plat signature" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                    <span class="text-white uppercase tracking-widest text-xs border border-white px-4 py-2">Découvrir</span>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="group relative overflow-hidden h-80 bg-gray-100 dark:bg-surface">
                <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cuisine" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                    <span class="text-white uppercase tracking-widest text-xs border border-white px-4 py-2">La Cuisine</span>
                </div>
            </div>
            <!-- Image 3 -->
            <div class="group relative overflow-hidden h-80 bg-gray-100 dark:bg-surface lg:col-span-1">
                <img src="https://images.unsplash.com/photo-1550966842-205167664687?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Salle de restaurant" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                    <span class="text-white uppercase tracking-widest text-xs border border-white px-4 py-2">L'Ambiance</span>
                </div>
            </div>
            <!-- Image 4 -->
            <div class="group relative overflow-hidden h-[500px] md:col-span-2 bg-gray-100 dark:bg-surface">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Plat raffiné" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                    <span class="text-white uppercase tracking-widest text-xs border border-white px-4 py-2">Signature</span>
                </div>
            </div>
            <!-- Image 5 -->
            <div class="group relative overflow-hidden h-[500px] bg-gray-100 dark:bg-surface">
                <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cave à vin" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                    <span class="text-white uppercase tracking-widest text-xs border border-white px-4 py-2">La Cave</span>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
