<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Web;
use Livewire\WithPagination;

class IndexWeb extends Component
{
    use WithPagination;

    public $search;
    public $segmentName;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.index-web', [

            'data' => $this->search === null ?
                Web::latest()->paginate(10) :
                Web::latest()->where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
