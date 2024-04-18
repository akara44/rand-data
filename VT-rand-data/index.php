<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
     <h1>Rastgele 1'den Fazla Veri Çekmek</h1>
        <div class="row">
            <div class="col-4">
                <div class="card mt- bg-light">
                    <div class="card-body">
                          <?php
                            // Veritabanı bağlantısı için bilgiler
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "rand-data";

                            // Veritabanı bağlantısını oluştur
                            $conn = new mysqli($servername, $username, $password, $database);

                            // Bağlantıyı kontrol et
                            if ($conn->connect_error) {
                                die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
                            }

                            // Rastgele üç kayıt seçmek için sorgu
                            $sql = "SELECT * FROM veriler ORDER BY RAND() LIMIT 3";

                            // Sorguyu çalıştır ve sonucu al
                            $result = $conn->query($sql);

                            // Sonucu kontrol et ve verileri al
                            if ($result->num_rows > 0) {
                                // Veritabanından rastgele üç satırı al
                                while ($row = $result->fetch_assoc()) {
                                    // Her bir satırdaki verileri kullan
                                    echo "Kitap: " . $row["kitap"]. " - Yazar: " . $row["yazar"]."<br>";
                                }
                            } else {
                                echo "Veri bulunamadı.";
                            }

                            // Veritabanı bağlantısını kapat
                            $conn->close();
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
     <h1>Rastgele 1 Veri Çekmek</h1>
        <div class="row">
            <div class="col-4">
                <div class="card mt- bg-light">
                    <div class="card-body">
                    <?php
                        // Veritabanı bağlantısı için bilgiler
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "rand-data";

                        // Veritabanı bağlantısını oluştur
                        $conn = new mysqli($servername, $username, $password, $database);

                        // Bağlantıyı kontrol et
                        if ($conn->connect_error) {
                            die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
                        }

                        // Rastgele bir kayıt seçmek için sorgu
                        $sql = "SELECT * FROM veriler ORDER BY RAND() LIMIT 1";

                        // Sorguyu çalıştır ve sonucu al
                        $result = $conn->query($sql);

                        // Sonucu kontrol et ve verileri al
                        if ($result->num_rows > 0) {
                            // Veritabanından rastgele bir satırı al
                            $row = $result->fetch_assoc();
                            // Satırdaki verileri kullan
                            echo " Kitap: " . $row["kitap"]. "  Yazar: " . $row["yazar"];
                        } else {
                            echo "Veri bulunamadı.";
                        }

                        // Veritabanı bağlantısını kapat
                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>