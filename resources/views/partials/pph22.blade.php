<div>
    <form class="max-w-lg mx-auto">
        <label for="pph22_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Objek
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
            <label for="pph22_bruto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penghasil
                Bruto</label>
            <input type="number" id="pph22_bruto" value="0"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" />
        </div>

        <div>
            <label for="pph22_rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif</label>
            <input type="text" id="pph22_rate"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>

        <div>
            <label for="pph22_result" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPh
                22</label>
            <input type="text" id="pph22_result" value="0"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" readonly />
        </div>

    </form>
</div>
