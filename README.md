# Pondok Moden Nurul Isyraq (PMNI) — Pratonton Laman Web

Pratonton reka bentuk laman web rasmi **Pondok Moden Nurul Isyraq (PMNI)**, sebuah institusi pendidikan Islam di Kuala Selangor yang diasaskan oleh **Syeikh Rohimuddin Nawawi Al-Bantani**.

Repositori ini mengandungi versi HTML statik yang dibina khusus untuk **semakan reka bentuk oleh pihak klien** sebelum pembinaan laman WordPress sebenar dimulakan.

> **Slogan:** *Adab Di Atas Ilmu*
> **Moto:** *"Ke Arah Melahirkan Ilmuan Islam Berprestasi Tinggi"*

---

## 🔗 Pautan Pratonton

Setelah GitHub Pages diaktifkan, laman ini boleh dilayari di:

```
https://ishak21.github.io/pmni-demo/
```

Pautan ini boleh terus dihantar kepada klien untuk semakan.

---

## 📄 Struktur Halaman

Laman ini mengandungi **7 halaman** utama:

| Fail | Halaman | Kandungan |
|---|---|---|
| `index.html` | Utama | Hero, kad sorotan program, pengenalan, video, statistik |
| `profil.html` | Profil & Pentadbiran | Latar belakang, visi & misi, pimpinan, biodata pengasas, barisan asatizah |
| `akademik.html` | Akademik & Tarbiyah | Prinsip Ta'lim & Tarbiyah, 6 Rukun Pendidikan, 2 Metod Pengajian, manhaj kurikulum, silibus, Ekosistem 1000 Tahun |
| `pembangunan.html` | Pembangunan & Infaq | Premis sedia ada, perancangan tapak kekal, garis masa pembinaan, tabung infaq |
| `media.html` | Media & Hubungi | Aktiviti & hebahan, galeri, lokasi (peta), maklumat perhubungan |
| `muat-turun.html` | Muat Turun | Borang pendaftaran, profil PMNI, pelan pembangunan, takwim, dokumen rasmi |
| `pendaftaran.html` | E-Pendaftaran | Borang permohonan kemasukan pelajar baharu sesi 2027 |

---

## 🛠️ Teknologi Digunakan

Laman ini dibina **tanpa sebarang framework** — HTML, CSS dan JavaScript tulen sahaja. Ini memudahkan proses pemindahan ke WordPress kelak.

- **HTML5** — struktur semantik, atribut `lang="ms"`, ARIA untuk kebolehcapaian
- **CSS3** — sistem reka bentuk berasaskan *CSS Custom Properties*, reka letak responsif
- **JavaScript (Vanilla)** — navbar & footer dijana secara dinamik, animasi *scroll reveal*, kaunter statistik
- **Font Awesome 6.5** — set ikon
- **Google Fonts** — *Amiri* (tulisan Arab) & *Tajawal* (teks utama)

### Palet Warna

| Warna | Kod | Kegunaan |
|---|---|---|
| Hijau | `#1a6b3c` | Warna utama jenama |
| Hijau Gelap | `#114a2a` | Latar logo, elemen tegas |
| Emas | `#c9a84c` | Aksen, tulisan Arab |
| Marun | `#7b1d1d` | Aksen sekunder |
| Biru Gelap | `#0d2b4e` | Footer, elemen sokongan |

---

## 📁 Struktur Folder

```
pmni-demo/
├── index.html                 Halaman utama
├── profil.html                Profil & pentadbiran
├── akademik.html              Akademik & tarbiyah
├── pembangunan.html           Pembangunan & infaq
├── media.html                 Media & hubungi kami
├── muat-turun.html            Muat turun dokumen
├── pendaftaran.html           Borang e-pendaftaran
│
├── assets/
│   ├── style.css              Sistem reka bentuk (445 baris)
│   ├── app.js                 Navbar, footer & interaksi (232 baris)
│   └── demo-banner.js         Banner notis pratonton
│
├── imej/
│   ├── hero/                  Foto latar hero — 1600×900px
│   ├── pimpinan/              Foto pimpinan — 600×600px
│   ├── asatizah/              Foto asatizah — 400×400px
│   └── galeri/                Foto aktiviti — 1200×900px
│
├── dokumen/                   Fail PDF rasmi
└── .nojekyll                  Menghalang pemprosesan Jekyll oleh GitHub Pages
```

---

## ✅ Ciri Yang Sudah Berfungsi

