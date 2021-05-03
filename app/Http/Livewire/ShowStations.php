<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Station;

class ShowStations extends Component
{
    use WithPagination;

    public $title;
    public $search;
    public $sort = 'provincia';
    public $direction = 'asc';

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $stations = Station::where('nombre','LIKE','%' . $this->search . '%')
            ->orWhere('provincia','LIKE','%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate(10);
        return view('livewire.show-stations', compact('stations'));
    }

    public function order($sort){
        
        if ($this->sort == $sort) {
            if ($this->direction == 'asc') {
                $this->direction = 'desc';
            } else {
                $this->direction = 'asc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }

    }
}
