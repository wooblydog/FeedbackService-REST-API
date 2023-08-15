<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Http\Resources\V1\ReportCollection;
use App\Http\Resources\V1\ReportResource;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use function response;

class ReportController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        if ($user->type == 'C') {
            $reports = Report::where('user_id', $user->id)->get();
            return new ReportCollection($reports);
        }

        return new ReportCollection(Report::paginate());
    }


    public function store(StoreReportRequest $request)
    {
        $user = Auth::user();

        if ($user->type != 'C') {
            return response()->json(['error' => 'Forbidden'], 403);
        }

        $report = $request->all();
        $report['user_id'] = $user->id;
        return new ReportResource(Report::create($report));
    }


    public function show(Report $report)
    {
        return $report;
    }

    public function status(Report $report)
    {
        return response()->json(['status' => $report->status]);
    }

    public function edit(Report $report)
    {
        //
    }


    public function update(UpdateReportRequest $request, Report $report)
    {
        $user = Auth::user();

        if ($user->type != 'M') {
            return response()->json(['error' => 'Forbidden'], 403);
        }

        $report->update($request->all());
        return $report;
    }


    public function destroy(Report $report)
    {
        //
    }
}
