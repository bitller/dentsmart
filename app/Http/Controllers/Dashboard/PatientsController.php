<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

/**
 * Patients page logic.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class PatientsController extends Controller {

    /**
     * PatientsController constructor.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Render patients index page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.patients.index');
    }
    
}