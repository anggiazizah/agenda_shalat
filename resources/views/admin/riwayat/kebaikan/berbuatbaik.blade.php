@extends('admin.layout.template')

@section('konten')
<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Berbuat Baik <br> {{ date('d-m-Y',strtotime(request('tanggal') ?? date('Y-m-d'))) }}
		  <div class="card-action">
		 </div>
	       <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <tbody>
                        @foreach($berbuat_baik as $item)
                        <tr>
                            <td>
                               <span style="font-weight: bold">{{$item->user->nama}}</span>
                               <p>{{$item->berbuat_baik}}</p>
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