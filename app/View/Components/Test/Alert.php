<?php

namespace App\View\Components\Test;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $textMessage,
        public string $type,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test.alert');
    }

    /**
     * whether the component should be render 
     */
    public function shouldRender(): bool
    {
        return Str::length($this->textMessage) > 10 ;
    }

    public function formatAlert($string)
    {
        return Str::ucfirst($string);
    }
}
