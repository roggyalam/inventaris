@extends('layouts.backend')
@section('content')
 <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <h4 class="panel-heading mt-3 mb-2 text-center">
                        Tambah Data dtperalatan
                    </h4>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('dtperalatan.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->has('dt_peralatan'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('dt_peralatan')}}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label clajss="mx-2 text-dark">Barcode</label>
                                        <input type="text" class="form-control mt-2 mb-4" name="barcode" placeholder="barcode">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">QR CODE</label>
                                        <select name="qr_code" id="" class="form-control">
                                            @foreach ($peralatan as $item)
                                                <option value="{{$item->id}}">{{ $item->peralatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Ruangan</label>
                                        <select name="kode_ruang" id="" class="form-control">
                                            @foreach ($ruang_lab as $item)
                                                <option value="{{$item->id}}">{{ $item->kode_ruang}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Kondisi</label>
                                        <select name="kode_status_kondisi" id="" class="form-control">
                                            @foreach ($status_kondisi as $item)
                                                <option value="{{$item->id}}">{{ $item->kode_status_kondisi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <a href="{{route('dtperalatan.index')}}"class="btn-secondary btn btn-default">Kembali</a>
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
