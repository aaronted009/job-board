<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInterviewRequest;
use App\Http\Requests\UpdateInterviewRequest;
use App\Models\Interview;
use App\Http\Resources\InterviewResource;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interviews = Interview::all();
        if ($interviews->isEmpty()) {
            return response()->json(['message' => 'No interviews found'], 404);
        }
        return InterviewResource::collection($interviews);
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
    public function store(StoreInterviewRequest $request)
    {
        $validated = $request->validated();
        $interview = Interview::create($validated);
        return new InterviewResource($interview);
    }

    /**
     * Display the specified resource.
     */
    public function show(Interview $interview)
    {
        return new InterviewResource($interview);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInterviewRequest $request, Interview $interview)
    {
        $validated = $request->validated();
        $interview->update($validated);
        return new InterviewResource($interview);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interview $interview)
    {
        $interview->delete();
        return response()->json(['message' => 'Interview deleted'], 200);
    }
}
