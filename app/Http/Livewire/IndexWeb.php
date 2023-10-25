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
    public $deleteId;

    protected $paginationTheme = 'bootstrap';

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $data = Web::findOrFail($this->deleteId);
        $data->delete();
    }


    public function render()
    {
        return view('livewire.index-web', [

            'data' => $this->search === null ?
                Web::latest()->paginate(10) :
                Web::latest()->where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
