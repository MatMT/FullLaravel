<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante' novalidate>
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" required
            placeholder="Titulo Vacante" />

        {{-- Propiedad dinamica Livewire --}}
        @error('titulo')
            <livewire:mostrar-alerta :message="$message" :centinela='false' />
        @enderror
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select wire:model="salario" id="salario"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">

            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select wire:model="categoria" id="categoria"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')"
            required placeholder="Empresa: ej. Netflix, Uber, Shopify" />
        @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia"
            :value="old('ultimo_dia')" required />
        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Descripción Puesto')" />
        <textarea wire:model="descripcion" placeholder="Descripción general del puesto, experiencia"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"></textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full rounded-none" type="file" wire:model="imagen_nueva"
            accept="image/*" required />

        <div class="my-5 w-80">
            <x-input-label :value="__('Imagen Actual')" />

            <div class="w-96">
                <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen Vacante ' . $titulo }}">
            </div>
        </div>

        {{-- Two Way Data Binding --}}
        @if ($imagen_nueva)
            <div class="my-5 w-80">
                <p class="block text-sm text-gray-500 font-bold uppercase '">Nueva Imagen</p>
                <div class="w-96 mt-3">
                    <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Imagen Preview">
                </div>
            </div>
        @endif

        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-primary-button>
        Guardar Cambios
    </x-primary-button>
</form>
