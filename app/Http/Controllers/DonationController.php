<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function getManage(){
        return view('admin.donation.manage.index');
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

        Donation::create($validatedData);

        return redirect('dashboard/manage');
    }

}
