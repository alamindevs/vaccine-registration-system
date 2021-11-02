<?php

namespace App\View\Components\backend;

use Illuminate\View\Component;

class pageTitle extends Component
{
    public $titleGenerate;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titleGenerate = "true")
    {
        $this->titleGenerate = $titleGenerate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $titelItems = $this->option();
        return view('components.backend.page-title',compact('titelItems'));
    }

    private function option(){
        $routeName = request()->route()->getName();
        $nameArray = explode('.',$routeName);
        $arrayCount = count($nameArray);
        $newArray = [];
        for ($i=0; $i < $arrayCount; $i++) { 
            $name = [
                'name' => ucwords($nameArray[$i]),
                'action' => $arrayCount - 1 == $i ? $routeName : "#",
                'url' => $arrayCount - 1 == $i ? url()->current() : "#",
            ];
            array_push($newArray, $name);
        }
        return $newArray;
    }
}
