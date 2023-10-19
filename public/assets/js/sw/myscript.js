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

  const href = $(this).attr('href');

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
      document.location.href = href;
    }
  })
});

// Menggunakan JavaScript murni
// document.querySelectorAll('.tombol_hapus').forEach(function(elem) {
//   elem.addEventListener('click', function(e) {
//     e.preventDefault();

//     const href = this.getAttribute('href');

//     Swal.fire({
//       title: 'Data Mahasiswa',
//       text: 'Apakah ingin di hapus ?',
//       icon: 'question',
//       showCancelButton: true,
//       confirmButtonColor: '#3085d6',
//       cancelButtonColor: '#d33',
//       confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//       if (result.isConfirmed) {
//         window.location.href = href;
//       }
//     });
//   });
// });
