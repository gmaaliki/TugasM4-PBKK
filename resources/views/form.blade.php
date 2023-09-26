@extends('index')
@section('content')
    
<h1 class="">Pendaftaran</h1>
<form method="POST" action="/" enctype="multipart/form-data">
    @csrf
    <div class="form-item my-2">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control">
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-item my-2">
        <label for="nrp" class="form-label">NRP</label>
        <input type="text" id="nrp" name="nrp" class="form-control">
        @error('nrp')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-item my-2">
        <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
        <input type="text" id="tempat-lahir" name="tempat-lahir" class="form-control">
        @error('tempat-lahir')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-item my-2">
        <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" id="tanggal-lahir" name="tanggal-lahir" class="form-control">
        @error('tanggal-lahir')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-item my-2">
        <label for="foto" class="form-label">Masukkan foto</label>
        <input type="file" id="foto" name="foto" class="form-control">
        @error('foto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-item my-2">
        <label for="bilangan-desimal" class="form-label">Masukkan bilangan antara 2.50 s.d. 99.99</label>
        <input type="text" id="bilangan-desimal" name="bilangan-desimal" class="form-control">    
        @error('bilangan-desimal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror                
    </div>
    <input type="submit" class="btn btn-primary my-3">
</form>

@endsection