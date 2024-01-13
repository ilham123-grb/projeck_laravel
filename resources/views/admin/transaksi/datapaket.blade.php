@extends('layouts.backend.app',[
    'title' => 'Transaksi',
    'contentTitle' => 'Transaksi',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')

    <div class="container">
        <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Email</th>
                <th scope="col">paket</th>
                <th scope="col">Rupiah</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Metode Pembayaran</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($data as  $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>

                    <td>{{ $row ->name }}</td>
                    <td>{{ $row ->jenis }}</td>
                    <td>{{ $row ->email }}</td>
                    <td>{{ $row ->paket }}</td>
                    <td>{{ $row ->harga }}</td>
                    <td>{{ $row ->notlp }}</td>
                    <td>{{ $row ->metode }}</td>
                    <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-info">Edit</button>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
    </div>


    @stop
    @push('js')
    <!-- DataTables -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    @endpush
