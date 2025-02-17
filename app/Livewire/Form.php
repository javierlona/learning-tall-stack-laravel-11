<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DynamicField;

class Form extends Component
{
    public $fields = [['name' => '', 'value' => '']];

    public function addField()
    {
        $this->fields[] = ['name' => '', 'value' => ''];
    }

    public function removeField($index)
    {
        unset($this->fields[$index]);
        $this->fields = array_values($this->fields);
    }

    public function submit()
    {
        foreach ($this->fields as $field) {
            DynamicField::create($field);
        }

        session()->flash('message', 'Fields submitted successfully!');
    }

    public function render()
    {
        return view('livewire.form');
    }
}
