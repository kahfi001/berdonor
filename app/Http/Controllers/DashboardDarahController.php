<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stokdarah;

class DashboardDarahController extends Controller
{
    public function index()
    {
        $stokdarah = Stokdarah::all();

        return view('dashboard.darah.index', [
            'stokdarah' => $stokdarah
        ]);
    }

    public function edit($id)
    {
        // return 'ini halaman edit';
        $stokdarah = Stokdarah::findOrFail($id);

        return view('dashboard.darah.edit', [
            "stokdarah" => $stokdarah
        ]);
    }

    public function update(Request $request, $id)
    {
        // return 'ini halaman update';
        // Stokdarah::find(1)->update($request->all());

        // $stokdarah = Stokdarah::find($id);

        // $stokdarah->a = $request->a;
        // $stokdarah->b = $request->b;
        // $stokdarah->ab = $request->ab;
        // $stokdarah->o = $request->o;

        // $stokdarah->save();

        $stokdarah = Stokdarah::find($id);

        $stokdarah->update($request->all());

        return redirect('dashboard/darah')->with('success', ' Data telah diperbaharui!');
    }
}
