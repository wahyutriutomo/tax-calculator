<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- pph21 --}}
    <script>
        $(document).ready(function() {
            $("#form_pph21").on("submit", function(e) {
                e.preventDefault();

                var type = $('#pph21_type').val();
                var objectCode = $('#pph21_code').val();
                var schema = $('#pph21_skema').val();
                var ptkp = $('#pph21_ptkp').val();
                var pph21_ak = $('#pph21_ak').val();
                var pph21_bruto = $('#pph21_bruto').val();

                jQuery.ajax({
                    url: "{{ route('calculate.pph21.ter') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "code": objectCode,
                        "schema": schema,
                        "ptkp": ptkp,
                        "ak_bruto": pph21_ak || 0,
                        "ph_bruto": pph21_bruto || 0
                    },
                    type: "post",

                    success: function(result) {
                        // console.log(result);
                        $('#pph21_dpp').val(result.dpp);
                        $('#pph21_rate').val(result.rate);
                        $('#pph21_result').val(result.pph);
                    },
                });

            });

        });
    </script>
    {{-- end pph21 --}}

    {{-- pph23 --}}
    <script>
        $(document).ready(function() {
            $('#pph23_code').change(function() {
                var rate = $(this).find(':selected').data('rate');
                $('#pph23_rate').val(rate + ' %');
                calPPh23();
            });

            $('#pph23_bruto').keyup(function() {
                calPPh23();
            });
        });

        function calPPh23() {
            var bruto = $('#pph23_bruto').val();
            var rate = $('#pph23_code').find(':selected').data('rate');
            var result = parseFloat(bruto) * (parseFloat(rate) / 100);
            $('#pph23_result').val(result);
        }
    </script>
    {{-- end pph23 --}}


    {{-- pph42 --}}
    <script>
        $(document).ready(function() {
            $('#pph42_code').change(function() {
                var rate = $(this).find(':selected').data('rate');
                $('#pph42_rate').val(rate + ' %');
                calPPh42();
            });

            $('#pph42_bruto').keyup(function() {
                calPPh42();
            });
        });

        function calPPh42() {
            var bruto = $('#pph42_bruto').val();
            var rate = $('#pph42_code').find(':selected').data('rate');
            var result = parseFloat(bruto) * (parseFloat(rate) / 100);
            $('#pph42_result').val(result || 0);
        }
    </script>
    {{-- end pph42 --}}

    {{-- pph22 --}}
    <script>
        $(document).ready(function() {
            $('#pph22_code').change(function() {
                var rate = $(this).find(':selected').data('rate');
                $('#pph22_rate').val(rate + ' %');
                calPPh22();
            });

            $('#pph22_bruto').keyup(function() {
                calPPh22();
            });
        });

        function calPPh22() {
            var bruto = $('#pph22_bruto').val();
            var rate = $('#pph22_code').find(':selected').data('rate');
            var result = parseFloat(bruto) * (parseFloat(rate) / 100);
            $('#pph22_result').val(result || 0);
        }
    </script>
    {{-- end pph22 --}}

    {{-- pph15 --}}
    <script>
        $(document).ready(function() {
            $('#pph15_code').change(function() {
                var rate = $(this).find(':selected').data('rate');
                $('#pph15_rate').val(rate + ' %');
                calPPh15();
            });

            $('#pph15_bruto').keyup(function() {
                calPPh15();
            });
        });

        function calPPh15() {
            var bruto = $('#pph15_bruto').val();
            var rate = $('#pph15_code').find(':selected').data('rate');
            var result = parseFloat(bruto) * (parseFloat(rate) / 100);
            $('#pph15_result').val(result || 0);
        }
    </script>
    {{-- end pph15 --}}

    {{-- ppn --}}
    <script>
        $(document).ready(function() {
            $('#ppn_dpp').keyup(function() {
                var dpp = $(this).val();
                var rate = $('#ppn_rate').data('rate');
                var result = parseFloat(dpp) * (parseFloat(rate) / 100);
                $('#ppn_result').val(result || 0);

                var price_after_ppn = parseFloat(dpp) + parseFloat(result);
                $('#price_after_ppn').val(price_after_ppn || 0);
            });
        });
    </script>
    {{-- end ppn --}}

    {{-- ppnbm --}}
    <script>
        $(document).ready(function() {
            $('#ppnbm_dpp, #ppnbm_rate').keyup(function() {
                var dpp = $('#ppnbm_dpp').val();
                var rate = $('#ppnbm_rate').val();
                var result = parseFloat(dpp) * (parseFloat(rate) / 100);
                $('#ppnbm_result').val(result || 0);
            });
        });
    </script>
    {{-- end ppnbm --}}
</body>

</html>
