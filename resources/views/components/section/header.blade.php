<!-- Header -->
<header class="bg-gradient-to-l from-[#262262] via-[#27AAE1] to-[#39B54A] hidden lg:block text-white text-sm py-2">
    <div class="mx-auto flex justify-between items-center px-4">

        <div>
            {{-- <a class="btn hover:bg-[#262262] border-none bg-[#27AAE1] text-white btn-sm rounded-full shadow-none w-8" href="mailto:hiferi2026@pharma-pro.com">
                <i class="fa fa-envelope">
                </i>
            </a> --}}
            <a class="btn hover:bg-[#262262] border-none bg-[#27AAE1] text-white btn-sm rounded-full shadow-none w-8" href="tel:+62816995230">
                <i class="fa fa-phone">
                </i>
            </a>
            <a class="btn hover:bg-[#262262] border-none bg-[#27AAE1] text-white btn-sm rounded-full shadow-none w-8" href="https://wa.me/+62816995230" target="_blank`">
                <i class="fa fa-whatsapp">
                </i>
            </a>
            <a class="btn hover:bg-[#262262] border-none bg-[#27AAE1] text-white btn-sm rounded-full shadow-none w-8" href="#">
                <i class="fa fa-instagram">
                </i>
            </a>
        </div>
        <div class="flex">
            <div class="border-r pr-3">
                <span class="ml-4 hover:underline hover:text-[#39B54A] text-sm">
                    <i class="fa fa-envelope mr-1"></i>
                    <a href="mailto:hiferi2026@pharma-pro.com">
                        hiferi2026@pharma-pro.com
                    </a>
                </span>
            </div>
        </div>
    </div>
</header>
<!-- Navigation -->
<nav id="navbar"
    class="w-full py-2 bg-transparent z-20 shadow-lg sticky lg:shadow-none lg:fixed transition-colors duration-300">
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <div class="navbar">
                <div class="navbar-start">
                    <img src="assets/images/logo/logo-event.png" class="h-full max-h-12" alt="Logo" />
                </div>
                <div class="navbar-center hidden lg:flex py-2">
                    <x-section.menu />
                </div>
                <div class="navbar-end">
                    <div onclick="contact.showModal()"
                        class="bg-[#39B54A] hover:bg-[#2B3990] border-none text-white btn rounded-lg shadow-none mx-2 flex gap-2">
                        <i class="fa fa-image-portrait"></i>
                        Contact
                    </div>
                    <div class="flex-none lg:hidden">
                        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                            <i class="fa fa-bars text-2xl"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="bg-base-200 min-h-full w-80 p-4">
                <!-- Sidebar content here -->
                <img src="assets/images/logo/logo-event.png" class="w-full mb-5 max-w-sm" />
                <x-section.menu-mobile />
            </ul>
        </div>
    </div>
    <dialog id="contact" class="modal px-1">
        <div class="modal-box w-full max-w-5xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <div class="flex justify-center">
                <x-section.contact-icon />
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</nav>