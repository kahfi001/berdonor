<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stokdarah;

class StokDarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stokdarah = Stokdarah::all();

        return view('dashboard.donor.index', ['stokdarah' => $stokdarah]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stokdarah = Stokdarah::findOrFail($id);

        return view('dashboard.donor.edit', [
            'stokdarah' => $stokdarah
        ]);
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
        $request->validate([
            'a' => 'required',
            'b' => 'required',
            'ab' => 'required',
            'o' => 'required'
        ]);

        Stokdarah::find($id(1))->update($request->all());

        return redirect('/dashboard/donor')->with('success', 'Artikel berhasil dihapus');
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
