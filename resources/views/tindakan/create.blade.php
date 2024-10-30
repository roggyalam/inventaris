@extends('layouts.backend')
@section('content')
 <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <h4 class="panel-heading mt-3 mb-2 text-center">
                        Tambah Data Tindakan
                    </h4>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('tindakan.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->has('tindakan'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('tindakan')}}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Deskripsi
                                        <input type="text" class="form-control mt-2 mb-4" name="deskripsi" placeholder="Isi Deskripsi">
                                    </div>
                                    <a href="{{route('tindakan.index')}}"class="btn-secondary btn btn-default">Kembali</a>
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
