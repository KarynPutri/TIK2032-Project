<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script> 
    <title>Teknologi dalam Pendidikan</title>
  </head>
  <body>
    <a href="blog.php">Kembali ke blog</a>
      <h1>Teknologi dalam Pendidikan</h1>
      <img
        src="Images/article1.jpg"
        alt="Teknologi dalam Pendidikan"
        width="300"
      />

      <p>
        Di era digital, teknologi telah secara signifikan mengubah dunia pendidikan,
        menjadikannya lebih mudah diakses, interaktif, dan efisien. Integrasi
        teknologi dalam pembelajaran memberikan siswa berbagai alat untuk
        meningkatkan pengetahuan dan keterampilan mereka di luar ruang kelas
        tradisional.
        Salah satu keuntungan terbesar dari teknologi dalam pendidikan adalah
        akses yang lebih luas terhadap sumber belajar. Platform online seperti
        Coursera, Udemy, dan Google Classroom memungkinkan siswa untuk belajar
        kapan saja dan di mana saja. Hal ini sangat bermanfaat bagi siswa di daerah
        terpencil yang mungkin tidak memiliki akses ke pendidikan berkualitas.
        Manfaat utama lainnya adalah meningkatnya interaktivitas dalam
        pembelajaran. Teknologi memungkinkan penggunaan video, simulasi, dan
        konten berbasis permainan untuk membuat pembelajaran lebih menarik.
        Misalnya, laboratorium sains virtual membantu siswa melakukan eksperimen
        tanpa perlu peralatan laboratorium fisik, sehingga pemahaman konsep menjadi
        lebih mudah.
        Personalisasi dalam pendidikan juga meningkat dengan bantuan Kecerdasan
        Buatan (AI). Platform pembelajaran adaptif menganalisis kekuatan dan
        kelemahan siswa serta memberikan materi belajar yang disesuaikan dengan
        kebutuhan mereka. Ini memastikan bahwa setiap siswa dapat belajar sesuai
        dengan kecepatan mereka sendiri dan meningkatkan pemahaman mereka secara
        efektif.
        Terakhir, teknologi meningkatkan efisiensi dalam pengelolaan pendidikan.
        Guru dapat menggunakan alat digital untuk mengotomatisasi penilaian,
        melacak perkembangan siswa, dan berkomunikasi dengan orang tua secara lebih
        mudah. Hal ini membantu menciptakan sistem pendidikan yang lebih terstruktur
        dan transparan.
        Kesimpulannya, teknologi telah merevolusi dunia pendidikan, menjadikannya
        lebih inklusif dan efisien. Namun, penting untuk menyeimbangkan penggunaan
        teknologi dengan interaksi sosial secara langsung agar kualitas pembelajaran
        tetap terjaga. Dengan memanfaatkan teknologi secara bijak, kita dapat
        menciptakan pengalaman pendidikan yang lebih baik bagi siswa dan guru.
      </p>

      <hr />
    </div>
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
