<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#302b88]/80 to-[#b9608d]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class=" uppercase text-2xl font-bold tracking-wide lg:text-4xl">program at glance</h2>
        </div>
    </section>


    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">

        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 5 }" class="lg:w-11/12 w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-white rounded-lg shadow-md">
                        <button x-on:click="openTab = 5" :class="{ 'bg-[#b9608d] text-white': openTab === 5 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">28
                            July</button>
                        <button x-on:click="openTab = 1" :class="{ 'bg-[#b9608d] text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">29
                            July</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-[#b9608d] text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">30
                            July</button>
                        <button x-on:click="openTab = 3" :class="{ 'bg-[#b9608d] text-white': openTab === 3 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">31
                            July</button>
                        <button x-on:click="openTab = 4" :class="{ 'bg-[#b9608d] text-white': openTab === 4 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">1
                            August</button>

                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Fatmawati Hospital</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            {{-- @dd($duasembilan) --}}
                                            @foreach ($duasembilan as $fatmawati)
                                            @if ($fatmawati->room == 'Fatmawati Hospital')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="fatmawati28{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$fatmawati->category_sesi}}</div>
                                                    <br>
                                                    {{$fatmawati->time}} <br>
                                                    {{$fatmawati->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="fatmawati28{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($fatmawati->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$fatmawati->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$fatmawati->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$fatmawati->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$fatmawati->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($fatmawati->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Fatmawati Hospital</th>
                                        <th>Zeiss Office</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $fatmawati30)
                                            @if ($fatmawati30->room == 'Fatmawati Hospital')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="fatmawati30{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$fatmawati30->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$fatmawati30->time}} <br>
                                                    {{$fatmawati30->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="fatmawati30{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($fatmawati30->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$fatmawati30->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$fatmawati30->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$fatmawati30->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$fatmawati30->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($fatmawati30->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                        <td class="align-top">
                                            @foreach ($tigapuluh as $zeiss)
                                            @if ($zeiss->room == 'Zeiss Office')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="zeiss{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$zeiss->category_sesi}}</div>
                                                    <br>
                                                    {{$zeiss->time}} <br>
                                                    {{$zeiss->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="zeiss{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($zeiss->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$zeiss->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$zeiss->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$zeiss->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$zeiss->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($zeiss->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div x-show="openTab === 3"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Zurich Ballroom</th>
                                        <th>Lausanne Ballroom I</th>
                                        <th>Lausanne Ballroom II</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($tigapuluhsatu as $Zurich31)
                                            @if ($Zurich31->room == 'Zurich Ballroom')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Zurich31{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Zurich31->category_sesi}}</div>
                                                    <br>
                                                    {{$Zurich31->time}} <br>
                                                    {{$Zurich31->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Zurich31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Zurich31->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Zurich31->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Zurich31->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Zurich31->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Zurich31->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Zurich31->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                        <td class="align-top">
                                            @foreach ($tigapuluhsatu as $Lausanne31)
                                            @if ($Lausanne31->room == 'Lausanne Ballroom I')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Lausanne31{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Lausanne31->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$Lausanne31->time}} <br>
                                                    {{$Lausanne31->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Lausanne31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Lausanne31->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Lausanne31->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Lausanne31->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Lausanne31->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Lausanne31->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Lausanne31->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                        <td class="align-top">
                                            @foreach ($tigapuluhsatu as $Lausanne231)
                                            @if ($Lausanne231->room == 'Lausanne Ballroom II')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Lausanne231{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Lausanne231->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$Lausanne231->time}} <br>
                                                    {{$Lausanne231->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Lausanne231{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Lausanne231->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Lausanne231->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Lausanne231->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Lausanne231->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Lausanne231->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Lausanne231->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div x-show="openTab === 4"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Zurich Ballroom</th>
                                        <th>Lausanne Ballroom I</th>
                                        <th>Lausanne Ballroom II</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($satu as $Zurich1)
                                            @if ($Zurich1->room == 'Zurich Ballroom')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Zurich1{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Zurich1->category_sesi}}</div>
                                                    <br>
                                                    {{$Zurich1->time}} <br>
                                                    {{$Zurich1->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Zurich1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Zurich1->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Zurich1->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Zurich1->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Zurich1->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Zurich1->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Zurich1->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                        <td class="align-top">
                                            @foreach ($satu as $Lausanne1)
                                            @if ($Lausanne1->room == 'Lausanne Ballroom I')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Lausanne1{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Lausanne1->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$Lausanne1->time}} <br>
                                                    {{$Lausanne1->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Lausanne1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Lausanne1->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Lausanne1->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Lausanne1->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Lausanne1->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Lausanne1->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Lausanne1->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                        <td class="align-top">
                                            @foreach ($satu as $Lausanne21)
                                            @if ($Lausanne21->room == 'Lausanne Ballroom II')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Lausanne21{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Lausanne21->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$Lausanne21->time}} <br>
                                                    {{$Lausanne21->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Lausanne21{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Lausanne21->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Lausanne21->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Lausanne21->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Lausanne21->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Lausanne21->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Lausanne21->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div x-show="openTab === 5"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">

                        <p>tgl 28</p>
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