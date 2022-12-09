@extends('layout.template')

@section('konten')
<form action="{{ route('beranda.post') }}" method="POST">
        @csrf
        <div class="row mt-3">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Shalat</h5>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($shalats as $shalat)
                      <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $shalat->name }}</td>
                        <td>
                        <div><input name="{{ $shalat->key }}" type="checkbox" value="true" 
                        {{ $isi[$shalat->key] == 'true' ?'checked' : '' }}></div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                  <h5 class="card-title">Dzikir</h5>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($dzikirs as $dzikir)
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $dzikir->name }}</td>
                          <td>
                            <div><input name="{{ $dzikir->key }}" type="checkbox" value="true" 
                              {{ $isi[$dzikir->key] == 'true' ?'checked' : '' }}></div>
                              </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row mt-3">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Berbuat Baik</h5>
                <div class="table-responsive">
                  <table>
                    <tbody>
                      <tr>
                        <textarea name="kebaikan" id="kebaikan" cols="45" rows="10">{{ $isi['berbuat_baik'] }}</textarea>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Ceramah</h5>
                <div class="table-responsive">
                  <table>
                    <tbody>
                      <tr>
                        <textarea name="ceramah" id="ceramah" cols="45" rows="10">{{ $isi['ceramah'] }}</textarea>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
          </div>
        </div>
      </form>
@endsection