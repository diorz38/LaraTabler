<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Seksi;
use Illuminate\Support\Carbon;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;


class Datatable extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;
    protected $paginationTheme = 'bootstrap';
    public $showFilters = false;
    public $seksiIds = [];
    public $filters = [
        'search' => '',
        // 'status' => '',
        // 'amount-min' => null,
        // 'amount-max' => null,
        // 'date-min' => null,
        // 'date-max' => null,
    ];
    public Project $editing;

    public $title = 'Tabel Kegiatan Yang Akan Berakhir Bulan Ini';
    public $currentMonth;
    public $currentUser;


    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'editing.title' => 'required|min:3',
        'editing.amount' => 'required',
        'editing.status' => 'required|in:'.collect(Project::STATUSES)->keys()->implode(','),
        'editing.date_for_editing' => 'required',
    ]; }

    public function mount()
    {
        $this->editing = $this->makeBlankProject();
        $this->currentMonth = \Carbon\Carbon::now()->month;
        $this->seksiIds = Seksi::where('parent_id',\Auth::user()->fungsi_id)->pluck('id');
        // $this->currentMonth = '05';
        // $this->currentUser = \Auth::id();
        // $this->currentUser = 104;

    }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'kegiatan.csv');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('You\'ve deleted '.$deleteCount.' transactions');
    }

    public function makeBlankProject()
    {
        return Project::make(['tgl_mulai' => now(), 'tgl_berakhir' => now()]);
    }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = ! $this->showFilters;
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->editing->getKey()) $this->editing = $this->makeBlankTransaction();

        $this->showEditModal = true;
    }

    public function edit(Project $project)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($transaction)) $this->editing = $transaction;

        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();

        $this->editing->save();

        $this->showEditModal = false;
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = Project::query()
            ->where('parent_id',NULL)
            ->whereMonth('tgl_berakhir',$this->currentMonth)
            ->whereIn('seksi_id',$this->seksiIds)
            ->orderBy('tgl_berakhir','DESC')
            // ->when($this->filters['status'], fn($query, $status) => $query->where('status', $status))
            // ->when($this->filters['amount-min'], fn($query, $amount) => $query->where('amount', '>=', $amount))
            // ->when($this->filters['amount-max'], fn($query, $amount) => $query->where('amount', '<=', $amount))
            // ->when($this->filters['date-min'], fn($query, $date) => $query->where('date', '>=', Carbon::parse($date)))
            // ->when($this->filters['date-max'], fn($query, $date) => $query->where('date', '<=', Carbon::parse($date)))
            ->when($this->filters['search'], fn($query, $search) => $query->where('title', 'like', '%'.$search.'%'));

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        // dump($this->rows);
        return view('livewire.datatable', [
            'projects' => $this->rows,
        ]);
    }

}
