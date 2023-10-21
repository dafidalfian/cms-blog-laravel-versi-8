@extends('backend.head')
@section('title','Tag')
@section('isi')
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-body">
      	<a href="{{url('dashboard/tag/create')}}" class="btn btn-primary btn-sm my-2">Tambah</a>
        <div class="flash" tampil-pesan="<?php echo session('flash')?>"></div>
       
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
                    <td>No Deskripsi</td>
                  @endif
                  <td>

                    <form method="POST" action="{{ url('dashboard/tag/' . $hasil->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('dashboard/tag/edit',$hasil->id)}}" class="btn btn-primary">edit</a>
                        <button type="button"  class="btn btn-danger tombol">hapus</button>
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

@push('js')

<script>
  var konfirmasi = $('.flash').attr('tampil-pesan');
  var pesan = "Tag";
  if(konfirmasi){
    Swal.fire({
      title:'Data Tag',
      html:'' +pesan+ ' Berhasil ' + konfirmasi,
      icon:'success'
    })
  }
// Tomvol hapus

// Jquery
$('.tombol').on('click', function(e){
  let form = $(this).closest("form");
    e.preventDefault();
    
    Swal.fire({
        title: 'Data Tag',
        text: "Apakah ingin di hapus ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit(); // Kirim permintaan DELETE
        }
    })
});

</script>
@endpush
@endsection