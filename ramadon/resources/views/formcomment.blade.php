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
    <h2 class="text-xl font-bold mb-4">Commenter</h2>
    <form action="/comment" method="POST">
        @csrf 
        <div class="mb-4">
            <input type="text" name="nom_user"
                   placeholder="Votre Nom" 
                   class="w-full p-3 border rounded-lg"/>
        </div>
        <div class="mb-4">
            <input type="text" name="image_user"
                   placeholder="Votre Image" 
                   class="w-full p-3 border rounded-lg"/>
        </div>
        <input type="hidden" name="id_experience" value="{{ $experience->id }}">
        
        <div class="mb-4">
            <textarea rows="4" name="description"
                      placeholder="Partagez votre expérience..." 
                      class="w-full p-3 border rounded-lg"></textarea>
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
