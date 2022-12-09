@extends('admin.layout.template')
   
@section('konten')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit student</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('pengguna.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pengguna.update',$data->nis) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS:</strong>
                    <input type="text" name="nis" value="{{ $data->nis }}" class="form-control" placeholder="NIS" disabled>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>EMAIL:</strong>
                    <input type="email" name="email" value="{{ $data->email }}" class="form-control" placeholder="EMAIL" disabled>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>JENIS KELAMIN:</strong>
                    <input type="text" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" class="form-control" placeholder="JENIS KELAMIN" disabled>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NAMA:</strong>
                    <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" placeholder="NAMA">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>PASSWORD:</strong>
                    <input type="password" name="password" value="" class="form-control" placeholder="ISI PASSWORD JIKA INGIN DIUBAH">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>KELAS:</strong>
                    <input class="form-control" name="kelas" placeholder="KELAS" value="{{ $data->kelas }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success float-right">SIMPAN</button>
            </div>
        </div>
   
    </form>
@endsection