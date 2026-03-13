<div align="center">
  <br />

  <h1>LAPORAN PRAKTIKUM <br>
  APLIKASI BERBASIS PLATFORM
  </h1>

  <br />

  <h3>Tugas COTS <br>
  CihuyStore
  </h3>

  <br />

  <img src="images/logo.jpeg" alt="Logo" width="300">

  <br />
  <br />
  <br />

  <h3>Disusun Oleh :</h3>

  <p>
    <strong>Fahreza Ilham Wicaksono</strong><br>
    <strong>2311102191</strong><br>
    <strong>S1 IF-11-REG01</strong>
  </p>

  <br />

  <h3>Dosen Pengampu :</h3>

  <p>
    <strong>Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom</strong>
  </p>
  
  <br />
  <br />
    <h4>Asisten Praktikum :</h4>
    <strong> Apri Pandu Wicaksono </strong> <br>
    <strong>Rangga Pradarrell Fathi</strong>
  <br />

  <h3>LABORATORIUM HIGH PERFORMANCE
 <br>FAKULTAS INFORMATIKA <br>UNIVERSITAS TELKOM PURWOKERTO <br>2026</h3>
</div>

<hr>

## Deskripsi Tugas

Buatlah sebuah halaman web sederhana untuk menampilkan data produk. Pada halaman tersebut terdapat form input dan tabel data produk.
Ketentuan:

1. Gunakan Bootstrap untuk tampilan halaman.
2. Buat form input dengan data:
   * Nama Produk
   * Kategori
   * Harga
3. Data yang diinput dari form harus ditampilkan pada tabel.
4. Gunakan JQuery Datatable pada tabel.
5. Tambahkan tombol hapus pada setiap data di tabel.
6. Pastikan tabel memiliki fitur search dan pagination.
7. Bikin crud sederhana dengan sistem penyimpanan dengan mapping object
  
Output:

* Halaman memiliki form input produk
* Data yang dimasukkan muncul di tabel
* Tabel menggunakan Datatable
* Tampilan menggunakan Bootstrap

## Pengerjaan

### Penggunaan Bootstrap

Pada tugas ini, Bootstrap 5.3 digunakan sebagai framework CSS dan JavaScript untuk mempercepat proses pembuatan tampilan antarmuka (`UI`) yang responsif, konsisten, dan mudah dikembangkan. Pada website ini, Bootstrap diimpor menggunakan Content Delivery Network (`CDN`) sehingga proses pemuatan library menjadi lebih cepat tanpa perlu mengunduh dan menyimpan file Bootstrap secara lokal.

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
```

#### Bootstrap Grid dan Column

Bootstrap grid dan column umumnya digunakan untuk mengatur tata letak struktur HTML pada sebuah website. Kelas-kelas yang disediakan oleh Bootstrap memungkinkan pengembang untuk membangun tampilan berbasis kolom yang bersifat responsif, sehingga elemen dapat menyesuaikan diri dengan berbagai ukuran layar.

Pada website ini, tata letak terutama menggunakan kombinasi kelas `.row` dan `.col-md-*` dengan `.container-fluid` sebagai elemen pembungkus (`parent`). `.container-fluid` digunakan agar konten dapat memanfaatkan lebar layar secara penuh, sedangkan `.row` berfungsi sebagai pembungkus baris dalam sistem grid Bootstrap. Sementara itu, kelas `.col-md-*` digunakan untuk menentukan lebar kolom pada breakpoint medium (`md`) ke atas, sehingga tampilan lebih optimal ketika website dibuka pada perangkat desktop.

```html
<div class="container-fluid">
    <div class="row justify-content-center my-5">
        ...
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">\
            ...
       </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-10" data-aos="fade-up" data-aos-delay="150">
            ...
       </div>
    </div>
        
