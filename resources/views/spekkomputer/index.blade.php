@extends('layouts.backend')
@section('content')
<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="panel panel-default">
                    <h4 class=" text-center text-secondary panel-heading">
                        Tabel Data Spek Komputer
                    </h4>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <a href="{{ route('spekkomputer.create') }}" class="btn btn-primary mb-2">Tambah</a>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table class="table table-bordered" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Spek Komputer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($spek_komputer as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->processor}}</td>
                                            <td>{{ $data->ram}}</td>
                                            <td>{{ $data->hardisk}}</td>
                                            <td>{{ $data->vga}}</td>
                                            <td>{{ $data->sound}}</td>
                                            <td>{{ $data->network1}}</td>
                                            <td>{{ $data->network2}}</td>
                                            <form action="{{ route('spekkomputer.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <td class="center">
                                                    <a href="{{ route('spekkomputer.edit', $data->id) }}" class="btn btn-success mx-1">Ubah</a>
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
