<h2 align="center"><strong>LAPORAN PRAKTIKUM</strong></h2>
<h2 align="center"><strong>APLIKASI BERBASIS PLATFORM</strong></h2>

<br>

<h2 align="center"><strong>MODUL I</strong></h2>
<h2 align="center"><strong> GIT </strong></h2>

<br>

<p align="center">
  
  <img src="images/logo.jpeg" alt="Logo" width="200"/>

</p>

<br>

<p align="center">
  <strong>Disusun Oleh:</strong><br>
  Fahreza Ilham Wicaksono<br>
  2311102191<br>
  S1 IF-11-REG01
</p>

<br>

<p align="center">
  <strong>Dosen Pengampu:</strong><br>
  Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom
</p>

<br />
  <h3>Asisten Praktikum :</h3>
  <p>
    <strong>Apri Pandu Wicaksono</strong><br>
    <strong>Rangga Pradarrell Fathi</strong><br>
  </p>
  <br />
  <h3>LABORATORIUM HIGH PERFORMANCE<br>FAKULTAS INFORMATIKA <br>TELKOM UNIVERSITY PURWOKERTO <br>2026</h3>
</div>
---

## Dasar Teori

### Pengenalan Git

Git adalah salah satu sistem pengontrol versi (Version Control System) pada proyek perangkat lunak yang diciptakan oleh Linus Torvalds. Pengontrol versi bertugas mencatat setiap perubahan pada file proyek yang dikerjakan oleh banyak orang maupun sendiri. Git dikenal juga dengan distributed revision control (VCS terdistribusi), artinya penyimpanan database Git tidak hanya berada dalam satu tempat saja.

### Instalasi Git

Untuk menginstall git bisa membuka link berikut ini [installer github](https://git-scm.com/download/win) untuk mengunduh Git terlebih dahulu. Setelah berhasil mengunduh lakukan instalasi dengan mengikuti arahan pada installer git. Lalu ketika instalasi berhasil bisa mengecek versi git dengan menggunakan command `git -- version`
![Image 1](https://raw.githubusercontent.com/grazeza/ABP-Assigment/main/Modul%202/images/image1.png)

### Penggunaan Git

Git pada umumnya digunakan untuk version controlling suatu software, berikut list penggunaan github:

#### 1. Membuat repositori baru

Perintah `git init` akan membuat sebuah direktori bernama .git di dalam proyek yang akan dikerjakan. Direktori ini digunakan Git sebagai database untuk menyimpan perubahan yang kita lakukan.

#### 2. Menambahkan isi repositori

Untuk menambahkan suatu file ke dalam repositori, dapat langsung menambahkan file ke dalam folder projek yang telah dibuat, sebelum file benar benar tersimpan harus melakukan command `git commit -m “pesan commit”`.

#### 3. Membuat repositori online

Untuk membuat repositori online dapat dilakukan melalui website github.

#### 4. Menyimpan hasil pekerjaan di repositori online

Untuk menyimpan hasil pekerjaan bisa mengikuti langkah langkah berikut:

- a. Ketikan perintah ini, sesuaikan dengan username dan repository Anda:
`git remote add origin https://github.com/usernameanda/namarepo.git`
Perintah ini akan menambahkan repositori online yang ada pada Github kedalam daftar repositori jarak jauh yang ada.
- b. Untuk mengirimkan data yang ada di komputer kalian ke repositori jarak jauh, gunakan perintah ini:
`git push -u origin master`

#### 5. Clone repositori milik orang lain  

Untuk mengclone repositori orang lain bisa mengikuti langkah langkah berikut:

- a. Buka repositori yang akan di-clone pada Github, lalu klik tombol clone.
- b. Copy text yang muncul seperti dibawah ini, ini merupakan url dari repositori tujuan yang akan di clone.
- c. Buka command prompt dan ketikan perintah ini, `git clone [url repositori tujuan]`

## Tugas

### 1. Melakukan setup repository via CLI

### Output

![Output 1](https://raw.githubusercontent.com/grazeza/ABP-Assigment/main/Modul%202/images/task_image1.png)
Gambar tersebut merupakan proses untuk membuat suatu repositori mulai dari `git init` sampai `git push origin main`. git init merupakan inisialisasi repositori lokal lalu diikuti dengan penambahan file ke repositori, commit, pembuatan branch, clone repositori online lalu yang terakhir push.
![Output 2](https://raw.githubusercontent.com/grazeza/ABP-Assigment/main/Modul%202/images/task_image2.png)
Gambar tersebut merupakan contoh output dari command-command sebelumnya. File berhasil disimpan pada repositori online melalui CLI.
