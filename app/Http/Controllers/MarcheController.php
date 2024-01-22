<?php

namespace App\Http\Controllers;

use App\Models\Marche;
use Illuminate\Http\Request;

class MarcheController extends Controller
{
    //

    public function store(Request $request){

        $input = $request->all();
        
        //Vérifier avec la méthode hasfile() si la requête HTTP('$request') contient un fichier avec un champ ('photo')
        if($request->hasfile('image')){

            //Si un fichier avec le nom de champ "photo" est présent dans la requête, cette ligne récupère ce fichier
            // à l'aide de la méthode file(). Le fichier est stocké dans la variable $file pour être traité ultérieurement.
            $file = $request->file('image');

            //On stock dans la variable $extension l'extension du fichier qu'on traitre. La méthode getClientOriginalExtension() permet
            // d'obtenir l'extension d'un fichier
            $extention = $file->getClientOriginalExtension();

            //un nom de fichier unique est généré en combinant le timestamp actuel (obtenu à l'aide de la fonction time()) avec l'extension
            // du fichier précédemment extraite. Cela garantit que chaque fichier téléchargé aura un nom unique.
            $filename = time().'.'.$extention;

            //Déplacement du fichier téléchargé vers l'emplacement spécifié. Le premier argument de la méthode move() est le chemin où l'on
            // souhaite déplacer le fichier bon ici moi j'ai créer un dossier Logements qui est contenu dans un dossier Uploards et surtout 
            // ne pas oublier que ce dossier dans le dossier public du projet, et le deuxième argument est le nouveau nom de fichier (dans 
            //ce cas, le nom généré à l'étape précédente).
            $file->move('uploads/marches/', $filename);

            //Stockage du nom final dans la propriété du model
            $input['image'] = $filename;
        };

        Marche::create([
            'nomMarche' => $input['nomMarche'],
            'description' => $input['description'],
            'capacite' => $input['capacite'],
            'adresse' => $input['adresse'],
            'telephone' => $input['telephone'],
            'image' => $input['image'],
            'ville_id'=> $input['ville_id']
        ]);
        return redirect('/marche/list');
    }

    public function index(){
        $marches = Marche::all();
        return view('index', compact('marches'));
    }
}
