<?php

namespace App\Controllers;
use App\Models\Job; 

class StatistiqueController {
    private $model;
    public function index() {
        $this->model = new Job();
        $totalOffres = $this->model->getTotalJobs();
        // $totalOffresApproved = $this->model->getTotalOffresApproved();
        // $totalOffresRejected = $this->model->getTotalOffresRejected();
        // $totalOffresPending = $this->model->getTotalOffresAttentes();

        require(__DIR__ .'../../../view/dashboard.php');
    }
}
?>