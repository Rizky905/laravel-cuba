<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Web;

class DashboardWeb extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.dashboard-web', [

            'data' => $this->search === null ?
                Web::latest()->get() :
                Web::latest()->where('name', 'like', '%' . $this->search . '%')->get()
        ]);
    }
}
