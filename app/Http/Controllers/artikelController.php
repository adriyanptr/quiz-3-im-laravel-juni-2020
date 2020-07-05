<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikelModel;

class artikelController extends Controller
{
    public function index(){
    	$artikel = artikelModel::get_all();
    	return view('artikel.index', compact('artikel'));
    }

    public function create(){
    	return view('artikel.form');
    }

    public function store(Request $req){
    	$data = $req->all();
    	unset($data["_token"]);
    	$data_artikel = artikelModel::save($data);
    	if($data_artikel){
    		return redirect('/artikel');
    	}
    }

    public function show($id){
        $artikel = artikelModel::find_by_id($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id){
        $artikel = artikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $req){
        $artikel = artikelModel::update($id, $req->all());
        return redirect('/artikel');
    }

    public function destroy($id){
        $delartikel  = artikelModel::destroy($id);
        return redirect('/artikel');
    }

}
