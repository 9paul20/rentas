<div class="col-span-6 sm:col-span-6">
    <label for="clvTipoGastoFijo" class="block text-sm font-medium text-gray-700">Tipo Gasto Fijo</label>
    <select id="clvTipoGastoFijo" name="clvTipoGastoFijo"
        class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('clvTipoGastoFijo') border-red-400 @enderror"
        required>
        @if (count($Data['allTypeFixedExpense']) > 0)
        <option value="" disabled selected>
            Seleccione Un Tipo De Gasto Fijo</option>
        @foreach ($Data['allTypeFixedExpense'] as $rowTypeFixedExpense)
        <option value="{{ $rowTypeFixedExpense['clvTipoGastoFijo'] }}"
            @if($rowTypeFixedExpense['clvTipoGastoFijo']==$clvTipoGastoFijo) selected @endif>
            {{ $rowTypeFixedExpense['tipoGastoFijo'] }}
        </option>
        @endforeach
        @else
        <option value="" disabled selected>
            No Hay Opciones De Tipo de Gasto Fijo Disponible</option>
        @endif
    </select>
    @error('clvTipoGastoFijo')
    <div class="flex items-center mt-1 text-red-400">
        <i class="fas fa-exclamation-triangle mr-2"></i>
        <span>{{ $message }}</span>
    </div>
    @enderror
</div>