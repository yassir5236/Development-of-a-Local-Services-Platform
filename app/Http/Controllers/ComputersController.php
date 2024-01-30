<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersController extends Controller
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
        return view('computers.index',['computers'=>self::getData()]);
    }

    



     // ----------------------------------------------------------------
    public function create()
    {
        return view('service.create');

    }



    // ----------------------------------------------------------------
    public function store(Request $request)
    {
       
    }

   
    // ----------------------------------------------------------------
    public function show($computer)
    {
        $computers= self::getData();
        $index = array_search($computer,array_column($computers,'id'));

        if($index===false)
        abort(404);
        return view('computers.show',['computer'=>$computers[$index]]);
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
