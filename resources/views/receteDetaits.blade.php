<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salade de Quinoa Royale | GastroShare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); }
        .glass-effect { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-50">

    <!-- Navigation -->
    <nav class="glass-effect shadow-lg sticky top-0 z-50 border-b border-orange-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <a href="index.html" class="flex items-center gap-3 group cursor-pointer">
                    <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                        <i class="fas fa-utensils text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Gastro<span class="text-orange-500">Share</span></h1>
                        <p class="text-xs text-gray-500">Partagez vos saveurs</p>
                    </div>
                </a>
                
                <div class="hidden md:flex space-x-8">
                    <a href="index.html" class="text-gray-600 hover:text-orange-500 font-medium transition">Accueil</a>
                    <a href="recettes.html" class="text-orange-500 font-semibold border-b-2 border-orange-500 pb-1">Recettes</a>
                    
                </div>
                
                <div class="flex items-center gap-4">
                    
                </div>
            </div>
        </div>
    </nav>

    <!-- Recipe Hero Section -->
    <div class="relative h-[500px] overflow-hidden">
        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=1920&q=80" 
            alt="Salade de Quinoa" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        
        <div class="absolute bottom-0 left-0 right-0 p-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-white/90 backdrop-blur px-4 py-2 rounded-full text-sm font-bold uppercase text-orange-600">
                        <i class="fas fa-leaf mr-2"></i>Plats
                    </span>
                    <span class="bg-white/90 backdrop-blur px-4 py-2 rounded-full text-sm font-bold text-gray-700">
                        <i class="fas fa-signal mr-2"></i>Facile
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">Salade de Quinoa Royale</h1>
                <p class="text-white/90 text-lg max-w-3xl mb-6">
                    Une explosion de fraîcheur avec des légumes croquants et une vinaigrette au citron vert parfumée. 
                    Parfait pour un déjeuner sain et équilibré.
                </p>
                
                <div class="flex flex-wrap gap-6 text-white">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-clock text-orange-400"></i>
                        <span class="font-semibold">30 min</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-users text-orange-400"></i>
                        <span class="font-semibold">4 personnes</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-fire text-orange-400"></i>
                        <span class="font-semibold">350 kcal</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-star text-orange-400"></i>
                        <span class="font-semibold">4.8 / 5</span>
                        <span class="text-white/70">(156 avis)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid lg:grid-cols-2 gap-8">
            
            <!-- Left Column - Recipe Details -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Author Info -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center text-xl font-bold text-white shadow-lg">
                                JD
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 text-lg">Jean Dupont</h3>
                                <p class="text-gray-500 text-sm">Chef passionné • 45 recettes</p>
                                <div class="flex items-center gap-2 mt-1">
                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                    <span class="text-sm text-gray-600">4.9 (230 avis)</span>
                                </div>
                            </div>
                        </div>
                        <button class="gradient-bg text-white px-6 py-2.5 rounded-xl hover:shadow-xl transition font-semibold">
                            <i class="fas fa-user-plus mr-2"></i>Suivre
                        </button>
                    </div>
                </div>

                <!-- Ingredients -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                            <i class="fas fa-shopping-basket text-white text-xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Ingrédients</h2>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">200g de quinoa</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">1 avocat mûr</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">200g de tomates cerises</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">1 concombre</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">100g de feta</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">1 poivron rouge</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">50g d'oignons rouges</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">Jus de 2 citrons verts</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">3 cuillères d'huile d'olive</span>
                        </label>
                        
                        <label class="flex items-center gap-3 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="text-gray-700">Herbes fraîches (menthe, coriandre)</span>
                        </label>
                    </div>

                    
                </div>

                <!-- Instructions -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                            <i class="fas fa-list-ol text-white text-xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Préparation</h2>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 gradient-bg rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                1
                            </div>
                            <div class="flex-1 pt-1">
                                <h4 class="font-semibold text-gray-900 mb-2">Cuisson du quinoa</h4>
                                <p class="text-gray-600">
                                    Rincez le quinoa sous l'eau froide. Portez 400ml d'eau à ébullition dans une casserole, 
                                    ajoutez le quinoa et une pincée de sel. Réduisez le feu, couvrez et laissez mijoter 15 minutes. 
                                    Retirez du feu et laissez reposer 5 minutes couvert.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 gradient-bg rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                2
                            </div>
                            <div class="flex-1 pt-1">
                                <h4 class="font-semibold text-gray-900 mb-2">Préparation des légumes</h4>
                                <p class="text-gray-600">
                                    Pendant la cuisson du quinoa, coupez les tomates cerises en deux, émincez le concombre, 
                                    le poivron et l'oignon rouge. Coupez l'avocat en dés et émiettez la feta.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 gradient-bg rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                3
                            </div>
                            <div class="flex-1 pt-1">
                                <h4 class="font-semibold text-gray-900 mb-2">Vinaigrette</h4>
                                <p class="text-gray-600">
                                    Dans un bol, mélangez le jus de citron vert, l'huile d'olive, du sel et du poivre. 
                                    Ajoutez les herbes fraîches ciselées et mélangez bien.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 gradient-bg rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                4
                            </div>
                            <div class="flex-1 pt-1">
                                <h4 class="font-semibold text-gray-900 mb-2">Assemblage</h4>
                                <p class="text-gray-600">
                                    Une fois le quinoa refroidi, mélangez-le avec tous les légumes dans un grand saladier. 
                                    Ajoutez la vinaigrette et mélangez délicatement. Ajoutez l'avocat et la feta en dernier.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 gradient-bg rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                5
                            </div>
                            <div class="flex-1 pt-1">
                                <h4 class="font-semibold text-gray-900 mb-2">Service</h4>
                                <p class="text-gray-600">
                                    Servez immédiatement ou réfrigérez 30 minutes pour que les saveurs se mélangent. 
                                    Ajoutez quelques feuilles de menthe fraîche avant de servir pour une touche finale.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tips -->
                <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl p-8 border border-orange-200">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <i class="fas fa-lightbulb text-orange-500 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-xl mb-3">Conseils du chef</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check text-orange-500 mt-1"></i>
                                    <span>Vous pouvez préparer cette salade à l'avance, elle se conserve 2 jours au réfrigérateur.</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check text-orange-500 mt-1"></i>
                                    <span>Pour une version vegan, remplacez la feta par du tofu mariné.</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check text-orange-500 mt-1"></i>
                                    <span>Ajoutez des graines de tournesol ou de courge pour plus de croquant.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                                <i class="fas fa-comments text-white text-xl"></i>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Commentaires (156)</h2>
                        </div>
                    </div>

                    <!-- Add Comment -->
                    <div class="mb-8">
                        <textarea 
                            placeholder="Partagez votre expérience avec cette recette..."
                            class="w-full border-2 border-gray-200 rounded-xl p-4 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition h-24"
                        ></textarea>
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex gap-1">
                                <button class="text-gray-400 hover:text-orange-500 transition text-2xl">
                                    <i class="far fa-star"></i>
                                </button>
                                <button class="text-gray-400 hover:text-orange-500 transition text-2xl">
                                    <i class="far fa-star"></i>
                                </button>
                                <button class="text-gray-400 hover:text-orange-500 transition text-2xl">
                                    <i class="far fa-star"></i>
                                </button>
                                <button class="text-gray-400 hover:text-orange-500 transition text-2xl">
                                    <i class="far fa-star"></i>
                                </button>
                                <button class="text-gray-400 hover:text-orange-500 transition text-2xl">
                                    <i class="far fa-star"></i>
                                </button>
                            </div>
                            <button class="gradient-bg text-white px-6 py-2.5 rounded-xl hover:shadow-xl transition font-semibold">
                                <i class="fas fa-paper-plane mr-2"></i>Publier
                            </button>
                        </div>
                    </div>

                    <!-- Comments List -->
                    <div class="space-y-6">
                        <div class="border-b border-gray-100 pb-6">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 rounded-full gradient-bg flex items-center justify-center text-white font-bold flex-shrink-0">
                                    ML
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Marie Leblanc</h4>
                                            <div class="flex items-center gap-2 text-sm text-gray-500">
                                                <div class="flex gap-1">
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                </div>
                                                <span>•</span>
                                                <span>Il y a 2 jours</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 mb-3">
                                        Excellente recette ! Je l'ai préparée pour un déjeuner entre amis et tout le monde a adoré. 
                                        La vinaigrette au citron vert apporte vraiment une touche fraîche et délicieuse.
                                    </p>
                                    <div class="flex gap-4 text-sm">
                                        <button class="text-gray-500 hover:text-orange-500 transition">
                                            <i class="far fa-thumbs-up mr-1"></i>24
                                        </button>
                                        <button class="text-gray-500 hover:text-orange-500 transition">
                                            <i class="far fa-comment mr-1"></i>Répondre
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-100 pb-6">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 rounded-full gradient-bg flex items-center justify-center text-white font-bold flex-shrink-0">
                                    PM
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Pierre Martin</h4>
                                            <div class="flex items-center gap-2 text-sm text-gray-500">
                                                <div class="flex gap-1">
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                    <i class="fas fa-star text-orange-400 text-xs"></i>
                                                    <i class="far fa-star text-gray-300 text-xs"></i>
                                                </div>
                                                <span>•</span>
                                                <span>Il y a 5 jours</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 mb-3">
                                        Très bonne salade, saine et équilibrée. J'ai ajouté des pois chiches pour plus de protéines. 
                                        C'est parfait pour un repas léger et nutritif.
                                    </p>
                                    <div class="flex gap-4 text-sm">
                                        <button class="text-gray-500 hover:text-orange-500 transition">
                                            <i class="far fa-thumbs-up mr-1"></i>18
                                        </button>
                                        <button class="text-gray-500 hover:text-orange-500 transition">
                                            <i class="far fa-comment mr-1"></i>Répondre
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="w-full mt-6 text-orange-500 font-semibold hover:text-orange-600 transition py-3">
                        Voir tous les commentaires <i class="fas fa-arrow-down ml-2"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- Similar Recipes -->
        
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

</body>
</html>