<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionFormRequest;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $options = Option::orderBy('created_at','desc')->paginate(4);
       
        return view('admin.options.index',['options'=>$options]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $option = new Option();
        return view('admin.options.form',['option'=>$option]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        $result = $request->validated();
        
        Option::create($result);


        return to_route('admin.option.index')->with('Option ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
        return view('admin.options.form',['option'=>$option]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $option)
    {
        
        $option->update($request->validated());

        return to_route('admin.option.index')->with('success', 'modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        $option->delete();
        return to_route('admin.option.index')->with('success','suprimé avec succès');
    }
}
