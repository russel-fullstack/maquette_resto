<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Art Culinaire | Restaurant Gastronomique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#d4af37',
                        secondary: '#8e6d45',
                        dark: '#0a0a0a',
                        surface: '#1a1a1a',
                    },
                    fontFamily: {
                        serif: ['Playfair Display', 'serif'],
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .fade-in { animation: fadeIn 1s ease-in forwards; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        .transition-theme { transition: background-color 0.3s, color 0.3s, border-color 0.3s; }
    </style>
</head>
<body class="bg-white dark:bg-dark text-gray-900 dark:text-gray-100 font-sans transition-theme">
    <header class="fixed w-full h-20 flex items-center justify-between px-[5%] z-50 bg-white/80 dark:bg-dark/80 backdrop-blur-md transition-theme">
        <div class="text-2xl font-bold tracking-[3px] text-secondary dark:text-primary font-serif">
            L'ART CULINAIRE
        </div>
        
        <nav class="hidden lg:block">
            <ul class="flex gap-8 uppercase text-[10px] tracking-[2px] font-semibold">
                <li><a href="index.php" class="hover:text-primary transition-colors">Accueil</a></li>
                <li><a href="index.php#menu" class="hover:text-primary transition-colors">La Carte</a></li>
                <li><a href="galerie.php" class="hover:text-primary transition-colors">Galerie</a></li>
                <li><a href="a-propos.php" class="hover:text-primary transition-colors">Notre Histoire</a></li>
                <li><a href="contact.php" class="hover:text-primary transition-colors">Contact</a></li>
                <li><a href="index.php#reservation" class="bg-primary/10 text-primary px-4 py-2 hover:bg-primary hover:text-black transition-all">Réserver</a></li>
            </ul>
        </nav>

        <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-surface transition-colors">
            <span class="dark:hidden text-xl">☽</span>
            <span class="hidden dark:inline text-xl">☉</span>
        </button>
    </header>
