<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

/**
 * Dashboard homepage logic.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class HomeController extends Controller {

    /**
     * HomeController constructor.
     */
    public function __construct() {
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