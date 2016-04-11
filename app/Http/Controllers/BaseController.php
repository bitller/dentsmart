<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

/**
 * Base controller.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class BaseController extends Controller {

    /**
     * BaseController constructor.
     */
    public function __construct() {
        // Share user data across all views, only if user is logged in
        if (Auth::check()) {
            view()->share('user', Auth::user());
        }
    }

}