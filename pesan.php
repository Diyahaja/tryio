<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Form Pesanan</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@700&family=Rowdies&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@700&family=Nova+Square&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@700&family=Hedvig+Letters+Serif:opsz@12..24&family=Nova+Square&display=swap');
    body, h1, h2, h3, p, ul, li {
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Hedvig Letters Serif', serif;
      line-height: 1.6;
    background-color: #f4f4f4;
  }
  
  header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: #6a453b;
    color: #e9e2ce;
    z-index: 1000;
    transition: background-color 0.5s ease-in-out;
  }

  h1 {
    margin: 0;
  }

  nav ul {
    list-style-type: none;
    display: flex;
  }

  nav ul li {
    margin-right: 20px;
  }

  nav ul li a {
    color: #fff;
    text-decoration: none;
    padding-right: 10px;
  }

  .logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #fff; /* Warna teks untuk logo */
    font-weight: bold; /* Style teks yang lebih tebal */
    padding-left: 20px;
    font-family: 'Rowdies', sans-serif;
    font-size: 20px;
  }
  
  .logo img {
    width: 50px; /* Atur lebar gambar sesuai kebutuhan */
    margin-right: 10px; /* Jarak antara gambar dan teks */
  }

  .header a {
    padding-left: 80px;
  }
  .main {
    max-width: 350px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  .main .back-button {
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 12px;
            text-transform: uppercase;
            color: #fff;
            background-color: #6a453b;
            border: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
        }

        .main .back-button:hover {
            background-color: #ccc;
            color: #6a453b;
        }
  
  h2 {
    color: #333;
    text-align: center;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    font-size: 13px;
    margin-top: 10px;
    color: #555;
  }
  
  input,
  select,
  button {
    margin-top: 5px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-weight: bold;
    font-size: 12px;
    font-family: 'Hedvig Letters Serif', serif;
    text-transform: uppercase;
  }
  
  select {
    cursor: pointer;
  
  }
  button {
    background-color: #6a453b;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 10px;
    margin-bottom: 10px;
  }
  
  button:hover {
    background-color: #ccc;
    color: #6a453b;
  }
  
  .button {
    text-align: center;
    margin-top: 20px;
  }
  
  footer {
    background-color: #6a453b;
    color: #fff;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center; /* Menyusun elemen secara vertikal di tengah */
  }
  
  .footer-left {
    display: flex;
    align-items: center;
  }
  
  .footer-left img {
    width: 50px;
    margin-right: 10px;
  }
  
  .social-icons {
    display: flex;
    align-items: center;
  }
  
  .social-icons a {
    display: flex;
    justify-content: center;
    align-items: center; /* Menyusun ikon secara vertikal dan horisontal di tengah */
    width: 30px;
    height: 30px;
    background-color: #fff;
    margin-right: 5px;
    color: #333;
    border-radius: 50%;
    text-decoration: none;
  }
  
  .footer-right {
    text-align: right;
  }    
  .footer-right h3 {
    font-family: 'Rowdies', sans-serif;
  }
  .footer-right p {
    font-family: 'Hedvig Letters Serif', serif;
    font-size: 12px;
  }
  </style>
</head>
<body>
  <header>
    <a href="index.html" class="logo"><img src="./img/logo1.png" alt="AA">AA MEDIA</a>
    <nav>
      <ul>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="catalog.html">Katalog</a></li>
        <li><a href="pesan.php">Pesan</a></li>
        <li><a href="bayar.html">Bayar</a></li>
        <li><a href="trial.html">Hubungi Kami</a></li>
      </ul>
    </nav>
  </header>
  <br> <br> <br>
  <div class="main">
    <h2>Silahkan isi pesanan anda</h2>
    <form action="process.php" method="post">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" required>
    
      <label for="alamat">Alamat</label>
      <input type="text" id="alamat" name="alamat" required>
    
      <label for="nomor">Nomor Telepon</label>
      <input type="text" id="nomor" name="nomor" required>
    
      <label for="model-tv">Nama Barang</label>
      <select id="model-tv" name="model-tv" required>
        <option value="">Pilih</option>
        <option value="PAKET LENGKAP">PAKET LENGKAP</option>
        <option value="TV LED 50 Inc">TV LED 50 Inc</option>
        <option value="Bracket TV">Bracket TV</option>
        <option value="Kabel HDMI">Kabel HDMI</option>
        <option value="Kabel UTP">Kabel UTP</option>
        <option value="Splitter HDMI">Splitter HDMI</option>
      </select>

      <label for="durasi-sewa">Durasi Sewa (Hari)</label>
      <input type="number" id="durasi-sewa" name="durasi-sewa" required>
      
      <label for="metode-pembayaran">Metode Pembayaran</label>
      <select id="metode-pembayaran" name="metode-pembayaran" required>
        <option value="">Pilih</option>
        <option value="1">Tunai</option>
        <option value="2">Transfer</option>
        <option value="3">Kredit</option>
      </select>
    
      <label for="tanggal-pemesanan">Tanggal Pemesanan</label>
      <input type="date" id="tanggal-pemesanan" name="tanggal-pemesanan" required>
      <button type="submit" name="submit" value="<?php echo date("h:i:sa"); ?>">Kirim</button>
      <a href="catalog.html" class="back-button">Kembali</a>
    </form>
  </div>
  <footer>
    <div class="footer-left">
      <img src="./img/logo1.png" alt="Logo Perusahaan">
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f" ></i></a>
        <a href="https://instagram.com/aamedia_official?igshid=NzZlODBkYWE4Ng=="><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=6282117951221&text=Terima%20kasih%20telah%20menghubungi%20AAMedia%20Kudus.%20Silakan%20beri%20tahu%20apa%20yang%20dapat%20kami%20bantu"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
    <div class="footer-right">
      <h3>AA MEDIA</h3>
      <p>Berlokasi di Desa Kaliwungu RT 06 RW 06 Kecamatan Kaliwungu Kabupaten Kudus.</p>
      <p>Vendor penyewaan TV LED terbaik dan terpercaya di Kudus.</p>
    </div>
  </footer>
  <script>
    window.addEventListener('scroll', function() {
      var header = document.querySelector('header');
      var scrollPosition = window.scrollY;
    
      if (scrollPosition > 100) { // Ubah angka sesuai dengan posisi scroll yang diinginkan
        header.style.backgroundColor = 'rgba(106, 69, 59, 0.7)'; // Warna transparan saat discroll
      } else {
        header.style.backgroundColor = '#6a453b'; // Kembalikan ke warna latar belakang awal
      }
    });
    </script>
</body>
</html>
