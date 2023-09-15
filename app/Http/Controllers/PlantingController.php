<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PlantingPartner;
use Validator;
use Illuminate\Http\Request;

class PlantingController extends Controller
{
    public function index(){
        $plantingpartner = PlantingPartner::all();
        return view ('admin.plantingpartner.index', compact('plantingpartner'));
    }
    public function add(){
        return view ('admin.plantingpartner.add');
    }
    public function edit($id){
        $data = PlantingPartner::whereId($id)->first();
        // dd($data);
        return view ('admin.plantingpartner.edit',[
            'news' => $data,
        ]);
    }
public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        PlantingPartner::create([
            'name' =>$request->input('partnername'),
        ]);
        return view('admin.plantingpartner.index')
        ->with('success','partner successfully added');
        ;

    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
    //    dd($validatedData);

        $test = PlantingPartner::where('id', $id)
        ->update($validatedData);


        return redirect()->route('news')
        ->with('success', 'Data Berhasil diupdate');

    }
    public function destroy($id)
    {

        $data = PlantingPartner::where('id', $id)->first();
        // dd($product);
        if ($data == null) {
            return redirect()->route('plantingpartner');
        }

        $data->delete();

        return redirect()->route('plantingpartner');
    }

}
