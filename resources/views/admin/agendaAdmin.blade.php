@extends('admin.layout.template')

@section('konten')
<div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Shalat</h5>
			  <div class="table-responsive">
               <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                      <a href="shalat/subuh?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                          <span>Shalat Shubuh</span>
                          <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>
                      <a href="shalat/dzuhur?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Shalat Dzuhur</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>
                      <a href="shalat/ashar?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Shalat Ashar</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>
                      <a href="shalat/maghrib?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Shalat Maghrib</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>
                      <a href="shalat/isya?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Shalat Isya</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>
                      <a href="shalat/dhuha?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Shalat Dhuha</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>
                      <a href="shalat/tahajud?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Shalat Tahajud</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
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
                <h5 class="card-title">Dzikir</h5>
                <div class="table-responsive">
                 <table class="table">
                <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>
                      <a href="dzikir/dzikirpagi?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Dzikir Pagi</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <td>
                      <a href="dzikir/dzikirsore?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Dzikir Sore</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                    </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>
                    <a href="dzikir/istighfar?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                      <span>Istighfar</span>
                      <i class="zmdi zmdi-eye"></i>
                    </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>
                    <a href="dzikir/shalawat?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                      <span>Shalawat</span>
                      <i class="zmdi zmdi-eye"></i>
                    </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->


      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Berbuat Baik</h5>
			  <div class="table-responsive">
               <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                      <a href="kebaikan/berbuatbaik?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Perbuatan Baik</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
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
                 <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                      <a href="ceramah/ceramah?tanggal={{request('tanggal')}}" class="d-flex justify-content-between">
                        <span>Ceramah</span>
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

@endsection