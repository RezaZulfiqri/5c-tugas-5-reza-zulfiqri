@extends('master')
@section('title', 'Dashboard Voli')

@section('content')
    <style>
        .bdr {
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2>DATA CLUB VOLLY FAVORIT</h2>
                    <form class="form-inline">
                        <a href="{{ route('voli.create') }}" class="btn btn-primary">Tambah</a>
                    </form>
                </div>
                <div class="py-4">
                    @if (session()->has('message'))
                        <div class="my-3">
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="table-responsive bdr ">
                    <table class="table table-striped">
                        <thead class="bg-success text-white">
                            <tr align="center">
                                <th>No</th>
                                <th>Kode Negara</th>
                                <th>Nama Voli</th>
                                <th>Nama Negara</th>
                                <th>Benua</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($volis as $voli)
                                <tr align="center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $voli->negara->kode_negara ?? 0 }}</td>
                                    <td>{{ $voli->nama_voli }}</td>
                                    <td>{{ $voli->negara->nama_negara ?? 0 }}</td>
                                    <td>{{ $voli->negara ?? 0 }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="{{ route('voli.edit', ['voli' => $voli->id]) }}"
                                                class="btn btn-warning btn-block">Edit</a>
                                            <form action="{{ route('voli.destroy', ['voli' => $voli->id]) }}"
                                                method="POST" class="ms-1">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="11">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-dark mt-5">
        <p>Created by <a href= class="fw-bold text-dark">Reza Zulfiri & Natanael Berkat Sianturi</a></p>
    </footer>
@endsection