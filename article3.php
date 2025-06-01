<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"> 
    <script src="script.js" defer></script>
    <title>Media Sosial: Menghubungkan atau Justru Menjauhkan?</title>
  </head>
  <body>
    <a href="blog.php">Kembali ke blog</a>
      <h1>Media Sosial: Menghubungkan atau Justru Menjauhkan?</h1>
      <img
        src="Images/article3.jpeg"
        alt="Media Sosial"
        width="300"
      />

      <p>
        Media sosial telah menjadi bagian tak terpisahkan dari kehidupan modern.
        Dari Facebook hingga TikTok, platform ini memungkinkan kita untuk tetap
        terhubung dengan keluarga, teman, dan bahkan orang asing dari seluruh dunia.
        Namun, di balik manfaatnya, muncul pertanyaan: apakah media sosial benar-benar
        mendekatkan kita, atau justru menjauhkan hubungan sosial di dunia nyata?
      </p>

      <p>
        Media Sosial sebagai Penghubung<br />
        Tidak dapat disangkal bahwa media sosial telah mempermudah komunikasi.
        Beberapa manfaat utamanya meliputi:
      </p>
      <ul>
        <li>Mempererat hubungan jarak jauh dengan komunikasi lebih mudah.</li>
        <li>Membantu dalam dunia profesional untuk membangun jaringan dan peluang kerja.</li>
        <li>Meningkatkan kesadaran sosial melalui kampanye dan informasi penting.</li>
      </ul>

      <p>
        Media Sosial yang Menjauhkan<br />
        Meskipun banyak manfaatnya, media sosial juga memiliki dampak negatif:
      </p>
      <ul>
        <li>Mengurangi interaksi tatap muka dan hubungan sosial nyata.</li>
        <li>Menimbulkan perasaan kesepian akibat interaksi yang dangkal.</li>
        <li>FOMO (Fear of Missing Out) yang meningkatkan kecemasan sosial.</li>
        <li>Polarisasi sosial akibat algoritma yang membatasi sudut pandang kita.</li>
      </ul>

      <p>
        Kesimpulan<br />
        Media sosial bisa menjadi alat yang luar biasa untuk menghubungkan,
        tetapi juga bisa menjauhkan jika tidak digunakan dengan bijak. Keseimbangan
        antara kehidupan online dan offline sangat penting agar kita tetap terhubung
        tanpa kehilangan makna dalam hubungan sosial.
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
