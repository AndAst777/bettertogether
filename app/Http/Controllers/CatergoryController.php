<?php

namespace App\Http\Controllers;

use App\Models\Catergory;
use Illuminate\Http\Request;

class CatergoryController extends Controller
{
    public function store(Request $request)
    {
        $category = new Catergory();
        $category->name = $request->name;
        $category->save();
        // return->redirect('admin');
    }
}
