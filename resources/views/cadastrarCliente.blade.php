<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Tela de cadastramento de Clientes") }}
                        <div border= "margin-top = 200px"><br>
                        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nome -->
            <div>
                <x-input-label for="name" :value="__('Nome do Cliente')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div><br>

            <!-- Endereço -->
            <div>
                <x-input-label for="endereco" :value="__('Endereço')" />
                <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autofocus autocomplete="endereco" />
                <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
            </div><br>

            <!-- Bairro -->
            <div>
                <x-input-label for="bairro" :value="__('Bairro')" />
                <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
            </div><br>

            <!-- Cep -->
            <div>
                <x-input-label for="cep" :value="__('Cep')" />
                <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" />
                <x-input-error :messages="$errors->get('cep')" class="mt-2" />
            </div><br>

            <script>

            $(document).ready(function() {

            $('#cep').mask('00000-000');

            });

            </script>

            <!-- Cidade -->
            <div>
                <x-input-label for="cidade" :value="__('Cidade')" />
                <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autofocus autocomplete="cidade" />
                <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
            </div><br>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div><br>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div><br>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div><br>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Cadastrar') }}
                </x-primary-button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

