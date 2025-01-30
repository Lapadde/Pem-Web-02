<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Biodata Form</title>  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
</head>  
<body class="bg-gray-100 flex items-center justify-center min-h-screen">  
    <div class="bg-white p-8 rounded-lg shadow-md w-96">  
        <h2 class="text-2xl font-bold mb-4 text-center">Form Biodata</h2>  
        <form id="biodata_form" method="POST" action="biodata-aksi.php">  
            <div class="mb-4">  
                <label class="block text-sm font-medium text-gray-700">NIM:</label>  
                <input type="text" name="nim" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Masukkan NIM">  
            </div>  
            <div class="mb-4">  
                <label class="block text-sm font-medium text-gray-700">Nama:</label>  
                <input type="text" name="nama" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Masukkan Nama">  
            </div>  
            <div class="mb-4">  
                <label class="block text-sm font-medium text-gray-700">Alamat:</label>  
                <input type="text" name="alamat" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Alamat lengkap anda">  
            </div>  
            <div class="mb-4">  
                <label class="block text-sm font-medium text-gray-700">Tempat, Tanggal lahir:</label>  
                <input type="text" name="lahir" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Tempat, Tanggal lahir">  
            </div>  
  
            <p class="mb-2 font-medium">Pilih Game yang disukai:</p>  
            <div class="mb-4">  
                <label class="inline-flex items-center">  
                    <input type="checkbox" name="game1" value="Dota 2" class="form-checkbox h-5 w-5 text-blue-600">  
                    <span class="ml-2">PUBG</span>  
                </label>  
                <label class="inline-flex items-center">  
                    <input type="checkbox" name="game2" value="Mobile Legend" class="form-checkbox h-5 w-5 text-blue-600">  
                    <span class="ml-2">Mobile Legend</span>  
                </label>  
                <label class="inline-flex items-center">  
                    <input type="checkbox" name="game3" value="Counter Strike" class="form-checkbox h-5 w-5 text-blue-600">  
                    <span class="ml-2">Point Blank</span>  
                </label>  
                <label class="inline-flex items-center">  
                    <input type="checkbox" name="game4" value="Tidak Menyukai Game" class="form-checkbox h-5 w-5 text-blue-600">  
                    <span class="ml-2">Tidak ada</span>  
                </label>  
            </div>  
                
            <div class="mb-4">  
                <label class="block text-sm font-medium text-gray-700">Silahkan pilih hobi anda</label>  
                <select name="hobi" class="mt-1 block w-full border border-gray-300 rounded-md p-2">  
                    <option value="Berenang">Berenang</option>  
                    <option value="Jogging">Jogging</option>  
                    <option value="Billyard">Billyard</option>  
                    <option value="Programming">Programming</option>  
                    <option value="Bola">Bermain Bola</option>  
                </select>  
            </div>  

            <div class="mb-4">  
                <label class="block text-sm font-medium text-gray-700">Binatang apa yang Anda suka?</label>  
                <select name="favorit" class="mt-1 block w-full border border-gray-300 rounded-md p-2">  
                    <option value="Kucing">Kucing</option>  
                    <option value="Anjing">Anjing</option>  
                    <option value="Burung">Burung</option>  
                    <option value="Sapi">Sapi</option>  
                    <option value="Kambing">Kambing</option>  
                </select>  
            </div>  
  
            <div class="mb-4">  
                <label class="block text-sm font-medium text-gray-700">Masukkan komentar atau pendapat anda!</label>  
                <textarea name="komen" class="mt-1 block w-full border border-gray-300 rounded-md p-2" rows="4" placeholder="Komentar..."></textarea>  
            </div>  
  
            <div>  
                <input type="submit" name="button" value="Tampil" class="w-full bg-blue-600 text-white font-bold py-2 rounded-md hover:bg-blue-700 transition duration-200">  
            </div>  
        </form>  
    </div>  
</body>  
</html>  
