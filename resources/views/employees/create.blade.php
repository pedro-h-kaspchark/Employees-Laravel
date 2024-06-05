<!-- resources/views/professores/create.blade.php -->

@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Adicionar Novo Funcionario</h1>

                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome:</label>
                            <input type="text" name="name" id="name" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email:</label>
                            <input type="email" name="email" id="email" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="phoneNumber" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Telefone:</label>
                            <input type="text" name="phoneNumber" id="phoneNumber" class="form-input mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="office" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cargo:</label>
                            <input type="text" name="office" id="office" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="contractDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Data da contratação:</label>
                            <input type="date" name="contractDate" id="contractDate" class="form-input mt-1 block w-full" required>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
