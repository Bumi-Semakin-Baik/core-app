<?php

namespace App\Http\Controllers\API;

use App\Constants\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DonationController extends Controller
{
    public function index(){
        $donations = Donation::where('is_published', 'Yes');
        $donations->where('status', 'Enabled');
        $donations->select(
            'id', 'title', 'image',
            'nama_ukm', 'nama_lokasi', 'nama_mitra'
        );

        $list = $donations->get();
        $index = 0;
        foreach ($list as $item) {
            $list[$index]->new_image = Storage::url($list[$index]->image);
        }

        return response()->json([
            "message" => ResponseMessage::SUCCESS_RETRIEVE,
            "data" => $list
        ]);
    }

    public function get_detail_donation($id){
        $donation = Donation::findorFail($id);
        return $this->_responseDonationDetail($donation);
    }

    private function _responseDonationDetail($donation){
        $data = [
            'id'    => $donation->id,
            'title' => $donation->title,
            'image' => Storage::url($donation->image),
            'description' => $donation->description,
            'target' => $donation->target,
            'collected' => $donation->collected,
            'due_date' => $donation->due_date,
            'nama_ukm' => $donation->nama_ukm,
            'nama_lokasi' => $donation->nama_lokasi,
            'planting_date' => $donation->planting_date,
            'nama_mitra' => $donation->nama_mitra,
        ];

        return response()->json([
            "message" => ResponseMessage::SUCCESS_RETRIEVE,
            "data" => $data
        ]);
    }
}
