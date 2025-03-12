<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Hubungi Kami</h1>
        <form class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                    Nama Lengkap
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Masukkan nama lengkap Anda">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telepon">
                    Telepon
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telepon" type="tel" placeholder="Masukkan nomor telepon Anda">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="subjek">
                    Subjek
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subjek">
                    <option>Pilih subjek pesan</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="pesan">
                    Pesan
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pesan" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="lampiran">
                    Lampiran
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lampiran" type="file">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Jenis Kelamin
                </label>
                <div class="flex items-center mb-2">
                    <input class="mr-2 leading-tight" type="radio" id="pria" name="jenis_kelamin" value="pria">
                    <label class="text-gray-700" for="pria">Pria</label>
                </div>
                <div class="flex items-center">
                    <input class="mr-2 leading-tight" type="radio" id="wanita" name="jenis_kelamin" value="wanita">
                    <label class="text-gray-700" for="wanita">Wanita</label>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex items-center">
                    <input class="mr-2 leading-tight" type="checkbox" id="syarat">
                    <label class="text-gray-700" for="syarat">Saya menyetujui syarat dan ketentuan</label>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Kirim Pesan
                </button>
            </div>
        </form>
    </div>
</body>
</html>