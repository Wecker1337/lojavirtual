<x-app-layout>
    <x-slot name="header">
        <h3 class="text-center font-semibold text-gray-800 dark:text-gray-200 ">
            {{ __('Manutenção de fornecedores') }}
        </h3>
    </x-slot>
    <br>
    <div class="max-w-xl mx-auto bg-white dark:bg-gray-800 p-6 rounded-md shadow">

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <x-input-error :messages="$error" class="mt-2" />
                @endforeach
            </ul>
        @endif
        <br>

        <form action="{{ url('suppliers/new') }}" method="POST">
            @csrf
            <div>
                <x-input-label for="name" :value="__('Name_reason')" />
                <x-text-input class="w-full" type="text" name="name_reason" />
            </div>
            
            <div>
                <x-input-label for="name" :value="__('type')" />
                <x-text-input id="type" name="type" pattern="[FJfj]{1}" title="Somente F ou J"
                    class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white" rows="5"></x-text-input>
            </div>

            <div>
                <x-input-label for="name" :value="__('cpf_cnpj')" />
                <x-text-input class="w-full" type="number" name="cpf_cnpj" />
            </div>

            <div>
                <x-input-label for="name" :value="__('phone')" />
                <x-text-input class="w-full" type="phone" name="phone" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ url('/suppliers') }}">
                    <x-secondary-button>Voltar</x-secondary-button>
                </a>

                <x-primary-button class="ms-4" type="submit">
                    {{ __('Salvar') }}
                </x-primary-button>
            </div>


        </form>
    </div>
</x-app-layout>
