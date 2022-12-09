@extends('admin.layout.template')
  
@section('konten')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Add New Student</h2>
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
   
<form action="{{ route('pengguna.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS:</strong>
                <input type="text" name="nis" class="form-control" placeholder="NIS">
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>EMAIL:</strong>
                <input type="email" name="email" class="form-control" placeholder="EMAIL">
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAMA:</strong>
                <input type="text" name="nama" class="form-control" placeholder="NAMA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PASSWORD:</strong>
                <input type="password" name="password" class="form-control" placeholder="PASSWORD">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KELAS:</strong>
                <select class="form-control"  name='kelas' value="{{ Session::get('kelas') }}" id="kelas" placeholder="KELAS">
                <option selected disabled value="">-- pilih --</option>                
                <option value="10 RPL 1">10 RPL 1</option>
                <option value="10 RPL 2">10 RPL 2</option>
                <option value="11 RPL 1">11 RPL 1</option>
                <option value="11 RPL 2">11 RPL 2</option>
                <option value="12 RPL 1">12 RPL 2</option>
                <option value="12 RPL 2">12 RPL 2</option>
                <option value="12 RPL 3">12 RPL 3</option>
                <option value="10 DKV 1">10 DKV 1</option>
                <option value="10 DKV 2">10 DKV 2</option>
                <option value="10 DKV 3">10 DKV 3</option>
                <option value="11 MM 1">11 MM 1</option>
                <option value="11 MM 2">11 MM 2</option>
                <option value="11 MM 3">11 MM 3</option>
                <option value="12 MM 1">12 MM 1</option>
                <option value="12 MM 2">12 MM 2</option>
                <option value="12 MM 3">12 MM 3</option>
                <option value="10 MP 1">10 MP 1</option>
                <option value="10 MP 2">10 MP 2</option>
                <option value="10 MP 3">10 MP 3</option>
                <option value="11 OTKP 1">11 OTKP 1</option>
                <option value="11 OTKP 2">11 OTKP 2</option>
                <option value="11 OTKP 3">11 OTKP 3</option>
                <option value="12 OTKP 1">12 OTKP 1</option>
                <option value="12 OTKP 2">12 OTKP 2</option>
                <option value="12 OTKP 3">12 OTKP 3</option>
                <option value="1O AK 1">10 AK 1</option>
                <option value="10 AK 2">10 AK 2</option>
                <option value="11 AKL 1">11 AKL 1</option>
                <option value="11 AKL 2">11 AKL 2</option>
                <option value="12 AKL 1">12 AKL 1</option>
                <option value="12 AKL 2">12 AKL 2</option>
                <option value="10 APHP 1">10 APHP 1</option>
                <option value="10 APHP 2">10 APHP 2</option>
                <option value="10 APHP 3">10 APHP 3</option>
                <option value="11 APHP 1">11 APHP 1</option>
                <option value="11 APHP 2">11 APHP 2</option>
                <option value="11 APHP 3">11 APHP 3</option>
                <option value="12 APHP 1">12 APHP 1</option>
                <option value="12 APHP 2">12 APHP 2</option>
                <option value="12 APHP 3">12 APHP 3</option>
                <option value="10 PH 1">10 PH 1</option>
                <option value="10 PH 2">10 PH 2</option>
                <option value="11 PH 1">11 PH 1</option>
                <option value="11 PH 2">11 PH 2</option>
                <option value="12 PH 1">12 PH 1</option>
                <option value="12 PH 2">12 PH 2</option>
                <option value="10 TKRO 2">10 TKRO 1</option>
                <option value="10 TKRO 2">10 TKRO 2</option>
                <option value="11 TKRO 1">11 TKRO 1</option>
                <option value="11 TKRO 2">11 TKRO 2</option>
                <option value="12 TKRO 1">12 TKRO 1</option>
                <option value="12 TKRO 2">12 TKRO 2</option>
                <option value="10 TBSM 2">10 TBSM 1</option>
                <option value="10 TBSM 2">10 TBSM 2</option>
                <option value="11 TBSM 1">11 TBSM 1</option>
                <option value="11 TBSM 2">11 TBSM 2</option>
                <option value="12 TBSM 1">12 TBSM 1</option>
                <option value="12 TBSM 2">12 TBSM 2</option>
                <option value="10 TPM 1">10 TPM 1</option>
                <option value="10 TPM 2">10 TPM 2</option>
                <option value="10 TPM 3">10 TPM 3</option>
                <option value="10 TPM 4">10 TPM 4</option>
                <option value="11 TPM 1">11 TPM 1</option>
                <option value="11 TPM 2">11 TPM 2</option>
                <option value="11 TPM 3">11 TPM 3</option>
                <option value="11 TPM 4">11 TPM 4</option>
                <option value="12 TPM 1">12 TPM 1</option>
                <option value="12 TPM 2">12 TPM 2</option>
                <option value="12 TPM 3">12 TPM 3</option>
                <option value="12 TPM 4">12 TPM 4</option>
              </select>
              </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>JENIS KELAMIN:</strong>
                    <select class="form-control"  name='jenis_kelamin' value="{{ Session::get('jenis_kelamin') }}" id="jenis_kelamin" placeholder="JENIS KELAMIN">
                    <option selected disabled value="">-- pilih --</option>                
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  </div>
                 </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success float-right">Submit</button>
        </div>
    </div>
   
</form>
@endsection