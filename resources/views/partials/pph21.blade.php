<div>
    <form class="max-w-lg mx-auto" action="#" id="form_pph21">
        <label for="pph21_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
            Pemotongan</label>
        <select id="pph21_type"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="" selected>Pilih...</option>
            @foreach ($categories[0]?->childs as $row)
                <option value="{{ $row->id }}">
                    {{ $row->name }}
                </option>
            @endforeach
        </select>

        <label for="pph21_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Objek
            Pajak</label>
        <select id="pph21_code"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="" selected>Pilih...</option>
            <option value="21-100-01">21-100-01 Pegawai Tetap</option>
            <option value="21-100-02">21-100-02 Penerima Pensiun Berkala</option>
        </select>

        <label for="pph21_skema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekema
            Perhitungan</label>
        <select id="pph21_skema"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected value="gross">Gross</option>
            <option value="grossup">Gross Up</option>
        </select>

        <label for="pph21_ptkp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PTKP</label>
        <select id="pph21_ptkp"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="" selected>Pilih...</option>
            @foreach ($ptkpRates as $key => $val)
                <option value="{{ $key }}">
                    {{ $key . ' - ' . $val }}
                </option>
            @endforeach
        </select>

        <div>
            <label for="pph21_ak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasilan
                yang telah dipotong PPh Pasal 21 pada masa pajak yang sama</label>
            <input type="number" id="pph21_ak" value="0"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" />
        </div>

        <div>
            <label for="pph21_bruto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasil
                Bruto</label>
            <input type="number" id="pph21_bruto" value="0"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" />
        </div>

        <div class="text-right">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hitung</button>
        </div>

        {{-- result --}}
        <div>
            <label for="pph21_dpp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DPP</label>
            <input type="text" id="pph21_dpp" value="0"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>

        <div>
            <label for="pph21_rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif
                (%)</label>
            <input type="text" id="pph21_rate" value="0"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>

        <div>
            <label for="pph21_result" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPh
                21</label>
            <input type="text" id="pph21_result" value="0"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>
    </form>
</div>
