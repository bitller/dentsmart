<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Intervention;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

/**
 * Handle interventions page logic.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class InterventionsController extends BaseController {

    /**
     * @var array
     */
    protected $validatedFields = ['intervention_name', 'intervention_price'];

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
        return Auth::user()->interventions()->last()->paginate(15);
    }

    /**
     * Allow user to add new interventions.
     * 
     * @param Request $request
     * @return mixed
     */
    public function createNewIntervention(Request $request) {
        $this->validateNewInterventionData($request);

        Auth::user()->interventions()->save(new Intervention([
            'name' => $request->get('intervention_name'),
            'price' => $request->get('intervention_price')
        ]));
        
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
            'intervention_name' => ['required', 'string', 'between:3,100'],
            'intervention_price' => ['required', 'numeric', 'between:0,99999']
        ]);
    }
}