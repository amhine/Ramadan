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
                    <span class="text-2xl font-bold">🌙 Ramadan </span>
                </a>
                <div class="flex space-x-8">
                    <a href="/recettes" class="hover:text-green-200">Recettes</a>
                    <a href="/experiences" class="font-bold underline">Expériences</a>
                    <a href="/statistique" class="hover:text-green-200">Statistiques</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- En-tête avec bouton de partage -->
    <div class="py-6">
        <div class="container mx-auto px-4">
            <div class="flex justify-end items-center">
                <a href="/formexperience">
                    <button class="bg-green-600 text-white px-6 py-2 rounded-full ">
                        + Partagez votre expérience
                    </button>
                </a>
                
            </div>
        </div>
    </div>

    <!-- Section principale des expériences -->
    <main class="container mx-auto px-4 py-8">
        <!-- Liste des expériences partagées -->
        <div class="space-y-6">
            @foreach($experiences as $experience)
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <!-- Informations de l'utilisateur -->
                        <div class="flex items-center mb-4">
                            <img src="{{ $experience->image_user }}" alt="Avatar" class="w-10 h-10 rounded-full"/>
                            <div class="ml-3">
                                <h3 class="font-bold">{{ $experience->nom_user }}</h3>
                                <p class="text-sm text-gray-500">Publié  a {{ $experience->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>

                        <!-- Titre et description de l'expérience -->
                        <h2 class="text-xl font-bold mb-4">{{ $experience->titre }}</h2>
                        <p class="text-gray-600 mb-4">{{ $experience->description }}</p>

                        <!-- Image de l'expérience -->
                        @if($experience->image)
                            <img src="{{ $experience->image }}" alt="Experience" class="w-full h-80 rounded-lg mb-4"/>
                        @endif

                        <!-- Commentaires -->
                        <div class="border-t pt-4">
                            <h4 class="font-semibold mb-4">Commentaires</h4>

                            <!-- Liste des commentaires -->
                            @foreach($experience->comments as $comment)
                                <div class="mb-4 pl-4 border-l-2 border-green-200">
                                    <div class="flex items-center mb-2">
                                        <img src="{{ $comment->image_user }}" alt="Avatar" class="w-8 h-8 rounded-full"/>
                                        <div class="ml-3">
                                            <p class="font-semibold">{{ $comment->nom_user }}</p>
                                            <p class="text-sm text-gray-500">{{ $comment->created_at->format('d/m/Y H:i') }}</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 ml-11">{{ $comment->description }}</p>
                                </div>
                            @endforeach

                            <!-- Formulaire nouveau commentaire -->
                            <div class="flex items-start space-x-2">
                                <input type="text" 
                                       placeholder="Ajouter un commentaire..." 
                                       class="flex-1 border rounded-lg p-2"/>
                                       <a href="/formcomment/{{ $experience->id }}">
                                           <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                                                Commenter
                                            </button>
                                       </a>
                            </div>
                        </div>
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