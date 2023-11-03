<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <p>Klik tautan berikut untuk mereset password Anda:</p>
    <h2>{{ $details['judul'] }}</h2>
    <p>Pesan: {{ $details['text'] }}</p>
    Klik <a href="http://{{ $details['url'] }}">disini</a> melakukan untuk reset password.<br>
    <p>Email : {{$details['email']}}</p><br>
    <hr>
    Atau copy link di bawah ini <br>
    <p>http://{{$details['url']}}</p>
</body>
</html>
