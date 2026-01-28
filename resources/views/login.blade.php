<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | GastroShare</title>
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
                
                <a href="inscription" class="text-gray-600 hover:text-orange-500 font-medium transition">
                    <span class="text-orange-500 font-semibold">S'inscrire</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl w-full grid gap-8 items-center">
            
            <!-- Left Side - Illustration/Info -->
           

            <!-- Right Side - Login Form -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-sign-in-alt text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Connexion</h2>
                    <p class="text-gray-500">Connectez-vous à votre compte GastroShare</p>
                </div>

                <form action="logincontroller" method="POST" class="space-y-6">
                    @csrf
                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2 text-orange-500"></i>Adresse email
                        </label>
                        <input 
                            type="email" 
                            name="email"
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="votre@email.com"
                        >
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
                                onclick="togglePassword()"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                            >
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember & Forgot -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                        </label>
                        <a href="#" class="text-sm text-orange-500 hover:text-orange-600 font-semibold">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full gradient-bg text-white py-4 rounded-xl font-bold hover:shadow-xl transition transform hover:scale-105 text-lg"
                    >
                        <i class="fas fa-sign-in-alt mr-2"></i>Se connecter
                    </button>

                    <!-- Divider -->
                    <div class="relative my-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                           
                        </div>
                    </div>

                   

                    <!-- Sign Up Link -->
                    <div class="text-center mt-6">
                        <p class="text-gray-600">
                            Pas encore de compte ? 
                            <a href="inscription" class="text-orange-500 hover:text-orange-600 font-semibold">
                                Créer un compte
                            </a>
                        </p>
                    </div>
                </form>

                
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex justify-center gap-6 mb-4 text-sm text-gray-600">
                <a href="#" class="hover:text-orange-500 transition">À propos</a>
                <a href="#" class="hover:text-orange-500 transition">Confidentialité</a>
                <a href="#" class="hover:text-orange-500 transition">Conditions</a>
                <a href="#" class="hover:text-orange-500 transition">Contact</a>
            </div>
            <p class="text-gray-500 text-sm">&copy; 2025 GastroShare. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        
    </script>
</body>
</html>