```

Kombinasi kelas tersebut digunakan untuk membagi halaman menjadi tiga segmen utama, yaitu: segmen `hero` sebagai bagian pengenalan website, segmen `form product` yang digunakan untuk menambahkan data produk, dan segmen `tabel` yang menampilkan daftar produk yang telah dimasukkan. Dengan memanfaatkan sistem grid Bootstrap, ketiga segmen tersebut dapat ditata secara rapi, konsisten, dan tetap responsif pada berbagai ukuran layar.

![Output 1](images/image1.png)

#### Styling

Pada website ini, sebagian besar styling dilakukan dengan memanfaatkan kelas-kelas bawaan dari Bootstrap tanpa menambahkan CSS kustom yang kompleks. Pendekatan ini membuat proses pengembangan menjadi lebih cepat sekaligus menjaga konsistensi tampilan antarkomponen.

Tampilan website menerapkan tema gelap (`dark theme`) dengan menggunakan beberapa kelas Bootstrap, seperti `.bg-dark`, `.bg-black`, dan `.text-white` untuk mengatur warna latar belakang serta teks. Selain itu, warna `primary` juga digunakan sebagai aksen visual melalui kelas seperti `.text-primary`, `.btn-primary`, `.border-primary`, dan kelas serupa lainnya. Kombinasi kelas-kelas tersebut membantu menciptakan tampilan yang kontras, modern, dan tetap konsisten di seluruh halaman. Contoh penerapan styling tersebut dapat dilihat pada potongan kode berikut.

```html
<h1 class="display-4 fw-bold text-white mb-3">
    Welcome to<br>
    <span class="text-primary">CihuyStore</span>
</h1>

<p class="text-white-50 fs-6 mb-0" style="max-width:500px; line-height:1.8;">Temukan koleksi periferal gaming terbaik — mouse presisi tinggi, keyboard mekanikal, monitor responsif, headphone imersif, hingga IEM premium. Harga terbaik, kualitas terjamin. Cihuy~
</p>
```

![Output 2](images/image2.png)

#### Utility Class

Utility class pada Bootstrap digunakan untuk memberikan styling tambahan atau penyesuaian detail tanpa perlu menulis CSS kustom. Dengan utility class, pengembang dapat dengan cepat mengatur posisi, jarak antar elemen, tipografi, serta tampilan visual lainnya secara langsung pada elemen HTML. Pada website ini, beberapa utility class Bootstrap digunakan untuk mempercantik sekaligus merapikan tampilan antarkomponen. Beberapa di antaranya adalah sebagai berikut:

* .position-*
Digunakan untuk mengatur posisi elemen, seperti relative, absolute, atau fixed, sehingga elemen dapat ditempatkan sesuai kebutuhan pada layout.
* .border dan variasinya
Digunakan untuk menambahkan garis tepi pada elemen, misalnya untuk memperjelas batas antar komponen.
* .fw-* (font weight)
Mengatur ketebalan teks, misalnya fw-bold untuk membuat teks menjadi tebal.
* .fs-* (font size)
Mengatur ukuran teks agar lebih menonjol atau menyesuaikan dengan hierarki informasi.
* .m-* (margin)
Digunakan untuk mengatur jarak luar antar elemen sehingga tata letak terlihat lebih rapi.
* .p-* (padding)
Mengatur jarak dalam suatu elemen agar konten tidak terlalu rapat dengan batas elemen.
* .rounded dan variasinya
Memberikan sudut yang membulat pada elemen, sehingga tampilan terlihat lebih modern dan halus.
* .text-uppercase
Mengubah teks menjadi huruf kapital untuk memberikan penekanan pada judul atau label.
* .text-center
Mengatur perataan teks agar berada di tengah.

Contoh penerapan utility class tersebut dapat dilihat pada potongan kode berikut.

```html
<!-- potongan segmen hero -->
<div class="position-relative p-5 d-flex flex-column justify-content-center" style="min-height:400px;">
    <span
        class="badge bg-primary bg-opacity-25 text-primary border border-primary border-opacity-50 rounded-pill px-3 py-2 mb-3 fs-6 fw-semibold align-self-start">
        <i class="ph-fill ph-storefront me-1"></i> Official Gaming Store
    </span>

    <h1 class="display-4 fw-bold text-white mb-3">
        Welcome to<br>
        <span class="text-primary">CihuyStore</span>
    </h1>

    <p class="text-white-50 fs-6 mb-0" style="max-width:500px; line-height:1.8;">
        Temukan koleksi periferal gaming terbaik — mouse presisi tinggi, keyboard mekanikal,
        monitor responsif, headphone imersif, hingga IEM premium. Harga terbaik, kualitas terjamin.
        Cihuy~
    </p>
