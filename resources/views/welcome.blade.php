<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos | GastroShare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); }
        .glass-effect { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }
        .pattern-bg {
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(251, 146, 60, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(249, 115, 22, 0.1) 0%, transparent 50%);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-50 pattern-bg">

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
                
                
                
                <div class="flex items-center gap-4">
                    <a href="login" class="text-gray-600 hover:text-orange-500 font-medium transition">
                        <i class="fas fa-sign-in-alt mr-2"></i>Connexion
                    </a>
                    <a href="inscription" class="bg-white border-2 border-orange-500 text-orange-500 px-5 py-2 rounded-xl hover:bg-orange-500 hover:text-white transition font-medium">
                        Inscription
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-orange-300 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-400 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
            <div class="inline-block mb-4 px-6 py-2 bg-orange-100 rounded-full">
                <span class="text-orange-600 font-semibold text-sm">🍳 Qui sommes-nous ?</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                Bienvenue sur<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">GastroShare</span>
            </h1>
            <p class="text-gray-600 text-lg mb-10 max-w-3xl mx-auto">
                La plateforme qui rassemble les passionnés de cuisine du monde entier. 
                Découvrez, partagez et savourez des recettes authentiques dans une communauté chaleureuse et créative.
            </p>
        </div>
    </div>

    <!-- Mission Section -->
    <main class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <div class="inline-block mb-4 px-5 py-2 bg-orange-100 rounded-full">
                    <span class="text-orange-600 font-semibold text-sm">🎯 Notre Mission</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Connecter les gourmets et les chefs du monde entier
                </h2>
                <p class="text-gray-600 text-lg mb-6">
                    GastroShare est née d'une passion commune pour la gastronomie et le partage. 
                    Notre mission est de créer un espace où chacun peut découvrir, apprendre et transmettre 
                    l'art culinaire dans toute sa diversité.
                </p>
                <p class="text-gray-600 text-lg mb-8">
                    Que vous soyez chef professionnel, amateur éclairé ou débutant curieux, 
                    vous trouverez ici une communauté bienveillante prête à partager ses secrets, 
                    ses astuces et ses meilleures recettes.
                </p>
                <div class="flex gap-4">
                    <a href="inscription" class="gradient-bg text-white px-8 py-4 rounded-xl font-semibold hover:shadow-xl transition transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>Rejoindre la communauté
                    </a>
                    <a href="#" class="bg-white border-2 border-gray-200 text-gray-700 px-8 py-4 rounded-xl font-semibold hover:border-orange-500 transition">
                        Découvrir les recettes
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -top-6 -right-6 w-64 h-64 bg-orange-200 rounded-3xl blur-2xl opacity-30"></div>
                <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=800&q=80" 
                    alt="Cuisine" class="relative rounded-3xl shadow-2xl">
            </div>
        </div>

        <!-- Values Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <div class="inline-block mb-4 px-5 py-2 bg-orange-100 rounded-full">
                    <span class="text-orange-600 font-semibold text-sm">💎 Nos Valeurs</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Ce qui nous anime</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Des valeurs fortes qui guident notre communauté au quotidien
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Passion</h3>
                    <p class="text-gray-600">
                        La cuisine est bien plus qu'une nécessité, c'est un art qui rassemble et crée des émotions. 
                        Nous célébrons cette passion avec vous.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Partage</h3>
                    <p class="text-gray-600">
                        Nous croyons que les meilleures recettes sont celles qui se transmettent. 
                        Partagez vos secrets et découvrez ceux des autres.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-globe text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Diversité</h3>
                    <p class="text-gray-600">
                        De la cuisine française à la street food asiatique, nous célébrons toutes les cultures 
                        culinaires du monde.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-leaf text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Durabilité</h3>
                    <p class="text-gray-600">
                        Nous encourageons une cuisine responsable et respectueuse de l'environnement, 
                        avec des produits locaux et de saison.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Apprentissage</h3>
                    <p class="text-gray-600">
                        Chaque recette est une opportunité d'apprendre et de progresser. 
                        Nous facilitons l'échange de connaissances.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-medal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600">
                        Nous valorisons la qualité et l'authenticité dans chaque recette partagée 
                        par notre communauté.
                    </p>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-white rounded-3xl p-12 shadow-2xl border border-gray-100 mb-20">
            <div class="text-center mb-8">
                <div class="inline-block mb-4 px-5 py-2 bg-orange-100 rounded-full">
                    <span class="text-orange-600 font-semibold text-sm">📊 En Chiffres</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Notre impact</h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-book-open text-white text-3xl"></i>
                    </div>
                    <p class="text-5xl font-bold text-gray-900 mb-2">1,254+</p>
                    <p class="text-gray-600 font-semibold">Recettes partagées</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-users text-white text-3xl"></i>
                    </div>
                    <p class="text-5xl font-bold text-gray-900 mb-2">12,000+</p>
                    <p class="text-gray-600 font-semibold">Membres actifs</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-comments text-white text-3xl"></i>
                    </div>
                    <p class="text-5xl font-bold text-gray-900 mb-2">45,000+</p>
                    <p class="text-gray-600 font-semibold">Commentaires échangés</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-globe text-white text-3xl"></i>
                    </div>
                    <p class="text-5xl font-bold text-gray-900 mb-2">50+</p>
                    <p class="text-gray-600 font-semibold">Pays représentés</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <div class="inline-block mb-4 px-5 py-2 bg-orange-100 rounded-full">
                    <span class="text-orange-600 font-semibold text-sm">👥 Notre Équipe</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Les passionnés derrière GastroShare</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Une équipe dédiée à créer la meilleure expérience culinaire en ligne
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition border border-gray-100 text-center">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full gradient-bg flex items-center justify-center text-3xl font-bold text-white shadow-lg">
                        SC
                    </div>
                    <h3 class="font-bold text-gray-900 text-xl mb-1">Sophie Chardin</h3>
                    <p class="text-orange-500 font-semibold mb-3">CEO & Fondatrice</p>
                    <p class="text-gray-600 text-sm mb-4">
                        Chef étoilée reconvertie dans la tech, passionnée par le partage culinaire.
                    </p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition border border-gray-100 text-center">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full gradient-bg flex items-center justify-center text-3xl font-bold text-white shadow-lg">
                        MD
                    </div>
                    <h3 class="font-bold text-gray-900 text-xl mb-1">Marc Dubois</h3>
                    <p class="text-orange-500 font-semibold mb-3">CTO</p>
                    <p class="text-gray-600 text-sm mb-4">
                        Ingénieur senior spécialisé dans les plateformes communautaires.
                    </p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition border border-gray-100 text-center">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full gradient-bg flex items-center justify-center text-3xl font-bold text-white shadow-lg">
                        EL
                    </div>
                    <h3 class="font-bold text-gray-900 text-xl mb-1">Emma Laurent</h3>
                    <p class="text-orange-500 font-semibold mb-3">Chef de Contenu</p>
                    <p class="text-gray-600 text-sm mb-4">
                        Journaliste culinaire et photographe food, créatrice de contenu inspirant.
                    </p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition border border-gray-100 text-center">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full gradient-bg flex items-center justify-center text-3xl font-bold text-white shadow-lg">
                        LM
                    </div>
                    <h3 class="font-bold text-gray-900 text-xl mb-1">Lucas Martin</h3>
                    <p class="text-orange-500 font-semibold mb-3">Community Manager</p>
                    <p class="text-gray-600 text-sm mb-4">
                        Expert en animation de communauté et modération bienveillante.
                    </p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-3xl p-12 text-center shadow-2xl">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Prêt à partager vos saveurs ?
                </h2>
                <p class="text-white/90 text-lg mb-8">
                    Rejoignez des milliers de passionnés et commencez à partager vos meilleures recettes dès aujourd'hui.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="inscription.html" class="bg-white text-orange-500 px-8 py-4 rounded-xl font-bold hover:shadow-2xl transition transform hover:scale-105">
                        <i class="fas fa-user-plus mr-2"></i>Créer un compte gratuit
                    </a>
                    <a href="index.html" class="bg-white/20 backdrop-blur text-white border-2 border-white px-8 py-4 rounded-xl font-bold hover:bg-white/30 transition">
                        <i class="fas fa-compass mr-2"></i>Explorer les recettes
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-20 grid md:grid-cols-2 gap-12">
            <div>
                <div class="inline-block mb-4 px-5 py-2 bg-orange-100 rounded-full">
                    <span class="text-orange-600 font-semibold text-sm">📧 Contact</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Restons en contact</h2>
                <p class="text-gray-600 text-lg mb-8">
                    Une question, une suggestion ou simplement envie de discuter cuisine ? 
                    N'hésitez pas à nous contacter, nous serons ravis de vous répondre !
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-envelope text-orange-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Email</p>
                            <a href="mailto:contact@gastroshare.com" class="text-orange-500 hover:text-orange-600">
                                contact@gastroshare.com
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-phone text-orange-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Téléphone</p>
                            <a href="tel:+33123456789" class="text-orange-500 hover:text-orange-600">
                                +33 1 23 45 67 89
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-orange-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Adresse</p>
                            <p class="text-gray-600">123 Rue de la Gastronomie, 75001 Paris, France</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="font-bold text-gray-900 mb-4">Suivez-nous</h3>
                    <div class="flex gap-3">
                        <a href="#" class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center hover:bg-orange-500 hover:text-white transition">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100">
                <h3 class="font-bold text-gray-900 text-2xl mb-6">Envoyez-nous un message</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nom complet</label>
                        <input 
                            type="text" 
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="Votre nom"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input 
                            type="email" 
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="votre@email.com"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Sujet</label>
                        <select class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition">
                            <option>Question générale</option>
                            <option>Support technique</option>
                            <option>Partenariat</option>
                            <option>Presse</option>
                            <option>Autre</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea 
                            rows="5"
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="Votre message..."
                        ></textarea>
                    </div>

                    <button 
                        type="submit"
                        class="w-full gradient-bg text-white py-4 rounded-xl font-bold hover:shadow-xl transition transform hover:scale-105"
                    >
                        <i class="fas fa-paper-plane mr-2"></i>Envoyer le message
                    </button>
                </form>
            </div>
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

</body>
</html>