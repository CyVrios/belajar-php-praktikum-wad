<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Data Peserta</title>

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-gray-200">
  <div style="
    border-radius: 10px;
    box-shadow: 5px 5px 15px 0px rgba(0, 0, 0, 0.2);
    width: 500px;
    height: 700px;
    position: absolute;
    top: 10%;
    left: 35%;
    background-color: white; ">
    <div class="bg-blue-400 p-3 rounded-t-xl">
      <a href="profile.php" class="text-white"><- Back</a>
          <h1 class="text-center text-2xl mb-2 text-white">Edit Biodata Peserta</h1>
    </div>
    <div class="text-center mt-6">
      <img
        src="profile.png"
        alt="Avatar"
        class="rounded-[50%] w-[80px] mx-auto" />
    </div>
    <div class="" style="width: 90%; margin-left: 5%;">
    
      <form action="profile.php" method="post">
        <p>Nama</p>
        <input type="text" name="nama" class="border-1 w-[420px] h-[30px] rounded-lg mb-2 pl-2" id="" placeholder="Jamal Derjeder" require />
        <p>Tanggal lahir</p>
        <input type="date" name="ttl" id="" class="border-1 w-[420px] h-[30px] rounded-lg mb-2 pl-2" require />
        <p>Asal Instansi/Kampus</p>
        <input type="text" name="asal" class="border-1 w-[420px] h-[30px] rounded-lg mb-2 pl-2" id="" placeholder="Telkom University" require />
        <p>Nomor Telepon</p>
        <input type="number" name="number" id="" class="border-1 w-[420px] h-[30px] rounded-lg mb-2 pl-2" placeholder="089599910002" require />
        <p>Email Aktif</p>
        <input type="email" name="email" id="" class="border-1 w-[420px] h-[30px] rounded-lg mb-2 pl-2" placeholder="Jamal@gmail.com" require />
        <p>Gender:</p>
        <input type="radio" name="gender" value="Laki laki" id="" checked />
        Laki laki
        <br />
        <input type="radio" name="gender" value="Perempuan" id="" />
        Perempuan
        <br />
        <input
          type="submit"
          class="ml-[38%] mt-[20px] w-[100px] h-[35px] rounded-[4px] bg-green-400 text-white" />
      </form>
    </div>
  </div>
</body>

</html>