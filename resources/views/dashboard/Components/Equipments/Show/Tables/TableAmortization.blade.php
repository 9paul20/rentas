<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center text-center py-2">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Amortización</h1>
            <p class="mt-2 text-sm text-gray-700">Tabla de amortización del equipo.
            </p>
        </div>
    </div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8"
                style="max-height: 610px; overflow-y: auto;">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr class="divide-x divide-gray-200">
                                <th scope="col"
                                    class="px-3 py-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                    Mes
                                </th>
                                <th scope="col" class="px-3 py-3 text-center text-sm font-semibold text-gray-900">
                                    Precio Equipo</th>
                                <th scope="col" class="px-3 py-3 text-center text-sm font-semibold text-gray-900">
                                    Depreciación<br>Acumulada
                                    <p class="text-xs text-gray-500 font-normal">(Depreciación Actual)<br><span
                                            class="font-medium text-green-600">$</span>{{ number_format($Data['equipment']->depreciacionPorMeses, 2) }}
                                    </p>
                                </th>
                                <th scope="col"
                                    class="px-3 py-3 text-center text-sm font-semibold text-gray-900 sm:pr-6">
                                    Precio Total Del Equipo
                                    <p class="text-xs text-gray-500 font-normal">(Precio Actual)</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white text-center">
                            @for ($i = 1; $i <= $Data['equipment']->tiempoAmortizacionMeses; $i++)
                                <tr class="divide-x divide-gray-200 hover:bg-gray-100">
                                    @if ($i % 12 == 0)
                                        <td class="whitespace-nowrap px-3 py-3 text-sm font-bold text-gray-900 sm:pl-6">
                                            {{-- Primer TD --}}
                                            {{ $i }}</td>
                                    @elseif(round($Data['equipment']->depreciacionAcumuladaPorMeses, 2) ==
                                            round($Data['equipment']->depreciacionPorMeses * $i, 2))
                                        <td
                                            class="whitespace-nowrap px-3 py-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{-- Primer TD --}}
                                            {{ $i }}
                                            <p class="text-xs text-gray-500">(Mes Actual)</p>
                                        </td>
                                    @else
                                        <td
                                            class="whitespace-nowrap px-3 py-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{-- Primer TD --}}
                                            {{ $i }}</td>
                                    @endif
                                    <td class="whitespace-nowrap px-3 py-3 text-sm text-gray-500">{{-- Segundo TD --}}
                                        <span class="font-medium text-green-600">$</span>
                                        {{ number_format($Data['equipment']['precioEquipo'], 2) }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-3 text-sm text-yellow-500 font-semibold">
                                        {{-- Tercer TD --}}
                                        <span class="font-medium text-green-600">$</span>
                                        {{ number_format($Data['equipment']->depreciacionPorMeses * $i, 2) }}
                                    </td>
                                    @if (round($Data['equipment']->depreciacionPorMeses * $i, 2) > round($Data['equipment']['precioEquipo'], 2))
                                        <td
                                            class="whitespace-nowrap px-3 py-3 text-sm text-red-500 font-semibold pl-4 pr-4 sm:pr-6">
                                            {{-- Cuarto TD --}}
                                            <span class="font-medium text-green-600">$</span>
                                            0.00
                                        @elseif(round($Data['equipment']->depreciacionAcumuladaPorMeses, 2) >
                                                round($Data['equipment']->depreciacionPorMeses * $i, 2))
                                        <td
                                            class="whitespace-nowrap px-3 py-3 text-sm text-gray-300 font-semibold pl-4 pr-4 sm:pr-6">
                                            {{-- Cuarto TD --}}
                                            <span class="font-medium text-green-600">$</span>
                                            {{ number_format($Data['equipment']['precioEquipo'] - $Data['equipment']->depreciacionPorMeses * $i, 2) }}
                                        @elseif(round($Data['equipment']->depreciacionAcumuladaPorMeses, 2) ==
                                                round($Data['equipment']->depreciacionPorMeses * $i, 2))
                                        <td
                                            class="whitespace-nowrap px-3 py-3 text-sm text-yellow-500 font-semibold pl-4 pr-4 sm:pr-6">
                                            {{-- Cuarto TD --}}
                                            <span class="font-medium text-green-600">$</span>
                                            {{ number_format($Data['equipment']['precioEquipo'] - $Data['equipment']->depreciacionPorMeses * $i, 2) }}
                                            <p class="text-xs text-gray-500 font-medium">(Precio Actual)</p>
                                        @else
                                        <td
                                            class="whitespace-nowrap px-3 py-3 text-sm text-gray-500 font-semibold pl-4 pr-4 sm:pr-6">
                                            {{-- Cuarto TD --}}
                                            <span class="font-medium text-green-600">$</span>
                                            {{ number_format($Data['equipment']['precioEquipo'] - $Data['equipment']->depreciacionPorMeses * $i, 2) }}
                                    @endif
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>