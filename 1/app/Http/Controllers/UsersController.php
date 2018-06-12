<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\StoreUser;
use App\User;

class UsersController extends Controller
{
    /**
     * @var User
     */
    protected $user;

    /**
     * @var Company
     */
    protected $company;

    public function __construct(User $user, Company $company)
    {
        $this->user = $user;
        $this->company = $company;
    }

    public function index()
    {
        $users = $this->user->with('company')
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->get();

        return view('users.index', compact('users'));
    }

    public function new()
    {
        $companies = $this->company->pluck('name', 'id');

        return view('users.new', compact('companies'));
    }

    public function create(StoreUser $request)
    {
        $name = $request->get('first_name');

        $this->user->create([
            'login_name' => $request->get('login_name'),
            'first_name' => $name,
            'last_name'  => $request->get('last_name'),
            'company_id' => $request->get('company_id')
        ]);

        $request->session()->flash('flash_message', "User {$name} successfully added.");

        return redirect()->home();

    }
}
