<?php

namespace LaravelTemplate\LtAdminlte\Components\Fields;

use Illuminate\View\Component;

class FormGroup extends Component
{
    public $label;
    public $icon;
    public $class;
    public $errorField;

    public function __construct(
        $label = null,
        $icon = null,
        $class = null,
        $errorField = null
    ) {
        $this->label = $label;
        $this->icon = $icon;
        $this->class = $class;
        $this->errorField = $errorField;
    }

    public function render()
    {
        return view('lt-adminlte::components.fields.form-group');
    }
}
