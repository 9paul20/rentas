<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">List Of Fixed Expenses</h3>
                <p class="mt-1 text-sm text-gray-600">Use a checkbox for formulate the permission.</p>
                @include('Dashboard.Components.Divisor')
                <h3 class="text-lg font-medium leading-6 text-gray-900">Total de Gastos Fijos: <span
                        class="font-medium text-green-600">$</span> {{ $sumFixesExpenses }}</h3>
            </div>
        </div>
        <div class="mt-5 md:col-span-2 md:mt-0">
            <div class="overflow-y-auto shadow sm:rounded-md">
                <form method="POST"
                    action="{{ route('Dashboard.Admin.Equipments.UpdateFixedExpensesCatalogs', $equipment->clvEquipo) }}"
                    id="Wrapper" style="height: 32em;">
                    @csrf
                    @method('PUT')
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <fieldset class="space-y-5">
                            @include('Dashboard.Components.Equipments.Edit.FixedExpensesCatalogsCheckboxes')
                        </fieldset>
                    </div>
                    <x-Dashboard.Save-Button name="Guardar Gastos Fijos" />
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // var el = document.getElementById("Element");
        var wrapper = document.getElementById("Wrapper");
        wrapper.addEventListener("wheel", wheelEvent);

        function wheelEvent(e) {
            var space = (wrapper.scrollHeight - wrapper.offsetHeight) - wrapper.scrollTop;
            if (e.deltaY < 0) {
                if (wrapper.scrollTop == 0) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            } else if (space <= 0) {
                e.preventDefault();
                e.stopPropagation();
            }
        }
    </script>
@endpush