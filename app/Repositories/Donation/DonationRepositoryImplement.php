<?php

namespace App\Repositories\Project;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Donation;
use App\Repositories\Donation\DonationRepository;
use Illuminate\Support\Facades\DB;

class DonateRepositoryImplement extends Eloquent implements DonationRepository
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

        $this->model->update($updateDonate);

        return true;
    }
}
