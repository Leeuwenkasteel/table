<?php

namespace Leeuwenkasteel\Table;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class LivewireTable extends Component
{
	use WithPagination;

    public $paginate = true;
    public $pagination = 10;
    public $actions = false;
	public $pagename = false;

    protected $listeners = ['sortColumn' => 'setSort'];
	
	public function query(){
		return $data = $this->model()::all();
	}
	
	public function pagination(){
		return $this->pagination;
	}
	
	public function slug(){
		$output = explode("\\", $this->model());
		$output = end($output);
		return strtolower($output);
	}

	public function render(){
        return view('table::livewire.table', [
            'headers' => $this->fields,
			'rowData' => $this->query(),
			'pagination' => $this->pagination(),
			'actions' => $this->actions,
			'slug' => $this->slug(),
			'pagename' => $this->pagename,
        ]);
    }
}