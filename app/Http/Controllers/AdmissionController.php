<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Http\Requests\StoreAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $admissions = Admission::select('id')->paginate();
            
            return view('index', [
                'admissions' => $admissions
            ]);
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('create');
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdmissionRequest $request)
    {
        try {
            Admission::create($request->validated());
    
            return back()->with('success', 'Form successfully submitted');
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $admission = Admission::findOrFail($id);

            return view('edit',[
                'admission' => $admission
            ]);
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdmissionRequest $request, Admission $admission)
    {
        try {
            Admission::create($request->validated());
    
            return back()->with('success', 'Form successfully updated');
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
