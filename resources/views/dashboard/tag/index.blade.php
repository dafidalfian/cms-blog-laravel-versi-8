@extends('backend.head')
<<<<<<< HEAD
@section('title','Tag')
=======
@section('title','- Tag')
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
@section('isi')
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-body">
      	<a href="{{url('dashboard/tag/create')}}" class="btn btn-primary btn-sm my-2">Tambah</a>
<<<<<<< HEAD
        <div class="flash" tampil-pesan="<?php echo session('flash')?>"></div>
       
=======
        @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
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
<<<<<<< HEAD

                    <form method="POST" action="{{ url('dashboard/tag/' . $hasil->id) }}" id="form-delete-{{ $hasil->id }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('dashboard/tag/edit',$hasil->id)}}" class="btn btn-primary">edit</a>
                        <button type="button" class="btn btn-danger tombol" data-id="{{ $hasil->id }}">hapus</button>
=======
                    <form method="post" action="{{url('dashboard/tag/'.$hasil->id)}}">
                      {{csrf_field()}}
                      @method('delete')
                      <a href="{{url('dashboard/tag/edit',$hasil->id)}}" class="btn btn-primary">edit</a>
                      <button type="submit" class="btn btn-danger">hapus</button>
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
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
<<<<<<< HEAD

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
    e.preventDefault();
    
    const id = $(this).data('id'); // Ambil ID dari tombol
    
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
            const form = $('#form-delete-' + id); // Ambil form dengan ID yang sesuai
            form.submit(); // Kirim permintaan DELETE
        }
    })
});

</script>
@endpush
=======
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
@endsection