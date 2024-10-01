<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreRelativeRequest;
use App\Http\Requests\UpdateRelativeRequest;
use App\Models\Relative;
use App\Http\Controllers\Controller;

class RelativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relatives = Relative::latest()->paginate(20);
        return view('admin.relatives.index', compact('relatives'));
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
     * @param  \App\Http\Requests\StoreRelativeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRelativeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function show(Relative $relative)
    {
        return view('admin.relatives.show', compact('relative'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function edit(Relative $relative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRelativeRequest  $request
     * @param  \App\Models\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRelativeRequest $request, Relative $relative)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relative $relative)
    {
        $relative->delete();
        return redirect()->route('admin.relatives.index');
    }
}
