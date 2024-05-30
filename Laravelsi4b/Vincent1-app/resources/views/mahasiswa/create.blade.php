@extends('layout.main')

@section('title', 'Tambah Mahasiswa')
    
@section('content')
<div class="row">
    {{-- formulir tambah fakultas --}}
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Mahasiswa</h4>
                  <p class="card-description">
                    Formulir Tambah Mahasiswa
                  </p>
                  <form method="POST" action="{{ route('fakultas.store') }}" 
                  class="forms-sample">
                  @csrf
                    <div class="form-group">
                      <label for="npm">Npm</label>
                      <input type="text" class="form-control" name="npm" value="{{ old('npm') }}" placeholder="Npm">
                      @error('Npm')
                        <span class="text-danger">{{ $message }} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"placeholder="nama">
                      @error('nama')
                        <span class="text-danger">{{ $message }} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}"placeholder="Tempat Lahir">
                      @error('tempat_lahir')
                        <span class="text-danger">{{ $message }} </span>
                      @enderror
                    </div>
                     <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"placeholder="Tanggal Lahir">
                      @error('tanggal_lahir')
                        <span class="text-danger">{{ $message }} </span>
                      @enderror
                    </div>
                     <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="{{ old('tempat_lahir') }}"placeholder="Tempat Lahir">
                      @error('tempat_lahir')
                        <span class="text-danger">{{ $message }} </span>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('fakultas') }}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection