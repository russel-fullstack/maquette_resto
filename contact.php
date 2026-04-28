<?php include 'includes/header.php'; ?>

<main class="pt-32 pb-24 px-[5%] bg-white dark:bg-dark transition-theme">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-serif mb-4">Nous Contacter</h1>
            <p class="text-primary uppercase tracking-[4px] text-xs">Situé au cœur de la ville</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-16">
            <!-- Informations -->
            <div class="lg:col-span-1 space-y-12">
                <div>
                    <h3 class="text-primary uppercase tracking-widest text-xs font-bold mb-4">Adresse</h3>
                    <p class="text-gray-500 dark:text-gray-400 leading-loose">
                        12 Avenue des Champs-Élysées<br>
                        75008 Paris, France
                    </p>
                </div>

                <div>
                    <h3 class="text-primary uppercase tracking-widest text-xs font-bold mb-4">Horaires</h3>
                    <ul class="text-gray-500 dark:text-gray-400 space-y-2">
                        <li class="flex justify-between"><span>Mardi - Samedi</span> <span>12:00 - 14:30</span></li>
                        <li class="flex justify-between"><span></span> <span>19:30 - 22:30</span></li>
                        <li class="flex justify-between text-red-800 dark:text-red-400"><span>Dimanche - Lundi</span> <span>Fermé</span></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-primary uppercase tracking-widest text-xs font-bold mb-4">Contact Direct</h3>
                    <p class="text-gray-500 dark:text-gray-400 leading-loose">
                        T: 01 23 45 67 89<br>
                        E: contact@artculinaire.fr
                    </p>
                </div>
            </div>

            <!-- Formulaire & Map -->
            <div class="lg:col-span-2 space-y-12">
                <div class="h-80 bg-gray-100 dark:bg-surface border border-gray-200 dark:border-surface overflow-hidden relative grayscale dark:invert">
                    <!-- Placeholder pour une Map -->
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-200 dark:bg-surface text-gray-400 uppercase tracking-widest text-[10px]">
                        Google Maps Intégré ici
                    </div>
                </div>

                <form action="process-booking.php" method="POST" class="space-y-6">
                    <h3 class="text-2xl font-serif mb-6">Envoyez-nous un message</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Nom" class="w-full bg-transparent border-b border-gray-200 dark:border-surface py-3 outline-none focus:border-primary transition-colors text-sm">
                        <input type="email" placeholder="Email" class="w-full bg-transparent border-b border-gray-200 dark:border-surface py-3 outline-none focus:border-primary transition-colors text-sm">
                    </div>
                    <textarea placeholder="Votre message" rows="4" class="w-full bg-transparent border-b border-gray-200 dark:border-surface py-3 outline-none focus:border-primary transition-colors text-sm resize-none"></textarea>
                    <button type="submit" class="bg-primary text-black font-bold uppercase text-[10px] tracking-[2px] px-8 py-4 hover:bg-black hover:text-white transition-all">Envoyer le message</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
