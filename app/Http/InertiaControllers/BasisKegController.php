<?php

namespace App\Http\InertiaControllers;

use App\Models\Basis as BasisKeg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class BasisKegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        $basisKegiatan = BasisKeg::query()->with('skf','kf');
        $count = $basisKegiatan->count();
        $ceil = ceil($basisKegiatan->count()/10);
        return Inertia::render('BasisKegs/Index', [
                'basiskegs' => $basisKegiatan->paginate(10),
                'basiskegs_count' => $count,
                'total_pages' => $ceil,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render('BasisKegs/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Redirect
     */
    public function store(Request $request): Redirect
    {
        return Redirect::route('amake.basiskegs.index')->with('success', 'BasisKeg created.');
    }

    /**
     * Display the specified resource.
     *
     * @param BasisKeg $basiskeg
     * @return \Inertia\Response
     */
    public function show(BasisKeg $basiskeg): \Inertia\Response
    {
        return Inertia::render('BasisKegs/Show', [
                'basiskeg' => $basiskeg->with('kf','skf')
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BasisKeg $basiskeg
     * @return \Inertia\Response
     */
    public function edit(BasisKeg $basiskeg): \Inertia\Response
    {
        return Inertia::render('BasisKegs/Edit', [
                'basiskeg' => $basiskeg
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BasisKeg $basiskeg
     * @return \Inertia\Response
     */
    public function update(Request $request, BasisKeg $basiskeg): \Inertia\Response
    {
        Validator::make($request->all(), [
            'seksi_id' => ['required'],
            'bidang_id' => ['required'],
            'name' => ['required'],
            'kd' => ['required'],
        ])->validate();
        $basiskeg->find($basiskeg->id)->update($request->all());
        return Inertia::render('BasisKegs/Show', [
                'basiskeg' => $basiskeg,
                'message' => 'BasisKeg updated.',
                'success' => true,
                'updated' => $request,
            ]);
        // return Redirect::back()->with('success', 'BasisKeg updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param BasisKeg $basiskeg
     * @return Redirect
     */
    public function destroy(BasisKeg $basiskeg): Redirect
    {
        return Redirect::back()->with('success', 'BasisKeg restored.');
    }

    /**
     * Restore the specified resource.
     *
     * @param BasisKeg $basiskeg
     * @return Redirect
     */
    public function restore(BasisKeg $basiskeg): Redirect
    {
        $basiskeg->restore();

        return Redirect::back()->with('success', 'BasisKeg restored.');
    }
}
