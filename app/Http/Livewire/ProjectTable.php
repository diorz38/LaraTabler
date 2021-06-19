<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ProjectTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Nama','nama')
                ->sortable()
                ->searchable(),
            Column::make('nama Pegawai','namaPegawai'),
        ];
    }

    public function query(): Builder
    {
        return Project::query()->where('parent_id','!=',NULL)->with('user');
    }
}
// class ProjectTable extends Component
// {
//     public function render()
//     {
//         return view('livewire.project-table');
//     }
// }
