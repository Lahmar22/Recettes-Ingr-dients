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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); }
        .glass-effect { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }
        .recipe-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .recipe-card:hover { transform: translateY(-8px); }
        
        /* Dropdown Animation */
        #user-dropdown { transition: all 0.2s ease-in-out; }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-50">

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
                    <a href="home" class="text-orange-500 font-semibold border-b-2 border-orange-500 pb-1">Accueil</a>
                    <a href="recete" class="text-gray-600 hover:text-orange-500 font-medium transition">Recettes</a>
                </div>

                <div class="flex items-center gap-4">
                    <button onclick="toggleModal('modal-recette')" class="hidden md:flex items-center gap-2 gradient-bg text-white px-6 py-2.5 rounded-xl hover:shadow-xl transition transform hover:scale-105 font-medium">
                        <i class="fas fa-plus"></i>
                        <span>Publier</span>
                    </button>

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

    <header class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-orange-300 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-400 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
            <div class="inline-block mb-4 px-6 py-2 bg-orange-100 rounded-full">
                <span class="text-orange-600 font-semibold text-sm">🎉 Nouvelle communauté culinaire</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                Découvrez et partagez<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">l'excellence culinaire</span>
            </h2>
            <p class="text-gray-600 text-lg mb-10 max-w-2xl mx-auto">
                Rejoignez notre communauté de passionnés. Échangez vos secrets et trouvez l'inspiration pour votre prochain repas gastronomique.
            </p>
            
            <div class="flex flex-wrap justify-center gap-8 mt-16">
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition min-w-[200px]">
                    <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book-open text-white text-2xl"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-900 mb-2" id="stat-total">1,254</p>
                    <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Recettes</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition min-w-[200px]">
                    <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-comments text-white text-2xl"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-900 mb-2">45k</p>
                    <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Commentaires</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition min-w-[200px]">
                    <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-900 mb-2">12k</p>
                    <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Chefs</p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-16">
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
            <div class="relative w-full md:w-96">
                <input type="text" placeholder="Rechercher un plat, un ingrédient..." 
                    class="w-full pl-12 pr-4 py-4 rounded-2xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition shadow-sm">
                <i class="fas fa-search absolute left-4 top-5 text-gray-400"></i>
            </div>
            
            <div class="flex gap-3 overflow-x-auto pb-2 w-full md:w-auto">
                <button class="gradient-bg text-white px-6 py-3 rounded-full whitespace-nowrap font-semibold shadow-lg hover:shadow-xl transition transform hover:scale-105">
                    <i class="fas fa-fire mr-2"></i>Tout
                </button>
                <button class="bg-white border-2 border-gray-200 px-6 py-3 rounded-full hover:border-orange-500 hover:bg-orange-50 transition whitespace-nowrap font-medium">
                    <i class="fas fa-leaf mr-2 text-green-500"></i>Entrées
                </button>
                <button class="bg-white border-2 border-gray-200 px-6 py-3 rounded-full hover:border-orange-500 hover:bg-orange-50 transition whitespace-nowrap font-medium">
                    <i class="fas fa-drumstick-bite mr-2 text-orange-500"></i>Plats
                </button>
                <button class="bg-white border-2 border-gray-200 px-6 py-3 rounded-full hover:border-orange-500 hover:bg-orange-50 transition whitespace-nowrap font-medium">
                    <i class="fas fa-ice-cream mr-2 text-pink-500"></i>Desserts
                </button>
                <button class="bg-white border-2 border-gray-200 px-6 py-3 rounded-full hover:border-orange-500 hover:bg-orange-50 transition whitespace-nowrap font-medium">
                    <i class="fas fa-cocktail mr-2 text-blue-500"></i>Boissons
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="recipes-container">
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl recipe-card border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80" 
                        alt="Salade" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-xs font-bold uppercase text-orange-600 shadow-lg">
                        <i class="fas fa-leaf mr-1"></i>Plats
                    </span>
                    <button class="absolute top-4 left-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center hover:bg-white transition shadow-lg">
                        <i class="far fa-heart text-orange-500"></i>
                    </button>
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
                        Une explosion de fraîcheur avec des légumes croquants et une vinaigrette au citron vert parfumée.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span><i class="far fa-clock mr-1"></i>30 min</span>
                        <span><i class="fas fa-signal mr-1"></i>Facile</span>
                        <span><i class="fas fa-users mr-1"></i>4 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                JD
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Jean Dupont</p>
                                <p class="text-xs text-gray-500">Chef passionné</p>
                            </div>
                        </div>
                        <div class="flex gap-4 text-gray-400 text-sm">
                            <button class="hover:text-orange-500 transition">
                                <i class="far fa-comment mr-1"></i>12
                            </button>
                            <button class="hover:text-red-500 transition">
                                <i class="far fa-heart mr-1"></i>45
                            </button>
                        </div>
                    </div>
                </div>
            </div>

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
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 hover:text-orange-500 cursor-pointer transition">
                            Pancakes Moelleux
                        </h3>
                        <div class="flex items-center gap-1 bg-orange-50 px-3 py-1 rounded-full">
                            <i class="fas fa-star text-orange-400 text-sm"></i>
                            <span class="text-sm font-bold text-orange-600">4.9</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                        Des pancakes ultra moelleux avec un sirop d'érable authentique et des fruits frais de saison.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span><i class="far fa-clock mr-1"></i>20 min</span>
                        <span><i class="fas fa-signal mr-1"></i>Facile</span>
                        <span><i class="fas fa-users mr-1"></i>2 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                ML
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Marie Leblanc</p>
                                <p class="text-xs text-gray-500">Pâtissière</p>
                            </div>
                        </div>
                        <div class="flex gap-4 text-gray-400 text-sm">
                            <button class="hover:text-orange-500 transition">
                                <i class="far fa-comment mr-1"></i>28
                            </button>
                            <button class="hover:text-red-500 transition">
                                <i class="far fa-heart mr-1"></i>89
                            </button>
                        </div>
                    </div>
                </div>
            </div>

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
                        Un burger artisanal avec viande de qualité, pain brioché maison et sauce secrète épicée.
                    </p>
                    <div class="flex items-center gap-4 mb-4 text-xs text-gray-500">
                        <span><i class="far fa-clock mr-1"></i>45 min</span>
                        <span><i class="fas fa-signal mr-1"></i>Moyen</span>
                        <span><i class="fas fa-users mr-1"></i>4 pers</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-sm font-bold text-white shadow-md">
                                PM
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Pierre Martin</p>
                                <p class="text-xs text-gray-500">Chef cuisinier</p>
                            </div>
                        </div>
                        <div class="flex gap-4 text-gray-400 text-sm">
                            <button class="hover:text-orange-500 transition">
                                <i class="far fa-comment mr-1"></i>34
                            </button>
                            <button class="hover:text-red-500 transition">
                                <i class="fas fa-heart mr-1"></i>156
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <button class="gradient-bg text-white px-8 py-4 rounded-xl font-semibold hover:shadow-xl transition transform hover:scale-105">
                <i class="fas fa-plus-circle mr-2"></i>Charger plus de recettes
            </button>
        </div>
    </main>

    <div id="modal-recette" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden flex items-center justify-center z-[60] p-4">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
            <div class="p-8 border-b sticky top-0 bg-white flex justify-between items-center rounded-t-3xl">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900">Publier une recette</h3>
                    <p class="text-sm text-gray-500 mt-1">Partagez votre création culinaire</p>
                </div>
                <button onclick="toggleModal('modal-recette')" class="w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition">
                    <i class="fas fa-times text-gray-600"></i>
                </button>
            </div>
            <form class="p-8 space-y-6">
                <div>
                    <label class="block text-sm font-bold mb-2 text-gray-700">
                        <i class="fas fa-utensils mr-2 text-orange-500"></i>Titre de la recette
                    </label>
                    <input type="text" class="w-full border-2 border-gray-200 rounded-xl p-3 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition" 
                        placeholder="Ex: Tarte Tatin de grand-mère">
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold mb-2 text-gray-700">
                            <i class="fas fa-tag mr-2 text-orange-500"></i>Catégorie
                        </label>
                        <select class="w-full border-2 border-gray-200 rounded-xl p-3 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-500">
                            <option>Entrées</option>
                            <option>Plats</option>
                            <option>Desserts</option>
                            <option>Boissons</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-2 text-gray-700">
                            <i class="fas fa-image mr-2 text-orange-500"></i>Image (URL)
                        </label>
                        <input type="text" class="w-full border-2 border-gray-200 rounded-xl p-3 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-500" 
                            placeholder="Lien de l'image">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-bold mb-2 text-gray-700">
                        <i class="fas fa-shopping-basket mr-2 text-orange-500"></i>Ingrédients
                    </label>
                    <textarea class="w-full border-2 border-gray-200 rounded-xl p-3 h-28 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-500" 
                        placeholder="Séparez les ingrédients par une virgule..."></textarea>
                </div>
                
                <div>
                    <label class="block text-sm font-bold mb-2 text-gray-700">
                        <i class="fas fa-list-ol mr-2 text-orange-500"></i>Étapes de préparation
                    </label>
                    <textarea class="w-full border-2 border-gray-200 rounded-xl p-3 h-36 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-500" 
                        placeholder="1. Préchauffez le four à 180°C..."></textarea>
                </div>
                
                <button type="submit" class="w-full gradient-bg text-white py-4 rounded-xl font-bold hover:shadow-xl transition transform hover:scale-105 text-lg">
                    <i class="fas fa-paper-plane mr-2"></i>Partager ma recette
                </button>
            </form>
        </div>
    </div>

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
                        <li><a href="#" class="hover:text-orange-500 transition">Accueil</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition">Recettes</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition">Communauté</a></li>
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