</div>

<!-- potongan segmen form product -->
<p class="text-primary text-uppercase fw-bold small mb-0">Inventory</p>
<h2 class="fw-bold text-white mb-1">Add Product</h2>
<hr class="border border-primary border-2 opacity-75 mt-2 mb-4 w-25">
```

### Form

Pada website ini terdapat form input produk yang digunakan untuk menambahkan data produk ke dalam sistem. Tampilan form menggunakan komponen form dari Bootstrap yang dipadukan dengan `input group` serta ikon untuk memberikan tampilan yang lebih informatif dan menarik, ditambah dengan styling yang sebelumnya disebutkan.

Form tersebut memiliki beberapa field utama sebagai berikut:

* Nama Produk (`product_name`)
Menggunakan tipe input `text` yang berfungsi untuk memasukkan nama produk yang akan ditambahkan.
* Kategori (`category`)
Menggunakan elemen `select` agar pengguna dapat memilih kategori produk dari daftar yang tersedia, sehingga memudahkan proses klasifikasi produk.
* Harga (`price`)
Menggunakan tipe input `number` untuk memasukkan nilai harga produk secara numerik sehingga lebih terstruktur dan meminimalkan kesalahan input.

```html
<div class="row justify-content-center mb-5">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-black border border-primary border-opacity-50 rounded-4 p-4 p-md-5">

                    <p class="text-primary text-uppercase fw-bold small mb-0">Inventory</p>
                    <h2 class="fw-bold text-white mb-1">Add Product</h2>
                    <hr class="border border-primary border-2 opacity-75 mt-2 mb-4 w-25">

                    <form id="addProductForm" action="#">
                        <div class="mb-3">
                            <label for="product_name"
                                class="form-label text-white-50 text-uppercase fw-semibold small">Name</label>

                            <div class="input-group">
                                <span class="input-group-text bg-black border-secondary text-primary">
                                    <i class="ph-duotone ph-package fs-5"></i>
                                </span>

                                <input type="text" class="form-control bg-black border-secondary text-white"
                                    id="product_name" placeholder="e.g. Logitech G Pro X">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="category"
                                class="form-label text-white-50 text-uppercase fw-semibold small">Category</label>

                            <select class="form-select bg-black border-secondary text-white" id="category"
                                aria-placeholder="Select Category">
                                <option value="mouse"> Mouse</option>
                                <option value="keyboard"> Keyboard</option>
                                <option value="monitor"> Monitor</option>
                                <option value="headphone"> Headphone</option>
                                <option value="iem"> IEM</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="price"
                                class="form-label text-white-50 text-uppercase fw-semibold small">Price</label>

                            <div class="input-group">
                                <span class="input-group-text bg-black border-secondary text-primary">
                                    <i class="ph-duotone ph-currency-circle-dollar fs-5"></i>
                                </span>

                                <input type="number" class="form-control bg-black border-secondary text-white"
                                    id="price" placeholder="0">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-5">
                            <button type="submit" class="btn btn-primary fw-bold px-5">
                                <i class="ph-fill ph-plus-square me-1"></i> Save Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
```

![Output 3](images/image3.png)

### Penggunaan Datatable dan JQuery



#### Datatable

#### JQuery

### Fitur pada Tabel

### CRUD

### Fitur Tambahan

### 1. Buka kembali halaman ramadan dan tambahkan button atau semacam nya ketika di klik akan menampilkan modal "selamat anda mendapatkan THR" buat se interaktif itu dansebagus mungkin

#### Source code

```html
<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">

<!-- 2311102191 -->
<!-- FAHREZA ILHAM WICAKSONO -->
<!-- 👍🏿 -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ramadan Mubarak 1447 H</title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌙</text></svg>">

    <!-- library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/brands/boxicons-brands.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- notif untuk 100.000 -->
