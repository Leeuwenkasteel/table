<?php

namespace Leeuwenkasteel\Table\View\Components;

use Illuminate\View\Component;

class ThActions extends Component{

    public $slug;
    
    public function render(){
        return view('table::components.th_actions');
    }
}