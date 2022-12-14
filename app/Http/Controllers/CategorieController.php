<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\categories ;
use Illuminate\Support\Facades\Storage;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=categories::all();
        // dd($categories);
        return view('categorie.index',[
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' =>'required',
            'logo' => 'required',
            'description' => 'required',
        ]);
            $categories=new categories();
             $fil=$request->logo;
             $extension = $fil->getClientOriginalExtension();

            $filname=time().'.'.$extension;
            // dd($extension);
            $fil->storeAs('img',
            $filname,
            'public');

            $categories->libelle=$request->libelle;
            $categories->description=$request->description;
            $categories->logo=$filname;
            $categories->save();
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livres=Livres::find($id);
        return view('file.file',[
            'livres'=>$livres
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
