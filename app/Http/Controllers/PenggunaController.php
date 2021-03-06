<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function __construct(User $users){
        $this->users = $users;
    }
    
    public function index(){

        $user = $this->users->latest()->get();
        return view('pengguna', compact('user'));
   }
}
