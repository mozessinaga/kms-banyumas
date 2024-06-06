<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .point-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f7f9fc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .point {
            margin-bottom: 20px;
            border: 1px solid #b0c5e0;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .point:hover {
            background-color: #e9f5ff;
        }

        .title {
            font-weight: bold;
            margin-bottom: 10px;
            cursor: pointer;
            color: #169348;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .title:hover {
            color: #0b6623;
        }

        .desc {
            margin-top: 5px;
            padding: 10px;
            display: none;
            color: #000000;
            overflow: hidden;
            transition: max-height 0.5s ease-out, opacity 0.5s ease-out;
            font-size: 16px;
            line-height: 1.6;
            text-align: justify; /* Rata kiri kanan */
        }

        .icon {
            margin-right: 10px;
        }

        .open-book-icon {
            font-size: 24px;
        }

        /* Animasi fadeIn */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <script>
        function toggleDescription(element) {
            var answer = element.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
                answer.style.maxHeight = "0";
                answer.style.opacity = "0";
            } else {
                answer.style.display = "block";
                answer.style.maxHeight = answer.scrollHeight + "px";
                answer.style.opacity = "1";
            }
        }
    </script>
</head>

<body>
    <div class="point-container fade-in">
        <h1 style="text-align: center;">Alur Menjadi CPMI Pada PT. Karyatama Mitra Sejati Banyumas</h1>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 1. Pendaftaran
            </div>
            <div class="desc">
                Calom Pekerja Migran Indonesia (CPMI) dapat melakukan pendaftaran secara online ataupun secara offline. Pendaftaran Online dapat dilakukan didalam website ini dengan cara menekan menu Job Order <i class="fas fa-arrow-right"></i> Pilih Job Order yang menarik minat anda <i class="fas fa-arrow-right"></i> Tombol daftar di pojok kanan bawah <i class="fas fa-arrow-right"></i> Isi formulir <i class="fas fa-arrow-right"></i> Terakhir tekan daftar. Sedangkan untuk pendaftaran offline dapat langsung datang ke kantor PT. Karyatama Mitra Sejati Cabang Banyumas.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 2. Seleksi
            </div>
            <div class="desc">
                Seleksi yang akan dilakukan oleh pihak yang memberikan job order, dapat secara offline dengan menentukan tempat seleksi ataupun secara online melalui zoom meeting tergantung keinginan dari pihak pemberi job order. Seleksi oleh kantor cabang sendiri dapat dilakukan jika perusahaan pabrik memberikan wewenang sepenuhnya kepada kantor cabang untuk melakukan seleksi CPMI.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 3. Biodata dan Tes Sederhana
            </div>
            <div class="desc">
                CPMI akan dicek tinggi badan dan berat badan sesuai dengan kualifikasi yang dibutuhkan oleh perusahaan pengguna. (Pengisian formulir pendaftaran). Selanjutnya ada tes matematika dasar, pengetahuan umum, dan tes buta warna.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 4. Menunggu Hasil Seleksi
            </div>
            <div class="desc">
                Menunggu keputusan hasil seleksi oleh pihak pemberi job order, jika terpilih maka CPMI dapat lanjut ke tahap berikutnya.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 5. Tes Kesehatan / Medical
            </div>
            <div class="desc">
                CPMI yang lolos akan melakukan tes medikal atau tes kesehatan, dengan tujuan untuk memastikan kondisi tubuh CPMI saat ini sudah memenuhi syarat kesehatan pabrik tujuan.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 6. Berkas Pendukung
            </div>
            <div class="desc">
                Setelah dinyatakan lolos tes kesehatan/medical, selanjutnya CPMI akan diminta untuk mengumpulkan berkas pendukung sebagai syarat pembuatan paspor dan VISA.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 7. Membawa CPMI ke Disnaker
            </div>
            <div class="desc">
                Membawa CPMI ke Disnaker kabupaten kota tempat domisili CPMI untuk verifikasi data dan interview.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 8. Pembuatan Paspor
            </div>
            <div class="desc">
                Setelah selesai urusan di Disnaker, maka akan keluar ID CPMI dari Disnaker dan pembuatan rekomendasi paspor ke Imigrasi. Pembuatan paspor di kantor Imigrasi memerlukan waktu 4 hari paling lama. Kemudian melakukan scan fingerprint di klinik kesehatan yang sebelumnya pernah dilakukan untuk mencocokan ID CPMI dengan fingerprint yang terdaftar.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 9. Calling VISA
            </div>
            <div class="desc">
                Berkas-berkas CPMI yang telah dikumpulkan dikirimkan ke pabrik tujuan untuk calling VISA. Memakan waktu 1-3 bulan.
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> 10. Persiapan Pemberangkatan
            </div>
            <div class="desc">
                Setelah VISA keluar, maka dilakukanlah tahap Rencana Orientasi Pembekalan Pemberangkatan yang dilaksanakan di kantor BPPMI (Badan Perlindungan Pekerja Migran Indonesia).
            </div>
        </div>
    </div>
</body>


