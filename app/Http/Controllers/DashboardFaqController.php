<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class DashboardFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.faq.index', [
            'faq' => Faq::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ]);

        Faq::create($validateData);

        return redirect('/dashboard/faq')->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('dashboard.faq.edit', [
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $rules = [
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ];
        $validateData = $request->validate($rules);

        Faq::where('id', $faq->id)
            ->update($validateData);

        // if ($artikel->author->id !== auth()->user()->id) {
        //     abort(403);
        // }

        return redirect('/dashboard/faq')->with('success', 'FAQ berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {

        Faq::destroy($faq->id);

        return redirect('/dashboard/faq')->with('success', 'FAQ berhasil dihapus');
    }
}
