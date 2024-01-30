<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
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
        return view('services.index',['services'=>service::all()]);
    }

    



     // ----------------------------------------------------------------
    public function create()
    {
        return view('services.create');

    }



    // ----------------------------------------------------------------
    public function store(Request $request)
    {
       $service=new Service();

       $service->title=$request->input('title');
       $service->description=$request->input('description');
       $service->category=$request->input('category');
       $service->cost=$request->input('cost');

       $service->save();

       return redirect()->route('services.index');

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
