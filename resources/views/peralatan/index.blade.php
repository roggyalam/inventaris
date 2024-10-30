@extends('layouts.backend')
@section('content')
<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="panel panel-default">
                    <h4 class=" text-center text-secondary panel-heading">
                        Tabel Data Peralatan
                    </h4>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <a href="{{ route('peralatan.create') }}" class="btn btn-primary mb-2">Tambah</a>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table class="table table-bordered" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Peralatan
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($peralatan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->jenis_peralatan}}</td>
                                            <td>{{ $data->nama_peralatan}}</td>
                                            <td>{{ $data->kategori}}</td>
                                            <td>{{ $data->spek}}</td>
                                            <td>{{ $data->kode_spek}}</td>
                                            <form action="{{ route('peralatan.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <td class="center">
                                                    <a href="{{ route('peralatan.edit', $data->id) }}" class="btn btn-success mx-1">Ubah</a>
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus??')">Hapus</button>
                                                </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>
</div>
</div>
@endsection
