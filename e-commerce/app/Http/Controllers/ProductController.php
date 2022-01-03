<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {

      $data= Product::all();
    return view('product',['products'=>$data]);
    }
    public function details($id)
    {
        $data=Product::find($id);
    return view('details',['product'=>$data]);
    }

    public function search(Request $request)
    {
 $data=product::where('name','like', '%'.$request->input('query').'%')->get();
 return view('search',['products'=>$data]);
}

}