<div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
    <div id="thrToast" class="toast text-bg-success border-0">
        <div class="toast-body fw-semibold">
            🎉 MasyaAllah! Kamu mendapatkan THR Rp100.000!
        </div>
    </div>
</div>

<body class="bg-light text-dark">

    <!-- navbar -->
    <nav class="navbar navbar-white bg-light border-bottom border-success sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2" href="#">
                <i class="bxf bx-moon-stars"></i>
                Ramadan 1447 H
            </a>

            <div class="ms-auto text-success fw-semibold">
                Idul Fitri: <span id="eidCountdown">Loading...</span>
            </div>
        </div>
    </nav>

    <!-- hero -->
    <div class="bg-success-subtle text-center p-5 border-bottom border-success-subtle">
        <div class="container p-4">
            <div class="mb-3">
                <i class="bxf bx-islam text-success-emphasis fs-1"></i>
            </div>

            <p class="text-success-emphasis text-uppercase fst-italic fw-semibold letter-spacing mb-2">
                <i class="bxf bx-sparkles-alt me-2"></i>1447 Hijriyyah<i class="bxf bx-sparkles-alt mx-2"></i>
            </p>

            <h1 class="display-4 fw-bold text-success mb-1">رَمَضَان مُبَارَك</h1>
            <h2 class="display-5 fw-bold text-white mb-5">Ramadan Mubarak</h2>
            <p class="lead text-white col-md-6 mx-auto mb-4">
                Selamat memasuki bulan suci Ramadan. Semoga ibadah kita diterima,
                dosa-dosa diampuni, dan hati kita semakin dekat kepada Allah SWT.
            </p>

            <div class="mt-3">
                <i class="bxf bx-sparkles text-light-emphasis fs-5"></i>
                <i class="bxf bx-sparkles text-light-emphasis fs-5"></i>
                <i class="bxf bx-sparkles text-light-emphasis fs-5"></i>
                <i class="bxf bx-sparkles text-light-emphasis fs-5"></i>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-success btn-lg fw-bold px-4 py-2 shadow" id="thr-btn"
                    data-bs-toggle="modal" data-bs-target="#thrModal">
                    <i class="bxf bx-clover text-light-emphasis me-1 fs-5"></i> Saya Merasa Beruntung!
                </button>
            </div>
        </div>
    </div>

    <!-- amalan -->
    <div id="amalan" class="bg-white-emphasis p-5 border-bottom border-success-subtle">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-success text-uppercase fw-semibold mb-1">
                    Amalan Utama
                </p>

                <h3 class="h2 fw-bold text-success mb-0">Pilar Ramadan</h3>
                <hr class="border-success-subtle opacity-25 col-2 mx-auto mt-3">
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-success-subtle border border-success h-100 text-center p-2">
                        <div class="card-body">
                            <i class="bxf bx-moon text-success-emphasis fs-1 mb-3"></i>
                            <h4 class="card-title fw-bold text-light-emphasis">Puasa</h4>
                            <p class="card-text text-secondary-emphasis">Menahan diri dari makan, minum, dan hal yang
                                membatalkan puasa dari fajar hingga terbenam matahari</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-success-subtle border border-success h-100 text-center p-2">
                        <div class="card-body">
                            <i class="fa-solid fa-book-quran text-success-emphasis fs-1 mb-3"></i>
                            <h4 class="card-title fw-bold text-light-emphasis">Tadarus Al-Qur'an</h5>
                                <p class="card-text text-secondary-emphasis">Memperbanyak membaca dan mengkaji
                                    Al-Qur'an. Bulan
                                    Ramadan adalah bulan diturunkannya Al-Qur'an</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-success-subtle border border-success h-100 text-center p-2">
                        <div class="card-body">
                            <i class="bxf bx-mosque text-success-emphasis fs-1 mb-3"></i>
                            <h4 class="card-title fw-bold text-light-emphasis">Shalat Tarawih</h4>
                            <p class="card-text text-secondary-emphasis">Shalat sunnah khusus di malam Ramadan,
                                dilaksanakan berjamaah di masjid setelah shalat Isya</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-success-subtle border border-success h-100 text-center p-2">
                        <div class="card-body">
                            <i class="fa-solid fa-hand-holding-heart text-success-emphasis fs-1 mb-3"></i>
                            <h4 class="card-title fw-bold text-light-emphasis">Sedekah & Zakat</h4>
                            <p class="card-text text-secondary-emphasis">Memperbanyak sedekah dan menunaikan zakat
                                fitrah
                                sebagai bentuk kepedulian kepada sesama</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-success-subtle border border-success h-100 text-center p-2">
                        <div class="card-body">
                            <i class="fa-solid fa-hands text-success-emphasis fs-1 mb-3"></i>
                            <h4 class="card-title fw-bold text-light-emphasis">I'tikaf</h4>
                            <p class="card-text text-secondary-emphasis">Berdiam diri di masjid, terutama pada 10 malam
                                terakhir Ramadan untuk meraih Lailatul Qadar</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-success-subtle border border-success h-100 text-center p-2">
                        <div class="card-body">
                            <i class="bxf bx-moon-star text-success-emphasis fs-1 mb-3"></i>
                            <h5 class="card-title fw-bold text-light-emphasis">Lailatul Qadar</h5>
                            <p class="card-text text-secondary-emphasis">Malam yang lebih baik dari seribu bulan. Dicari
                                pada malam ganjil di 10 hari terakhir Ramadan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ayat qur'an -->
    <div class="bg-success-subtle p-5 border-bottom border-success-subtle">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <i class="bxf bx-quote-left text-success-emphasis fs-1 opacity-50 mb-3"></i>
                    <p class="text-success-emphasis fw-bold mb-3 fs-1">
                        شَهْرُ رَمَضَانَ الَّذِيْٓ اُنْزِلَ فِيْهِ الْقُرْاٰنُ
                    </p>

                    <p class="lead text-light-emphasis fst-italic mb-5">
                        "Bulan Ramadan adalah (bulan) yang di dalamnya diturunkan Al-Qur'an,
                        sebagai petunjuk bagi manusia dan penjelasan-penjelasan mengenai
                        petunjuk itu dan pembeda (antara yang benar dan yang batil)."
                    </p>

                    <span class="badge bg-light text-success px-3 py-2 fs-6">
                        <i class="fa-solid fa-book-quran me-2"></i>QS. Al-Baqarah: 185
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- niat dan doa puasa -->
    <div id="doa" class="bg-light py-5 border-bottom border-success-subtle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card bg-success-subtle border border-success text-center h-100 p-4">
                        <div class="card-body">
                            <i class="bxf bx-night-light text-success-emphasis fs-2 mb-3"></i>
                            <h4 class="card-title fw-bold text-light-emphasis mb-3">Niat Puasa</h4>
                            <p class="text-success-emphasis mb-3 fs-3">
                                نَوَيْتُ صَوْمَ غَدٍ عَنْ أَدَاءِ فَرْضِ شَهْرِ رَمَضَانَ لِلَّهِ تَعَالَى
                            </p>

                            <p class="card-text text-secondary-emphasis fst-italic">
                                "Saya niat berpuasa esok hari untuk menunaikan kewajiban
                                puasa di bulan Ramadhan karena Allah Ta'ala."
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card bg-success-subtle border border-success text-center h-100 p-4">
                        <div class="card-body">
                            <i class="bxf bx-moon-crater text-success-emphasis fs-2 mb-3"></i>
                            <h4 class="card-title fw-bold text-light-emphasis mb-3">Do'a Berbuka Puasa</h4>
                            <p class="text-success-emphasis mb-3 fs-3">
                                اَللّهُمَّ لَكَ صُمْتُ وَبِكَ آمَنْتُ وَعَلَى رِزْقِكَ أَفْطَرْتُ
                            </p>

                            <p class="card-text text-secondary-emphasis fst-italic">
                                "Ya Allah, untuk-Mu aku berpuasa, kepada-Mu aku beriman,
                                dan dengan rezeki-Mu aku berbuka."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- tips -->
    <div class="bg-success-subtle py-5 border-bottom border-success-subtle">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-success-emphasis text-uppercase fw-semibold mb-1">
                    <i class="fa-solid fa-lightbulb me-2"></i>Panduan
                </p>

                <h3 class="h2 fw-bold text-light-emphasis mb-0">Tips Ramadan Produktif</h3>
                <hr class="border-success opacity-25 col-2 mx-auto mt-3">
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="d-flex align-items-start gap-3 bg-light border border-success rounded-3 p-3 h-100">
                        <i class="bxf bx-fork-knife text-success fs-4 mt-1 flex-shrink-0"></i>

                        <div>
                            <h6 class="fw-bold text-success mb-1">Jaga Asupan Sahur</h6>
                            <p class="text-secondary mb-0">Konsumsi makanan bergizi dan berserat tinggi agar
                                energi tahan sepanjang hari.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start gap-3 bg-light border border-success rounded-3 p-3 h-100">
                        <i class="fa-solid fa-droplet text-success fs-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h6 class="fw-bold text-success mb-1">Perbanyak Minum Air</h6>
                            <p class="text-secondary mb-0">Penuhi kebutuhan cairan antara Maghrib dan Sahur agar
                                tubuh tidak dehidrasi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start gap-3 bg-light border border-success rounded-3 p-3 h-100">
                        <i class="bxf bx-biceps text-success fs-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h6 class="fw-bold text-success mb-1">Tetap Aktif Berolahraga</h6>
                            <p class="text-secondary mb-0">Olahraga ringan menjelang buka puasa membantu
                                metabolisme tetap baik.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start gap-3 bg-light border border-success rounded-3 p-3 h-100">
                        <i class="fa-solid fa-brain text-success fs-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h6 class="fw-bold text-success mb-1">Kelola Waktu dengan Bijak</h6>
                            <p class="text-secondary mb-0">Buat jadwal harian agar ibadah, pekerjaan, dan
                                istirahat bisa berjalan seimbang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-light py-4 border-top border-success-subtle">
        <div class="container text-center">
            <p class="text-success fw-bold mb-1">رَمَضَان كَرِيم
            </p>
            <p class="text-secondary small text-uppercase mb-3" style="letter-spacing:.25em;">Ramadan Kareem — 1447 H
            </p>

            <div class="d-flex justify-content-center gap-3 mb-3">
                <i class="bxf bx-sparkles-alt text-success opacity-50"></i>
                <i class="bxf bx-moon text-success"></i>
                <i class="bxf bx-moon-stars text-success fs-5"></i>
                <i class="bxf bx-moon text-success"></i>
                <i class="bxf bx-sparkles-alt  text-success opacity-50"></i>
            </div>

            <p class="text-secondary-emphasis small mb-0">
                Semoga Ramadan ini membawa berkah, ampunan, dan kebahagiaan untuk kita semua.
            </p>
        </div>
    </footer>

    <!-- THR Modal -->
    <div class="modal fade" id="thrModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 overflow-hidden shadow-lg">
                <div id="envelopeClosed" class="bg-success-subtle text-center p-5" style="cursor: pointer;"
                    onclick="openEnvelope()">
                    <div class="text-success-emphasis fs-1"><i class="bxf bx-envelope-open"></i></div>
                    <h4 class="text-white fw-semibold mt-3 mb-0">Ketuk untuk membuka!</h4>
                    <p class="text-lead fst-italic text-white-50">Gold! Gold! Gold!</p>
                </div>

                <div id="envelopeOpened" class="bg-success-subtle text-center p-5 d-none">
                    <div class="text-success-emphasis fs-1"><i class="bxf bx-currency-note"></i></div>

                    <p class="text-white-50 mt-2 mb-1">THR Lebaran 1447H</p>
                    <h1 id="thrAmount" class="text-success-emphasis fw-bold my-2">Rp 0</h1>
                    <p id="thrMessage" class="text-lead text-light-emphasis small mb-4"></p>

                    <button class="btn btn-success btn-md px-4 fw-semibold" data-bs-dismiss="modal">
                        Alhamdulillah~
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <!-- library untuk efek confetti -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
</body>

