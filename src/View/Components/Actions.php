<?php

namespace Leeuwenkasteel\Table\View\Components;

use Illuminate\View\Component;

class Actions extends Component{
    public $name;
    public $slug;
    public function render(){
        return view('table::components.actions');
    }
}