<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation principale -->
    <nav class="bg-green-600 text-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center">
                    <span class="text-2xl font-bold">🌙 Ramadan 2025</span>
                </a>
                <div class="flex space-x-8">
                    <a href="/recettes" class="hover:text-green-200">Recettes</a>
                    <a href="/experiences" class="hover:text-green-200">Expériences</a>
                    <a href="/statistiques" class="hover:text-green-200">Statistiques</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sous-navigation pour les catégories -->
    <!-- <div class="bg-green-500">
        <div class="container mx-auto px-4">
            <div class="flex space-x-6 py-3">
                <a href="/recettes/entrees" class="text-white hover:text-green-200">Entrées</a>
                <a href="/recettes/plats" class="text-white hover:text-green-200">Plats</a>
                <a href="/recettes/desserts" class="text-white hover:text-green-200">Desserts</a>
            </div>
        </div>
    </div> -->

    <!-- En-tête Principal -->
    <header class="bg-green-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-green-800 mb-4">Bienvenue sur notre plateforme Ramadan</h1>
            <p class="text-xl text-green-700 mb-8">Partagez vos expériences, recettes et moments spirituels</p>
            <div class="flex justify-center space-x-4">
                <button class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                    Ajouter une recette
                </button>
                <button class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                    Partager une expérience
                </button>
            </div>
        </div>
    </header>

    <!-- Section Dernières Publications -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-8">Dernières Publications</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Carte Publication -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/api/placeholder/400/250" alt="Publication" class="w-full h-48 object-cover"/>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Mon expérience du premier jour</h3>
                    <p class="text-gray-600 mb-4">Une journée remplie de spiritualité et de partage...</p>
                    <!-- Section Commentaires -->
                    <div class="border-t pt-4">
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <img src="/api/placeholder/32/32" alt="Utilisateur" class="w-8 h-8 rounded-full"/>
                                <span class="ml-2 text-gray-700">Ahmed</span>
                            </div>
                            <p class="text-gray-600 ml-10">Très inspirant, merci du partage !</p>
                        </div>
                        <!-- Formulaire Commentaire -->
                        <form class="flex items-start space-x-2">
                            <input type="text" placeholder="Ajouter un commentaire..." 
                                   class="flex-1 border rounded-lg p-2"/>
                            <button class="bg-green-600 text-white px-4 py-2 rounded-lg">
                                Envoyer
                            </button>
                        </form>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Section Statistiques -->
    <section class="bg-green-50 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8">Statistiques</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl font-bold text-green-600">152</div>
                    <div class="text-gray-600">Publications</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl font-bold text-green-600">89</div>
                    <div class="text-gray-600">Recettes</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl font-bold text-green-600">1,234</div>
                    <div class="text-gray-600">Commentaires</div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-green-600 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>© 2025 Ramadan Connect - Tous droits réservés</p>
        </div>
    </footer>
</body>
</html>