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

    public $duasembilan;
    public $tigapuluh;
    public $tigapuluhsatu;
    public $satu;


    public function mount()
    {
        $this->atglances = ScheduleSession::all();
        $this->duasembilan = $this->atglances->where('date', '2026-07-29')->sortBy('no_urut');
        $this->tigapuluh = $this->atglances->where('date', '2026-07-30')->sortBy('no_urut');
        $this->tigapuluhsatu = $this->atglances->where('date', '2026-07-31')->sortBy('no_urut');
        $this->satu = $this->atglances->where('date', '2026-08-01')->sortBy('no_urut');
    }

    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
