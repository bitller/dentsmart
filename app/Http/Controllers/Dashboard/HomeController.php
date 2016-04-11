<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;

/**
 * Dashboard homepage logic.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class HomeController extends BaseController {

    /**
     * HomeController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->middleware('auth');
    }
    
    /**
     * Render dashboard homepage.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.home.index');
    }
    
}