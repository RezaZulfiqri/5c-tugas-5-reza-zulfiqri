@extends('master')
@section('title','Tambah Data')

@section('content')
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Data</h2>
                <p>Masukan Data dengan Lengkap!</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <form action="{{route('voli.store')}}" method="POST">
                    @csrf
                    <div class="form-row py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="kode_negara" class="form-label">Kode Negara</label>
                                    <input type="text" name="kode_negara" id="kode_negara" placeholder="Masukkan Kode Negara" class="form-control" value="{{old('kode_negara')}}">
                                    @error('kode_negara')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                    <div class="col">
                                    <label for="nama_voli" class="form-label">Nama Voli</label>
                                    <input type="text" name="nama_voli" id="nama_voli" placeholder="Masukkan Nama Voli" class="form-control" value="{{old('nama_voli')}}">
                                    @error('nama_voli')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3">
                                    <label for="nama_negara" class="form-label">Nama Negara</label>
                                    <input type="text" name="nama_negara" id="nama_negara" placeholder="Masukkan Nama Negara" class="form-control" value="{{old('nama_negara')}}">
                                    @error('nama_negara')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col my-3">
                                    <label for="negara" class="form-label">Benua</label>
                                    <input type="text" name="negara" id="negara" placeholder="Masukkan Benua" class="form-control" value="{{old('negara')}}">
                                    @error('negara')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse py-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center text-dark mt-5">
        <p>Created by <a href= class="fw-bold text-dark">Reza Zulfiri & Natanael Berkat Sianturi</a></p>
    </footer>
@endsection