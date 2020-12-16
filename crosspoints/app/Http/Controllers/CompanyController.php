<?php

namespace App\Http\Controllers;
use App\Company;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user){
        $this->authorize('is_admin', $user);

        $companies = Company::all();

        return(view('addcompany', [
            "companies" => $companies
        ]));
    }

    public function store(User $user){

        $this->authorize('is_admin', $user);

        $company = new Company();
        $company->name = request('name');
        $company->kvk = request('kvk');

        $company->save();
        return redirect("/company");
    }
}
