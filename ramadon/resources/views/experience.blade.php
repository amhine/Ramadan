<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expériences Ramadan 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-green-600 text-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center">
                    <span class="text-2xl font-bold">🌙 Ramadan 2025</span>
                </a>
                <div class="flex space-x-8">
                    <a href="/recettes" class="hover:text-green-200">Recettes</a>
                    <a href="/experiences" class="font-bold underline">Expériences</a>
                    <a href="/statistiques" class="hover:text-green-200">Statistiques</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- En-tête avec bouton de partage -->
    <div class="py-6">
    <div class="container mx-auto px-4">
        <div class="flex justify-end items-center">
            <button class="bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-50">
                + Partagez votre expérience
            </button>
        </div>
    </div>
</div>


    <!-- Section principale des expériences -->
    <main class="container mx-auto px-4 py-8">
        
        <!-- Liste des expériences partagées -->
        <div class="space-y-6">
            <!-- Post 1 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/40/40" alt="Avatar" class="w-10 h-10 rounded-full"/>
                        <div class="ml-3">
                            <h3 class="font-bold">Ahmed Benali</h3>
                            <p class="text-sm text-gray-500">Publié il y a 2 jours</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold mb-4">Mon premier jour de Ramadan</h2>
                    <p class="text-gray-600 mb-4">
                        Cette année, j'ai vécu une expérience spirituelle particulièrement enrichissante...
                    </p>
                    <img src="/api/placeholder/800/400" alt="Experience" class="w-full rounded-lg mb-4"/>
                    
                   

                    <!-- Commentaires -->
                    <div class="border-t pt-4">
                        <h4 class="font-semibold mb-4">Commentaires</h4>
                        <!-- Commentaire existant -->
                        <div class="mb-4 pl-4 border-l-2 border-green-200">
                            <div class="flex items-center mb-2">
                                <img src="/api/placeholder/32/32" alt="Avatar" class="w-8 h-8 rounded-full"/>
                                <div class="ml-3">
                                    <p class="font-semibold">Sophia</p>
                                    <p class="text-sm text-gray-500">Il y a 1 jour</p>
                                </div>
                            </div>
                            <p class="text-gray-600 ml-11">Merci de partager cette belle expérience !</p>
                        </div>

                        <!-- Formulaire nouveau commentaire -->
                        <form class="flex items-start space-x-2">
                            <img src="/api/placeholder/32/32" alt="Votre avatar" class="w-8 h-8 rounded-full"/>
                            <input type="text" 
                                   placeholder="Ajouter un commentaire..." 
                                   class="flex-1 border rounded-lg p-2"/>
                            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                                Commenter
                            </button>
                        </form>
                    </div>
                </div>
            </article>

            
        </div>

        
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>© 2025 Ramadan Connect - Tous droits réservés</p>
        </div>
    </footer>
</body>
</html>