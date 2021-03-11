<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }
    public function logout()
    {
        
    }
}
