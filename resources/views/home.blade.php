@php
    if(!session('user')) {
        header("Location: " . route('login'));
        exit();
    }
@endphp

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GastroShare | Partagez vos saveurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        body { font-family: 'Poppins', sans-serif; overflow-x: hidden; }
        
        /* Gradients */
        .gradient-bg { background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); }
        .gradient-text { background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .glass-effect { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }
        
        /* Animations */
        @keyframes slideInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes glow {
            0%, 100% { box-shadow: 0 0 20px rgba(249, 115, 22, 0.3); }
            50% { box-shadow: 0 0 30px rgba(249, 115, 22, 0.5); }
        }
        
        .slide-in-down { animation: slideInDown 0.6s ease-out; }
        .fade-in-up { animation: fadeInUp 0.8s ease-out; }
        .float { animation: float 3s ease-in-out infinite; }
        
        /* Recipe Card */
        .recipe-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(249, 115, 22, 0.1);
        }
        .recipe-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(249, 115, 22, 0.15);
            border-color: rgba(249, 115, 22, 0.3);
        }
        
        .recipe-image { transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1); }
        .recipe-card:hover .recipe-image { transform: scale(1.1); }
        
        /* Button Animations */
        .btn-hover {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .btn-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.3s ease;
        }
        
        .btn-hover:hover::before { left: 100%; }
        
        /* Stat Cards */
        .stat-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(249, 115, 22, 0.1) 0%, transparent 100%);
            transition: top 0.4s ease;
        }
        
        .stat-card:hover::before { top: 0; }
        .stat-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(249, 115, 22, 0.1); }
        
        /* Input Focus */
        input:focus, textarea:focus {
            animation: glow 1s ease-in-out infinite;
        }
        
        /* Dropdown Animation */
        #user-dropdown {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: top right;
        }
        
        #user-dropdown.hidden {
            opacity: 0;
            transform: scale(0.95) translateY(-10px);
            pointer-events: none;
        }
        
        #user-dropdown:not(.hidden) {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
        
        /* Filter Buttons */
        .filter-btn {
            transition: all 0.3s ease;
            position: relative;
        }
        
        .filter-btn:not(.gradient-bg) {
            border: 2px solid #e5e7eb;
        }
        
        .filter-btn:not(.gradient-bg):hover {
            border-color: #f97316;
            background: linear-gradient(135deg, rgba(249, 115, 22, 0.05) 0%, rgba(251, 146, 60, 0.05) 100%);
        }
        
        /* Card Badge */
        .badge-animated {
            animation: float 4s ease-in-out infinite;
        }
        
        /* Modal Backdrop */
        #modal-recette {
            animation: fadeInUp 0.3s ease-out;
        }
        
        /* Smooth Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(249, 115, 22, 0.05);
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
            border-radius: 4px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-50">

    <nav class="glass-effect shadow-xl sticky top-0 z-50 border-b border-orange-100 slide-in-down">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-3 group cursor-pointer hover:scale-105 transition-transform duration-300">
                    <div class="w-12 h-12 gradient-bg rounded-2xl flex items-center justify-center shadow-xl group-hover:shadow-2xl group-hover:scale-110 transition duration-300">
                        <i class="fas fa-utensils text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent">Gastro<span class="gradient-text">Share</span></h1>
                        <p class="text-xs text-gray-500 font-medium">Partagez vos saveurs</p>
                    </div>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="home" class="text-orange-500 font-bold border-b-2 border-orange-500 pb-2 relative group">
                        Accueil
                        <span class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-orange-500 to-orange-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="recete" class="text-gray-600 hover:text-orange-500 font-medium transition relative group">
                        Recettes
                        <span class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-orange-500 to-orange-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    <button onclick="toggleModal('modal-recette')" class="hidden md:flex items-center gap-2 gradient-bg text-white px-6 py-2.5 rounded-2xl hover:shadow-2xl transition-all transform hover:scale-110 font-bold btn-hover shadow-lg">
                        <i class="fas fa-plus text-lg"></i>
                        <span>Publier</span>
                    </button>

                    @if(session('user'))
                    <div class="relative ml-2">
                        <button onclick="toggleDropdown()" class="flex items-center gap-3 focus:outline-none hover:bg-orange-50 p-2 rounded-2xl transition border-2 border-transparent hover:border-orange-200 group">
                            <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center text-white font-bold shadow-lg group-hover:shadow-xl group-hover:scale-110 transition-all duration-300">
                                {{ substr(session('user')->prenom_user, 0, 1) }}{{ substr(session('user')->nom_user, 0, 1) }}
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-bold text-gray-800 leading-tight">{{ session('user')->prenom_user }} {{ session('user')->nom_user }}</p>
                                <span class="text-[10px] text-orange-500 font-bold tracking-wide">Membre</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs text-gray-400 ml-1 group-hover:text-orange-500 transition group-hover:rotate-180 duration-300"></i>
                        </button>

                        <div id="user-dropdown" class="hidden absolute right-0 mt-4 w-56 bg-white rounded-2xl shadow-2xl py-3 border border-gray-100 ring-1 ring-black ring-opacity-5 origin-top-right overflow-hidden">
                            <div class="px-4 py-4 border-b border-gray-100 bg-gradient-to-br from-orange-50 to-orange-100/50">
                                <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide">Connecté en tant que</p>
                                <p class="text-sm font-bold text-gray-900 truncate mt-1">{{ session('user')->email_user ?? 'Utilisateur' }}</p>
                                <p class="text-xs text-gray-600 font-medium mt-1">ID: {{ session('user')->id ?? 'N/A' }}</p>
                            </div>
                            
                            <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition duration-200 group">
                                <div class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center mr-3 group-hover:bg-orange-200 transition">
                                    <i class="fas fa-user-circle text-orange-500 text-lg"></i>
                                </div>
                                <span class="font-medium">Mon Profil</span>
                            </a>
                            
                            <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition duration-200 group">
                                <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center mr-3 group-hover:bg-red-200 transition">
                                    <i class="fas fa-heart text-red-400 text-lg"></i>
                                </div>
                                <span class="font-medium">Mes Favoris</span>
                            </a>

                            <div class="border-t border-gray-100 my-2"></div>

                            <form action="/logout" method="POST" class="block"> 
                                @csrf 
                                <button type="submit" class="w-full text-left flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition font-bold group">
                                    <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center mr-3 group-hover:bg-red-200 transition">
                                        <i class="fas fa-sign-out-alt text-lg"></i>
                                    </div>
                                    Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                    @endif
                    </div>
            </div>
        </div>
    </nav>

    <header class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-10 left-0 w-96 h-96 bg-orange-300 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
            <div class="inline-block mb-6 px-6 py-3 bg-gradient-to-r from-orange-100 to-orange-50 rounded-full border border-orange-200 fade-in-up" style="animation-delay: 0.1s;">
                <span class="text-orange-700 font-bold text-sm tracking-wide">🎉 Nouvelle communauté culinaire</span>
            </div>
            <h2 class="text-6xl md:text-7xl font-black text-gray-900 mb-8 leading-tight fade-in-up" style="animation-delay: 0.2s;">
                Découvrez et partagez<br>
                <span class="gradient-text">l'excellence culinaire</span>
            </h2>
            <p class="text-gray-600 text-xl mb-12 max-w-2xl mx-auto leading-relaxed fade-in-up" style="animation-delay: 0.3s;">
                Rejoignez notre communauté de passionnés. Échangez vos secrets et trouvez l'inspiration pour votre prochain repas gastronomique.
            </p>
            
            <div class="flex flex-wrap justify-center gap-8 mt-20">
                <div class="stat-card bg-white rounded-3xl p-10 shadow-xl border border-gray-100 hover:border-orange-200 min-w-[220px] fade-in-up" style="animation-delay: 0.4s;">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-book-open text-white text-2xl"></i>
                    </div>
                    <p class="text-5xl font-black bg-gradient-to-r from-orange-600 to-orange-500 bg-clip-text text-transparent mb-3" id="stat-total">1,254</p>
                    <p class="text-sm text-gray-500 uppercase tracking-widest font-bold">Recettes Partagées</p>
                </div>
                
                <div class="stat-card bg-white rounded-3xl p-10 shadow-xl border border-gray-100 hover:border-orange-200 min-w-[220px] fade-in-up" style="animation-delay: 0.5s;">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-comments text-white text-2xl"></i>
                    </div>
                    <p class="text-5xl font-black bg-gradient-to-r from-blue-600 to-blue-500 bg-clip-text text-transparent mb-3">45K</p>
                    <p class="text-sm text-gray-500 uppercase tracking-widest font-bold">Commentaires</p>
                </div>
                
                <div class="stat-card bg-white rounded-3xl p-10 shadow-xl border border-gray-100 hover:border-orange-200 min-w-[220px] fade-in-up" style="animation-delay: 0.6s;">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <p class="text-5xl font-black bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent mb-3">12K</p>
                    <p class="text-sm text-gray-500 uppercase tracking-widest font-bold">Chefs Membres</p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-20">
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-16 gap-8">
            <div class="relative w-full md:w-96 fade-in-up">
                <input type="text" placeholder="Rechercher un plat, un ingrédient..." 
                    class="w-full pl-14 pr-6 py-4 rounded-2xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition shadow-lg hover:shadow-xl font-medium placeholder-gray-400">
                <i class="fas fa-search absolute left-5 top-5 text-gray-400 text-lg"></i>
            </div>
            
            <div class="flex gap-3 overflow-x-auto pb-2 w-full md:w-auto fade-in-up">
                <button class="filter-btn gradient-bg text-white px-8 py-3 rounded-full whitespace-nowrap font-bold shadow-lg hover:shadow-2xl transition transform hover:scale-105 btn-hover">
                    <i class="fas fa-fire mr-2"></i>Tout
                </button>
                <button class="filter-btn bg-white px-8 py-3 rounded-full hover:scale-105 transition whitespace-nowrap font-bold shadow-md hover:shadow-lg">
                    <i class="fas fa-leaf mr-2 text-green-500"></i>Entrées
                </button>
                <button class="filter-btn bg-white px-8 py-3 rounded-full hover:scale-105 transition whitespace-nowrap font-bold shadow-md hover:shadow-lg">
                    <i class="fas fa-drumstick-bite mr-2 text-orange-500"></i>Plats
                </button>
                <button class="filter-btn bg-white px-8 py-3 rounded-full hover:scale-105 transition whitespace-nowrap font-bold shadow-md hover:shadow-lg">
                    <i class="fas fa-ice-cream mr-2 text-pink-500"></i>Desserts
                </button>
                <button class="filter-btn bg-white px-8 py-3 rounded-full hover:scale-105 transition whitespace-nowrap font-bold shadow-md hover:shadow-lg">
                    <i class="fas fa-cocktail mr-2 text-blue-500"></i>Boissons
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="recipes-container">
            <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl recipe-card border border-gray-100 fade-in-up" style="animation-delay: 0.1s;">
                <div class="relative h-72 overflow-hidden bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80" 
                        alt="Salade" class="w-full h-full object-cover recipe-image">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <span class="absolute top-6 right-6 bg-white/95 backdrop-blur px-4 py-2 rounded-full text-xs font-bold uppercase text-orange-600 shadow-lg badge-animated">
                        <i class="fas fa-leaf mr-1"></i>Plats
                    </span>
                    <button class="absolute top-6 left-6 w-11 h-11 bg-white/95 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg hover:scale-110 duration-300 group">
                        <i class="far fa-heart text-orange-500 text-lg group-hover:text-red-500 transition"></i>
                    </button>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold text-gray-900 hover:gradient-text cursor-pointer transition group">
                            Salade de Quinoa Royale
                        </h3>
                        <div class="flex items-center gap-2 bg-gradient-to-r from-orange-100 to-orange-50 px-4 py-2 rounded-full shadow-md">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.8</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-2 leading-relaxed font-medium">
                        Une explosion de fraîcheur avec des légumes croquants et une vinaigrette au citron vert parfumée.
                    </p>
                    <div class="flex items-center gap-6 mb-6 text-sm text-gray-600 font-semibold">
                        <span class="flex items-center gap-2"><i class="far fa-clock text-orange-500"></i>30 min</span>
                        <span class="flex items-center gap-2"><i class="fas fa-signal text-green-500"></i>Facile</span>
                        <span class="flex items-center gap-2"><i class="fas fa-users text-blue-500"></i>4 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-6 border-t border-gray-100">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-lg">
                                JD
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">Jean Dupont</p>
                                <p class="text-xs text-gray-500 font-medium">Chef passionné</p>
                            </div>
                        </div>
                        <div class="flex gap-6 text-gray-600 text-sm font-bold">
                            <button class="hover:text-orange-500 transition flex items-center gap-1">
                                <i class="far fa-comment"></i>12
                            </button>
                            <button class="hover:text-red-500 transition flex items-center gap-1">
                                <i class="far fa-heart"></i>45
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl recipe-card border border-gray-100 fade-in-up" style="animation-delay: 0.2s;">
                <div class="relative h-72 overflow-hidden bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?auto=format&fit=crop&w=800&q=80" 
                        alt="Pancakes" class="w-full h-full object-cover recipe-image">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <span class="absolute top-6 right-6 bg-white/95 backdrop-blur px-4 py-2 rounded-full text-xs font-bold uppercase text-pink-600 shadow-lg badge-animated" style="animation-delay: 0.5s;">
                        <i class="fas fa-ice-cream mr-1"></i>Desserts
                    </span>
                    <button class="absolute top-6 left-6 w-11 h-11 bg-white/95 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg hover:scale-110 duration-300 group">
                        <i class="far fa-heart text-orange-500 text-lg group-hover:text-red-500 transition"></i>
                    </button>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold text-gray-900 hover:gradient-text cursor-pointer transition">
                            Pancakes Moelleux
                        </h3>
                        <div class="flex items-center gap-2 bg-gradient-to-r from-orange-100 to-orange-50 px-4 py-2 rounded-full shadow-md">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.9</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-2 leading-relaxed font-medium">
                        Des pancakes ultra moelleux avec un sirop d'érable authentique et des fruits frais de saison.
                    </p>
                    <div class="flex items-center gap-6 mb-6 text-sm text-gray-600 font-semibold">
                        <span class="flex items-center gap-2"><i class="far fa-clock text-orange-500"></i>20 min</span>
                        <span class="flex items-center gap-2"><i class="fas fa-signal text-green-500"></i>Facile</span>
                        <span class="flex items-center gap-2"><i class="fas fa-users text-blue-500"></i>2 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-6 border-t border-gray-100">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-lg">
                                ML
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">Marie Leblanc</p>
                                <p class="text-xs text-gray-500 font-medium">Pâtissière</p>
                            </div>
                        </div>
                        <div class="flex gap-6 text-gray-600 text-sm font-bold">
                            <button class="hover:text-orange-500 transition flex items-center gap-1">
                                <i class="far fa-comment"></i>28
                            </button>
                            <button class="hover:text-red-500 transition flex items-center gap-1">
                                <i class="far fa-heart"></i>89
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl recipe-card border border-gray-100 fade-in-up" style="animation-delay: 0.3s;">
                <div class="relative h-72 overflow-hidden bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=800&q=80" 
                        alt="Burger" class="w-full h-full object-cover recipe-image">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <span class="absolute top-6 right-6 bg-white/95 backdrop-blur px-4 py-2 rounded-full text-xs font-bold uppercase text-orange-600 shadow-lg badge-animated" style="animation-delay: 1s;">
                        <i class="fas fa-drumstick-bite mr-1"></i>Plats
                    </span>
                    <button class="absolute top-6 left-6 w-11 h-11 bg-white/95 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg hover:scale-110 duration-300 group">
                        <i class="fas fa-heart text-red-500 text-lg group-hover:text-red-600 transition"></i>
                    </button>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold text-gray-900 hover:gradient-text cursor-pointer transition">
                            Burger Gourmet Maison
                        </h3>
                        <div class="flex items-center gap-2 bg-gradient-to-r from-orange-100 to-orange-50 px-4 py-2 rounded-full shadow-md">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.7</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-2 leading-relaxed font-medium">
                        Un burger artisanal avec viande de qualité, pain brioché maison et sauce secrète épicée.
                    </p>
                    <div class="flex items-center gap-6 mb-6 text-sm text-gray-600 font-semibold">
                        <span class="flex items-center gap-2"><i class="far fa-clock text-orange-500"></i>45 min</span>
                        <span class="flex items-center gap-2"><i class="fas fa-signal text-amber-500"></i>Moyen</span>
                        <span class="flex items-center gap-2"><i class="fas fa-users text-blue-500"></i>4 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-6 border-t border-gray-100">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-lg">
                                PM
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">Pierre Martin</p>
                                <p class="text-xs text-gray-500 font-medium">Chef cuisinier</p>
                            </div>
                        </div>
                        <div class="flex gap-6 text-gray-600 text-sm font-bold">
                            <button class="hover:text-orange-500 transition flex items-center gap-1">
                                <i class="far fa-comment"></i>34
                            </button>
                            <button class="hover:text-red-500 transition flex items-center gap-1">
                                <i class="far fa-heart"></i>156
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-16">
            <button class="gradient-bg text-white px-10 py-4 rounded-2xl font-bold hover:shadow-2xl transition transform hover:scale-110 shadow-lg btn-hover text-lg">
                <i class="fas fa-plus-circle mr-2"></i>Charger plus de recettes
            </button>
        </div>
    </main>

    <div id="modal-recette" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden flex items-center justify-center z-[60] p-4 animate-fadeInUp">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-gray-100">
            <div class="p-8 border-b-2 border-gray-100 sticky top-0 bg-white flex justify-between items-center rounded-t-3xl">
                <div>
                    <h3 class="text-4xl font-black bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent">Publier une recette</h3>
                    <p class="text-sm text-gray-600 mt-2 font-medium">Partagez votre création culinaire avec la communauté</p>
                </div>
                <button onclick="toggleModal('modal-recette')" class="w-12 h-12 bg-orange-100 hover:bg-orange-200 rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110 group">
                    <i class="fas fa-times text-orange-600 text-xl group-hover:rotate-90 transition duration-300"></i>
                </button>
            </div>
            <form action="createRecete" method="POST" class="p-8 space-y-6">
                @csrf
                <input type="hidden" name="id_user" value="{{ session('user')->id }}">
                <div class="fade-in-up" style="animation-delay: 0.1s;">
                    <label class="block text-sm font-bold mb-3 text-gray-800">
                        <i class="fas fa-utensils mr-2 text-orange-500"></i>Titre de la recette
                    </label>
                    <input type="text" name="titre" class="w-full border-2 border-gray-200 rounded-2xl p-4 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition shadow-sm hover:shadow-md font-medium placeholder-gray-400" 
                        placeholder="Ex: Tarte Tatin de grand-mère">
                </div>
                
                <div class="fade-in-up" style="animation-delay: 0.2s;">
                    <label class="block text-sm font-bold mb-3 text-gray-800">
                        <i class="fas fa-image mr-2 text-orange-500"></i>Image (URL)
                    </label>
                    <input type="text" name="image" class="w-full border-2 border-gray-200 rounded-2xl p-4 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-500 transition shadow-sm hover:shadow-md font-medium placeholder-gray-400" 
                        placeholder="Lien de l'image">
                </div>
                
                <div class="fade-in-up" style="animation-delay: 0.3s;">
                    <label class="block text-sm font-bold mb-3 text-gray-800">
                        <i class="fas fa-shopping-basket mr-2 text-orange-500"></i>Description
                    </label>
                    <textarea name="description" class="w-full border-2 border-gray-200 rounded-2xl p-4 h-32 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-500 transition shadow-sm hover:shadow-md resize-none font-medium placeholder-gray-400" 
                        placeholder="Décrivez votre recette en détail..."></textarea>
                </div>
                
                <button type="submit" class="w-full gradient-bg text-white py-5 rounded-2xl font-bold hover:shadow-2xl transition transform hover:scale-105 text-lg shadow-lg btn-hover fade-in-up" style="animation-delay: 0.4s;">
                    <i class="fas fa-paper-plane mr-2"></i>Partager ma recette
                </button>
            </form>
        </div>
    </div>

    <footer class="bg-gradient-to-b from-gray-900 to-black text-white py-16 mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="fade-in-up" style="animation-delay: 0.1s;">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-14 h-14 gradient-bg rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-utensils text-white text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold">Gastro<span class="text-orange-500">Share</span></h3>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">Partagez vos saveurs avec le monde entier et créez une communauté culinaire unique.</p>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.2s;">
                    <h4 class="font-bold text-lg mb-6 text-white">Liens rapides</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-orange-500 transition font-medium flex items-center gap-2 group"><i class="fas fa-chevron-right text-orange-500 opacity-0 group-hover:opacity-100 transition -ml-4 group-hover:ml-0"></i>Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-orange-500 transition font-medium flex items-center gap-2 group"><i class="fas fa-chevron-right text-orange-500 opacity-0 group-hover:opacity-100 transition -ml-4 group-hover:ml-0"></i>Recettes</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-orange-500 transition font-medium flex items-center gap-2 group"><i class="fas fa-chevron-right text-orange-500 opacity-0 group-hover:opacity-100 transition -ml-4 group-hover:ml-0"></i>Communauté</a></li>
                    </ul>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.3s;">
                    <h4 class="font-bold text-lg mb-6 text-white">Légal</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-orange-500 transition font-medium flex items-center gap-2 group"><i class="fas fa-chevron-right text-orange-500 opacity-0 group-hover:opacity-100 transition -ml-4 group-hover:ml-0"></i>Confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-orange-500 transition font-medium flex items-center gap-2 group"><i class="fas fa-chevron-right text-orange-500 opacity-0 group-hover:opacity-100 transition -ml-4 group-hover:ml-0"></i>Conditions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-orange-500 transition font-medium flex items-center gap-2 group"><i class="fas fa-chevron-right text-orange-500 opacity-0 group-hover:opacity-100 transition -ml-4 group-hover:ml-0"></i>Contact</a></li>
                    </ul>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.4s;">
                    <h4 class="font-bold text-lg mb-6 text-white">Suivez-nous</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 bg-gray-800 hover:gradient-bg rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110 shadow-lg">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 hover:gradient-bg rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110 shadow-lg">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 hover:gradient-bg rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110 shadow-lg">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-500 text-sm font-medium">&copy; 2025 GastroShare. Tous droits réservés. | Créé avec <i class="fas fa-heart text-red-500 mx-1"></i> pour les passionnés de cuisine</p>
            </div>
        </div>
    </footer>

    <script>
        // Modal Logic
        function toggleModal(id) {
            const modal = document.getElementById(id);
            modal.classList.toggle('hidden');
        }

        // Dropdown Logic (New)
        function toggleDropdown() {
            const dropdown = document.getElementById('user-dropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close logic for both modal and dropdown when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('modal-recette');
            const dropdown = document.getElementById('user-dropdown');
            const dropdownBtn = event.target.closest('button[onclick="toggleDropdown()"]');

            // Close Modal
            if (event.target == modal) {
                modal.classList.add('hidden');
            }

            // Close Dropdown if clicked outside and not on the button
            if (!dropdownBtn && !event.target.closest('#user-dropdown')) {
                if(dropdown && !dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
            }
        }
    </script>
</body>
</html>