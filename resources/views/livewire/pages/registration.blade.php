<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#302b88]/80 to-[#b9608d]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class=" uppercase text-2xl font-bold tracking-wide lg:text-4xl">Registration</h2>
        </div>
    </section>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        <div class="tabs tabs-border justify-evenly">
            <input type="radio" name="my_tabs_2" class="tab text-lg uppercase text-[#b9608d]"
                aria-label="Indonesian Participant" checked="checked" />
            <div class="tab-content">
                <div class="pb-6 text-gray-500">
                    @foreach ($uniqueLocals as $category)
                    @if ($category == 'symposium')
                    <h2 class="uppercase font-semibold text-[#b9608d] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#302b88] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Early Bird Registration <br>
                                        up to 30 March 2026
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Late / Onsite Registration <br>
                                        After 30 March 2026
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Onsite Registration
                                    </th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regLocals as $regLocal)
                                @if ($regLocal->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-fuchsia-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regLocal->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regLocal->early_bird_reg != 0 ? number_format($regLocal->early_bird_reg,
                                        0, ',', '.') : 'to be announce'}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regLocal->normal_reg != 0 ? number_format($regLocal->normal_reg, 0, ',',
                                        '.') : 'to be announce'}}
                                    </td>
                                    {{-- <td class="px-6 py-4 text-center">
                                        IDR {{$regLocal->onsite_reg != 0 ? number_format($regLocal->onsite_reg, 0, ',',
                                        '.'): 'to be announce'}}
                                    </td> --}}
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/inashum2026"
                                class="btn bg-[#b9608d] text-white hover:bg-[#862254] btn-lg rounded-xl mb-3 float-end text-sm"><i
                                    class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @elseif ($category == 'workshop')
                    <h2 class="uppercase font-semibold text-[#b9608d] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#302b88] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        28, 29 & 30 July, 2026 <br>
                                        Fatmawati Hospital, Jakarta
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Late / Onsite Registration <br>
                                        After 30 March 2026
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regLocals as $regLocal)
                                @if ($regLocal->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-fuchsia-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regLocal->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{$regLocal->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regLocal->early_bird_reg, 0, ',', '.') : 'to be announce'}}

                                    </td>
                                    {{-- <td class="px-6 py-4 text-center">
                                        {{$regLocal->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regLocal->normal_reg, 0, ',', '.') : ''}}
                                    </td> --}}

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/inashum2026"
                                class="btn bg-[#b9608d] text-white hover:bg-[#b9608d] btn-lg rounded-xl mb-3 float-end text-sm"><i
                                    class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @elseif ($category == 'workshop microsurgery')
                    <h2 class="uppercase font-semibold text-[#b9608d] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#302b88] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        30 July, 2026 <br>
                                        Zeiss Office
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Late / Onsite Registration <br>
                                        After 30 March 2026
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regLocals as $regLocal)
                                @if ($regLocal->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-fuchsia-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regLocal->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{$regLocal->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regLocal->early_bird_reg, 0, ',', '.') : 'to be announce'}}

                                    </td>
                                    {{-- <td class="px-6 py-4 text-center">
                                        {{$regLocal->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regLocal->normal_reg, 0, ',', '.') : ''}}
                                    </td> --}}

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/inashum2026"
                                class="btn bg-[#b9608d] text-white hover:bg-[#b9608d] btn-lg rounded-xl mb-3 float-end text-sm"><i
                                    class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @else
                    <h2 class="uppercase font-semibold text-[#b9608d] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#302b88] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        for General Practitioner and Primary Care Providers <br>
                                        1 August 2026
                                        Swissôtel Jakarta PIK Avenue, Jakarta
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Nurse / Medical Students
                                    </th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regLocals as $regLocal)
                                @if ($regLocal->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-fuchsia-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regLocal->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{$regLocal->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regLocal->early_bird_reg,
                                        0, ',', '.') : 'to be announce'}}
                                    </td>
                                    {{-- <td class="px-6 py-4 text-center">
                                        {{$regLocal->normal_reg != 0 ? 'IDR' . number_format($regLocal->normal_reg, 0,
                                        ',',
                                        '.') : ''}}
                                    </td> --}}

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/inashum2026"
                                class="btn bg-[#b9608d] text-white hover:bg-[#b9608d] btn-lg rounded-xl mb-3 float-end text-sm"><i
                                    class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>

            <input type="radio" name="my_tabs_2" class="tab uppercase text-lg text-[#b9608d] "
                aria-label="Foreign Participant" />
            <div class="tab-content">
                <div class="pb-6 text-gray-500">
                    @foreach ($uniqueForeigns as $category)
                    @if ($category == 'symposium')
                    <h2 class="uppercase font-semibold text-[#b9608d] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#302b88] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Early Bird Registration <br>
                                        up to 30 March 2026
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Late / Onsite Registration <br>
                                        After 30 March 2026
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Onsite Registration
                                    </th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regForeigns as $regForeign)
                                @if ($regForeign->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-fuchsia-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regForeign->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regForeign->early_bird_reg != 0 ?
                                        number_format($regForeign->early_bird_reg,
                                        0, ',', '.') : 'to be announce'}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regForeign->normal_reg != 0 ? number_format($regForeign->normal_reg, 0,
                                        ',',
                                        '.') : 'to be announce'}}
                                    </td>
                                    {{-- <td class="px-6 py-4 text-center">
                                        IDR {{$regForeign->onsite_reg != 0 ? number_format($regForeign->onsite_reg, 0,
                                        ',',
                                        '.'): 'to be announce'}}
                                    </td> --}}
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/inashum2026"
                                class="btn bg-[#b9608d] text-white hover:bg-[#862254] btn-lg rounded-xl mb-3 float-end text-sm"><i
                                    class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @elseif ($category == 'workshop')
                    <h2 class="uppercase font-semibold text-[#b9608d] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#302b88] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        28, 29 & 30 July, 2026 <br>
                                        Fatmawati Hospital, Jakarta
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Late / Onsite Registration <br>
                                        After 30 March 2026
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regForeigns as $regForeign)
                                @if ($regForeign->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-fuchsia-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regForeign->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{$regForeign->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regForeign->early_bird_reg, 0, ',', '.') : 'to be announce'}}

                                    </td>
                                    {{-- <td class="px-6 py-4 text-center">
                                        {{$regForeign->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regForeign->normal_reg, 0, ',', '.') : ''}}
                                    </td> --}}

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/inashum2026"
                                class="btn bg-[#b9608d] text-white hover:bg-[#b9608d] btn-lg rounded-xl mb-3 float-end text-sm"><i
                                    class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @elseif ($category == 'workshop microsurgery')
                    <h2 class="uppercase font-semibold text-[#b9608d] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#302b88] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        30 July, 2026 <br>
                                        Zeiss Office
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Late / Onsite Registration <br>
                                        After 30 March 2026
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regForeigns as $regForeign)
                                @if ($regForeign->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-fuchsia-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regForeign->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{$regForeign->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regForeign->early_bird_reg, 0, ',', '.') : 'to be announce'}}

                                    </td>
                                    {{-- <td class="px-6 py-4 text-center">
                                        {{$regForeign->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regForeign->normal_reg, 0, ',', '.') : ''}}
                                    </td> --}}

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/inashum2026"
                                class="btn bg-[#b9608d] text-white hover:bg-[#b9608d] btn-lg rounded-xl mb-3 float-end text-sm"><i
                                    class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @else
                    <h2 class="uppercase font-semibold text-[#b9608d] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#302b88] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        for General Practitioner and Primary Care Providers <br>
                                        1 August 2026
                                        Swissôtel Jakarta PIK Avenue, Jakarta
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Nurse / Medical Students
                                    </th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regForeigns as $regForeign)
                                @if ($regForeign->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-fuchsia-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regForeign->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{$regForeign->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regForeign->early_bird_reg,
                                        0, ',', '.') : 'to be announce'}}
                                    </td>
                                    {{-- <td class="px-6 py-4 text-center">
                                        {{$regForeign->normal_reg != 0 ? 'IDR' . number_format($regForeign->normal_reg, 0,
                                        ',',
                                        '.') : ''}}
                                    </td> --}}

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/inashum2026"
                                class="btn bg-[#b9608d] text-white hover:bg-[#b9608d] btn-lg rounded-xl mb-3 float-end text-sm"><i
                                    class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
                
            </div>
        </div>
    </section>

    <section class="px-5 md:px-10 py-10 md:py-20 bg-competition border-t border-dashed border-gray-400">
        <div class=" mt-10">
            <div class="text-center lg:text-start">
                <h2 class="mb-2 uppercase text-3xl font-semibold">Registration
                    <span class="text-[#b9608d]">information</span>
                </h2>
            </div>

            <div>
                @foreach ($regInfos as $regInfo)
                <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title font-semibold">{{ $regInfo->title }}</div>
                    <div class="collapse-content text-sm text-gray-500">
                        {!!str($regInfo->description)->markdown()->sanitizeHtml() !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


</div>