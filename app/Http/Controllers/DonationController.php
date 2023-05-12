<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function getManage(){
        return view('admin.donation.manage.index',[
            'donations' => Donation::get('*')
        ]);
    }
    public function add(){
        return view ('admin.donation.manage.add');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required | max:255',
            'image' => 'required | max:255',
            'description' => 'required | max:255',
            'target' => 'required',
            'due_date' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('donation-images','public');
        }
        $image = $request->file('image')->store('donation-images','public');

        Donation::create([
            'title' => $request->input('title'),
            'image' => $image,
            'description' =>$request->input('description'),
            'target' => $request->input('target'),
            'due_date' => $request->input('due_date')
        ]);

        return redirect('donation/manage')->with('success', 'Donation successfully added');
    }

    public function destroy(Donation $donation){
        Donation::destroy($donation->id);
        return redirect('donation/manage')->with('success', 'Donation successfully deleted');
    }

}
