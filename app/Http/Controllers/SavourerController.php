<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SavourerController extends Controller
{
  
    public function index()
    {
        // $products = DB::table('products')->select('id', 'name', 'detail')->paginate(5);
        return view('savourer.index');
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
        ]);
  
        $libelle = request('libelle');  
        $description = request('description');  
        $telephone = request('telephone');  
        $adresse = request('adresse');  
        $email = request('email');  
        $siteweb = request('siteweb');  

        DB::table('savourer')->insert(
            [
                'title' => $libelle,
                'description' => $description,
                'adresse' => $adresse,
                'telephone' => $telephone,
                'email' => $email,
                'siteweb' => $siteweb
            ]
        );
        return redirect()->route('savourer.index')
                            ->with('success','Product created successfully.');
    }

    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
