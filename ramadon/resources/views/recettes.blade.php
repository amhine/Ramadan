<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes Ramadan - Iftar et Suhoor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-green-600 text-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center">
                    <span class="text-2xl font-bold">🌙 Ramadan </span>
                </a>
                <div class="flex space-x-8">
                    <a href="/recettes" class="font-bold underline">Recettes</a>
                    <a href="/experiences" class="hover:text-green-200">Expériences</a>
                    <a href="/statistiques" class="hover:text-green-200">Statistiques</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Filtres de catégories -->
    <div class="bg-green-500 py-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between">
                <div class="flex space-x-4">
                    <button class="bg-white text-green-600 px-4 py-2 rounded-full">Toutes</button>
                    @foreach($categories as $categorie)
                        <button class="text-white hover:bg-green-600 px-4 py-2 rounded-full">
                            {{ $categorie->name }}
                        </button>
                    @endforeach
                </div>
                <a href="/formrecettes">
                    <button  class="bg-white text-green-600 px-6 py-2 rounded-full hover:bg-green-50">
                        + Ajouter une recette
                    </button>
                </a>
                
            </div>
        </div>
    </div>

    <!-- Contenu principal -->
    <main class="container mx-auto px-4 py-8">
        <!-- Grille des recettes -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($recettes as $recette)
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ $recette->image }}" alt="{{ $recette->titre }}" class="w-full h-56 object-cover"/>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <header>
                                <span class="bg-green-100 text-green-600 text-sm px-3 py-1 rounded-full">
                                    {{ $recette->categorie->name }}
                                </span>
                                <h3 class="text-xl font-bold mt-2 mb-2">{{ $recette->titre }}</h3>
                            </header>
                        </div>
                        <p class="text-gray-600 mb-4">{{ $recette->contenu }}</p>
                    </div>
                </article>
            @endforeach
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