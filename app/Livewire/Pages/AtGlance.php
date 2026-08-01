<?php

namespace App\Livewire\Pages;

use App\Models\ScheduleSession;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Program at Glance - FRES 2026')]
class AtGlance extends Component
{
    public array $groupedSessions = [];

    public $search = '';

    public function mount()
    {
        $this->loadData();
    }

    public function updatedSearch()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $query = ScheduleSession::query()
            ->select(['id', 'category_sesi', 'title_ses', 'date', 'time', 'room', 'moderator', 'no_urut'])
            ->with(['schedules' => function ($query) {
                $query->select(['id', 'sesi_id', 'time_speaker', 'topic_title', 'speaker']);
            }]);

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('title_ses', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('moderator', 'LIKE', '%' . $this->search . '%');
            })->orWhereHas('schedules', function ($q) {
                $q->where('topic_title', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('speaker', 'LIKE', '%' . $this->search . '%');
            });
        }

        $sessions = $query
            ->orderBy('date')
            ->orderBy('no_urut')
            ->orderBy('room')
            ->get();

        $this->groupedSessions = $sessions
            ->groupBy('date')
            ->map(function ($daySessions) {
                return $daySessions
                    ->groupBy('room')
                    ->map(function ($roomSessions) {
                        return $roomSessions->sortBy('no_urut')->values()->toArray();
                    })
                    ->toArray();
            })
            ->toArray();
    }

    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
