# CARA DEPLOY DEMO PMNI KE GITHUB PAGES

Tujuan: dapatkan link permanen untuk dihantar kepada klien PMNI supaya mereka boleh semak reka bentuk laman web.

**Masa diperlukan:** 5 minit
**Kos:** Percuma selamanya
**Hasil:** `https://[username].github.io/pmni-demo/`

---

## CARA 1 — Melalui Browser (Paling Mudah, Tiada Git)

### Langkah 1 — Buat repository
1. Buka [github.com](https://github.com) → log masuk
2. Klik butang **+** (kanan atas) → **New repository**
3. Isi:
   - **Repository name:** `pmni-demo`
   - Pilih **Public** *(wajib — GitHub Pages percuma hanya untuk repo public)*
   - **Jangan** tanda "Add a README file"
4. Klik **Create repository**

### Langkah 2 — Muat naik fail
1. Di halaman repo kosong, klik **uploading an existing file**
2. Buka folder `pmni-gh` di komputer anda
3. **Pilih semua isi dalam folder** (bukan foldernya) — `index.html`, `profil.html`, folder `assets`, `dokumen`, `imej`, dan fail `.nojekyll`
4. Seret masuk ke kotak upload
5. Tunggu semua fail naik
6. Klik **Commit changes**

> ⚠️ **Penting:** Seret **isi** folder, bukan folder `pmni-gh` itu sendiri. Kalau tersalah, `index.html` akan berada dalam subfolder dan laman tidak akan muncul.

### Langkah 3 — Aktifkan Pages
1. Dalam repo, klik tab **Settings**
2. Menu kiri → **Pages**
3. Bahagian **Source** → pilih **Deploy from a branch**
4. **Branch:** `main` · **Folder:** `/ (root)`
5. Klik **Save**

### Langkah 4 — Tunggu & buka
- Tunggu 1–2 minit
- Refresh halaman Settings → Pages
- Link akan muncul di atas: `https://[username].github.io/pmni-demo/`
- Klik untuk buka

**Siap.** Hantar link itu kepada klien.

---

## CARA 2 — Melalui Git (Kalau Anda Selesa Terminal)

```bash
cd pmni-gh

git init
git add .
git commit -m "Demo laman web PMNI untuk semakan klien"
git branch -M main
git remote add origin https://github.com/[USERNAME]/pmni-demo.git
git push -u origin main
```

Kemudian aktifkan Pages seperti **Langkah 3** di atas.

---

## KEMASKINI SELEPAS DEPLOY

Bila klien minta perubahan:

**Melalui browser:**
1. Buka repo → klik fail yang nak diubah
2. Klik ikon pensel (✏️) → edit
3. **Commit changes**
4. Tunggu 1 minit, refresh laman

**Melalui Git:**
```bash
git add .
git commit -m "Pembetulan mengikut maklum balas klien"
git push
```

---

## APA YANG KLIEN AKAN NAMPAK

✅ **Berfungsi penuh:**
- Semua 7 halaman & navigasi
- Reka bentuk penuh (warna, susun atur, gaya ADI)
- 3 video YouTube (Syeikh, Mudir, playlist pembinaan)
- Peta Google Maps
- Semua pautan media sosial (Facebook, Instagram, TikTok, YouTube, Threads, X, Telegram, WhatsApp)
- Butang telefon & WhatsApp
- Paparan telefon (responsive)
- Animasi counter & scroll

⚠️ **Belum berfungsi (memang begitu di peringkat demo):**
- Borang pendaftaran — hanya papar mesej, belum hantar e-mel
- Pembayaran infaq — belum sambung ToyyibPay/Billplz
- Feed Facebook automatik — perlu API, hanya wujud dalam WordPress
- Pemapar PDF — kosong sehingga fail PDF PMNI dimuat naik
- Gambar — masih placeholder, menunggu foto sebenar PMNI

**Banner biru di bahagian bawah** memberitahu klien bahawa ini pratonton. Klien boleh tutup banner itu.

---

## SELEPAS KLIEN LULUS REKA BENTUK

Barulah bina WordPress sebenar. Rujuk fail **PANDUAN-WORDPRESS.md**.

Repo demo ini boleh dikekalkan sebagai rujukan reka bentuk semasa pembinaan WordPress.

---

## NOTA TENTANG VPS AWS ANDA

Untuk tujuan demo, VPS tidak diperlukan.

**Cadangan:** Pergi ke EC2 → pilih instance → **Instance state → Stop instance**

- Instance yang *stopped* tidak mengira jam pengiraan Free Tier
- Data kekal, boleh dihidupkan bila-bila masa
- Elastic IP (jika ada) perlu dilepaskan, kerana IP yang tidak digunakan dikenakan caj

Jangan **Terminate** kecuali anda pasti tidak memerlukannya lagi — terminate memadam instance secara kekal.
