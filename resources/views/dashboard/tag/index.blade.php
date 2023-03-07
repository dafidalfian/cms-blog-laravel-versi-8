@extends('backend.head')
@section('title','- Tag')
@section('isi')
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-body">
      	<a href="{{url('dashboard/tag/create')}}" class="btn btn-primary btn-sm my-2">Tambah</a>
        @if(session('status_ok'))
          <div class="alert alert-success">
            {{session('status_ok')}}
          </div>
        @endif
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="table-primary">
              <tr>
                <th>#</th>
                <th>Nama Tag</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>@php $i=1;@endphp
              @foreach($tag as $hasil)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$hasil->nama_tag}}</td>
                  @if($hasil->deskripsi)
                    <td>{{$hasil->deskripsi}}</td>
                  @else 
                    <td>No Tag</td>
                  @endif
                  <td>
                    <form method="post" action="{{url('dashboard/tag/'.$hasil->id)}}">
                      {{csrf_field()}}
                      @method('delete')
                      <a href="{{url('dashboard/tag/edit',$hasil->id)}}" class="btn btn-primary">edit</a>
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