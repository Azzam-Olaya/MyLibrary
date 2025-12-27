
<main class="flex-grow flex items-center justify-center p-4 md:p-8">
    <div class="flex flex-col md:flex-row w-full max-w-5xl bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl overflow-hidden min-h-[600px]">
        <div class="hidden md:flex w-1/2 relative bg-gray-100 dark:bg-gray-800">
            <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-12">
                <h3 class="text-white text-3xl font-bold mb-2">Explorez un monde de connaissances</h3>
                <p class="text-white/90 text-lg">Accédez à des milliers de livres, articles et ressources numériques.</p>
            </div>
            <img alt="Interior of a modern library with shelves of books" class="absolute inset-0 w-full h-full object-cover" data-alt="Interior of a modern library with shelves of books" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4IRm4aCz26a-LNp1MxiqF3EkGqmQ93ZjA0spqCYhJFZqxOIqpKMT-0jHVP-WwxA3VlixEQ0lUqiCDpjV9FIB-x5IAeVkZoRmeI40SeeV-kzMM4Xjzdy5PRmJXW6B_3DDQmOyWC3jjwnpIxdciMqUW2HKW8whCRnAO0x2PcLVCJMfHl5pW2dHuqJ90edUwetKhKBFNJwiSlFc10XnuwxVZ4anMZG9mXQbeuCCgGczyZ1HZNm-1b1oTbt4C1yEk2fVnG4NxNcwEvwLM" />
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center p-8 md:p-12 lg:p-16 relative">
            <div class="max-w-[420px] mx-auto w-full">
                <div class="mb-8 text-center md:text-left">
                    <h1 class="text-[#111418] dark:text-white tracking-tight text-[32px] font-bold leading-tight mb-2">Bienvenue</h1>
                    <p class="text-[#617589] dark:text-gray-400 text-base font-normal leading-normal">
                        Veuillez vous connecter pour accéder à votre compte lecteur ou administrateur.
                    </p>
                </div>
                <form class="flex flex-col gap-5" onsubmit="event.preventDefault();">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#111418] dark:text-gray-200 text-base font-medium leading-normal">Adresse e-mail</label>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-[#0f172a] h-14 placeholder:text-[#617589] dark:placeholder:text-gray-500 p-[15px] text-base font-normal leading-normal transition-all" placeholder="exemple@email.com" type="email" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <label class="text-[#111418] dark:text-gray-200 text-base font-medium leading-normal">Mot de passe</label>
                            <a class="text-sm font-medium text-primary hover:text-blue-500 transition-colors" href="#">Mot de passe oublié ?</a>
                        </div>
                        <div class="relative flex w-full items-center rounded-lg">
                            <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-[#0f172a] h-14 placeholder:text-[#617589] dark:placeholder:text-gray-500 p-[15px] pr-12 text-base font-normal leading-normal transition-all" placeholder="••••••••" type="password" />
                            <button class="absolute right-0 top-0 bottom-0 px-4 text-[#617589] dark:text-gray-400 hover:text-primary transition-colors flex items-center justify-center" type="button">
                                <span class="material-symbols-outlined text-[24px]">visibility_off</span>
                            </button>
                        </div>
                    </div>
                    <button class="mt-4 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 bg-primary hover:bg-blue-600 transition-colors text-white text-base font-bold leading-normal tracking-[0.015em] shadow-md">
                        <span class="truncate">Se connecter</span>
                    </button>
                </form>
                <div class="mt-8 text-center">
                    <p class="text-[#617589] dark:text-gray-400 text-sm">
                        Vous n'avez pas de compte ?
                        <a class="font-bold text-primary hover:text-blue-500 transition-colors" href="#">Créer un compte</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
