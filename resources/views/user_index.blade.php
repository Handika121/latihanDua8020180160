@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>Ini Halaman User</h3>
                    <table class="table table-light table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Tanggal Buat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($objek as $item)
                            <tr>
                                <td>
                                    {{  $loop->iteration }}
                                </td>
                                <td>
                                    {{  $item->judul }}
                                </td>
                                <td>
                                    {{  $item->pengarang }}
                                </td>
                                <td>
                                    {{  $item->created_at }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
