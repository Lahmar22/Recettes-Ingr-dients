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
    <title>Recherche de Recettes | GastroShare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); }
        .glass-effect { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }
        .recipe-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .recipe-card:hover { transform: translateY(-8px); }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-50">

    <!-- Navigation -->
    <nav class="glass-effect shadow-lg sticky top-0 z-50 border-b border-orange-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                        <i class="fas fa-utensils text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Gastro<span class="text-orange-500">Share</span></h1>
                        <p class="text-xs text-gray-500">Partagez vos saveurs</p>
                    </div>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="home" class="text-gray-600 hover:text-orange-500 font-medium transition">Accueil</a>
                    <a href="recete" class="text-orange-500 font-semibold border-b-2 border-orange-500 pb-1">Recettes</a>
                </div>

                <div class="flex items-center gap-4">
                    
                    @if(session('user'))
                    <div class="relative ml-2">
                        <button onclick="toggleDropdown()" class="flex items-center gap-3 focus:outline-none hover:bg-orange-50 p-1.5 rounded-xl transition border border-transparent hover:border-orange-100">
                            <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center text-white font-bold shadow-md">
                                {{ substr(session('user')->prenom_user, 0, 1) }}{{ substr(session('user')->nom_user, 0, 1) }}
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-bold text-gray-800 leading-none">{{ session('user')->prenom_user }} {{ session('user')->nom_user }}</p>
                                <span class="text-[10px] text-orange-500 font-semibold">Membre</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs text-gray-400 ml-1"></i>
                        </button>

                        <div id="user-dropdown" class="hidden absolute right-0 mt-3 w-56 bg-white rounded-2xl shadow-2xl py-2 border border-gray-100 ring-1 ring-black ring-opacity-5 origin-top-right overflow-hidden">
                            <div class="px-4 py-3 border-b border-gray-50">
                                <p class="text-sm text-gray-500">Connecté en tant que</p>
                                <p class="text-sm font-bold text-gray-900 truncate">{{ session('user')->email_user ?? 'Utilisateur' }}</p>
                            </div>
                            
                            <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition">
                                <i class="fas fa-user-circle w-5 h-5 mr-2 text-orange-400"></i>
                                Mon Profil
                            </a>
                            
                            <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition">
                                <i class="fas fa-heart w-5 h-5 mr-2 text-pink-400"></i>
                                Mes Favoris
                            </a>

                            <div class="border-t border-gray-100 my-1"></div>

                            <form action="/logout" method="POST" class="block"> 
                                @csrf 
                                <button type="submit" class="w-full text-left flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition font-medium">
                                    <i class="fas fa-sign-out-alt w-5 h-5 mr-2"></i>
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

    <main class="max-w-7xl mx-auto px-4 py-12">
        
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">
                Découvrez nos <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">recettes</span>
            </h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Plus de 1,254 recettes créées par notre communauté de passionnés
            </p>
        </div>

        <!-- Advanced Search & Filter Section -->
        <div class="mb-12">
            <!-- Search Bar -->
            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-6 mb-6">
                <div class="relative">
                    <input 
                        type="text" 
                        id="searchInput"
                        placeholder="Rechercher une recette, un ingrédient, un chef..." 
                        class="w-full pl-14 pr-32 py-4 rounded-2xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition text-lg"
                    >
                    <i class="fas fa-search absolute left-5 top-5 text-gray-400 text-xl"></i>
                    <button class="absolute right-2 top-2 gradient-bg text-white px-6 py-2.5 rounded-xl hover:shadow-xl transition font-semibold">
                        <i class="fas fa-search mr-2"></i>Rechercher
                    </button>
                </div>

                <!-- Popular Searches -->
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="text-gray-500 text-sm mr-2">Populaire:</span>
                    <button class="text-sm bg-orange-50 text-orange-600 px-4 py-1.5 rounded-full hover:bg-orange-100 transition font-medium">
                        Salade
                    </button>
                    <button class="text-sm bg-orange-50 text-orange-600 px-4 py-1.5 rounded-full hover:bg-orange-100 transition font-medium">
                        Pâtes
                    </button>
                    <button class="text-sm bg-orange-50 text-orange-600 px-4 py-1.5 rounded-full hover:bg-orange-100 transition font-medium">
                        Végétarien
                    </button>
                    <button class="text-sm bg-orange-50 text-orange-600 px-4 py-1.5 rounded-full hover:bg-orange-100 transition font-medium">
                        Dessert rapide
                    </button>
                </div>
            </div>

            <!-- Filters Section -->
            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">
                        <i class="fas fa-filter text-orange-500 mr-2"></i>Filtres
                    </h3>
                    <button class="text-orange-500 hover:text-orange-600 font-semibold text-sm">
                        <i class="fas fa-redo mr-1"></i>Réinitialiser
                    </button>
                </div>

                <div class="grid md:grid-cols-4 gap-6">
                    
                    <!-- Category Filter -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-list mr-2 text-orange-500"></i>Catégorie
                        </label>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-leaf text-green-500 mr-2"></i>Entrées
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-drumstick-bite text-orange-500 mr-2"></i>Plats principaux
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-ice-cream text-pink-500 mr-2"></i>Desserts
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-cocktail text-blue-500 mr-2"></i>Boissons
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Difficulty Filter -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-signal mr-2 text-orange-500"></i>Difficulté
                        </label>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="difficulty" class="w-4 h-4 text-orange-500 border-gray-300 focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-star text-green-500 mr-2"></i>Facile
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="difficulty" class="w-4 h-4 text-orange-500 border-gray-300 focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-star-half-alt text-orange-500 mr-2"></i>Moyen
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="difficulty" class="w-4 h-4 text-orange-500 border-gray-300 focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-fire text-red-500 mr-2"></i>Difficile
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="difficulty" checked class="w-4 h-4 text-orange-500 border-gray-300 focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-infinity text-gray-500 mr-2"></i>Tous
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Time Filter -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-clock mr-2 text-orange-500"></i>Temps de préparation
                        </label>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">Moins de 15 min</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">15-30 min</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">30-60 min</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">Plus de 1h</span>
                            </label>
                        </div>
                    </div>

                    <!-- Diet Filter -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-seedling mr-2 text-orange-500"></i>Régime alimentaire
                        </label>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-leaf text-green-500 mr-2"></i>Végétarien
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-carrot text-orange-500 mr-2"></i>Vegan
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-bread-slice text-amber-600 mr-2"></i>Sans gluten
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-gray-700 group-hover:text-orange-500 transition">
                                    <i class="fas fa-cheese text-yellow-500 mr-2"></i>Sans lactose
                                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Advanced Filters Toggle -->
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <button onclick="toggleAdvancedFilters()" class="text-orange-500 hover:text-orange-600 font-semibold text-sm">
                        <i class="fas fa-chevron-down mr-2" id="advancedIcon"></i>
                        <span id="advancedText">Filtres avancés</span>
                    </button>
                    
                    <div id="advancedFilters" class="hidden mt-6 grid md:grid-cols-3 gap-6">
                        <!-- Rating Filter -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                <i class="fas fa-star text-orange-500 mr-2"></i>Note minimale
                            </label>
                            <select class="w-full px-4 py-2.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition">
                                <option value="">Toutes les notes</option>
                                <option value="4.5">4.5★ et plus</option>
                                <option value="4">4★ et plus</option>
                                <option value="3.5">3.5★ et plus</option>
                                <option value="3">3★ et plus</option>
                            </select>
                        </div>

                        <!-- Calories Filter -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                <i class="fas fa-fire-alt text-orange-500 mr-2"></i>Calories max
                            </label>
                            <select class="w-full px-4 py-2.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition">
                                <option value="">Peu importe</option>
                                <option value="200">Moins de 200 kcal</option>
                                <option value="400">Moins de 400 kcal</option>
                                <option value="600">Moins de 600 kcal</option>
                            </select>
                        </div>

                        <!-- Cuisine Type -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                <i class="fas fa-globe text-orange-500 mr-2"></i>Type de cuisine
                            </label>
                            <select class="w-full px-4 py-2.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition">
                                <option value="">Toutes les cuisines</option>
                                <option value="francaise">Française</option>
                                <option value="italienne">Italienne</option>
                                <option value="asiatique">Asiatique</option>
                                <option value="mexicaine">Mexicaine</option>
                                <option value="indienne">Indienne</option>
                                <option value="marocaine">Marocaine</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sort & Results Info -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
            <div class="flex items-center gap-3">
                <span class="text-gray-600 font-semibold">1,254 recettes trouvées</span>
                <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm font-semibold">
                    <i class="fas fa-filter mr-1"></i>3 filtres actifs
                </span>
            </div>

            <div class="flex items-center gap-4">
                <label class="text-gray-600 font-medium">Trier par:</label>
                <select class="px-4 py-2.5 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition font-medium">
                    <option value="popularity">Plus populaires</option>
                    <option value="rating">Mieux notées</option>
                    <option value="recent">Plus récentes</option>
                    <option value="time">Temps de préparation</option>
                    <option value="calories">Calories (croissant)</option>
                </select>

                <div class="flex gap-2 border-2 border-gray-200 rounded-xl p-1">
                    <button class="p-2 bg-orange-500 text-white rounded-lg">
                        <i class="fas fa-th"></i>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-orange-500 transition rounded-lg">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Recipes Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            
            <!-- Recipe Card 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl recipe-card border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=80" 
                        alt="Salade César" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-xs font-bold uppercase text-green-600 shadow-lg">
                        <i class="fas fa-leaf mr-1"></i>Entrées
                    </span>
                    <button class="absolute top-4 left-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg">
                        <i class="far fa-heart text-orange-500"></i>
                    </button>
                    <div class="absolute bottom-4 left-4 flex gap-2">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-clock mr-1"></i>25 min
                        </span>
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-fire mr-1"></i>320 kcal
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-orange-500 cursor-pointer transition">
                            Salade César Maison
                        </h3>
                        <div class="flex items-center gap-1 bg-orange-50 px-3 py-1 rounded-full">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.7</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                        Une recette classique revisitée avec une sauce crémeuse maison et des croûtons croustillants.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span class="bg-green-50 text-green-600 px-3 py-1 rounded-full font-semibold">
                            <i class="fas fa-leaf mr-1"></i>Végétarien
                        </span>
                        <span><i class="fas fa-signal mr-1"></i>Facile</span>
                        <span><i class="fas fa-users mr-1"></i>4 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                SC
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Sophie C.</p>
                                <p class="text-xs text-gray-500">Chef</p>
                            </div>
                        </div>
                        <a href="recette.html" class="text-orange-500 font-semibold hover:text-orange-600 text-sm">
                            Voir <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl recipe-card border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=800&q=80" 
                        alt="Buddha Bowl" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-xs font-bold uppercase text-orange-600 shadow-lg">
                        <i class="fas fa-drumstick-bite mr-1"></i>Plats
                    </span>
                    <button class="absolute top-4 left-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg">
                        <i class="fas fa-heart text-red-500"></i>
                    </button>
                    <div class="absolute bottom-4 left-4 flex gap-2">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-clock mr-1"></i>40 min
                        </span>
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-fire mr-1"></i>450 kcal
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-orange-500 cursor-pointer transition">
                            Buddha Bowl Coloré
                        </h3>
                        <div class="flex items-center gap-1 bg-orange-50 px-3 py-1 rounded-full">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.9</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                        Un bol complet et équilibré avec des saveurs variées, parfait pour un déjeuner sain.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span class="bg-orange-50 text-orange-600 px-3 py-1 rounded-full font-semibold">
                            <i class="fas fa-carrot mr-1"></i>Vegan
                        </span>
                        <span><i class="fas fa-signal mr-1"></i>Moyen</span>
                        <span><i class="fas fa-users mr-1"></i>2 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                ML
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Marie L.</p>
                                <p class="text-xs text-gray-500">Pâtissière</p>
                            </div>
                        </div>
                        <a href="recette.html" class="text-orange-500 font-semibold hover:text-orange-600 text-sm">
                            Voir <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl recipe-card border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505253716362-afaea1d3d1af?auto=format&fit=crop&w=800&q=80" 
                        alt="Taboulé" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-xs font-bold uppercase text-green-600 shadow-lg">
                        <i class="fas fa-leaf mr-1"></i>Entrées
                    </span>
                    <button class="absolute top-4 left-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg">
                        <i class="far fa-heart text-orange-500"></i>
                    </button>
                    <div class="absolute bottom-4 left-4 flex gap-2">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-clock mr-1"></i>20 min
                        </span>
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-fire mr-1"></i>180 kcal
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-orange-500 cursor-pointer transition">
                            Taboulé Libanais
                        </h3>
                        <div class="flex items-center gap-1 bg-orange-50 px-3 py-1 rounded-full">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.6</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                        Une recette authentique pleine de fraîcheur et d'herbes aromatiques du Liban.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span class="bg-green-50 text-green-600 px-3 py-1 rounded-full font-semibold">
                            <i class="fas fa-leaf mr-1"></i>Végétarien
                        </span>
                        <span><i class="fas fa-signal mr-1"></i>Facile</span>
                        <span><i class="fas fa-users mr-1"></i>6 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                AK
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Ahmed K.</p>
                                <p class="text-xs text-gray-500">Chef</p>
                            </div>
                        </div>
                        <a href="recette.html" class="text-orange-500 font-semibold hover:text-orange-600 text-sm">
                            Voir <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 4 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl recipe-card border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?auto=format&fit=crop&w=800&q=80" 
                        alt="Pancakes" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-xs font-bold uppercase text-pink-600 shadow-lg">
                        <i class="fas fa-ice-cream mr-1"></i>Desserts
                    </span>
                    <button class="absolute top-4 left-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg">
                        <i class="far fa-heart text-orange-500"></i>
                    </button>
                    <div class="absolute bottom-4 left-4 flex gap-2">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-clock mr-1"></i>15 min
                        </span>
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-fire mr-1"></i>280 kcal
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-orange-500 cursor-pointer transition">
                            Pancakes Moelleux
                        </h3>
                        <div class="flex items-center gap-1 bg-orange-50 px-3 py-1 rounded-full">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.8</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                        Des pancakes ultra moelleux avec sirop d'érable et fruits frais, parfait pour le petit-déjeuner.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span class="bg-purple-50 text-purple-600 px-3 py-1 rounded-full font-semibold">
                            <i class="fas fa-heart mr-1"></i>Gourmand
                        </span>
                        <span><i class="fas fa-signal mr-1"></i>Facile</span>
                        <span><i class="fas fa-users mr-1"></i>4 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                EL
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Emma L.</p>
                                <p class="text-xs text-gray-500">Pâtissière</p>
                            </div>
                        </div>
                        <a href="recette.html" class="text-orange-500 font-semibold hover:text-orange-600 text-sm">
                            Voir <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 5 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl recipe-card border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=800&q=80" 
                        alt="Burger" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-xs font-bold uppercase text-orange-600 shadow-lg">
                        <i class="fas fa-drumstick-bite mr-1"></i>Plats
                    </span>
                    <button class="absolute top-4 left-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg">
                        <i class="fas fa-heart text-red-500"></i>
                    </button>
                    <div class="absolute bottom-4 left-4 flex gap-2">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-clock mr-1"></i>45 min
                        </span>
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-fire mr-1"></i>650 kcal
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-orange-500 cursor-pointer transition">
                            Burger Gourmet Maison
                        </h3>
                        <div class="flex items-center gap-1 bg-orange-50 px-3 py-1 rounded-full">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.7</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                        Un burger artisanal avec viande de qualité, pain brioché maison et sauce secrète.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span class="bg-red-50 text-red-600 px-3 py-1 rounded-full font-semibold">
                            <i class="fas fa-drumstick-bite mr-1"></i>Viande
                        </span>
                        <span><i class="fas fa-signal mr-1"></i>Moyen</span>
                        <span><i class="fas fa-users mr-1"></i>4 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                PM
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Pierre M.</p>
                                <p class="text-xs text-gray-500">Chef</p>
                            </div>
                        </div>
                        <a href="recette.html" class="text-orange-500 font-semibold hover:text-orange-600 text-sm">
                            Voir <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 6 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl recipe-card border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80" 
                        alt="Quinoa" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-xs font-bold uppercase text-orange-600 shadow-lg">
                        <i class="fas fa-drumstick-bite mr-1"></i>Plats
                    </span>
                    <button class="absolute top-4 left-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg">
                        <i class="far fa-heart text-orange-500"></i>
                    </button>
                    <div class="absolute bottom-4 left-4 flex gap-2">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-clock mr-1"></i>30 min
                        </span>
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-gray-700">
                            <i class="fas fa-fire mr-1"></i>350 kcal
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-orange-500 cursor-pointer transition">
                            Salade de Quinoa Royale
                        </h3>
                        <div class="flex items-center gap-1 bg-orange-50 px-3 py-1 rounded-full">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.8</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                        Une explosion de fraîcheur avec des légumes croquants et une vinaigrette parfumée.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span class="bg-green-50 text-green-600 px-3 py-1 rounded-full font-semibold">
                            <i class="fas fa-leaf mr-1"></i>Végétarien
                        </span>
                        <span><i class="fas fa-signal mr-1"></i>Facile</span>
                        <span><i class="fas fa-users mr-1"></i>4 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                JD
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Jean D.</p>
                                <p class="text-xs text-gray-500">Chef</p>
                            </div>
                        </div>
                        <a href="recette.html" class="text-orange-500 font-semibold hover:text-orange-600 text-sm">
                            Voir <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-2">
            <button class="w-10 h-10 rounded-xl border-2 border-gray-200 hover:border-orange-500 hover:bg-orange-50 transition flex items-center justify-center">
                <i class="fas fa-chevron-left text-gray-600"></i>
            </button>
            
            <button class="w-10 h-10 rounded-xl gradient-bg text-white font-semibold shadow-lg">1</button>
            <button class="w-10 h-10 rounded-xl border-2 border-gray-200 hover:border-orange-500 hover:bg-orange-50 transition font-semibold text-gray-600">2</button>
            <button class="w-10 h-10 rounded-xl border-2 border-gray-200 hover:border-orange-500 hover:bg-orange-50 transition font-semibold text-gray-600">3</button>
            <span class="px-2 text-gray-500">...</span>
            <button class="w-10 h-10 rounded-xl border-2 border-gray-200 hover:border-orange-500 hover:bg-orange-50 transition font-semibold text-gray-600">42</button>
            
            <button class="w-10 h-10 rounded-xl border-2 border-gray-200 hover:border-orange-500 hover:bg-orange-50 transition flex items-center justify-center">
                <i class="fas fa-chevron-right text-gray-600"></i>
            </button>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                            <i class="fas fa-utensils text-white text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Gastro<span class="text-orange-500">Share</span></h3>
                    </div>
                    <p class="text-gray-400 text-sm">Partagez vos saveurs avec le monde entier.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Liens rapides</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="index.html" class="hover:text-orange-500 transition">Accueil</a></li>
                        <li><a href="recettes.html" class="hover:text-orange-500 transition">Recettes</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition">Communauté</a></li>
                        <li><a href="about.html" class="hover:text-orange-500 transition">À propos</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Légal</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-orange-500 transition">Confidentialité</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition">Conditions</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Suivez-nous</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500 text-sm">
                <p>&copy; 2025 GastroShare. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('user-dropdown');
            dropdown.classList.toggle('hidden');
        }
        
        function toggleAdvancedFilters() {
            const filters = document.getElementById('advancedFilters');
            const icon = document.getElementById('advancedIcon');
            const text = document.getElementById('advancedText');
            
            filters.classList.toggle('hidden');
            
            if (filters.classList.contains('hidden')) {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
                text.textContent = 'Filtres avancés';
            } else {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
                text.textContent = 'Masquer les filtres avancés';
            }
        }

        // Simulate filter functionality
        document.querySelectorAll('input[type="checkbox"], input[type="radio"], select').forEach(element => {
            element.addEventListener('change', function() {
                console.log('Filter changed:', this.value || this.checked);
                // Here you would typically trigger a search/filter function
            });
        });
    </script>

</body>
</html>