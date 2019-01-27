<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SavourerController extends Controller
{
  
    public function index()
    {
        $resultats = DB::table('savourer')->select('id', 'title', 'adresse', 'telephone', 'categorie')->get();;
        return view('savourer.index')->with('resultats', $resultats);
    }

    public function create()
    {
        return view('savourer.create');
    }

    public function store(Request $request)
    {
     
        $request->validate([
            'libelle' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
            'categorie' => 'required',
        ]);
  
        $libelle = request('libelle');  
        $description = request('description');  
        $telephone = request('telephone');  
        $adresse = request('adresse');  
        $categorie_array = request('categorie');  
        $email = request('email');  
        $siteweb = request('siteweb');  
        $latitude = request('latitude');  
        $longitude = request('longitude');  

        $categorie = implode(", " , $categorie_array);

        DB::table('savourer')->insert(
            [
                'title' => $libelle,
                'description' => $description,
                'adresse' => $adresse,
                'telephone' => $telephone,
                'email' => $email,
                'categorie' => $categorie,
                'siteweb' => $siteweb,
                'latitude' => $latitude,
                'longitude' => $longitude
            ]
        );
        return redirect()->route('savourer.index')
                            ->with('success','Product created successfully.');
    }

    public function show($id)
    {
        $resultat = DB::table('savourer')->where('id', '=', $id)->first();
        return view('savourer.show')-> with('resultat', $resultat);
    }
  
    public function edit($id)
    {
        $resultat = DB::table('savourer')->where('id', '=', $id)->first();
        return view('savourer.edit')-> with('resultat', $resultat);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie' => 'required'
        ]);

        $input = $request->all();

        $libelle = $input['libelle'];
        $description = $input['description'];
        $adresse = $input['adresse'];
        $telephone = $input['telephone'];
        $email = $input['email'];
        $siteweb = $input['siteweb'];
        $latitude = $input['latitude'];
        $longitude = $input['longitude'];
        $categorie_array = $input['categorie'];
        
        $categorie = implode(", " , $categorie_array);

        DB::table('savourer')
            ->where('id', '=', $id)
            ->update(
                array(
                        'title' => $libelle,
                        'description' => $description,
                        'adresse' => $adresse,
                        'telephone' => $telephone,
                        'email' => $email,
                        'latitude' => $latitude,
                        'longitude' => $longitude,
                        'description' => $description,
                        'categorie' => $categorie
                    )
                );
        return redirect()->route('savourer.index')
                        ->with('success','Product modifié');
    }


    public function destroy($id)
    {
        DB::table('savourer')->where('id', '=', $id)->delete();
        return redirect()->route('savourer.index')
                        ->with('success','Product supprimé');
    }
}
