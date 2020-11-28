<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\Http\Requests\cvRequest;

class CvController  extends Controller
{
        //lister les cvs
    public function index()
    {
    	$list = Cv::all();
    	return view('cv.index',['cvs' => $list]);
    }
    
    // afficher les formulaire de creation de cv
    public function create()
    {
    	return view('cv.create');
    }
     
    // Enregistrer un cv
     public function store(cvRequest $request)
    {
          $cv = new Cv();
          $cv->titre = $request->input('titre');
          $cv->presentation = $request->input('presentation');

          $cv->save();

          return redirect('cvs');
    }
    
    //  permet de recuperer un cv pui de le mettre dans un formulaire
     public function edit($id)
    {
    	$cv = Cv::find($id);
    	return view('cv.edite',['cv' => $cv]);
    }

    // permet de modifier.
    public function update(cvRequest $request,$id)
    {

          $cv = Cv::find($id);
          $cv->titre = $request->input('titre');
          $cv->presentation = $request->input('presentation');
    	  $cv->save();
    	  return redirect('cvs');
    }

    // permet de supprimer.
    public function destroy(Request $request,$id)
    {
    	//return $request::all();
    	$cv = Cv::find($id);
    	$cv->delete();
    	return redirect('cvs');
    }
}
