<?php

namespace App\Repositories\Donation;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Donation;
use App\Repositories\Donation\DonationRepository;
use Illuminate\Support\Facades\DB;

class DonationRepositoryImplement extends Eloquent implements DonationRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected $model;

    public function __construct(Donation $model)
    {
        $this->model = $model;
    }

    public function sumCollection($donation_id, $donation)
    {
        // get donation
        $donation = $this->model->find($donation_id);
        $updateDonate['collected'] = $donation->collected + $donation;

        $this->model->where('id', $donation_id)->update($updateDonate);

        return true;
    }
}
