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
        $indukKegiatan = Project::query()->induk()->with('interval','basisKeg')->withWhereHas('subsKeg', function($q){
            $q->where('is_indiv',0)->whereYear('tgl_berakhir','2021');
        })->orderBy('tgl_berakhir','DESC');
        $transformData = $indukKegiatan->paginate(10)
        ->through(
            fn($induk) => [
                'id' => $induk->id,
                'seksi_id' => $induk->seksi_id,
                'parent_id' => $induk->parent_id,
                'user_id' => $induk->user_id,
                'basis_id' => $induk->basis_id,
                'interval_id' => $induk->interval->id,
                'interval_name' => $induk->interval->name,
                'tim' => $induk->tim == NULL ? [] : $induk->tim,
                'tim_user' => $induk->tim == NULL ? [] : \DB::table('users_smartkit')->whereIn('id', $induk->tim)->select('id','name','kab_id','fungsi_id','status','avatar','firebase_token')->get(),
                'jenis_keg' => $induk->jenis_keg,
                'basis_keg' => $induk->basisKeg->name,
                'nama_induk' => $induk->basisKeg->name.', TAHUN '.$induk->tahun,
                'tahun' => $induk->tahun,
                'tgl_mulai' => \Carbon\Carbon::parse($induk->subsKeg->min('tgl_mulai'))->format('Y-m-d'),
                'tgl_berakhir' => \Carbon\Carbon::parse($induk->subsKeg->max('tgl_berakhir'))->format('Y-m-d'),
                'total_sub_keg' => $induk->subsKeg->count(),
                'total_by_jenis_keg' => [
                        [
                            'name' =>'persiapan',
                            'total'=>\DB::table('projects')->where('is_indiv',0)->where('parent_id',$induk->id)->whereJsonContains('jenis_keg', 'persiapan')->count(),
                            'color'=> 'badge bg-orange ms-2'
                        ],
                        [
                            'name' =>'pelaksanaan',
                            'total'=>\DB::table('projects')->where('is_indiv',0)->where('parent_id',$induk->id)->whereJsonContains('jenis_keg', 'pelaksanaan')->count(),
                            'color'=> 'badge bg-indigo ms-2'
                        ],
                        [
                            'name' =>'pengolahan',
                            'total'=>\DB::table('projects')->where('is_indiv',0)->where('parent_id',$induk->id)->whereJsonContains('jenis_keg', 'pengolahan')->count(),
                            'color'=> 'badge bg-blue ms-2'
                        ],
                        [
                            'name' =>'evaluasi',
                            'total'=>\DB::table('projects')->where('parent_id',$induk->id)->whereJsonContains('jenis_keg', 'evaluasi')->count(),
                            'color'=> 'badge bg-green ms-2'
                        ],
                    ]
            ]);
        $count = $indukKegiatan->count();
        $ceil = ceil($indukKegiatan->count()/10);
        return Inertia::render('Projects/Index', [
                'projects' => $transformData,
                // 'projects' => $transformData,
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
        // return Inertia::render('Organizations/Index', [
        //     'filters' => Request::all('search', 'trashed'),
        //     'organizations' => Auth::user()
        //       ->account->organizations()
        //       ->orderBy('name')
        //       ->filter(Request::only('search', 'trashed'))
        //       ->paginate(10)
        //       ->withQueryString()
        //       ->through(
        //         fn($organization) => [
        //           'id' => $organization->id,
        //           'name' => $organization->name,
        //           'phone' => $organization->phone,
        //           'city' => $organization->city,
        //           'deleted_at' => $organization->deleted_at,
        //         ]
        //       ),
        //   ]);


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
        })->orderBy('tgl_berakhir','DESC');
        return $indukKegiatan->paginate(10)
        ->through(
            fn($induk) => [
                'id' => $induk->id,
                'seksi_id' => $induk->seksi_id,
                'parent_id' => $induk->parent_id,
                'user_id' => $induk->user_id,
                'basis_id' => $induk->basis_id,
                'interval_id' => $induk->interval->id,
                'interval_name' => $induk->interval->name,
                'tim' => $induk->tim == NULL ? [] : $induk->tim,
                'tim_user' => $induk->tim == NULL ? [] : \DB::table('users_smartkit')->whereIn('id', $induk->tim)->select('id','name','kab_id','fungsi_id','status','avatar','firebase_token')->get(),
                'jenis_keg' => $induk->jenis_keg,
                'basis_keg' => $induk->basisKeg->name,
                'nama_induk' => $induk->basisKeg->name.', TAHUN '.$induk->tahun,
                'tgl_mulai' => $induk->subsKeg->min('tgl_mulai'),
                'tgl_berakhir' => $induk->subsKeg->max('tgl_berakhir'),
                'total_sub_keg' => $induk->subsKeg->count(),
                'total_by_jenis_keg' => [
                    'persiapan' => \DB::table('projects')->where('parent_id',$induk->id)
                        ->whereJsonContains('jenis_keg', 'persiapan')
                        ->count(),
                    'pelaksanaan' =>\DB::table('projects')->where('parent_id',$induk->id)
                        ->whereJsonContains('jenis_keg', 'pelaksanaan')
                        ->count(),
                    'pengolahan' =>\DB::table('projects')->where('parent_id',$induk->id)
                        ->whereJsonContains('jenis_keg', 'pengolahan')
                        ->count(),
                    'evaluasi' =>\DB::table('projects')->where('parent_id',$induk->id)
                        ->whereJsonContains('jenis_keg', 'evaluasi')
                        ->count(),
                    ]
            ]);
    }
}
