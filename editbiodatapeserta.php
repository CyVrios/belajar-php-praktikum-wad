<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Edit Data Peserta</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>

  <body class="min-h-screen flex items-center justify-center p-6">

    <!-- Card -->
    <div class="w-full max-w-xl bg-white rounded-3xl shadow-xl overflow-hidden">

      <!-- Header -->
      <div class="bg-gradient-to-r from-blue-600 to-cyan-500 px-8 py-7 text-white">
        <a
          href="profile.html"
          class="inline-flex items-center gap-2 text-sm text-green-50 hover:text-white transition mb-5"
        >
          ← Kembali ke Profil
        </a>

        <h1 class="text-2xl md:text-3xl font-bold">
          Edit Biodata Peserta
        </h1>

        <p class="text-green-50 text-sm mt-1">
          Perbarui informasi pribadi Anda di bawah ini.
        </p>
      </div>


      <!-- Content -->
      <div class="px-6 py-8 md:px-10">

        <!-- Profile Picture -->
        <div class="flex flex-col items-center mb-8">
          <div class="relative">
            <img
              src="profile.png"
              alt="Avatar"
              class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg"
            />

            <div
              class="absolute bottom-1 right-1 w-6 h-6 bg-green-500 border-4 border-white rounded-full"
            ></div>
          </div>

          <h2 class="mt-3 font-semibold text-gray-800">
            Jamal Derjeder
          </h2>

          <p class="text-sm text-gray-500">
            Data Peserta
          </p>
        </div>


        <!-- Form -->
        <form action="" method="POST" class="space-y-5">

          <!-- Nama -->
          <div>
            <label
              for="nama"
              class="block text-sm font-semibold text-gray-700 mb-2"
            >
              Nama Lengkap
            </label>

            <input
              type="text"
              id="nama"
              name="nama"
              placeholder="Jamal Derjeder"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50
                     outline-none transition
                     focus:bg-white focus:border-green-500 focus:ring-4 focus:ring-green-100"
            />
          </div>


          <!-- Tanggal Lahir -->
          <div>
            <label
              for="ttl"
              class="block text-sm font-semibold text-gray-700 mb-2"
            >
              Tanggal Lahir
            </label>

            <input
              type="date"
              id="ttl"
              name="ttl"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50
                     outline-none transition
                     focus:bg-white focus:border-green-500 focus:ring-4 focus:ring-green-100"
            />
          </div>


          <!-- Asal Instansi -->
          <div>
            <label
              for="asal"
              class="block text-sm font-semibold text-gray-700 mb-2"
            >
              Asal Instansi / Kampus
            </label>

            <input
              type="text"
              id="asal"
              name="asal"
              placeholder="Telkom University"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50
                     outline-none transition
                     focus:bg-white focus:border-green-500 focus:ring-4 focus:ring-green-100"
            />
          </div>


          <!-- Nomor Telepon -->
          <div>
            <label
              for="number"
              class="block text-sm font-semibold text-gray-700 mb-2"
            >
              Nomor Telepon
            </label>

            <input
              type="tel"
              id="number"
              name="number"
              placeholder="089599910002"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50
                     outline-none transition
                     focus:bg-white focus:border-green-500 focus:ring-4 focus:ring-green-100"
            />
          </div>


          <!-- Email -->
          <div>
            <label
              for="email"
              class="block text-sm font-semibold text-gray-700 mb-2"
            >
              Email Aktif
            </label>

            <input
              type="email"
              id="email"
              name="email"
              placeholder="Jamal@gmail.com"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-gray-50
                     outline-none transition
                     focus:bg-white focus:border-green-500 focus:ring-4 focus:ring-green-100"
            />
          </div>


          <!-- Gender -->
          <div>
            <p class="block text-sm font-semibold text-gray-700 mb-3">
              Jenis Kelamin
            </p>

            <div class="grid grid-cols-2 gap-3">

              <label
                class="flex items-center gap-3 p-3 rounded-xl border border-gray-300
                       cursor-pointer hover:border-green-500 hover:bg-green-50 transition"
              >
                <input
                  type="radio"
                  name="gender"
                  value="Laki-laki"
                  checked
                  class="w-4 h-4 accent-green-600"
                />

                <span class="text-sm text-gray-700">
                  Laki-laki
                </span>
              </label>


              <label
                class="flex items-center gap-3 p-3 rounded-xl border border-gray-300
                       cursor-pointer hover:border-green-500 hover:bg-green-50 transition"
              >
                <input
                  type="radio"
                  name="gender"
                  value="Perempuan"
                  class="w-4 h-4 accent-green-600"
                />

                <span class="text-sm text-gray-700">
                  Perempuan
                </span>
              </label>

            </div>
          </div>


          <!-- Divider -->
          <div class="border-t border-gray-200 pt-6"></div>


          <!-- Buttons -->
          <div class="flex flex-col-reverse sm:flex-row gap-3">

            <a
              href="profile.html"
              class="w-full sm:w-1/2 text-center px-5 py-3 rounded-xl
                     border border-gray-300 text-gray-700 font-semibold
                     hover:bg-gray-100 transition"
            >
              Batal
            </a>

            <button
              type="submit"
              class="w-full sm:w-1/2 px-5 py-3 rounded-xl
                     bg-green-600 text-white font-semibold
                     shadow-md shadow-green-200
                     hover:bg-green-700 hover:shadow-lg
                     active:scale-[0.98] transition"
            >
              Simpan Perubahan
            </button>

          </div>

        </form>
      </div>
    </div>

  </body>
</html>