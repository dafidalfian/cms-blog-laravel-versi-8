<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<<<<<<< HEAD
    <style type="text/css">
      table {
        border-collapse: collapse;
      }
      .table-bordered {
        border: 1px solid #dee2e6;
      }

      .table-bordered th,
      .table-bordered td {
        border: 1px solid #dee2e6;
      }

      .table-bordered thead th,
      .table-bordered thead td {
        border-bottom-width: 2px;
      }

      .table-borderless th,
      .table-borderless td,
      .table-borderless thead th,
      .table-borderless tbody + tbody {
        border: 0;
      }
      .table-hover tbody tr:hover {
        color: #212529;
        background-color: rgba(0, 0, 0, 0.075);
      }

      .table-primary,
      .table-primary > th,
      .table-primary > td {
        background-color: #b8daff;
      }

      .table-primary th,
      .table-primary td,
      .table-primary thead th,
      .table-primary tbody + tbody {
        border-color: #7abaff;
      }

      .table-hover .table-primary:hover {
        background-color: #9fcdff;
      }

      .table-hover .table-primary:hover > td,
      .table-hover .table-primary:hover > th {
        background-color: #9fcdff;
      }
      .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05);
      }
      .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
      }
    </style>
=======
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7

    <title>Login - aplikasi nilai online!</title>
  </head>
  <body>

    <p>
      Hallo <b>{{$details['username']}}</b>
    </p>
    <p>
      Berikut ini adalah data anda: 
    </p>
<<<<<<< HEAD
    <table class="table table-bordered table-hover table-striped">
      <thead class="thead-dark">
        <th>Nama</th>
        <th>Username</th>
        <th>Website</th>
        <th>Tgl Pendaftaran</th>
        <th>Email</th>
        <th>Foto</th>
      </thead>
      <tbody>
        <tr>
          <td>{{$details['nama']}}</td>
          <td>{{$details['username']}}</td>
          <td>{{$details['website']}}</td>
          <td>{{$details['datetime']}}</td>
          <td>{{$details['email']}}</td>
          <td>
            <img src="" width="200px" height="200px">
          </td>
        </tr>
      </tbody>
    </table>
    <center>
      <h3>
        Klik <a href="http://{{$details['url']}}">disini</a> untuk melakukan verifikasi akun email anda.
      </h3>
      <hr>
      <h3>Atau salin link di bawah ini.</h3>
=======
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td>{{$details['username']}}</td>
      </tr>
    </table>
    <center>
      <h3>
        Copy link di bawah ini untuk melakukan verifikasi alamat email anda
      </h3>
      <b style="color: blue">{{$details['url']}}</b>
      <hr>
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
      <div class="card">
        <a href="{{$details['url']}}" class="btn btn-primary">{{$details['url']}}</a>
      </div>
      <p>
        Terimkasih telah melakukan registrasi
      </p>
    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>