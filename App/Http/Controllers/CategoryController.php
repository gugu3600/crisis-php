<?php 

namespace App\Http\Controllers;

include "../../../vendor/autoload.php";

use Database\DB\MySQL;
use App\Http\Models\Category;
use App\Http\Models\Regions;

class CategoryController extends Controller 
{
    public function index()
    {
        $categories = Category::all();

        return $categories;
    }

    public function store($data)
    {
        
    }

        
    

    
}