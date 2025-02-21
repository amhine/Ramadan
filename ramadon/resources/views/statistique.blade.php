<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expériences Ramadan 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
     <!-- Navigation -->
     <nav class="bg-green-600 text-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center">
                    <span class="text-2xl font-bold">🌙 Ramadan </span>
                </a>
                <div class="flex space-x-8">
                    <a href="/recettes" class="font-bold ">Recettes</a>
                    <a href="/experiences" class="hover:text-green-200">Expériences</a>
                    <a href="/statistique" class="hover:text-green-200 underline">Statistiques</a>
                </div>
            </div>
        </div>
    </nav>
     <!-- Section Statistiques -->
     <section class="bg-green-50 py-32">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8">Statistiques</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl font-bold text-green-600">{{ $totalPublications }}</div>
                    <div class="text-gray-600">Publications</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl font-bold text-green-600">{{ $totalRecettes }}</div>
                    <div class="text-gray-600">Recettes</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-3xl font-bold text-green-600">{{ $totalCommentaires }}</div>
                    <div class="text-gray-600">Commentaires</div>
                </div>
            </div>
        </div>
    </section>
     <!-- Footer -->
     <footer class="bg-green-600 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>© 2025 Ramadan Connect - Tous droits réservés</p>
        </div>
    </footer>
</body>
</html>