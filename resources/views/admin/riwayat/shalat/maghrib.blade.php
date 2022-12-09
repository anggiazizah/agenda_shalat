@extends('admin.layout.template')

@section('konten')
<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Shalat Maghrib <br> {{ date('d-m-Y',strtotime(request('tanggal') ?? date('Y-m-d'))) }}
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <tbody>
                        @foreach($shalat_maghrib as $item)
                        <tr>
                            <td>
                               <span>{{$item->user->nama}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                 
               </div>
	   </div>
	 </div>
	</div>
@endsection