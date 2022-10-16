<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livres;
class fileController extends Controller
{
    public function view($id)
    {
        $livres=Livres::find($id);
        return view('file.file',[
            'livres'=>$livres
        ]);
    }
    public function download($file)
    {

     return response()->download(public_path('storage/doc/'.$file));

    }
    }

