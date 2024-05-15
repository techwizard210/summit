<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component {
    /**
    * Create a new component instance.
    */

    public function __construct( public string $title, public int $point, public string $description, public string $imgUrl, public int $clueId, public string $path ) {
    }

    /**
    * Get the view / contents that represent the component.
    */

    public function render(): View|Closure|string {
        return view( 'components.card' );
    }

}
