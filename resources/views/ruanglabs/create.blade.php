@extends('layouts.backend')
@section('content')
 <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <h4 class="panel-heading mt-3 mb-2 text-center">
                        Tambah Data Ruang Lab
                    </h4>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('ruanglab.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->has('ruang_lab'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('ruang_lab')}}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Nama Lab
                                        <input type="text" class="form-control mt-2 mb-4" name="nama" placeholder="Isi Ruang Lab">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Lokasi Lab
                                        <input type="text" class="form-control mt-2 mb-4" name="lokasi" placeholder="Isi Lokasi Lab">
                                    </div>
                                    <a href="{{route('ruanglab.index')}}"class="btn-secondary btn btn-default">Kembali</a>
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
