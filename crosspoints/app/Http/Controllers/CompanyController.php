<?php

namespace App\Http\Controllers;
use App\Company;
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

    public function index(){
        return(view('addcompany'));
    }
    public function store(){
        $company = new Company();
        $company->name = request('name');
        $company->kvk = request('kvk');

        $company->save();
        return redirect("/home");
    }
}
