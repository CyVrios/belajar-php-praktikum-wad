<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Peserta</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    table,
    th,
    td {
      width: 450px;

      height: 50px;

      border: 1px solid black;

    }
  </style>
</head>

<body class="bg-gray-200">
  <div
    style="
        border-radius: 10px;
        box-shadow: 5px 5px 15px 0px rgba(0, 0, 0, 0.2);
        width: 500px;
        height: 700px;
        position: absolute;
        top: 10%;
        left: 35%;
        margin-top: px;
        background-color: white;
      ">
    <h1 class="text-center text-xl mb-4 mt-8">Biodata Peserta</h1>
    <div class="text-center">
      <img
        src="profile.png"
        alt="Avatar"
        class="rounded-[50%] w-[80px] mx-auto" />

      <div class="w-[90%] ml-[5%] mt-[20px]">
        <table>
          <tr>
            <td>Nama</td>
            <td><?php echo $_POST["nama"]; ?></td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $_POST["ttl"]; ?></td>
          </tr>
          <tr>
            <td>Asal Instansi/Kampus</td>
            <td><?php echo $_POST["asal"]; ?></td>
          </tr>
          <tr>
            <td>Nomor Telepon</td>
            <td><?php echo $_POST["number"]; ?></td>
          </tr>
          <tr>
            <td>Email Aktif</td>
            <td><?php echo $_POST["email"]; ?></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><?php echo $_POST["gender"]; ?></td>
          </tr>
        </table>

        <a href="editbiodatapeserta.php">
          <input type="button" value="Edit data" class="mt-10 w-[100px] h-[35px] rounded-s bg-yellow-300 shadow-lg">
        </a>
      </div>
    </div>
</body>

</html>