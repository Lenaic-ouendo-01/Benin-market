<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/app.js')
    <title>Form of market</title>
</head>
<body class="bg-blue-300/50">

    <header class="text-3xl font-fam2 font-bold flex justify-center text-blue-700 mt-5">Nouveau Marché</header>
    
    <main class="text-xl mt-6 font-fam1 font-medium flex justify-center">
        <form action="{{ route('marche.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mt-4">
                <label for="">Nom du marché <span class="text-red-800">*</span> </label> <br>
                <input placeholder="Nom du marché" class="lg:text-base text-xs text-black/80 border-2 w-full border-blue-900 rounded-xl p-1" type="text" name="nomMarche" id="">
            </div>

            <div class="mt-4">
                <label for="">Description <span class="text-red-800">*</span> </label> <br>
                <textarea placeholder="Nom du groupe" class="lg:text-base text-xs text-black/80 border-2 w-full border-blue-900 rounded-xl p-1" name="description" id="" cols="30" rows="2"></textarea>
            </div>
            
            <div class="mt-4">
                <label for="">Capacité du marché <span class="text-red-800">*</span></label> <br>
                <input placeholder="Capacité du marché" class="lg:text-base text-xs text-black/80 border-2 w-full border-blue-900 rounded-xl p-1" type="number" name="capacite" id="">
            </div>

            <div class="mt-4">
                <label for="">Adresse </label> <br>
                <input class="lg:text-base text-xs text-black/80 border-2 w-full border-blue-900 rounded-xl p-1" type="text" name="adresse" id="">
            </div>

            <div class="mt-4">
                <label for="">Téléphone </label> <br>
                <input placeholder="Téléphone" class="lg:text-base text-xs text-black/80 border-2 w-full border-blue-900 rounded-xl p-1" type="text" name="telephone" id="">
            </div>
           
            <div class="mt-4">
                <label for="">Image: </label> <br>
                <input class="block w-full text-sm text-white border border-none p-2 border-gray-300 rounded-lg cursor-pointer bg-stone-600" name="image" type="file">
            </div>

            <div class="mt-6">
                <label for="">Ville</label>
                <select name="ville_id" class="rounded-xl p-2">
                    @foreach ($villes as $ville)
                        <!-- @add($option) -->
                        <option value="{{$ville->id}}">{{$ville->nomVille}}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-between gap-4 mt-4">
                <button type="submit" class="p-2 border-2 rounded-xl m-2 bg-teal-800 text-white">Enregistrer</button>
                <a href="{{ route('marche.liste') }}" class="button-annuler p-2 border-2 rounded-xl m-2 bg-orange-800 text-white supp">Annuler</a>
            </div>

        </form>
    </main>
</body>
</html>