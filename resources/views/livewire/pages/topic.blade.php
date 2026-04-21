<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#27AAE1]/80 to-[#39B54A]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class=" uppercase text-2xl font-bold tracking-wide lg:text-4xl">Topics</h2>
        </div>
    </section>

    <section class="mx-auto w-full px-5 lg:px-10 pt-16 pb-28 bg-competition">
        <div>
            @foreach ($uniqueCategories as $category)
            <p class="font-semibold my-3">{{$category}}</p>

            @php
            $categoryTopics = $topics->where('category', $category);
            $mainTopics = $categoryTopics
            ->whereNotNull('name')
            ->unique('name')
            ->values();
            $specialSubs = $categoryTopics
            ->where('name', 'Thursday, October 8, 2026')
            ->pluck('sub_name')
            ->filter() // buang null/empty
            ->unique() // hindari duplikasi
            ->values();
            @endphp

            <ol class="list-decimal list-inside space-y-2">
                @foreach ($mainTopics as $main)
                <li class="text-gray-800">
                    @if ($main->name === 'Thursday, October 8, 2026')
                    Thursday, October 8, 2026
                    @if ($specialSubs->isNotEmpty())
                    <ul class="list-disc list-inside ml-6 mt-1 space-y-1">
                        @foreach ($specialSubs as $sub)
                        <li>{{ $sub }}</li>
                        @endforeach
                    </ul>
                    @endif
                    @else
                    {{ $main->name }}
                    @endif
                </li>
                @endforeach
            </ol>
            @endforeach
        </div>
    </section>
</div>