@extends('backend.head')
@section('title','- Kategori')
@section('isi')
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div>
          <a href="{{url('dashboard/kategori/create')}}" class="btn btn-primary">Tambah</a>
        </div>
        <div>
          <form method="post" action="" class="pt-4">
            <div class="form-group">
              <input type="search" name="" class="form-control border border-success" placeholder="Pencarian data ...">
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        @if(session('status_ok'))
          <div class="alert alert-danger">
            {{session('status_ok')}}
          </div>
        @endif
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="table-primary">
              <tr>
                <th width="5%">#</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>@php $i=1;@endphp
              @foreach($category as $hasil)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$hasil->nama_kategori}}</td>
                  @if($hasil->deskripsi)
                    <td>{{$hasil->deskripsi}}</td>
                  @else 
                    <td>No Kategori</td>
                  @endif
                  <td>
                    <form method="post" action="{{url('dashboard/kategori/'.$hasil->id)}}">
                      {{csrf_field()}}
                      @method('delete')
                      <a href="{{url('dashboard/kategori/edit',$hasil->id)}}" class="btn btn-primary">edit</a>
                      <button type="submit" class="btn btn-danger">hapus</button>
                    </form>
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
@endsection