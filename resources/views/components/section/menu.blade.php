<ul class="flex gap-6 uppercase">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-[#39B54A]' : 'text-[#262262]' }} hover:text-[#39B54A] hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') || request()->is('welcome-message') ? 'text-[#39B54A]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#39B54A]">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/welcome-message" wire:navigate
                    class="{{ request()->is('welcome-message') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A] ">Welcome Message <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A] ">Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/faculties" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A] ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('topics') || request()->is('scientific-schedule') ? 'text-[#39B54A]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#39B54A]">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            
            <li>
                <a href="/program-at-glance" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A]">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/scientific-schedule" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A]">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
            {{-- <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('topics') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A]">
                    Program Book <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
    </div>


    <li>
        <a href="/registration" wire:navigate
            class="{{ request()->is('registration') ? 'text-[#39B54A]' : 'text-[#262262]' }} hover:text-[#39B54A] hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="/accommodation" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-[#39B54A]' : 'text-[#262262]' }} hover:text-[#39B54A] hover:underline">Accommodation
        </a>
    </li>
    
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('submission')  || request()->is('presentation-schedule')  ? 'text-[#39B54A]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#39B54A]">
            Free Paper <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            {{-- <li>
                <a href="/presentation-schedule" wire:navigate
                    class="{{ request()->is('presentation-schedule') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A]">
                    Free Paper Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#"
                    class="justify-between hover:text-[#39B54A]">Free Paper Presentation Submission <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
            <li>
                <a href="/submission" wire:navigate
                    class="{{ request()->is('submission') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A]">Abstract Submission<i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('visiting')  || request()->is('social-program')  ? 'text-[#39B54A]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#39B54A]">
            Visiting <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/visiting" wire:navigate
                    class="{{ request()->is('visiting') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A]">
                    Jakarta <i class="fa-solid fa-angle-right"></i></a>
            </li>
            {{-- <li>
                <a href="/visiting"
                    class="{{ request()->is('visiting#venue') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A]">Conference Venue <i class="fa-solid fa-angle-right"></i></a>
            </li> 
            <li>
                <a href="/social-program" wire:navigate
                    class="{{ request()->is('social-program') ? 'text-[#39B54A]' : '' }} justify-between hover:text-[#39B54A]">Social Program <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
    </div>

</ul>