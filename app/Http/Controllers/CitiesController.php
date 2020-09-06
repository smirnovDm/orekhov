<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(){

        return City::with('stops')->paginate();

    }
}
