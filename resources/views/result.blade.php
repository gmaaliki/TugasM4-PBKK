@extends('index')
@section('content')
<h1>Hasil</h1> 
@foreach ($results as $key => $result)
@if ($key === 'foto')
<div class="">
    <img src="{{ asset('storage/images/'.$result) }}" alt="ini gambar" class="mx-auto" style="max-width: 500px; height: auto;">
</div>
@else
<div class="mt-3">
    <p class="text-muted">
        {{ $key }} : {{ $result }}
    </p>
</div>
@endif
@endforeach
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@endsection