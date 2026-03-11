@extends('layout')

@section('content')

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>


@if(count($listings) == 0)
    <p>No listings found</p>
@endif

@foreach($listings as $ls)
    <x-listing-card :ls="$ls" />

@endforeach

<x-card class="mt-4 p-2 flex space-x-6">
    <a href="/listings/{{$listing->id}}/edit">
        <i class="fa-solid fa-edit"></i> Edit
    </a>

    <form action="/listings/{{$listing->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="text-red-500">
            <i class="fa-solid fa-trash"></i> Delete
        </button>
</x-card>

</div>

@endsection