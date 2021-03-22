<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Biodata') }}
        </h2>
    </x-slot>
<div class="container ">
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1><?= $title ?></h1>
                <h2>NIM : {{$data['mahasiswa']['nim']}}</h2>
                <h2>NAMA : {{$data['mahasiswa']['nama']}}</h2>
                <h2>Kelas : {{$data['mahasiswa']['kelas']}}</h2>
            </div>
        </div>
    </div>
</div>
</x-template-layout>
