<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Mahasiswa</title>
    <style>
        .container {
            width: 450px;
            border: 1px solid #000;
            padding: 15px;
            margin: 0 auto;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-family: Arial, sans-serif;
        }
        
        input[type="text"] {
            width: 300px;
            margin-bottom: 15px;
            padding: 5px;
        }
        
        input[type="submit"] {
            margin-top: 5px;
            padding: 3px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
            @csrf
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim">
            
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama">
            
            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas">
            
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>