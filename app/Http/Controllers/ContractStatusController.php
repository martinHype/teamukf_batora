<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContractStatusRequest;
use App\Http\Requests\UpdateContractStatusRequest;
use App\Models\ContractStatus;

class ContractStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContractStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContractStatus $contractStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContractStatusRequest $request, ContractStatus $contractStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContractStatus $contractStatus)
    {
        //
    }
}
