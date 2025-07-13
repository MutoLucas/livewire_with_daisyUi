@extends('layouts.default')

@push('scriptVite')
    @vite(['resources/js/welcome.js'])
@endpush

@section('title','Welcome to Livewire with DaisyUI')

@section('content')
<div class="min-h-screen flex justify-center items-center">
    <div class="card bg-base-100 w-96 shadow-sm border border-primary">
        <figure>
            <img
            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.mLW5W7PvuIktXefN4omUdQHaEK%3Fpid%3DApi&f=1&ipt=b4440bfee48b328cc77236431c8804b4ab27f45266e0b03b4e13e031ee83eeab&ipo=images"
            alt="rocket" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Welcome Livewire with DaisyUI</h2>
            <p>Repo created by MutoLucas</p>
            <p>With this repository, you can now create Livewire components and use DaisyUI on them.</p>
            <p>This is a standard project, so you don't have to waste time setting up Livewire, DaisyUI and TailwindCss.</p>
            <div class="card-actions justify-end">
                <a class="btn btn-soft btn-primary" href="https://github.com/MutoLucas">Check out <x-heroicon-o-link class="w-5 h-5"/> </a>
            </div>
        </div>
    </div>
</div>
@endsection
