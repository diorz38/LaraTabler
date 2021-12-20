<?php

namespace App\Http\InertiaControllers;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        return Inertia::render('Projects/Index', [
                'projects' => Project::where('parent_id','!=', null)->simplepaginate(10),
                'projects_count' => Project::where('parent_id','!=', null)->count(),
                'total_pages' => ceil(Project::where('parent_id','!=', null)->count()/10),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render('Projects/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Redirect
     */
    public function store(Request $request): Redirect
    {
        return Redirect::route('projects')->with('success', 'Project created.');
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return \Inertia\Response
     */
    public function show(Project $project): \Inertia\Response
    {
        return Inertia::render('Projects/Show', [
                'project' => $project
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return \Inertia\Response
     */
    public function edit(Project $project): \Inertia\Response
    {
        return Inertia::render('Projects/Edit', [
                'project' => $project
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return Redirect
     */
    public function update(Request $request, Project $project): Redirect
    {
        return Redirect::back()->with('success', 'Project updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return Redirect
     */
    public function destroy(Project $project): Redirect
    {
        return Redirect::back()->with('success', 'Project restored.');
    }

    /**
     * Restore the specified resource.
     *
     * @param Project $project
     * @return Redirect
     */
    public function restore(Project $project): Redirect
    {
        $project->restore();

        return Redirect::back()->with('success', 'Project restored.');
    }
}
