<!doctype html>
<html lang="en">
  <head>

    <title>Login - aplikasi nilai online!</title>
  </head>
  <body>

    <p>
      Hallo <b>{{$details['username']}}</b>
    </p>
    <p>
      Berikut ini adalah data anda: 
    </p>
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
      <div class="card">
        <a href="{{$details['url']}}" class="btn btn-primary">{{$details['url']}}</a>
      </div>
      <p>
        Terimkasih telah melakukan registrasi
      </p>
    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>