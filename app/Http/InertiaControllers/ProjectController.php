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
        $indukKegiatan = Project::query()->induk()->with('interval','basisKeg')->withCount('subsKeg')->has('basisKeg')->withWhereHas('subsKeg', function($q){
                $q->whereYear('tgl_berakhir','2021');
            })->orderBy('tgl_berakhir','DESC');
        $count = $indukKegiatan->count();
        $ceil = ceil($indukKegiatan->count()/10);
        return Inertia::render('Projects/Index', [
                'projects' => $indukKegiatan->paginate(10),
                'projects_count' => $count,
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
    public function update(Request $request, Project $project): \Inertia\Response
    {
        return Inertia::render('Projects/Show', [
            'project' => $project,
            'message' => 'Project updated.',
            'success' => true,
        ]);
        // return Redirect::back()->with('success', 'Project updated.');
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

    public function testProject()
    {
        // return $subMonths = now()->subDays(30);
        $subMonths = now()->subMonths(7);
        // return Project::subKegiatan()->with('subsKeg')->take(10)->get();
        Project::query()->induk()->withWhereHas('subsKeg', function($q)use($subMonths){
            $q->whereYear('tgl_berakhir','2021')->whereDate('tgl_berakhir','>=',$subMonths);
        })->orderBy('tgl_berakhir','DESC')->count();
        ceil(Project::query()->induk()->withWhereHas('subsKeg', function($q)use($subMonths){
            $q->whereYear('tgl_berakhir','2021')->whereDate('tgl_berakhir','>=',$subMonths);
        })->orderBy('tgl_berakhir','DESC')->count()/10);

        $indukKegiatan = Project::query()->induk()->with('interval','basisKeg')->withWhereHas('subsKeg', function($q){
            $q->whereYear('tgl_berakhir','2021');
        })->orderBy('tgl_berakhir','DESC')->paginate(10);
        return $indukKegiatan;
    }
}
