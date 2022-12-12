<div class="bg-gray-100 p-5 mt-10 flex justify-center flex-col items-center">
    <h3 class="text-center text-xl font-bold my-4">Postularme a esta vacante</h3>

    @if (session()->has('mensaje'))
        <div
            class="text-center uppercase border-green-600 border bg-green-100 text-green-600 font-bold p-2 my-3 text-sm rounded-md">
            {{ session('mensaje') }}
        </div>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5">
            <div class="mb-2">
                <x-input-label for="cv" :value="__('Curriculum o Hoja de Vida')" />
                <x-text-input wire:model="cv" class="block mt-1 w-full rounded-none" id="cv" type="file"
                    accept=".pdf" class="block mt-1 w-full" />
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message" />
            @enderror

            <x-primary-button class="mt-2 w-full justify-center">
                {{ __('Postularme') }}
            </x-primary-button>
        </form>
    @endif
</div>
