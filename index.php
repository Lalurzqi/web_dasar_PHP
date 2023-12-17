<!DOCTYPE html>
<html>
<head>
    <title>Data Penulis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">

        <div class="alert alert-info">Data Penulis</div>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
                require('../koneksi.php');
                $no = 1;

                $query = "SELECT * FROM penulis";
                $result = mysqli_query($link, $query);
                while ($row = mysqli_fetch_object($result) ) { 

                    
            ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->hp; ?></td>
                <td>Delete | Update</td>
            </tr>

            <?php
                }
            ?>

            <tbody>
                <td></td>
            </tbody>

        </table>
    </div>
</body>
</html>