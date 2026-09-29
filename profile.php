<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  />

  <title>Profil Peserta</title>

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>


<body class="min-h-screen flex items-center justify-center p-6">

  <!-- Main Card -->
  <div class="w-full max-w-xl bg-white rounded-3xl shadow-xl overflow-hidden">

    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-600 to-cyan-500 px-8 py-8 text-white">

      <p class="text-sm text-green-100 mb-2">
        Data Peserta
      </p>

      <h1 class="text-3xl font-bold">
        Biodata Peserta
      </h1>

      <p class="text-sm text-green-50 mt-1">
        Informasi pribadi peserta
      </p>

    </div>


    <!-- Profile Section -->
    <div class="px-6 py-8 md:px-10">

      <!-- Avatar -->
      <div class="flex flex-col items-center">

        <div class="relative">

          <img
            src="profile.png"
            alt="Foto Profil Jamal"
            class="w-28 h-28 rounded-full object-cover
                   border-4 border-white
                   shadow-lg"
          />

          <!-- Online indicator -->
          <div
            class="absolute bottom-1 right-1
                   w-7 h-7 bg-green-500
                   border-4 border-white
                   rounded-full"
          ></div>

        </div>


        <h2 class="mt-4 text-xl font-bold text-gray-800">
          Jamal
        </h2>

        <p class="text-sm text-gray-500">
          Telkom University
        </p>

      </div>


      <!-- Biodata -->
      <div class="mt-8">

        <div class="flex items-center justify-between mb-4">

          <h3 class="text-lg font-bold text-gray-800">
            Informasi Pribadi
          </h3>

          <span
            class="text-xs font-medium
                   px-3 py-1
                   rounded-full
                   bg-green-100
                   text-green-700"
          >
            Aktif
          </span>

        </div>


        <!-- Information Card -->
        <div class="border border-gray-200 rounded-2xl overflow-hidden">

          <!-- Nama -->
          <div class="grid grid-cols-1 sm:grid-cols-2
                      px-5 py-4
                      border-b border-gray-200
                      bg-gray-50">

            <span class="text-sm text-gray-500">
              Nama
            </span>

            <span class="font-semibold text-gray-800 sm:text-right">
              Jamal
            </span>

          </div>


          <!-- Tanggal Lahir -->
          <div class="grid grid-cols-1 sm:grid-cols-2
                      px-5 py-4
                      border-b border-gray-200">

            <span class="text-sm text-gray-500">
              Tanggal Lahir
            </span>

            <span class="font-semibold text-gray-800 sm:text-right">
              03/12/2001
            </span>

          </div>


          <!-- Instansi -->
          <div class="grid grid-cols-1 sm:grid-cols-2
                      px-5 py-4
                      border-b border-gray-200
                      bg-gray-50">

            <span class="text-sm text-gray-500">
              Asal Instansi / Kampus
            </span>

            <span class="font-semibold text-gray-800 sm:text-right">
              Telkom University
            </span>

          </div>


          <!-- Nomor Telepon -->
          <div class="grid grid-cols-1 sm:grid-cols-2
                      px-5 py-4
                      border-b border-gray-200">

            <span class="text-sm text-gray-500">
              Nomor Telepon
            </span>

            <span class="font-semibold text-gray-800 sm:text-right">
              089599910002
            </span>

          </div>


          <!-- Email -->
          <div class="grid grid-cols-1 sm:grid-cols-2
                      px-5 py-4
                      border-b border-gray-200
                      bg-gray-50">

            <span class="text-sm text-gray-500">
              Email Aktif
            </span>

            <span class="font-semibold text-gray-800 sm:text-right break-all">
              Jamal@gmail.com
            </span>

          </div>


          <!-- Gender -->
          <div class="grid grid-cols-1 sm:grid-cols-2
                      px-5 py-4">

            <span class="text-sm text-gray-500">
              Gender
            </span>

            <span class="font-semibold text-gray-800 sm:text-right">
              Laki-laki
            </span>

          </div>

        </div>

      </div>


      <!-- Action -->
      <div class="mt-8">

        <a
          href="editbiodatapeserta.html"
          class="flex items-center justify-center gap-2
                 w-full
                 px-5 py-3
                 rounded-xl
                 bg-green-600
                 text-white
                 font-semibold
                 shadow-md shadow-green-200
                 hover:bg-green-700
                 hover:shadow-lg
                 active:scale-[0.98]
                 transition"
        >

          <!-- Edit Icon -->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            class="w-5 h-5"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="m16.862 4.487 1.687-1.688
                 a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07
                 a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685
                 a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z"
            />
          </svg>

          Edit Data

        </a>

      </div>

    </div>

  </div>

</body>

</html>