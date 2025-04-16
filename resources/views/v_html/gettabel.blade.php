<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        table, th, td {
            border: 1px solid black;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .container {
            width: 80%;
            margin: 0 auto;
            border: 1px solid black;
            padding: 10px;
        }
        
        h2 {
            text-align: left;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
            <?php
            // Data mahasiswa (contoh data)
            $mahasiswa = array(
                array("1", "NIM 1", "Nama Lengkap 1", "Kelas 1"),
                array("2", "NIM 2", "Nama Lengkap 2", "Kelas 2")
            );
            
            // Menampilkan data mahasiswa
            foreach ($mahasiswa as $mhs) {
                echo "<tr>";
                echo "<td>" . $mhs[0] . "</td>";
                echo "<td>" . $mhs[1] . "</td>";
                echo "<td>" . $mhs[2] . "</td>";
                echo "<td>" . $mhs[3] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>