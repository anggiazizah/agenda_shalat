@extends('admin.layout.template')
<!-- START DATA -->
@section('konten')

<div>
    <!-- FORM PENCARIAN -->
      <form class="d-flex" action="{{ url('pengguna') }}" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>
     <br>
    
    <!-- TOMBOL TAMBAH DATA -->
      <a href='{{ url('pengguna/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>
    <br>

    <div class="mt-3">
    <div class="card">
    <div class="card-body">
        <div class="table-responsive">
    <table class="table align-items-center table-flush table-borderless">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">NIS</th>
                <th class="col-md-3">Email</th>
                <th class="col-md-4">Nama</th>
                {{-- <th class="col-md-3">Password</th> --}}
                <th class="col-md-2">Kelas</th>
                <th class="col-md-2">Jenis Kelamin</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
    </div>
</div>
</div>
</div>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->nama }}</td>
                {{-- <td>{{ $item->password }}</td> --}}
                {{-- yg jd titik --}}
                 {{-- <td> <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="password" name="password" value="{{ $item->password }}" id="password" class="form-control input-shadow" disabled>
                        <div class="form-control-position">
                        </div>
                     </div>
                    </div></td> --}}
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>
                    <a href='{{ url('pengguna/'.$item->nis.'/edit') }}' class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <form onsubmit="return confirm('Yakin Hapus Data?')" class='d-inline' action="{{ url('pengguna/'.$item->nis) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach

        </tbody>
    </table>
    <div class="mt-3">
        {{ $data->onEachSide(5)->links() }}
    {{-- {{ $data->links() }} --}}
</div>
<!-- AKHIR DATA -->

@endsection
        