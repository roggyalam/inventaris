@extends('layouts.backend')
@section('content')
 <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <h4 class="panel-heading mt-3 mb-2 text-center">
                        Tambah Data Spek Komputer
                    </h4>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('spekkomputer.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->has('spek_komputer'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('spek_komputer')}}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Processor
                                        <input type="text" class="form-control mt-2 mb-4" name="processor" placeholder="processor">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Ram
                                        <input type="text" class="form-control mt-2 mb-4" name="ram" placeholder="ram">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Hardisk
                                        <input type="text" class="form-control mt-2 mb-4" name="hardisk" placeholder="hardisk">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">VGA
                                        <input type="text" class="form-control mt-2 mb-4" name="vga" placeholder="vga">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Sound
                                        <input type="text" class="form-control mt-2 mb-4" name="sound" placeholder="sound">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Network1
                                        <input type="text" class="form-control mt-2 mb-4" name="network1" placeholder="network1">
                                    </div>
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Network2
                                        <input type="text" class="form-control mt-2 mb-4" name="network2" placeholder="network2">
                                    </div>
                                    <a href="{{route('spekkomputer.index')}}"class="btn-secondary btn btn-default">Kembali</a>
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
