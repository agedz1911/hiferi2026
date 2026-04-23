<?php

namespace App\Livewire\Pages;

use App\Models\atGlance as ModelsAtGlance;
use App\Models\ScheduleSession;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('KONAS IX HIFERI - Program at Glance')]
class AtGlance extends Component
{
    public $atglances;

    public $delapan;
    public $sembilan;
    public $sepuluh;
    public $sebelas;


    public function mount()
    {
        $this->atglances = ScheduleSession::all();
        $this->delapan = $this->atglances->where('date', '2026-10-08')->sortBy('no_urut');
        $this->sembilan = $this->atglances->where('date', '2026-10-09')->sortBy('no_urut');
        $this->sepuluh = $this->atglances->where('date', '2026-10-10')->sortBy('no_urut');
        $this->sebelas = $this->atglances->where('date', '2026-10-11')->sortBy('no_urut');
    }

    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
