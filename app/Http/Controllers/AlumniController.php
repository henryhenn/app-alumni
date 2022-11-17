<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AlumniController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:Admin')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $users = User::role('User')->orderBy('name')->get();

        return view('alumni.alumni', compact('users'));
    }

    public function list(): View
    {
        $users = User::role("User")->orderBy('name')->get();

        return view('alumni.manage-alumni', compact('users'));
    }
}
