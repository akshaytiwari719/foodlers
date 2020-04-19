<?php

namespace App\Http\Controllers\Curd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function signup(){
      return view('signup');
    }
}
