@extends('layouts.app')

@section('content')

<h1>Nieuw evenement</h1>

{{-- Success message --}}
@if (session('message'))
    <p class="bg-green-200 text-green-800 p-2 p-2 rounded mb-4">
        {{ session('message') }}
    </p>
@endif

{{-- Validation errors --}}
@if ($errors->any())
    <div class="bg-red-100 text-red-600 p-2 mb-4">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="/evenementen">
    @csrf

    {{-- Naam --}}
    <div class="mb-4">
        <label for="naam">Naam*</label>
        <input type="text" name="naam" id="naam" required
               value="{{ old('naam') }}"
               class="border p-2 w-full">
    </div>

    {{-- Datum --}}
    <div class="mb-4">
        <label for="datum">Datum*</label>
        <input type="date" name="datum" id="datum" required
               value="{{ old('datum') }}"
               class="border p-2 w-full">
    </div>

    {{-- Locatie --}}
    <div class="mb-4">
        <label for="locatie">Locatie*</label>
        <input type="text" name="locatie" id="locatie" required
               value="{{ old('locatie') }}"
               class="border p-2 w-full">
    </div>

    {{-- Beschrijving --}}
    <div class="mb-4">
        <label for="beschrijving">Beschrijving</label>
        <textarea name="beschrijving" id="beschrijving"
                  class="border p-2 w-full">{{ old('beschrijving') }}</textarea>
    </div>

    {{-- Event type --}}
    <div class="mb-4">
        <label for="evenement_type_id">Type evenement*</label>
        <select name="evenement_type_id" id="evenement_type_id" required
                class="border p-2 w-full">
            <option value="">Selecteer een type</option>
            @foreach($evenementTypes as $type)
                <option value="{{ $type->id }}"
                    {{ old('evenement_type_id') == $type->id ? 'selected' : '' }}>
                    {{ $type->naam }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Save button --}}
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Opslaan
    </button>

</form>

@endsection