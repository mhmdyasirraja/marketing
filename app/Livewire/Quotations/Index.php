<?php

namespace App\Livewire\Quotations;

use App\Models\Quotation;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.quotations.index', [
            'quotations' => Quotation::with('company')->get(),
        ]);
    }
}