</html>

<script>
    // tanggal lebaran
    const eidDate = new Date("March 20, 2026 00:00:00").getTime();

    // fungsi update countdown
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = eidDate - now;

        if (distance < 0) {
            document.getElementById("eidCountdown").innerHTML = "Selamat Idul Fitri!";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("eidCountdown").innerHTML =
            days + "h " + hours + "j " + minutes + "m " + seconds + "d";
    }

    setInterval(updateCountdown, 1000);
    updateCountdown();

    // jumlah thr
    const thrList = [
        { amount: 10000, message: "Kena nggo tuku es teh 😄" },
        { amount: 20000, message: "Alhamdulillah, cihuy! 😊" },
        { amount: 50000, message: "Mayan, nggo tuku bensin! 🛵" },
        { amount: 75000, message: "Semoga berkah ✨" },
        { amount: 100000, message: "Pesta Pora! 🎉" },
    ];

    // fungsi untuk membuat probabilitas thr
    function getRandom() {
        const weights = [40, 30, 18, 9, 3]; // probabilitas sesuai index thr list
        let random = Math.random() * 100, total = 0;

        for (let i = 0; i < weights.length; i++) {
            total += weights[i];
            if (random < total) return thrList[i];
        }

        return thrList[0];
    }

    // fungsi untuk membuka modal amplop
    function openEnvelope() {
        const pick = getRandom();
        const thr = 'Rp ' + pick.amount.toLocaleString('id-ID');

        document.getElementById('thrAmount').textContent = thr;
        document.getElementById('thrMessage').textContent = pick.message;

        document.getElementById('envelopeClosed').classList.add('d-none');
        document.getElementById('envelopeOpened').classList.remove('d-none');

        if (pick.amount === 100000) {
            // munculkan toast
            const toast = new bootstrap.Toast(document.getElementById('thrToast'));
            toast.show();

            // munculkan confetti
            confetti({
                particleCount: 300,
                spread: 150,
                origin: { y: 0.6 }
            });
        }
    }

    // untuk menutup modal
    document.getElementById('thrModal').addEventListener('hidden.bs.modal', () => {
        document.getElementById('envelopeClosed').classList.remove('d-none');
        document.getElementById('envelopeOpened').classList.add('d-none');
    });
