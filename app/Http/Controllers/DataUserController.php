<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\DB;

class DataUserController extends Controller
{
    public function __construct(User $users){
        $this->users = $users;
    }
    
    public function index(){

        $user = $this->users->latest()->get();
        return view('datauser', compact('user'));
   }
}
