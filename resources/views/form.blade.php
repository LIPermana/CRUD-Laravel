<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Form</title>
    <style media="screen">
      html,
      body{
        height: 100%;
        color: #636b6f;
        background-color: #fff;
      }

      .wrapper{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .form{
        width: 20%;
      }

      label{
        font-weight: bold;
      }

      input{
        width: 100%;
        height: 40px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #636b6f;
        border-radius: 6px;
      }

      .kirim{
        border: none;
        color: #fff;
        font-weight: bold;
        background-color: #00b0ff
      }

    </style>
  </head>
  <body>
    <div class="wrapper">
      <form class="form">
        <label for="no">No</label><br>
        <input type="text" id="no" /><br>
        <label for="nama">Nama</label><br>
        <input type="text" id="nama" /><br>
        <label for="kelas">Kelas</label><br>
        <input type="text" id="kelas" /><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" /><br><br>
        <input type="submit" name="submit" class="kirim">
      </form>
    </div>
  </body>
</html>
