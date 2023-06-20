# UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse

### Projek Akhir Praktikum Pemrograman Web 1
Aminah Nurul Huda - 22/494455/SV/20830

### Tentang Learnmy
Learnmy merupakan platform penyedia kursus pribadi online dan offline. Tersedia kursus untuk beragam bidang, diantaranya adalah olahraga, pemrograman, seni, dan masih banyak lagi. Learnmy memberikan fleksibilitas kepada pengguna dalam memilih kursus yang sesuai dengan minat dan kebutuhan mereka. Dengan Learnmy, pengguna dapat menjelajahi beragam mata pelajaran dan mengambil kursus dengan instruktur terbaik.

Kebutuhan:
- Menghubungkan pengajar dan pembelajar
- Menawarkan mata pelajaran yang beragam
- Menyediakan user experience

Hal yang diharapkan dapat dilakukan dengan website Learmy:
- Pendaftaran Akun: Pengguna dapat membuat akun pribadi di Learnmy untuk mengakses fitur-fitur yang disediakan.
- Pencarian Kelas/Kursus: Pengguna dapat melakukan pencarian terhadap kelas/kursus yang tersedia di platform Learnmy. Mereka dapat mencari berdasarkan mata pelajaran, kategori, atau kriteria lain yang relevan.
- Pembuatan Kelas/Kursus oleh Pengajar: Pengajar yang ingin berbagi pengetahuan mereka dapat membuat kelas/kursus di Learnmy. Mereka dapat mengatur informasi terkait kursus mereka.
- Pendaftaran pada Kelas/Kursus oleh Siswa: Siswa dapat mendaftar pada kelas/kursus yang mereka minati.

### Kriteria Penilaian
1. Desain rapi mengikuti kaidah atau prinsip desain
![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/64b40fd6-adf4-4e3e-b14c-5ea9e0d5bb05)
![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/f818de10-eee6-4c14-a64c-af0aaa208b75)
![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/a9b3b2c4-7c29-40d9-bcb0-4b0bcbb35ab7)
![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/d4b6da0f-2f3b-4c7e-9bb6-2525e0b7d9d6)
![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/e848bbe8-9e4b-4236-8ee2-7f394425e089)
![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/a76c0550-d561-4bb4-acad-87fd617b7615)

2. Website responsive, dapat diakses melalui device: Mobile, Tablet dan Laptop
Berikut cuplikan media query yang digunakan agar website responsive
```csss
@media only screen and (max-width: 700px) {
  .logo {
    position: fixed;
    top: 4%;
    left: 7%;
  }
  nav {
    position: fixed;
    top: 0;
    z-index: 100;
    display: inline-block;
    width: 100%;
    padding: 100px 7% 0;
    background-color: #000;
    text-align: right;
    max-height: 100px;
    overflow: hidden;
    transition: max-height 0.5s;
  }
  nav .nav-links li {
    margin: 10px 0;
    display: block;
  }
  .register-btn {
    margin: 15px 0 30px;
    display: inline-block;
  }
  }
```

![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/0927e0f5-8220-45de-a67e-eba728ce8d72)


Berikut cuplikan kode html agar tampilan responsive menggunakan bootstrap
```html
    <div class="container my-4">
      <div class="d-flex justify-content-center">
        <span class="badge d-flex px-2 align-items-center">
        <span
          class="badge d-flex p-2 align-items-center bg-opacity-25 border border-primary rounded-pill"
        >
          <span class="px-2 lead">Online</span>
          <a href="#">
            <svg class="bi ms-1" width="16" height="16">
              <use xlink:href="#x-circle-fill" />
            </svg>
          </a>
        </span>
      </div>
    </div>
```
   
3. Direct feedback ke pengguna website
Berikut tampilan
![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/1c0096eb-727a-4ca1-a53d-f2041f7747a3)

   
4. Konten dinamis dari database
![image](https://github.com/aminhnh/UASPPW1_22-494455-SV-20830_LEARMY-PrivateCourse/assets/109867158/b0fdce99-cdbc-4a22-af88-325a9725e11c)
```php
  <?php
  include("connection.php");

  $query = "SELECT * FROM `ppw_projekakhir`.`city`";
  $result = mysqli_query($con, $query);
  $city_option = "";
  if ($result && mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      $city_option .= '<option value="'.$row["city_id"].'">'.$row["name"].', '.$row["province"].'</option>';
    }
  } else {
    $city_option = '<option value="">No cities found</option>';
  }
``

