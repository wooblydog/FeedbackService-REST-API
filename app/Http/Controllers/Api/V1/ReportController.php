<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ReportCollection;
use App\Http\Resources\V1\ReportResource;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ReportCollection
     */
    public function index()
    {
        return new ReportCollection(Report::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Controllers\Api\V1\StoreReportRequest  $request
     * @return ReportResource
     */
    public function store(StoreReportRequest $request)
    {
        return new ReportResource(Report::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Report $report)
    {
        return response()->json(['status' => $report->status]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Controllers\Api\V1\UpdateReportRequest  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        $request->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
