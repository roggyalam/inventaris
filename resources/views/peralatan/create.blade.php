@extends('layouts.backend')
@section('content')
 <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <h4 class="panel-heading mt-3 mb-2 text-center">
                        Tambah Data Peralatan
                    </h4>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('peralatan.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->has('peralatan'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('peralatan')}}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Jenis Peralatan
                                        <input type="text" class="form-control mt-2 mb-4" name="jenis_peralatan" placeholder="Jenis Peralatan">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Nama Peralatan
                                        <input type="text" class="form-control mt-2 mb-4" name="nama_peralatan" placeholder="Nama Paralatan">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Kategori
                                        <input type="text" class="form-control mt-2 mb-4" name="kategori" placeholder="kategori">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Spek
                                        <input type="text" class="form-control mt-2 mb-4" name="spek" placeholder="spek">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Spek Komputer</label>
                                        <select name="kode_spek" id="" class="form-control">
                                            @foreach ($spek_komputer as $item)
                                                <option value="{{$item->id}}">{{ $item->kode_spek}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <a href="{{route('peralatan.index')}}"class="btn-secondary btn btn-default">Kembali</a>
                                    <button type="submit" class="btn btn-primary btn-default">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
