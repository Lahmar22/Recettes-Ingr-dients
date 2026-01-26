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
                
                <a href="login.html" class="text-gray-600 hover:text-orange-500 font-medium transition">
                    Déjà membre ? <span class="text-orange-500 font-semibold">Se connecter</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl w-full grid md:grid-cols-2 gap-8 items-center">
            
            <!-- Left Side - Illustration/Info -->
            <div class="hidden md:block order-2 md:order-1">
                <div class="relative">
                    <div class="absolute -top-10 -left-10 w-72 h-72 bg-orange-200 rounded-full blur-3xl opacity-30"></div>
                    <div class="relative bg-white rounded-3xl p-10 shadow-2xl">
                        <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                            <i class="fas fa-rocket text-white text-3xl"></i>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">
                            Rejoignez<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">GastroShare</span>
                        </h2>
                        <p class="text-gray-600 mb-8 text-lg">
                            Créez votre compte gratuitement et accédez à une communauté culinaire passionnante.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-orange-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Partagez vos recettes</h4>
                                    <p class="text-sm text-gray-500">Publiez vos créations culinaires et inspirez la communauté</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-orange-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Découvrez des saveurs</h4>
                                    <p class="text-sm text-gray-500">Explorez des milliers de recettes variées et originales</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-orange-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Échangez avec des chefs</h4>
                                    <p class="text-sm text-gray-500">Rejoignez une communauté de passionnés et apprenez</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check text-orange-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">100% Gratuit</h4>
                                    <p class="text-sm text-gray-500">Aucun frais caché, profitez de toutes les fonctionnalités</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 p-4 bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl border border-orange-200">
                            <p class="text-sm text-gray-700 italic">
                                <i class="fas fa-quote-left text-orange-400 mr-2"></i>
                                GastroShare a transformé ma façon de cuisiner. Je découvre chaque jour de nouvelles recettes incroyables !
                                <i class="fas fa-quote-right text-orange-400 ml-2"></i>
                            </p>
                            <div class="flex items-center gap-3 mt-4">
                                <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-white font-bold">
                                    ML
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 text-sm">Marie Leblanc</p>
                                    <p class="text-xs text-gray-500">Membre depuis 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Registration Form -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 order-1 md:order-2">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-user-plus text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Inscription</h2>
                    <p class="text-gray-500">Créez votre compte GastroShare</p>
                </div>

                <form class="space-y-5" id="registrationForm">
                    <!-- Nom complet -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-user mr-2 text-orange-500"></i>Nom complet
                        </label>
                        <input 
                            type="text" 
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
                            id="email"
                            required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition"
                            placeholder="votre@email.com"
                        >
                    </div>

                    <!-- Username -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-at mr-2 text-orange-500"></i>Nom d'utilisateur
                        </label>
                        <input 
                            type="text" 
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
                                id="password"
                                required
                                oninput="checkPasswordStrength()"
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
                        <div class="mt-2">
                            <div class="flex gap-1 mb-1">
                                <div class="h-1 flex-1 bg-gray-200 rounded-full" id="strength1"></div>
                                <div class="h-1 flex-1 bg-gray-200 rounded-full" id="strength2"></div>
                                <div class="h-1 flex-1 bg-gray-200 rounded-full" id="strength3"></div>
                                <div class="h-1 flex-1 bg-gray-200 rounded-full" id="strength4"></div>
                            </div>
                            <p class="text-xs text-gray-500" id="strengthText">Utilisez 8 caractères minimum avec majuscules et chiffres</p>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2 text-orange-500"></i>Confirmer le mot de passe
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="confirmPassword"
                                required
                                oninput="checkPasswordMatch()"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition pr-12"
                                placeholder="••••••••"
                            >
                            <button 
                                type="button" 
                                onclick="togglePassword('confirmPassword')"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                            >
                                <i class="fas fa-eye" id="toggleIcon2"></i>
                            </button>
                        </div>
                        <p class="text-xs mt-1 hidden" id="passwordMatchError">
                            <i class="fas fa-exclamation-circle text-red-500 mr-1"></i>
                            <span class="text-red-500">Les mots de passe ne correspondent pas</span>
                        </p>
                        <p class="text-xs mt-1 hidden" id="passwordMatchSuccess">
                            <i class="fas fa-check-circle text-green-500 mr-1"></i>
                            <span class="text-green-500">Les mots de passe correspondent</span>
                        </p>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="terms"
                            required
                            class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500 mt-1"
                        >
                        <label for="terms" class="ml-3 text-sm text-gray-600">
                            J'accepte les 
                            <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">conditions d'utilisation</a> 
                            et la 
                            <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">politique de confidentialité</a>
                        </label>
                    </div>

                    <!-- Newsletter -->
                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="newsletter"
                            class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500 mt-1"
                        >
                        <label for="newsletter" class="ml-3 text-sm text-gray-600">
                            Je souhaite recevoir les actualités et les meilleures recettes par email
                        </label>
                    </div>

                    <!-- Submit Button -->
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
                            <span class="px-4 bg-white text-gray-500">Ou s'inscrire avec</span>
                        </div>
                    </div>

                    <!-- Social Registration -->
                    <div class="grid grid-cols-2 gap-4">
                        <button 
                            type="button"
                            class="flex items-center justify-center gap-2 px-4 py-3 border-2 border-gray-200 rounded-xl hover:border-orange-500 hover:bg-orange-50 transition font-medium"
                        >
                            <i class="fab fa-google text-red-500 text-xl"></i>
                            <span class="text-gray-700 text-sm">Google</span>
                        </button>
                        <button 
                            type="button"
                            class="flex items-center justify-center gap-2 px-4 py-3 border-2 border-gray-200 rounded-xl hover:border-orange-500 hover:bg-orange-50 transition font-medium"
                        >
                            <i class="fab fa-facebook text-blue-600 text-xl"></i>
                            <span class="text-gray-700 text-sm">Facebook</span>
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center mt-6">
                        <p class="text-gray-600">
                            Déjà membre ? 
                            <a href="login.html" class="text-orange-500 hover:text-orange-600 font-semibold">
                                Se connecter
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
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = inputId === 'password' ? document.getElementById('toggleIcon1') : document.getElementById('toggleIcon2');
            
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

        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strength1 = document.getElementById('strength1');
            const strength2 = document.getElementById('strength2');
            const strength3 = document.getElementById('strength3');
            const strength4 = document.getElementById('strength4');
            const strengthText = document.getElementById('strengthText');
            
            // Reset
            [strength1, strength2, strength3, strength4].forEach(el => {
                el.className = 'h-1 flex-1 bg-gray-200 rounded-full';
            });
            
            if (password.length === 0) {
                strengthText.textContent = 'Utilisez 8 caractères minimum avec majuscules et chiffres';
                strengthText.className = 'text-xs text-gray-500';
                return;
            }
            
            let strength = 0;
            
            // Check length
            if (password.length >= 8) strength++;
            if (password.length >= 12) strength++;
            
            // Check for uppercase
            if (/[A-Z]/.test(password)) strength++;
            
            // Check for numbers
            if (/[0-9]/.test(password)) strength++;
            
            // Check for special characters
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            
            // Update UI
            const bars = [strength1, strength2, strength3, strength4];
            
            if (strength <= 2) {
                bars[0].classList.add('strength-weak');
                if (strength >= 2) bars[1].classList.add('strength-weak');
                strengthText.textContent = 'Mot de passe faible';
                strengthText.className = 'text-xs text-red-500';
            } else if (strength <= 4) {
                bars[0].classList.add('strength-medium');
                bars[1].classList.add('strength-medium');
                if (strength >= 4) bars[2].classList.add('strength-medium');
                strengthText.textContent = 'Mot de passe moyen';
                strengthText.className = 'text-xs text-orange-500';
            } else {
                bars.forEach(bar => bar.classList.add('strength-strong'));
                strengthText.textContent = 'Mot de passe fort';
                strengthText.className = 'text-xs text-green-500';
            }
        }

        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const errorMsg = document.getElementById('passwordMatchError');
            const successMsg = document.getElementById('passwordMatchSuccess');
            
            if (confirmPassword.length === 0) {
                errorMsg.classList.add('hidden');
                successMsg.classList.add('hidden');
                return;
            }
            
            if (password !== confirmPassword) {
                errorMsg.classList.remove('hidden');
                successMsg.classList.add('hidden');
            } else {
                errorMsg.classList.add('hidden');
                successMsg.classList.remove('hidden');
            }
        }

        // Form submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;
            
            if (password !== confirmPassword) {
                alert('Les mots de passe ne correspondent pas !');
                return;
            }
            
            if (!terms) {
                alert('Veuillez accepter les conditions d\'utilisation');
                return;
            }
            
            // Ajoutez ici votre logique d'inscription
            alert('Inscription réussie ! Bienvenue sur GastroShare 🎉');
            // Redirection vers la page de connexion ou d'accueil
            // window.location.href = 'login.html';
        });
    </script>
</body>
</html>