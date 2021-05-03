<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Station;

class StationsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $stations = Station::where('nombre', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('provincia','like','%' . $this->search . '%')
                        ->paginate(10);
        return view('livewire.admin.stations-index', compact('stations'));
    }
}
