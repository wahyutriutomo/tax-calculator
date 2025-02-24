<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
                            <form class="max-w-sm mx-auto" action="#" id="form_pph21">
                                <label for="pph21_type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                    Pemotongan</label>
                                <select id="pph21_type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih...</option>
                                    @foreach ($categories[0]?->childs as $row)
                                        <option value="{{ $row->id }}">
                                            {{ $row->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <label for="pph21_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Objek
                                    Pajak</label>
                                <select id="pph21_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih...</option>
                                    <option value="21-100-01">21-100-01 Pegawai Tetap</option>
                                    <option value="21-100-02">21-100-02 Penerima Pensiun Berkala</option>
                                </select>

                                <label for="pph21_skema"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekema
                                    Perhitungan</label>
                                <select id="pph21_skema"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="gross">Gross</option>
                                    <option value="grossup">Gross Up</option>
                                </select>

                                <label for="pph21_ptkp"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PTKP</label>
                                <select id="pph21_ptkp"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih...</option>
                                    @foreach ($ptkpRates as $key => $val)
                                        <option value="{{ $key }}">
                                            {{ $key . ' - ' . $val }}
                                        </option>
                                    @endforeach
                                </select>

                                <div>
                                    <label for="pph23_ak"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasilan
                                        yang telah dipotong PPh Pasal 21 pada masa pajak yang sama</label>
                                    <input type="number" id="pph23_ak" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                <div>
                                    <label for="pph23_bruto"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasil
                                        Bruto</label>
                                    <input type="number" id="pph23_bruto" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                {{-- result --}}
                                <div>
                                    <label for="pph21_dpp"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DPP</label>
                                    <input type="text" id="pph21_dpp" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <label for="pph21_rate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif
                                        (%)</label>
                                    <input type="text" id="pph21_rate" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <label for="pph21_result"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPh
                                        21</label>
                                    <input type="text" id="pph21_result" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hitung</button>
                                </div>
                            </form>
                        </div>

                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph23" role="tabpanel"
                            aria-labelledby="pph23-tab">

                            <form class="max-w-sm mx-auto">
                                <label for="pph23_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Objek
                                    Pajak</label>
                                <select id="pph23_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected data-rate="0">Pilih...</option>
                                    @foreach ($categories[2]?->taxObjects as $row)
                                        <option value="{{ $row->id }}" data-rate="{{ $row->tax_rate + 0 }}">
                                            {{ $row->code }} - {{ $row->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <div>
                                    <label for="pph23_bruto"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasil
                                        Bruto</label>
                                    <input type="number" id="pph23_bruto" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                <div>
                                    <label for="pph23_rate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif</label>
                                    <input type="text" id="pph23_rate"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <label for="pph23_result"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPh
                                        23</label>
                                    <input type="text" id="pph23_result" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                            </form>

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph42" role="tabpanel"
                            aria-labelledby="pph42-tab">
                            <form class="max-w-sm mx-auto">
                                <label for="pph42_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Objek
                                    Pajak</label>
                                <select id="pph42_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected data-rate="0">Pilih...</option>
                                    @foreach ($categories[4]?->taxObjects as $row)
                                        <option value="{{ $row->id }}" data-rate="{{ $row->tax_rate + 0 }}">
                                            {{ $row->code }} - {{ $row->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <div>
                                    <label for="pph42_bruto"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasil
                                        Bruto</label>
                                    <input type="number" id="pph42_bruto" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                <div>
                                    <label for="pph42_rate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif</label>
                                    <input type="text" id="pph42_rate"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <label for="pph42_result"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPh
                                        4(2)</label>
                                    <input type="text" id="pph42_result" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                            </form>
                        </div>
                        {{--  pph22 --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph22" role="tabpanel"
                            aria-labelledby="pph22-tab">
                            <form class="max-w-sm mx-auto">
                                <label for="pph22_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Objek
                                    Pajak</label>
                                <select id="pph22_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected data-rate="0">Pilih...</option>
                                    @foreach ($categories[1]?->taxObjects as $row)
                                        <option value="{{ $row->id }}" data-rate="{{ $row->tax_rate + 0 }}">
                                            {{ $row->code }} - {{ $row->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <div>
                                    <label for="pph22_bruto"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasil
                                        Bruto</label>
                                    <input type="number" id="pph22_bruto" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                <div>
                                    <label for="pph22_rate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif</label>
                                    <input type="text" id="pph22_rate"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <label for="pph22_result"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPh
                                        22</label>
                                    <input type="text" id="pph22_result" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                            </form>
                        </div>
                        {{--  pph15 --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pph15" role="tabpanel"
                            aria-labelledby="pph15-tab">
                            <form class="max-w-sm mx-auto">
                                <label for="pph15_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Objek
                                    Pajak</label>
                                <select id="pph15_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected data-rate="0">Pilih...</option>
                                    @foreach ($categories[3]?->taxObjects as $row)
                                        <option value="{{ $row->id }}" data-rate="{{ $row->tax_rate + 0 }}">
                                            {{ $row->code }} - {{ $row->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <div>
                                    <label for="pph15_bruto"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasil
                                        Bruto</label>
                                    <input type="number" id="pph15_bruto" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                <div>
                                    <label for="pph15_rate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif</label>
                                    <input type="text" id="pph15_rate"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <label for="pph15_result"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPh
                                        22</label>
                                    <input type="text" id="pph15_result" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                            </form>
                        </div>
                        {{--  pphbadan --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pphbadan" role="tabpanel"
                            aria-labelledby="pphbadan-tab">
                            <form class="max-w-sm mx-auto">
                                Belum diimplement
                            </form>
                        </div>
                        {{--  ppn --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ppn" role="tabpanel"
                            aria-labelledby="ppn-tab">
                            <form class="max-w-sm mx-auto">
                                <div>
                                    <label for="ppn_dpp"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DPP</label>
                                    <input type="number" id="ppn_dpp" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                <div>
                                    <label for="ppn_rate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif</label>
                                    <input type="text" id="ppn_rate" value="11 %" data-rate="11"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <label for="ppn_result"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPN</label>
                                    <input type="text" id="ppn_result" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                                <div>
                                    <label for="price_after_ppn"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                                        Setalah PPN</label>
                                    <input type="text" id="price_after_ppn" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                            </form>
                        </div>

                        {{--  ppnbm --}}
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ppnbm" role="tabpanel"
                            aria-labelledby="ppnbm-tab">
                            <form class="max-w-sm mx-auto">
                                <div>
                                    <label for="ppnbm_dpp"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DPP</label>
                                    <input type="number" id="ppnbm_dpp" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                <div>
                                    <label for="ppnbm_rate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif
                                        (%)</label>
                                    <input type="number" id="ppnbm_rate" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" />
                                </div>

                                <div>
                                    <label for="ppnbm_result"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPnBM</label>
                                    <input type="text" id="ppnbm_result" value="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" readonly />
                                </div>

                            </form>
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

                jQuery.ajax({
                    url: "{{ route('calculate.pph21.ter') }}",
                    data: jQuery('#form_pph21').serialize(),
                    type: "get",

                    success: function(result) {
                        if (result.status === 201) {
                            // 
                        } else {
                            // 
                        }
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
