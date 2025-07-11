<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"> 
    <script src="script.js" defer></script>
    <title>Pengaruh Mobile Legends</title>
  </head>
  <body>
    <a href="blog.php">Kembali ke blog</a>
    <h1>Pengaruh Game Mobile Legends: Bang Bang terhadap Pemain dan Masyarakat</h1>
    <img
    src="Images/article2.jpg"
    alt="Pengaruh Mobile Legends"
    width="300"
    />

    <p>
      Mobile Legends: Bang Bang (MLBB) adalah salah satu game mobile paling populer di dunia, terutama di Asia Tenggara. 
      Sejak dirilis pada tahun 2016, game ini berhasil menarik jutaan pemain dari berbagai kalangan, mulai dari anak-anak hingga orang dewasa. 
      Namun, seperti halnya game lain, MLBB memiliki pengaruh positif maupun negatif terhadap pemain dan masyarakat. 
    </p>

    <p>
    Pengaruh Positif Mobile Legends 
    </p>

    <p>
      1. Mengembangkan Kemampuan Strategis dan Kerja Sama 
      MLBB adalah game MOBA yang membutuhkan strategi dan kerja sama tim. Pemain harus memahami peran hero, memilih build item yang tepat, 
      serta berkomunikasi dengan tim untuk mengatur serangan dan pertahanan. 
      2. Meningkatkan Refleks dan Konsentrasi 
      Bermain MLBB melatih refleks, ketangkasan tangan, serta konsentrasi dalam jangka waktu tertentu, yang juga berguna dalam kehidupan sehari-hari. 
      3. Peluang Karier di Dunia Esports 
      Mobile Legends bukan sekadar hiburan, tetapi juga peluang karier di dunia esports, seperti menjadi pro player, streamer, atau konten kreator. 
      4. Sarana Hiburan dan Sosialisasi 
      Fitur mode mabar (main bareng) memungkinkan pemain untuk bermain bersama teman, membangun komunitas, dan menjalin pertemanan baru. 
    </p>

    <p>
    Pengaruh Negatif Mobile Legends
    </p>

    <p>
      1. Kecanduan Game 
      Salah satu dampak negatif terbesar dari Mobile Legends adalah risiko kecanduan, yang bisa menurunkan produktivitas jika tidak 
      dikontrol. 
      2. Perilaku Toxic dalam Komunitas 
      Kata-kata kasar dan hinaan sering muncul dalam game ini, terutama dalam mode ranked, yang dapat berdampak buruk pada kesehatan 
      mental pemain. 
      3. Potensi Pengeluaran Berlebihan 
      MLBB menawarkan skin premium dan item berbayar yang menggoda pemain untuk melakukan top-up, yang bisa menjadi kebiasaan boros. 
      4. Risiko Pengaruh Negatif terhadap Anak-Anak 
      Jika tidak diawasi, anak-anak bisa menghabiskan waktu berlebihan dalam game ini, yang dapat memengaruhi prestasi akademik mereka. 
    </p>

    <p>
    Kesimpulan
    </p>
    
    <p>
      Mobile Legends memiliki dampak positif maupun negatif tergantung pada bagaimana pemain mengelolanya. Jika dimainkan dengan bijak, 
      game ini bisa menjadi sarana hiburan dan peluang karier. Namun, jika dimainkan secara berlebihan, bisa menyebabkan kecanduan dan 
      dampak buruk lainnya. Oleh karena itu, keseimbangan dalam bermain sangat penting agar manfaat game ini bisa dirasakan tanpa efek 
      negatif yang berlebihan. 
    </p>

    <hr />
    <hr>
<h3>Tinggalkan Komentar</h3>
<form action="simpan_komentar.php" method="post">
    <input type="hidden" name="artikel" value="article1.php"> <!-- ubah sesuai artikel -->
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" required><br><br>
    <label for="komentar">Komentar:</label><br>
    <textarea name="komentar" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Kirim Komentar">
</form>

<h3>Komentar:</h3>
<?php
include 'koneksi.php';
$artikel = "article1.php"; // ubah sesuai artikel
$sql = "SELECT nama, komentar FROM komentar WHERE artikel = '$artikel' ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>" . htmlspecialchars($row['nama']) . ":</strong><br>" . nl2br(htmlspecialchars($row['komentar'])) . "</p>";
    }
} else {
    echo "<p>Belum ada komentar.</p>";
}
?>
  </body>
</html>
