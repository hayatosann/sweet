<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DeleteuserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showDeactiveForm()
    {
      return view('users.cancel_membership');
    }

    public function deactive()
    {
      User::find(Auth::id())->delete();
      return redirect('/');
    }
}
