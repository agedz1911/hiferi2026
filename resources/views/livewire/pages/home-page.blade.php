<div class="relative">
    <section class="lg:min-h-screen banner relative pb-16 lg:pb-28">
        <div class="absolute inset-0 bg-gradient-to-t from-[#fff]/20 from-10% to-[#C8C4F5]/70"></div>
        <div class="z-10 relative pt-10 md:pt-14 lg:pt-32 flex flex-col md:flex-row items-start justify-evenly gap-4">
            <div class="px-1 order-2 lg:order-1">
                <livewire:section.flyer />
            </div>
            <div class="px-5 order-1 lg:order-2 w-full max-w-xl">
                <img src="assets/images/logo/logo-all.png" class="w-60 rounded-xl" alt="Banner">
                <div class="flex text-start w-fit relative mt-5">
                    <h1 class="text-2xl lg:text-4xl text-[#302b88] font-bold">
                        INASHUM - INAPOS - IDOS
                    </h1>
                </div>
                <div class="flex items-center gap-2">
                    <div class="bg-[#b9608d] rounded-tl-lg rounded-br-lg py-1 px-3 md:px-5">
                        <p class="text-white tracking-wide md:text-xl">C o m b i n e d <span class="ml-3">M e e t i n
                                g</span></p>
                    </div>
                    <p class="md:text-3xl text-2xl font-bold text-[#b9608d] tracking-widest">2026</p>
                </div>
                <p class="italic mt-3 text-[#302b88] font-bold md:text-xl">"Collaboration, Innovation, Impact "</p>
                <p class="text-[#302b88] mt-3">
                    July 28<sup>th</sup> - 1<sup>st</sup> August, 2026 <br> Fatmawati Hospital & Swissôtel Jakarta PIK
                    Avenue, Jakarta
                </p>
                <div class="mt-7">
                    <a href="{{asset('assets/download/Announcement_INASHUM_INAPOS_IDOS_2026.pdf')}}" target="_blank"
                        class="text-white hover:cursor-pointer border bg-[#b9608d] hover:border-[#b9608d] focus:ring-4 focus:outline-none focus:ring-[#b9608d] font-medium rounded-lg text-sm px-5 md:px-10 py-3 text-center  dark:border-[#b9608d] dark:text-[#b9608d] dark:hover:text-white dark:hover:bg-white dark:focus:ring-white"><i class="fa-solid fa-file-download mr-1 text-xs"></i>Download Announcement </a>
                    <a href="/registration" wire:navigate
                        class="hover:text-white border border-[#302b88] hover:bg-[#302b88] hover:border-[#302b88] focus:ring-4 focus:outline-none focus:ring-[#302b88] font-medium rounded-lg text-sm px-5 md:px-10 py-3 text-center  dark:border-[#302b88] dark:text-[#302b88] dark:hover:text-white dark:hover:bg-white dark:focus:ring-white"><i
                            class="fa-solid fa-pen-to-square"></i> Regiter Now </a>
                </div>
            </div>
        </div>
        <div
            class="absolute wave block md:hidden lg:block overflow-hidden w-full z-0 left-0 leading-none bottom-[-1px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path class="fill-white translate-middle-y" fill-opacity="1"
                    d="M0,32L120,74.7C240,117,480,203,720,245.3C960,288,1200,288,1320,288L1440,288L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <section class="px-2 -mt-10 lg:-mt-30 lg:px-7 pb-24 ">
        <div id="countdown" class="flex flex-wrap justify-center lg:justify-start md:flex-row w-full mx-auto gap-4">
            <div class="text-center card bg-[#b9608d]/90 rounded-2xl lg:w-32 w-40">
                <div class="card-body ">
                    <span id="days" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Days</small>
                </div>
            </div>

            <div class="text-center card bg-[#b9608d]/90 rounded-2xl lg:w-32 w-40">
                <div class="card-body">
                    <span id="hours" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Hours</small>
                </div>
            </div>
            <div class="text-center card bg-[#b9608d]/90 rounded-2xl lg:w-32 w-40">
                <div class="card-body">
                    <span id="minutes" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Minutes</small>
                </div>
            </div>

            <div class="text-center card bg-[#b9608d]/90 rounded-2xl lg:w-32 w-40">
                <div class="card-body">
                    <span id="seconds" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Seconds</small>
                </div>
            </div>
        </div>
    </section>

    <section
        class="lg:pb-16 pb-20 mt-10 grid grid-cols-1 lg:grid-cols-2 px-3 lg:px-8 gap-3 border-b-2 border-dashed border-[#302b88]/50">
        <div class=" px-3 lg:px-8">
            <img src="assets/images/logo/logo-all.png" alt="Icon" class="w-60 mb-5" class="">
            <div class="flex text-start w-fit relative mt-5">
                <h1 class="text-2xl lg:text-4xl text-[#302b88] font-bold">
                    INASHUM - INAPOS - IDOS
                </h1>
            </div>
            <div class="flex items-center gap-2">
                <div class="bg-[#b9608d] rounded-tl-lg rounded-br-lg py-1 px-3 md:px-5">
                    <p class="text-white tracking-wide md:text-xl">C o m b i n e d <span class="ml-3">M e e t i n
                            g</span></p>
                </div>
                <p class="md:text-3xl text-2xl font-bold text-[#b9608d] tracking-widest">2026</p>
            </div>
            <p class="italic mt-3 text-[#302b88] font-bold md:text-xl">"Collaboration, Innovation, Impact"</p>
            <div class="flex flex-col md:flex-row lg:justify-start justify-center items-center gap-3 mt-8">
                <div
                    class="z-10 hover:cursor-pointer max-w-sm p-6 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f4f4fc]">
                    <div class="flex items-center">
                        <div class="shrink-0 bg-[#302b88] py-3 px-4 rounded-full">
                            <i class="fa fa-calendar-o text-4xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate">
                                Wednesday to Saturday
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                July 28<sup>th</sup> - August 1<sup>st</sup>, 2026
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="z-10 hover:cursor-pointer max-w-sm p-6 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f4f4fc]">
                    <div class="flex items-center px-5">
                        <div class="shrink-0 bg-[#302b88] py-3 px-4 rounded-full">
                            <i class="fa fa-map-marker text-4xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate ">
                                Fatmawati Hospital &
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                Swissôtel Jakarta PIK Avenue
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 align-items-center">
                <div class="flex flex-col gap-4">
                    <div class="rounded-xl bg-white shadow-lg">
                        <img src="assets/images/jakarta/2.jpg" class="w-full rounded-xl saturate-100" alt="jakarta 1">
                    </div>
                    <div class="rounded-xl bg-white shadow-lg">
                        <img src="assets/images/jakarta/3.webp" class="w-full rounded-xl sepia-25" alt="jakarta 2">
                    </div>
                </div>
                <div class="rounded-xl bg-white shadow-lg">
                    <img src="assets/images/jakarta/1.jpg" class="w-full rounded-xl object-cover h-full saturate-200"
                        alt="jakarta 3">
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-16 py-20">
        <div class="w-full pt-5">
            <div class="text-center pb-6 m-auto">
                <h2 class="mb-1 text-3xl font-bold uppercase">important <span class="text-[#302b88] ">Dates</span></h2>
            </div>
            <livewire:section.important-date />
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#b9608d] to-[#302b88] relative z-0 py-28">
        {{-- <div class="absolute inset-0 feature start-0"></div> --}}
        <div class="relative">
            <div class="w-full max-w-6xl mx-auto border-b border-white border-opacity-35">
                <div class="mb-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="w-full border-e border-opacity-35 border-white ">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="100"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Speakers</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="15"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Symposium</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="5"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Workshop & Live Surgeries </p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="30"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Topics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-6 p-5">
                <h2 class="text-4xl text-white font-semibold uppercase text-center mb-10">Welcome <span
                        class="text-fuchsia-200">message
                    </span></h2>
                <div class="flex flex-col md:flex-row justify-center">
                    @foreach ($welcomeMessages as $welcomeMessage)
                    <div class="mb-5 w-full max-w-2xl items-start px-2 lg:px-8">
                        <div class="pb-4 text-justify text-white">
                            {!! Str::limit(str($welcomeMessage->description)->markdown()->sanitizeHtml(), 450) !!} <br>
                        </div>
                        <a class="text-pink-200 hover:text-white hover:underline" href="/welcome-message">Read
                            More...</a>
                        <div class="p-4 rounded-xl bg-[#b9608d] w-full max-w-sm mt-3 mb-5">
                            <div class="p-2 border-s border-white border-spacing-7">
                                <p class="text-white text-xs italic">" {{$welcomeMessage->title}}
                                    "</p>
                                <h6 class="font-semibold text-white">{{$welcomeMessage->name}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{--
    <livewire:section.competition /> --}}

    <section class="w-full pt-24 pb-3 px-2 lg:px-4 ">
        <div class="border-b-2 border-dashed border-[#302b88]/50 pb-10">
            <div class="">
                <div class="text-center pb-6 w-60 m-auto">
                    {{-- <span class="mb-1  text-sm">49<sup>th</sup> ASMIUA</span> --}}
                    <h2 class="mb-1 text-[#302b88] text-xl md:text-3xl font-bold uppercase">SPONSors</h2>
                </div>
                <div class="mt-10">
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 items-center justify-center">
                        @foreach ($sponsors as $sponsor)
                        <div class="p-0 border-r border-gray-300 last:border-0">
                            <div class="p-2 opacity-75 hover:opacity-100 text-center">
                                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                    target="_blank">
                                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                        class="img-fluid" alt="' . $sponsor->company . '" />' : '<small
                                        class="text-center text-accent">' . $sponsor->company . '</small>' !!}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center my-10">
                    <a class="btn bg-[#b9608d] hover:bg-[#a45b80] text-white rounded-xl uppercase" href="/sponsors">VIEW
                        MORE Sponsors</a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full pt-24 pb-3 px-2 lg:px-4">
        <div class="text-center mb-5 pb-10">
            <h2 class="md:text-3xl text-xl font-semibold uppercase mb-1">GET DIRECTION TO THE <span
                    class="text-[#302b88]">Venue</span></h2>
        </div>
        <div class="">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="lg:w-1/3 w-full">
                    <div class="py-10 px-4 text-white rounded-lg shadow-md bg-[#302b88]">
                        <div class="">
                            <h5 class="pb-2 tracking-wide font-semibold">EVENT VENUE 1: Fatmawati Hospital</h5>
                            <p class="pb-5 m-0 text-sm"> Jl. RS. Fatmawati Raya, Cilandak, South Jakarta, Jakarta</p>
                            <h5 class="pb-2 tracking-wide font-semibold">EVENT VENUE 2: Swissôtel Jakarta PIK Avenue
                            </h5>
                            <p class="pb-5 m-0 text-sm">
                                Jl. Pantai Indah Kapuk, Penjaringan, North Jakarta, Jakarta
                            </p>
                            <!-- <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                    <p class="pb-5 m-0">Booking: (+62) 1919-2020</p> -->
                            <a href="https://www.google.com/maps/dir//Swiss%C3%B4tel+Jakarta+PIK+Avenue,+Jl.+Pantai+Indah+Kapuk,+Kamal+Muara,+Kecamatan+Penjaringan,+Jkt+Utara,+Daerah+Khusus+Ibukota+Jakarta+14470/@-6.1083596,106.7379651,17z/data=!4m19!1m10!3m9!1s0x2e6a1d354d479f81:0xe8b1eaaafcc2c0f6!2sSwiss%C3%B4tel+Jakarta+PIK+Avenue!5m2!4m1!1i2!8m2!3d-6.1083649!4d106.74054!16s%2Fg%2F11fmqt0fvq!4m7!1m0!1m5!1m1!1s0x2e6a1d354d479f81:0xe8b1eaaafcc2c0f6!2m2!1d106.74054!2d-6.1083649?entry=ttu&g_ep=EgoyMDI2MDEwNi4wIKXMDSoKLDEwMDc5MjA3M0gBUAM%3D"
                                target="_blank" class="hover:text-[#b9608d]">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1 flex flex-col md:flex-row gap-2">
                    <iframe class="rounded-lg w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1658452513584!2d106.73796507483439!3d-6.108359559907656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d354d479f81%3A0xe8b1eaaafcc2c0f6!2sSwiss%C3%B4tel%20Jakarta%20PIK%20Avenue!5e0!3m2!1sid!2sid!4v1767933580878!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <iframe class="rounded-lg w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.76137530253!2d106.79363917483678!3d-6.285058461611884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1e653901bc1%3A0xc0478e03aaa208d7!2sRumah%20Sakit%20Fatmawati!5e0!3m2!1sid!2sid!4v1767933662676!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-5 justify-items-center">

                <div class="w-full ">
                    <a><img src="assets/images/jakarta/4.jpg" class="w-full h-72 object-cover rounded-xl shadow-md saturate-150"
                            alt="venue jakarta "></a>
                </div>
                <div class="w-full ">
                    <a><img src="assets/images/jakarta/5.jpg" class="w-full h-72 object-cover rounded-xl shadow-md saturate-150"
                            alt="venue jakarta "></a>
                </div>
                <div class="w-full ">
                    <a><img src="assets/images/jakarta/6.jpg" class="w-full h-72 object-cover object-top rounded-xl shadow-md sepia-50"
                            alt="venue jakarta "></a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('livewire:navigated', function() {
        const days = document.getElementById('days');
        const hours = document.getElementById('hours');
        const minutes = document.getElementById('minutes');
        const seconds = document.getElementById('seconds');

        // Check if all elements are found
        const elementsExist = days && hours && minutes && seconds;

        // If any element is missing, log a warning and return
        if (!elementsExist) {
            console.warn('One or more countdown elements not found.');
            return;
        }

        // Get current date and time
        const currentTime = new Date();

        // Set new date 30 days from now
        const targetTime = new Date(2026, 7, 28, 8, 0, 0);

        // Update countdown time
        function updateCountdown() {
            const currentTime = new Date();
            const diff = targetTime - currentTime;

            const d = Math.floor(diff / 1000 / 60 / 60 / 24);
            const h = Math.floor((diff / 1000 / 60 / 60) % 24);
            const m = Math.floor((diff / 1000 / 60) % 60);
            const s = Math.floor((diff / 1000) % 60);

            // Update elements if they exist
            if (days) days.innerHTML = d;
            if (hours) hours.innerHTML = h < 10 ? '0' + h : h;
            if (minutes) minutes.innerHTML = m < 10 ? '0' + m : m;
            if (seconds) seconds.innerHTML = s < 10 ? '0' + s : s;
        }

        // Call updateCountdown initially and set it to run every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    });
</script>