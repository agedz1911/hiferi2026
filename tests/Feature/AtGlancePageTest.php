<?php

use App\Livewire\Pages\AtGlance;
use App\Models\ScheduleSession;
use Livewire\Livewire;

it('groups sessions by date and room for faster rendering', function () {
    ScheduleSession::create([
        'category_sesi' => 'Plenary',
        'title_ses' => 'Opening Session',
        'date' => '2026-10-08',
        'time' => '09:00',
        'room' => 'ROOM 1',
        'moderator' => 'Dr. Example',
        'panelist' => null,
        'no_urut' => 1,
    ]);

    Livewire::test(AtGlance::class)
        ->assertSet('groupedSessions.2026-10-08.ROOM 1.0.title_ses', 'Opening Session');
});
