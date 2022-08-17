<?php

namespace App\Http\Controllers;

use App\Models\Listrik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'adminsdm' || Auth::user()->role == 'adminkeuangan') {
            $listrik = Listrik::where('is_verified', 0)->get();
            
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listrik  $listrik
     * @return \Illuminate\Http\Response
     */
    public function show(Listrik $listrik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listrik  $listrik
     * @return \Illuminate\Http\Response
     */
    public function edit(Listrik $listrik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listrik  $listrik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listrik $listrik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listrik  $listrik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listrik $listrik)
    {
        //
    }
}
