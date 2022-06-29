<?php

namespace Leeuwenkasteel\Table\View\Components;

use Illuminate\View\Component;

class Tr extends Component{

    public $name;
    
    public function render(){
        return view('table::components.tr');
    }
}