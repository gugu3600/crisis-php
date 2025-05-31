<?php 

namespace App\Http\Controllers;

include "../../../vendor/autoload.php";

use App\Http\Models\Regions;

class RegionsController extends Controller
{

    public function index()
    {
        $regions = Regions::all();
        
        return $regions;
    }
}