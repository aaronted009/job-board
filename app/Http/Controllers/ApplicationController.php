<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Models\Application;
use App\Http\Resources\ApplicationResource;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        if($applications->isEmpty()) {
            return response()->json(['message' => 'No applications found'], 200);
        }
        return ApplicationResource::collection($applications);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicationRequest $request)
    {
        $validated = $request->validated();
        $application = Application::create($validated);
        return new ApplicationResource($application);
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        return new ApplicationResource($application);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationRequest $request, Application $application)
    {
        $validated = $request->validated();
        $application->update($validated);
        return new ApplicationResource($application);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return response()->json(['message' => 'Application deleted'], 200);
    }
}
