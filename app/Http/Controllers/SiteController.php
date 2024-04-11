<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class SiteController extends Controller
{
    public function index(){
        //$produtos = Produto::paginate(3);
        //return view('site/home', compact('produtos'));
        return view('site/home');
    }

    public function details($slug){

        $produto = Produto::where('slug', $slug)->first();
        //$produto = 'nada não';

       //return dd($produto);

        //return view('site/details',['produto' => $produto]);
        return view('site.details', compact('produto'));
    }


    public function categoria($id){

        $categoria = Produto::where('id_categoria', $id)->get();
        return view('site.categoria', compact('categoria'));

    }

}
