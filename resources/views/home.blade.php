<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="relative  selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full px-6">
                <main class="mt-6">

                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                            data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="pph21-tab"
                                    data-tabs-target="#pph21" type="button" role="tab" aria-controls="pph21"
                                    aria-selected="false">PPh 21</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="pph23-tab" data-tabs-target="#pph23" type="button" role="tab"
                                    aria-controls="pph23" aria-selected="false">PPh 23</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="pph42-tab" data-tabs-target="#pph42" type="button" role="tab"
                                    aria-controls="pph42" aria-selected="false">PPh 4(2)</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="pph22-tab" data-tabs-target="#pph22" type="button" role="tab"
                                    aria-controls="pph22" aria-selected="false">PPh 22</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="pph15-tab" data-tabs-target="#pph15" type="button" role="tab"
                                    aria-controls="pph15" aria-selected="false">PPh 15</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="pphbadan-tab" data-tabs-target="#pphbadan" type="button" role="tab"
                                    aria-controls="pphbadan" aria-selected="false">PPh Badan</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="ppn-tab" data-tabs-target="#ppn" type="button" role="tab"
                                    aria-controls="ppn" aria-selected="false">PPn</button>
                            </li>

                            <li role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="ppnbm-tab" data-tabs-target="#ppnbm" type="button" role="tab"
                                    aria-controls="ppnbm" aria-selected="false">PPnBM</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">

                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph21" role="tabpanel"
                            aria-labelledby="pph21-tab">
                            @include('partials/pph21')
                        </div>

                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph23" role="tabpanel"
                            aria-labelledby="pph23-tab">
                            @include('partials/pph23')
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph42" role="tabpanel"
                            aria-labelledby="pph42-tab">
                            @include('partials/pph4_2')
                        </div>
                        {{--  pph22 --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph22" role="tabpanel"
                            aria-labelledby="pph22-tab">
                            @include('partials/pph22')
                        </div>
                        {{--  pph15 --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph15" role="tabpanel"
                            aria-labelledby="pph15-tab">
                            @include('partials/pph15')
                        </div>
                        {{--  pphbadan --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pphbadan" role="tabpanel"
                            aria-labelledby="pphbadan-tab">
                            @include('partials/pph-badan')
                        </div>
                        {{--  ppn --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ppn" role="tabpanel"
                            aria-labelledby="ppn-tab">
                            @include('partials/ppn')
                        </div>

                        {{--  ppnbm --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ppnbm" role="tabpanel"
                            aria-labelledby="ppnbm-tab">
                            @include('partials/ppnbm')
                        </div>
                        {{-- end --}}

                    </div>

                </main>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
