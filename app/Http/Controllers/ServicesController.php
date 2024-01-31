<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
class ServicesController extends Controller
{
    

 // Array of static Data
    private static function getData(){
        return [
                ['id'=>1, 'name'=>'LG','origin'=>'korea'],
                [ 'id'=>2, 'name'=>'hp','origin'=>'taiwan'],
                ['id'=>3, 'name'=>'lenovo','origin'=>'us'],
    ];
    }




    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('services.index', compact('services'));
    }

    



     // ----------------------------------------------------------------
     public function create()
     {
         $categories = Category::all();
         return view('services.create', compact('categories'));
     }



    // ----------------------------------------------------------------
    public function store(Request $request)
    {
        // Validation des données ici

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'cost' => $request->cost,
            'email' => $request->email,
        ]);

        return redirect()->route('services.index')->with('success', 'Service ajouté avec succès.');
    }

   
    // ----------------------------------------------------------------
    public function show($service)
    {
        $services= self::getData();
        $index = array_search($service,array_column($services,'id'));

        if($index===false)
        abort(404);
        return view('services.show',['service'=>$services[$index]]);
    }



    // ----------------------------------------------------------------
    public function edit(string $id)
    {
       
    }

   

    // ----------------------------------------------------------------
    public function update(Request $request, string $id)
    {
       
    }



    // ----------------------------------------------------------------
    public function destroy(string $id)
    {
     
    }
}
