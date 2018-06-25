<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Panel extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'class' => 'default',
        'controls' => false,
        'footer' => false
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.panel2', [
            'config' => $this->config,
        ]);
    }
}
