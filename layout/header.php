<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Bibliothèque Centrale</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display flex flex-col min-h-screen antialiased">
    <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] dark:border-b-gray-800 bg-white dark:bg-[#1e293b] px-4 md:px-10 py-3 sticky top-0 z-50">
        <div class="flex items-center gap-4">
            <div class="size-8 text-primary">
                <svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z" fill="currentColor"></path>
                </svg>
            </div>
            <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] hidden sm:block">Bibliothèque Centrale</h2>
        </div>
        <div class="flex items-center gap-4 sm:gap-8">
            <div class="hidden md:flex items-center gap-9">
                <a class="text-[#111418] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Accueil</a>
                <a class="text-[#111418] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Catalogue</a>
                <a class="text-[#111418] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">À propos</a>
            </div>
            <!-- if conndition -->
            <button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-blue-600 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em] shadow-sm">
                <span class="truncate">S'inscrire</span>
            </button>
        </div>
    </header>