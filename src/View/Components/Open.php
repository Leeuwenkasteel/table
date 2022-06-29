<?php

namespace Leeuwenkasteel\Table\View\Components;

use Illuminate\View\Component;

class Open extends Component{
    public $name;
    public function render(){
        return view('table::components.open');
    }
}