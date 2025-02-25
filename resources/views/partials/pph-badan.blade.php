<div>
    <form class="max-w-lg mx-auto">
        <label for="pphbadan_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
            Tarif</label>
        <select id="pphbadan_code"
            class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected data-rate="0">Pilih...</option>
            @foreach ($categories[5]?->taxObjects as $row)
                <option value="{{ $row->code }}" data-rate="{{ $row->tax_rate + 0 }}"
                    data-description="{{ $row->description }}">
                    {{ $row->name }}
                </option>
            @endforeach
        </select>

        <div>
            <label for="pphbadan_description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <textarea id="pphbadan_description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 mb-2 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly></textarea>
        </div>

        <div id="peredaran_bruto" class="hidden">
            <label for="pphbadan_bruto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peredaran
                Bruto</label>
            <input type="number" id="pphbadan_bruto" value="0"
                class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" />
        </div>

        <div>
            <label for="pphbadan_dpp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasilan
                Kena Pajak</label>
            <input type="number" id="pphbadan_dpp" value="0"
                class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" />
        </div>

        <div>
            <label for="pphbadan_pkp_fasilitas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PKP
                dengan Fasilitas</label>
            <input type="text" id="pphbadan_pkp_fasilitas"
                class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>

        <div>
            <label for="pphbadan_pkp_non_fasilitas"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PKP
                tanpa Fasilitas</label>
            <input type="text" id="pphbadan_pkp_non_fasilitas"
                class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>

        <div>
            <label for="pphbadan_rate"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif</label>
            <input type="text" id="pphbadan_rate"
                class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>

        <div>
            <label for="pphbadan_result" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPh
                Badan</label>
            <input type="text" id="pphbadan_result" value="0"
                class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>

    </form>
</div>
