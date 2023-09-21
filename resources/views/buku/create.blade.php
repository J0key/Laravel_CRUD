<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Buku</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="max-w-2xl mx-auto">
    <h4 class="text-center mt-11 font-extrabold">Tambah Buku</h4>
    <form method="post" action="{{ route('buku.store') }}">
        @csrf
        <div class="mb-6 px-12 ">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
        <input  type="text" name="judul" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="your name" required>
        </div>
        <div class="mb-6 px-12">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
        <input type="text" id="text" name="penulis" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
        <div class="mb-6 px-12">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
        <input type="text" id="text" name="harga" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
        <div class="mb-6 px-12">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tgl. Terbit</label>
            <input type="text" id="text" name="tgl_terbit" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
        <div class="flex justify-center items-center">
            <button type="submit" name="submit" class="text-white px-11 mx-11  bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 text-center align-middle justify-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <a href="{{ route('buku.store') }}">
                <button type="back" class="text-white px-11 mx-11 bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm    py-2.5 text-center align-middle justify-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</button></a>


        </div>

        {{-- <div class="text-center"><a href="/buku">Batal</a></div> --}}
    </form>
</body>
</html>


  