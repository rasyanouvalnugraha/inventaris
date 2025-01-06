<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisa | History</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/navbarmobile.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/datatables.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwind.min.css">


</head>

<body class="bg-black">
    <section>
        <div class="sm:block hidden">
            <x-navbar />
        </div>
        <div class="sm:hidden block">
            <x-header-mobile />
        </div>
        <div class="sm:hidden block">
            <x-navbar-mobile />
        </div>

        <div class="block sm:my-10 my-2 -z-20">
            <div>
                <div class="flex flex-col items-center justify-center">
                    <div class="bg-white rounded-md p-1 mx-2 sm:mx-0 sm:w-4/5 ">
                        <table id="inventoryTable" class="table-auto sm:overflow-x-auto bg-white rounded-xl max-h-64">
                            <thead class="bg-black text-white">
                                <tr class="relative font-mulish-700">
                                    <th class="px-6 py-2 text-xs sm:text-sm">Barang</th>
                                    <th class="px-6 py-2 text-xs sm:text-sm">Jumlah</th>
                                    <th class="px-6 py-2 text-xs sm:text-sm">Satuan</th>
                                    <th class="px-6 py-2 text-xs sm:text-sm">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataDummy as $data)
                                    <tr class="odd:bg-gray-100 even:bg-white hover:bg-gray-200 font-mulish-700">
                                        <td class="px-6 py-2 text-xs sm:text-sm">{{ $data['barang'] }}</td>
                                        <td class="px-6 py-2 text-xs sm:text-sm">{{ $data['jumlah'] }}</td>
                                        <td class="px-6 py-2 text-xs sm:text-sm">{{ $data['satuan'] }}</td>
                                        <td class="px-6 py-2 text-xs sm:text-sm">{{ $data['tanggal'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<style>
    body {
        -ms-overflow-style: none;
        /* for Internet Explorer, Edge */
        scrollbar-width: none;
        /* for Firefox */
        overflow-y: hidden;
    }
</style>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- DataTables Tailwind -->
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwind.min.js"></script>

<script>
    $(document).ready(function() {
        $('#inventoryTable').DataTable({
            responsive: true,
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ entri",
                info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                infoEmpty: "Tidak ada data tersedia",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                },
                zeroRecords: "Data tidak ditemukan",
            },
            dom: 'rtip', // Menghilangkan opsi jumlah tampilan entri
        });
    });
</script>

</html>