- Kesemua **7 halaman** beserta navigasi & menu *dropdown*
- **Reka bentuk penuh** — warna, susun atur, tipografi
- **Paparan responsif** — telefon, tablet & komputer
- **3 video YouTube** tertanam — Syeikh, Mudir, dan senarai main pembinaan
- **Peta Google Maps** lokasi premis
- **Pautan media sosial** lengkap — Facebook, Instagram, TikTok, YouTube, Threads, X, Telegram, Saluran WhatsApp
- **Butang panggilan & WhatsApp** terus berfungsi
- **Animasi** — kaunter statistik dan kesan *scroll reveal*
- **Bar pengumuman** pembukaan permohonan sesi 2027

---

## ⚠️ Ciri Yang Belum Berfungsi

Perkara berikut **memang belum berfungsi** pada peringkat pratonton ini. Ia hanya akan berfungsi sepenuhnya setelah laman dibina di atas WordPress:

| Ciri | Status | Catatan |
|---|---|---|
| Borang pendaftaran | Papar mesej sahaja | Belum menghantar e-mel |
| Pembayaran infaq | Belum aktif | Menunggu sambungan ToyyibPay / Billplz |
| Feed Facebook automatik | Belum ada | Memerlukan API, hanya boleh dalam WordPress |
| Pemapar PDF | Kosong | Menunggu fail PDF rasmi daripada PMNI |
| Gambar | *Placeholder* | Menunggu foto sebenar PMNI |

**Banner biru** di bahagian bawah laman memaklumkan kepada pelawat bahawa ini adalah pratonton. Klien boleh menutupnya dengan menekan butang **×**.

---

## 🐞 Isu Diketahui

**Pautan `infaq.html` belum wujud.**
Butang *"Salurkan Infaq"* pada halaman utama (`index.html` baris 35) merujuk kepada `infaq.html`, tetapi fail tersebut belum dibina. Pelawat yang menekan butang itu akan menemui ralat 404.

**Cadangan penyelesaian** — pilih salah satu:
1. Ubah pautan supaya menghala ke `pembangunan.html#infaq` (bahagian tabung infaq sudah sedia ada di situ), **atau**
2. Bina halaman `infaq.html` yang berasingan

---

## 🚀 Cara Mengaktifkan GitHub Pages

1. Buka repositori ini → tab **Settings**
2. Menu sebelah kiri → **Pages**
3. Bahagian **Source** → pilih **Deploy from a branch**
4. **Branch:** `main` · **Folder:** `/ (root)`
5. Klik **Save**
6. Tunggu 1–2 minit, kemudian *refresh* halaman tersebut
7. Pautan laman akan terpapar di bahagian atas

---

## 🔄 Cara Mengemas Kini

**Melalui pelayar (browser):**
1. Buka repositori → klik fail yang hendak diubah
2. Klik ikon pensel (✏️)
3. Buat suntingan → klik **Commit changes**
4. Tunggu seminit, kemudian *refresh* laman

**Melalui Git:**
```bash
git add .
git commit -m "Pembetulan mengikut maklum balas klien"
git push
```

---

## 📌 Langkah Seterusnya

Repositori ini adalah **pratonton reka bentuk sahaja**. Setelah klien meluluskan reka bentuk:

1. Bina laman sebenar menggunakan **WordPress**
2. `assets/app.js` akan dipecahkan menjadi `header.php` dan `footer.php`
3. Semua imej diuruskan melalui **Media Library** WordPress — admin tidak perlu FTP
4. Fail PDF diuruskan menggunakan pemalam **Download Monitor** + **PDF Embedder**
5. Borang pendaftaran disambungkan kepada e-mel
6. Pembayaran infaq disambungkan kepada **ToyyibPay** atau **Billplz**

Repositori pratonton ini elok dikekalkan sebagai rujukan reka bentuk sepanjang proses pembinaan WordPress.

Rujuk fail **[CARA-DEPLOY.md](CARA-DEPLOY.md)** untuk panduan penggunaan yang lebih terperinci.

---

## 📞 Maklumat PMNI

**Pondok Moden Nurul Isyraq**
Jalan Rawang, Kampung Kuantan, 45600 Kuala Selangor, Selangor

- **Telefon:** 011-5433 1448 · 011-1294 9535 · 017-724 9535
- **E-mel:** info@pmni.edu.my
- **Waktu operasi:** Isnin – Sabtu, 8:00 pagi – 10:00 malam

**Media Sosial:** [Facebook](https://www.facebook.com/share/1EsJNTfjje/) · [Instagram](https://www.instagram.com/pmnalisyraq) · [TikTok](https://www.tiktok.com/@pmnalisyraq) · [YouTube](https://youtube.com/@pmnalisyraq) · [Threads](https://www.threads.com/@pmnalisyraq) · [X](https://x.com/pmnalisyraq) · [Telegram](https://t.me/alisyraqtv)

---

<div align="center">

**Dibangunkan oleh [Ishak Basri](https://github.com/ishak21)**
AI Engineer & Full-Stack Developer

</div>
