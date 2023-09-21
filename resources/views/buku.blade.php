<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum 6</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<a href="#" class="block max-w-sm p-6 -mb-3 bg-gray-200 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Dummy dengan Factory</h5>
    <div class="font-normal text-gray-700 dark:text-gray-400">
    <p>Jumlah Data Buku: {{ $jumlah_buku }}</p>
    <p>Jumlah Total Harga Semua Buku: {{ "Rp".number_format($jumlah_harga, 2, ',', ',')}}</p>
    </div>
    <a  href= "{{ route('buku.create') }}" class="px-12 py-3">
        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-6 py-2.5 -ml-8 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Tambah Buku</button>
    </a>
</a>



  
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul Buku
                </th>
                <th scope="col" class="px-6 py-3">
                    Penulis
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Tgl. Penerbit
                </th>
                <th scope="col" class="px-12 py-3">
                    Action
                </th>

            </tr>
        </thead>

        <tbody>
            @foreach ($data_buku as $buku)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $buku->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $buku->judul }}
                </td>
                <td class="px-6 py-4">
                    {{ $buku->penulis }}
                </td>
                <td class="px-6 py-4">
                    {{ "Rp". number_format($buku->harga, 2, ',' ,  '.')}}
                </td>
                <td class="px-6 py-4">
                    {{ date('d/m/Y', strtotime($buku->tgl_terbit)) }}
                </td>
                <td class="px-6 py-4 flex">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">Edit</a>
                    <a href="#" class="font-medium text-green-950 dark:text-blue-500 hover:underline mr-3">Detail</a>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="font-medium text-red-700 dark:text-blue-500 hover:underline mr-3" >
                        @csrf
                        <button onclick="return confirm('Apakah ingin menghapus?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

