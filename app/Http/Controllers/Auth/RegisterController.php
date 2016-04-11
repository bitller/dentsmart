<?php

namespace App\Http\Controllers\Auth;

use App\DefaultIntervention;
use App\Http\Controllers\Controller;
use App\Intervention;
use App\Role;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

/**
 * Handle user registration.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class RegisterController extends Controller {

    /**
     * Uri to redirect user after account is created.
     *
     * @var string
     */
    public $redirectTo = '/dashboard';

    /**
     * Render register page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.auth.register');
    }

    /**
     * Handle creation of new user.
     *
     * @param Request $request
     * @return mixed
     */
    public function register(Request $request) {
        $this->validateRegisterData($request);
        return $this->createUser($request);
    }

    /**
     * Validate user details before creating a new account.
     *
     * @param $request
     */
    protected function validateRegisterData($request) {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'between:3,20'],
            'last_name' => ['required', 'string', 'between:3,20'],
            'email' => ['required', 'email', 'not_exists:users,email'],
            'cabinet_name' => ['required', 'string', 'between:3,30'],
            'password' => ['required']
        ]);
    }

    /**
     * Create new user.
     *
     * @param $request
     * @return mixed
     */
    protected function createUser($request) {

        // Insert user
        $details = $request->only(['first_name', 'last_name', 'email', 'cabinet_name', 'password']);
        $details['password'] = bcrypt($details['password']);
        $user = User::create($details);

        // Attach role
        $dentist = Role::where('name', 'dentist')->first();
        $user->attachRole($dentist);

        // Insert default interventions
        $defaultInterventions = DefaultIntervention::all();
        foreach ($defaultInterventions as $defaultIntervention) {
            $user->interventions()->save(new Intervention([
                'name' => $defaultIntervention->name,
                'price' => $defaultIntervention->price
            ]));
        }

        // Log user in
        Auth::login($user);

        return response()->json([
            'success' => true,
            'redirect' => $this->redirectTo
        ]);
    }

    /**
     * Custom format for validation errors.
     *
     * @param Validator $validator
     * @return array
     */
    protected function formatValidationErrors(Validator $validator) {
        $validatedFields = ['first_name', 'last_name', 'email', 'cabinet_name', 'password'];
        $messages = $validator->messages();
        $errors = [];
        foreach ($validatedFields as $field) {
            if ($messages->has($field)) {
                $errors[$field] = $messages->first($field);
            }
        }
        return [
            'success' => false,
            'errors' => $errors
        ];
    }
}