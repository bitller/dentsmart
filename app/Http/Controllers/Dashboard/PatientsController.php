<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Patient;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

/**
 * Patients page logic.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class PatientsController extends BaseController {
    
    /**
     * Render patients index page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.patients.index');
    }

    /**
     * Paginate patients.
     * 
     * @return mixed
     */
    public function paginate() {
        return Auth::user()->patients()->paginate(10);
    }

    /**
     * Allow user to create new pateints.
     *
     * @param Request $request
     * @return mixed
     */
    public function createNewPatient(Request $request) {
        $this->validateNewPatientData($request);

        Auth::user()->patients()->save(new Patient([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number')
        ]));

        return response()->json([
            'success' => true,
            'title' => 'Succes!',
            'message' => 'Noul pacient a fost adăugat.',
        ]);
    }

    /**
     * Allow user to delete patients.
     *
     * @param Request $request
     * @return mixed
     */
    public function deletePatient(Request $request) {
        $patientId = $request->get('patient_id');

        // Check if a patient that belongs to current user with given id exists
        if (Auth::user()->patients()->where('id', $patientId)->count()) {
            Auth::user()->patients()->where('id', $patientId)->delete();
            return response()->json([
                'success' => true,
                'title' => 'Succes!',
                'message' => 'Pacientul a fost șters.',
            ]);
        }
    }
    
    /**
     * Validate data used to create new patients.
     *
     * @param $request
     */
    protected function validateNewPatientData($request) {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'between:3,30'],
            'last_name' => ['required', 'string', 'between:3,30'],
            'email' => ['required', 'email', 'not_used_by_another_patient:email'],
            'phone_number' => ['required', 'not_used_by_another_patient:phone_number', 'size:10']
        ]);
    }
}