# Quiz 3

## Buat Branch

Buatlah branch dengan nama sesuai dengan username Gitlab kalian!

## 0. Setup (5 poin)

Repositori ini dibangun dengan Laravel versi 6.0 ke atas. Setelah melakukan clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project.

-   masuk ke direktori quiz-3-26-minggu

```bash
cd quiz-3-26-minggu
```

-   jalankan perintah composer install untuk mendownload direktori vendor . Note : jika terjadi error coba perintah `composer update` untuk menggantikan perintah composer install

```bash
composer install
```

-   buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

-   jalankan perintah php artisan key generate

```bash
php artisan key:generate
```

-   Tambahan: Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama database, username dan password nya di file .env dengan database kalian. (database tidak perlu dikirim)

-   menjalankan server laravel

```bash
php artisan serve
```

### nb: sebelum mengerjakan soalnya silahkan buat branch dulu dan jangan lupa di checkout

Setelah itu kalian sudah bisa lanjut mengerjakan soal berikutnya.

## 1. Membuat ERD (15 poin)

Seorang klien ingin dibuatkan sebuah aplikasi web untuk portal berita. Harapannya aplikasi web ini dapat digunakan untuk berbagi berita .

berikut deskripsi singkat mengenai requirement web tersebut (tabel-tabel beserta hubungan di antara tabel):

### Require

-   table "berita" terdapat data : id(int), judul (VARCHAR), content(TEXT), penulis(VARCHAR)
-   table "tag" terdapat data : id(int), nama(VARCHAR)
-   table "user" terdapat data : id(int), nama(VARCHAR), email(VARCHAR), password(VARCHAR)
-   table "profil" terdapat data : id(int), alamat(TEXT), umur(int)

### Description

-   setiap user memiliki satu profile
-   satu berita memiliki banyak tag
-   user dapat memberi komentar di banyak berita dan berita dapat dikomentari oleh banyak user

Buatlah ERD untuk keperluan web tersebut lalu export ke dalam format gambar (PNG). Kamu bisa gunakan mysql workbench atau aplikasi online https://app.diagrams.net/.

Simpan file PNG tersebut di dalam folder images dan simpan folder images tersebut di folder public di project ini.

## 2. Membuat Migrations (20 poin)

Buatlah Migration yang diimplementasi dari ERD yang dibuat di soal sebelumnya.

## 3. Membuat Controller (10 poin)

Buatlah controller untuk mengatur fitur CRUD "berita".

## 4. Memasangkan Template & Routing(25 poin)

-   Pada project ini kamu diminta untuk memasangkan template dari SB-Admin-2 https://startbootstrap.com/themes/sb-admin-2/. Kami sudah memasangkan asset-asset yang sudah didownload dari halaman SB-Admin-2 di folder public. Tugas kamu adalah memperbaiki template master blade yang terdapat di folder resources/views/layouts/master.blade.php dan hubungkan dengan asset-asset yang diperlukan. (5 poin)
-   Web memiliki route sebagai berikut: (10 poin)

| url                          | method   | keterangan                                                                                                        |
| ---------------------------- | -------- | ----------------------------------------------------------------------------------------------------------------- |
| `'/'`                        | `GET`    | menampilkan gambar PNG/JPG/JPEG desain ERD yang sudah dibuat di soal no #1.                                       |
| `'/berita' `                 | `GET`    | menampilkan tabel berisi data berita-berita yang tersedia                                                         |
| `'/berita/create'`           | `GET`    | menampilkan form untuk membuat data berita baru, di dalam form tersebut terdapat input pengisian data-data berita |
| `'/berita'`                  | `POST`   | menyimpan data berita baru                                                                                        |
| `'/berita/{berita_id}'`      | `GET`    | no #6                                                                                                             |
| `'/berita/{berita_id}/edit'` | `GET`    | menampilkan form untuk edit data-data berita                                                                      |
| `'/berita/{berita_id}'`      | `PUT`    | menyimpan data berita yang sudah diedit melalui form edit berita sesuai id                                        |
| `'/berita/{berita_id}'`      | `DELETE` | menghapus data berita dengan id tertentu                                                                          |

-   pasangkanlah script berikut ini ke HANYA ke halaman blade untuk menampilkan data pada tabel berita (pada url `'/berita'`). (10 poin)
    Keterangan : `Swal` merupakan function dari file swal.min.js yang terdapat di folder public/sbadmin2/swal.min.js

```html
<script>
    Swal.fire({
        title: "Berhasil!",
        text: "Memasangkan script sweet alert",
        icon: "success",
        confirmButtonText: "Cool",
    });
</script>
```

-   Jika pemasangan script pada poin sebelumnya berhasil maka akan menampilkan alert seperti ini di halaman courses tersebut:

![swal-example.gif](swal-example.gif?raw=true)

## 5. Alur CRUD (10 poin)

Pastikan alur CRUD berita berjalan seperti alur CRUD biasanya. Gambarannya adalah seperti berikut:

-   halaman index berita (`'/berita'`) menampilkan tabel kumpulan berita lengkap beserta tombol-tombol actionnya (Edit, Delete, Detail). terdapat pula tombol menuju form pembuatan berita (Tambah Berita).
-   halaman create berita menampilkan form untuk membuat berita baru, sesudah submit lalu halaman kembali ke index berita.
-   halaman edit untuk menampilkan form edit berita, sesudah submit update lalu kembali ke index berita
-   menghapus data berita berdasarkan id ketika tombol Delete diklik

## 6. Menampilkan tag-tag di Halaman Show berita (15 poin)

-   untuk tag silahkan insert manual di phpmyadmin/mysql untuk data-datanya
-   Tampilkanlah detail berita pada route `'/berita/{berita_id}'` saat tombol detail di klik seperti berikut :

### output

![show-berita.png](show-berita.png?raw=true)
