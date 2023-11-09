<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Ulang Akun</title>
</head>
<body>
    <p>Anda menerima email ini karena kami menerima permintaan untuk verifikasi ulang akun.</p>
    <p>Silakan klik tautan di bawah ini untuk verifikasi ulang akun Anda:</p>
    <a href="http://{{$verificationLink['url']}}">klik disini</a> atau copy link di bawah ini.
    <p>http://{{$verificationLink['url']}}</p>
    <p>Nama : {{$verificationLink['nama']}}</p>
    <p>Email : {{$verificationLink['email']}}</p>
    <p>Foto :<br>
    	<img src="{{ $verificationLink['foto_pengguna'] }}" alt="Foto Pengguna">
    </p>
    <p>Waktu: {{$verificationLink['datetime']}}</p>
    <p>Jika Anda tidak meminta verifikasi ulang akun, Anda bisa mengabaikan pesan ini.</p>
</body>
</html>
