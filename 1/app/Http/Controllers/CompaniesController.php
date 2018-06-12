<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\StoreCompany;

class CompaniesController extends Controller
{

    /**
     * @var Company
     */
    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function new()
    {
        return view('companies.new');
    }

    public function create(StoreCompany $request)
    {
        $name = $request->get('name');

        $this->company->create([
            'name'    => $name,
            'address' => $request->get('address')
        ]);

        $request->session()->flash('flash_message', "Company {$name} successfully added.");

        return redirect()->home();
    }

}