</script>
```

#### Penjelasan kode

Untuk membuat fitur menampilkan thr saya menggunakan modal yang berperan seperti amplop dan nantinya akan muncul ketika suatu button di klik. Modal menggunakan format styling dari bootstrap dengan tambahan dua `div` khusus yang akan menentukan state, `div` pertama menggunakan id `envelopeClosed` ini adalah keadaan dimana amplop belum dibuka. Untuk berganti state saya menambahkan atribut `onClick` pada div agar ketika diklik menjalankan fungsi `openEnvelope()` pada javascript. Fungsi tersebut akan meng-generate jumlah thr dan menampilkanya pada html. Fungsi untuk generate thr dinamakan `getRandom()`, di dalam fungsi tersebut akan melakukan pemilihan acak berdasarkan probabilitas (pada variabel `const weights`) dari thr list (pada array `const thrList`). Untuk menampilkanya pada html digunakan metode `textContent`.

Untuk menampilkan div dengan id `envelopeOpened` digunakan metode `classList.add('nama-kelas')` dan `classList.remove('nama-kelas')` untuk menghilangkan div `envelopeClosed`. Dari thr list terdapat jumlah terbesar yang bisa muncul maka ditambahkan efek tambahan ketika mendapatkan jumlah tersebut dengan tambahan `toast` dari bootstrap dan efek confetti dari library tambahan `confetti.browser.min.js`.

Elemen-elemen yang telah disebutkan sebelumnya memiliki atribut tambahan berupa `id`. Atribut ini digunakan karena pada JavaScript, khususnya saat melakukan manipulasi DOM, kita dapat menggunakan selector `document.getElementById` untuk mengakses elemen HTML berdasarkan nilai id tersebut. Dengan adanya id, proses pemilihan elemen menjadi lebih mudah sehingga elemen tersebut dapat diubah atau dimanipulasi melalui JavaScript.

#### Output

![Output 1](images/task_image1.png)
