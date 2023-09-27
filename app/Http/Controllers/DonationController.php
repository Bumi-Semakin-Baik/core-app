<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\UKM;
use App\Models\Location;
use App\Models\PlantingPartner;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
}
    public function getManage(){
        return view('admin.donation.manage.index',[
            'donations' => DB::table('donations')
                                    ->select('*')
                                    ->where('status','=','Enabled')
                                    ->orderBy('is_published','asc')
                                    ->get()
        ]);
    }
    public function getTransaction(){
        return view('admin.donation.transactions.index',[
            'donations' => DB::table('donations')
                                    ->select('*')
                                    ->where('status','=','Enabled')
                                    ->orderBy('is_published','asc')
                                    ->get()
        ]);
    }

    public function getDetail($id){
        return view('admin.donation.transactions.indexdetail',[
            'transactions' => DB::table('transactions')
                                    ->select('transactions.order_code', 'transactions.donate_id', 'donations.title',
                                    'transactions.email', 'transactions.name', 'transactions.date', 'transactions.grand_total', 'transactions.status')
                                    ->leftJoin('donations','transactions.donate_id','=','donations.id')
                                    ->where('transactions.donate_id','=',$id)
                                    ->get(),
            'total_pending' => DB::table('transactions')
                            ->where('donate_id','=', $id)
                            ->where('status','=','request')
                            ->orWhere('status','=','pending')
                            ->count(),

            'total_failed' => DB::table('transactions')
                            ->where('status','=','expired')
                            ->orWhere('status','=','failed')
                            ->where('donate_id','=', $id)
                            ->count(),

            'total_success' => DB::table('transactions')
                            ->where('status','=','success')
                            ->where('donate_id','=', $id)
                            ->count(),

            'total_paid' => DB::table('transactions')
                            ->where('donate_id','=', $id)
                            ->where('status','=','success')
                            ->sum('grand_total'),
        ]);
    }

    public function add(){
        return view ('admin.donation.manage.add',[
            'ukms' => UKM::get('*'),
            'locations'=> Location::get('*')->where('status','=','Enabled'),
            'partners'=> PlantingPartner::get('*')
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'id_ukm' => 'required',
            'title' => 'required',
            'image' => 'required | max:1024',
            'description' => 'required',
            'target' => 'required',
            'due_date' => 'required',
            'id_location' => 'required',
            'id_mitra' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('donation-images','public');
        }
        $image = $request->file('image')->store('donation-images','public');

        $nama_ukm = DB::table('ukm')
                        ->where('id',$request->input('id_ukm'))
                        ->pluck('name')
                        ->first();

        $nama_location = DB::table('locations')
                            ->where('id',$request->input('id_location'))
                            ->pluck('name')
                            ->first();

        $nama_partner = DB::table('planting_partners')
                        ->where('id', $request->input('id_mitra'))
                        ->pluck('name')
                        ->first();
        // dd($nama_partner);

        Donation::create([
            'title' => $request->input('title'),
            'image' => $image,
            'description' =>$request->input('description'),
            'target' => $request->input('target'),
            'due_date' => $request->input('due_date'),
            'id_ukm' => $request->input('id_ukm'),
            'nama_ukm' => $nama_ukm,
            'id_location' => $request->input('id_location'),
            'nama_lokasi' => $nama_location,
            'id_mitra' => $request->input('id_mitra'),
            'nama_mitra' => $nama_partner,
            'status' =>$request->input('status'),
            'is_published' =>$request->input('is_published'),
            'is_bingkaikarya' =>$request->input('is_bingkaikarya'),
        ]);


        return redirect('donation/manage')->with('success', 'Donation successfully added');
    }

    public function filter(Request $request){
        // return view('admin.donation.manage.filteredIndex',[
        //     'donations' => DB::table('donations')
        //                             ->select('*')
        //                             ->orWhere('status','=',$request->status)
        //                             ->orWhere('is_published','=',$request->is_published)
        //                             ->orderBy('id','asc')
        //                             ->get()
        // ]);

        $status = $request->input('status');
        $is_published = $request->input('is_published');

        return view('admin.donation.manage.filteredIndex',[
            'donations' => DB::table('donations')
                                    ->select('*')
                                    ->when ($status, function ($query, $status) {
                                        return $query->where('status','=', $status);
                                    })
                                    ->when ($is_published, function ($query, $is_published) {
                                        return $query->where('is_published','=', $is_published);
                                    })
                                    ->orderBy('id','asc')
                                    ->get()
        ]);
    }

    public function destroy(Donation $donation){
        Donation::destroy($donation->id);
        return redirect('donation/manage')->with('success', 'Donation successfully deleted');
    }
    public function update_publish($id)
    {
        $data = Donation::where('id', $id)->first();
        if ($data == null) {
            return redirect('donation/manage');
        }

        $data->update(['is_published'=> 'Yes']);

        return redirect('donation/manage');
    }

    public function update_unpublish($id)
    {
        $data = Donation::where('id', $id)->first();
        if ($data == null) {
            return redirect('donation/manage');
        }

        $data->update(['is_published'=> 'No']);

        return redirect('donation/manage');
    }

    public function update_enable($id)
    {
        $data = Donation::where('id', $id)->first();
        if ($data == null) {
            return redirect('donation/manage');
        }

        $data->update(['status'=> 'Enabled']);

        return redirect('donation/manage');
    }

    public function update_disable($id)
    {
        $data = Donation::where('id', $id)->first();
        if ($data == null) {
            return redirect('donation/manage');
        }

        $data->update(['status'=> 'Disabled']);

        return redirect('donation/manage');
    }

}
