<?php

namespace Leeuwenkasteel\Table\View\Components;

use Illuminate\View\Component;

class Icon extends Component{
    public $name;
    public function render(){
        return view('table::components.icon');
    }
}