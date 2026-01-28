<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription | GastroShare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); }
        .pattern-bg {
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(251, 146, 60, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(249, 115, 22, 0.1) 0%, transparent 50%);
        }
        .strength-weak { background-color: #ef4444; }
        .strength-medium { background-color: #f59e0b; }
        .strength-strong { background-color: #10b981; }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-50 min-h-screen pattern-bg">

    <!-- Navigation minimale -->
    <nav class="bg-white/80 backdrop-blur-lg shadow-sm sticky top-0 z-50">
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
                
                <a href="login" class="text-gray-600 hover:text-orange-500 font-medium transition">
                    <span class="text-orange-500 font-semibold">Se connecter</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl w-full grid gap-8 items-center">
            
            <!-- Right Side - Registration Form -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 order-1 md:order-2">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-user-plus text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Inscription</h2>
                    <p class="text-gray-500">Créez votre compte GastroShare</p>
                </div>

                <form method="POST" action="inscriptionUser" class="space-y-5" id="registrationForm">
                    @csrf
                    <!-- Nom complet -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-user mr-2 text-orange-500"></i>Nom
                        </label>
                        <input 
                            type="text" 
                            name="nom"
                            id="fullname"
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="Jean Dupont"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-user mr-2 text-orange-500"></i>Prenom
                        </label>
                        <input 
                            type="text" 
                            name="prenom"
                            id="fullname"
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="Jean Dupont"
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2 text-orange-500"></i>Adresse email
                        </label>
                        <input 
                            type="email" 
                            name="email"
                            id="email"
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="votre@email.com"
                        >
                    </div>

                    <!-- Username -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-at mr-2 text-orange-500"></i>spescialise
                        </label>
                        <input 
                            type="text" 
                            name="spescialise"
                            id="username"
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="jeandupont"
                        >
                        <p class="text-xs text-gray-500 mt-1">Ce nom sera visible par les autres membres</p>
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2 text-orange-500"></i>Mot de passe
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                name="password"
                                id="password"
                                required
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition pr-12"
                                placeholder="••••••••"
                            >
                            <button 
                                type="button" 
                                onclick="togglePassword('password')"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                            >
                                <i class="fas fa-eye" id="toggleIcon1"></i>
                            </button>
                        </div>
                        
                        <!-- Password Strength Indicator -->
                        
                    </div>

                    
                    
                    <button 
                        type="submit"
                        class="w-full gradient-bg text-white py-4 rounded-xl font-bold hover:shadow-xl transition transform hover:scale-105 text-lg"
                    >
                        <i class="fas fa-user-plus mr-2"></i>Créer mon compte
                    </button>

                    <!-- Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">

                        </div>
                    </div>

                    <div class="text-center mt-6">
                        <p class="text-gray-600">
                            Déjà membre ? 
                            <a href="login" class="text-orange-500 hover:text-orange-600 font-semibold">
                                Se connecter
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

    
</body>
</html>