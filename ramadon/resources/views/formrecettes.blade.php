<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expériences Ramadan 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">
    
<!-- Formulaire de création de post -->
<div class="bg-white rounded-lg shadow-md p-6 mb-8 w-full max-w-lg">
    <h2 class="text-xl font-bold mb-4">Partagez votre Recette</h2>

    <form action="/formstor" method="POST">
        @csrf 
        <div class="mb-4">
            <input type="text" id="titre" name="titre" placeholder="Titre de votre Recette" 
                   class="w-full p-3 border rounded-lg" required />
        </div>
        <div class="mb-4">
            <textarea rows="4" id="contenu" name="contenu" placeholder="Partagez votre recette..." 
                      class="w-full p-3 border rounded-lg" required></textarea>
        </div>
        <div class="mb-4">
            <input type="text" id="image" name="image" placeholder="Image" 
                   class="w-full p-3 border rounded-lg"/>
        </div>
        <div class="mb-4">
            <select name="id_categorie" id="id_categorie" class="w-full p-3 border rounded-lg" required>
                <option value="">Sélectionner une catégorie</option>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                Publier
            </button>
        </div>
    </form>
    
</div>

</body>
</html>
