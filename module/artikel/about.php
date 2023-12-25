<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<body>
    <style>
  body {
    font-family: Tahoma, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
    display: grid;
    justify-content: center;
    border-radius: 20px;
  }

  h2 {
    text-align: center;
  }
  
  nav {
      background: #8ec3a5;
      margin: 0;
      padding: 8px;
  }
  
  a{
      text-decoration: none;
      padding: 5px;
      color:whitesmoke;
      background-color: #333;
      border-radius: 10px;
  }
  
  table {
    border-collapse: collapse;
    margin-top: 20px;
  }
  
  th,
  td {
    border: 1px black solid;
    padding: 7px;
  }
  
  img {
    width: 100px;
  }
  
  .about-img img {
    width: 200px;
    border-radius: 50%;
  }
  
  .tambah, .hapus, .ubah{
    text-decoration: none;
    background-color:#80aba1;
    margin: 2px;
    color: #fff;
    border-radius: 5px;
    padding: 5px;
    font-size: 15px;
  }
  
  a:hover {
    background-color: whitesmoke;
    transform: scale(0.98);
    color: black;
  }
  
  nav a:hover {
    border-radius: 5px;
    padding: 10px;
  }
  
  footer {
      margin-top: 20px;
      border-radius: 20px;
      padding: 5 50px;
      color: #D3D3D3;
  }
  
  h1 {
      background:  #89b2a4;
      margin-bottom: 0;
      padding: 10px;
      color: #fff;
      border-radius: 10px 10px 0 0;
  }
  
  .modular-list, .modular{
    text-align: left;
  }
  
  .about-image img {
    width: 100px;
    height: 150px;
    border-radius: 200%;
}
.contact-content {
    display: flex;
    justify-content: space-around;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

.contact-form h2, p{
    text-align: center;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
    border-radius: 5px;
}

.contact-form button {
    background-color: #98b3a0;;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #4a4949;
}  
</style>
    <div class="container">
        <?php require('../../template/header.php'); ?>
        <div class="about-text">
                <h2>My Story</h2>
                <br>
                <p>Assalamu'alaikum, HI. Perkenalkan, nama saya Muhammad Azwa Dipani, panggil saya "Azwa". Saya adalah seorang mahasiswa di Universitas Pelita Bangsa dan saya berasal dari Fakultas Teknik dengan program studi Teknik Informatika.
                   Saya berusia 19 tahun. Pada usia saya saat ini, saya sangat suka mempelajari hal-hal baru dan saya sangat tertarik dalam menciptakan aplikasi, terutama aplikasi web. Saya ingin belajar banyak tentang dunia pemrograman. Selain itu,
                    saya juga tertarik mempelajari Jaringan Komputer. Kemampuan saya saat ini, saya dapat membuat website sederhana dan aplikasi sederhana. Selain itu, saya juga tertarik dan mahir dalam membuat desain sederhana. Selain itu, saya juga 
                    sedikit terampil dan masih belajar bahasa pemrograman. Saat ini, saya sudah mengenal dan belajar HTML dan CSS, kemudian Python, PHP, dan lainnya. Keinginan saya adalah lulus dari perguruan tinggi tepat waktu dengan IPK yang tinggi,
                     kemudian bekerja di perusahaan besar di mana posisi tersebut sesuai dengan keterampilan saya dan memberikan gaji yang baik. Semoga teman-teman saya dan saya dapat sukses dalam jalur masing-masing... Aamiin.</div>
                <hr>
                    
        </div>
        <?php require('../../template/footer.php'); ?>
    </div>
</body>

</html>