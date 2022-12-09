@extends('layout.template')

@section('konten')
</div>
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
            </ul>
                  <br>
                  <br>
                       <div class="tab-pane" id="edit">
                           <form>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama</label>
                              <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder=" {{ auth()->user()->nama }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">NIS </label>
                            <div class="col-lg-9">
                              <input type="text" name="nis" class="form-control" value="{{ auth()->user()->nis }}" readonly></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Kelas</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="11 RPL1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Jenis Kelamin </label>
                            <div class="col-lg-9">
                            <input type="text" name="jenis_kelamin" class="form-control" value="{{ auth()->user()->jenis_kelamin }}" readonly></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="" placeholder="example@gmail.com">
                            </div>
                        </div>
                        <div>
                        <a href="{{route('layout.profile')}}" type="submit" class="btn btn-primary float-left" value="Edit">simpan</a>
                        </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection