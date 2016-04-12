<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Intervention;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

/**
 * Handle interventions page logic.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class InterventionsController extends BaseController {

    /**
     * Render interventions index page.
     *
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.interventions.index');
    }

    /**
     * Paginate user interventions.
     * 
     * @return mixed
     */
    public function paginate() {
        return Auth::user()->interventions()->paginate(2);
    }

    /**
     * Allow user to add new interventions.
     * 
     * @param Request $request
     * @return mixed
     */
    public function createNewIntervention(Request $request) {

        $intervention = $request->only(['name', 'price']);
        Intervention::create($intervention);
        
        return response()->json([
            'success' => true,
            'title' => 'Succes!',
            'message' => 'Noua intervenție a fost adăugată.'
        ]);
    }

    /**
     * Validate data used to create a new intervention.
     *
     * @param $request
     */
    protected function validateNewInterventionData($request) {
        $this->validate($request, [
            'name' => ['required', 'string', 'between:3,100'],
            'price' => ['required', 'numeric', 'between:0,99999']
        ]);
    }
}