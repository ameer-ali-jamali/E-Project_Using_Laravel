<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Users;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IndexController extends Controller
{
    public function delete_user($id)
    {
        $isSuccess = Users::find($id);
        // $isSuccess->delete();
        // return redirect('/users');
        echo $isSuccess;
    }
}