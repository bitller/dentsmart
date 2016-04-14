<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;

/**
 * Handle work with appointments.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class AppointmentsController extends BaseController {

    /**
     * Render appointments index page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.appointments.index');
    }
}