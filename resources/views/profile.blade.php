@extends('layout.template')

@section('konten')
    </div>
        <td>
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
                           <form action="{{ route('profile.edit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <!-- <div class="form-group row"> -->
                              <!-- <label for="profil" class="col-lg-3 col-form-label form-control-label">Foto </label> -->
                              <!-- <div class="col-lg-9"> -->
                                <!-- <input type="file" name="profil" id="" class="form-control">
                              </div> -->
                            </div>
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama</label>
                              <div class="col-lg-9">
                              <input type="text" name="nama" class="form-control" value="{{ Auth::user()->nama }}"></input>
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
                            <input type="text" name="kelas" class="form-control" value="{{ auth()->user()->kelas }}"></input>
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
                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}"></input>
                            </div>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>
  </td>
@endsection