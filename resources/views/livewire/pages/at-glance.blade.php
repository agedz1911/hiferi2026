<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#27AAE1]/80 to-[#39B54A]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="uppercase text-2xl font-bold tracking-wide lg:text-4xl">program at glance</h2>
        </div>
    </section>

    <div class="px-5 lg:px-10 mt-10 flex flex-wrap gap-2 justify-end md:justify-between items-center">
        <label class="input input-lg input-success rounded-lg w-full max-w-6xl">
            <i class="fa fa-search opacity-45 text-sm"></i>
            <input wire:model.live='search' type="text" class="grow" placeholder="Search Topics, And Sessions" />
        </label>
        <a target="_blank" href="assets/download/schedule-fres2026.pdf" class="btn btn-success rounded-lg"><i class="fa fa-download"></i> Download PDF Schedule</a>
    </div>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        <div class="flex flex-wrap items-center justify-center">
            <div x-data="{
                openTab: 3,
                isModalOpen: false,
                selectedSession: null,
                formatDate(value) {
                    if (!value) return '';
                    const date = new Date(value);
                    if (Number.isNaN(date.getTime())) return value;
                    return new Intl.DateTimeFormat('en', {
                        day: '2-digit',
                        month: 'long',
                        year: 'numeric'
                    }).format(date);
                }
            }" class="lg:w-11/12 w-full mx-auto">
                <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-[#39B54A] text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">8 October</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-[#39B54A] text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">9 October</button>
                    <button x-on:click="openTab = 3" :class="{ 'bg-[#39B54A] text-white': openTab === 3 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">10 October</button>
                    <button x-on:click="openTab = 4" :class="{ 'bg-[#39B54A] text-white': openTab === 4 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">11 October</button>
                </div>

                @php($days = [
                    ['id' => 1, 'date' => '2026-10-08', 'rooms' => ['ROOM 1','ROOM 2','ROOM 3','ROOM 4','ROOM 5','ROOM 6','ROOM 7','ROOM 8']],
                    ['id' => 2, 'date' => '2026-10-09', 'rooms' => ['ROOM 1','ROOM 2','ROOM 3','ROOM 4','ROOM 5','ROOM 6','ROOM 7','ROOM 8']],
                    ['id' => 3, 'date' => '2026-10-10', 'rooms' => ['BALLROOM 1,2,3','BALLROOM 1','BALLROOM 2','BALLROOM 3','ROOM 1']],
                    ['id' => 4, 'date' => '2026-10-11', 'rooms' => ['BALLROOM 1,2,3','BALLROOM 1','BALLROOM 2','BALLROOM 3','ROOM 1']],
                ])

                @foreach ($days as $day)
                    <div x-show="openTab === {{ $day['id'] }}" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        @for ($i = 0; $i < count($day['rooms']); $i++)
                                            <th style="width: {{ 100 / count($day['rooms']) }}%;"></th>
                                        @endfor
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($day['rooms'] as $roomName)
                                            <td class="align-top">
                                                @php($sessionsForRoom = $groupedSessions[$day['date']][$roomName] ?? [])
                                                @foreach ($sessionsForRoom as $session)
                                                    <button type="button" class="hover:shadow-md block w-full my-1 text-left" @click="selectedSession = @js($session); isModalOpen = true">
                                                        <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50 text-center">
                                                            <div class="badge badge-sm badge-info mb-2">{{ $session['category_sesi'] }}</div>
                                                            <br>
                                                            {{ $session['time'] }} <br>
                                                            {{ $session['title_ses'] }}
                                                        </div>
                                                    </button>
                                                @endforeach
                                            </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach

                <div x-show="isModalOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 px-4">
                    <div class="w-full max-w-5xl rounded-lg bg-white p-6 shadow-xl">
                        <template x-if="selectedSession">
                            <div>
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <h3 class="font-semibold">Date: <span x-text="formatDate(selectedSession?.date)"></span></h3>
                                        <p class="text-sm text-gray-600">Time: <span x-text="selectedSession?.time"></span></p>
                                    </div>
                                    <button type="button" class="btn btn-sm" @click="isModalOpen = false">Close</button>
                                </div>
                                <p class="mt-4"><strong>Session:</strong> <span x-text="selectedSession.title_ses"></span></p>
                                <p><strong>Moderator:</strong> <span x-text="selectedSession.moderator"></span></p>
                                <p><strong>Room:</strong> <span x-text="selectedSession.room"></span></p>

                                <div class="overflow-x-auto mt-5">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 18%">Time</th>
                                                <th>Topic</th>
                                                <th>Speaker</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <template x-for="schedule in selectedSession.schedules" :key="schedule.id">
                                                <tr>
                                                    <th scope="row" x-text="schedule.time_speaker"></th>
                                                    <td x-text="schedule.topic_title"></td>
                                                    <td x-text="schedule.speaker"></td>
                                                </tr>
                                            </template>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 md:px-10 mt-10">
            <p class="text-sm text-error italic">
                Note: <br>
                The scientific schedule is provisional and may be adjusted as required.
            </p>
        </div>
    </section>
</div>
