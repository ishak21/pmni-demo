# Cara Pasang Tema PMNI

## Langkah 1 — Muat turun & pasang (di SSH server)

```bash
cd /var/www/pmni/wp-content/themes/
sudo rm -rf pmni-theme
sudo git clone --depth 1 https://github.com/ishak21/pmni-demo.git /tmp/pmni-src
sudo cp -r /tmp/pmni-src/wp-theme/pmni-theme ./
sudo chown -R www-data:www-data pmni-theme
sudo rm -rf /tmp/pmni-src
ls -la pmni-theme/
```

## Langkah 2 — Semak sintaks PHP

```bash
for f in /var/www/pmni/wp-content/themes/pmni-theme/*.php \
         /var/www/pmni/wp-content/themes/pmni-theme/template-parts/*.php; do
  php -l "$f"
done
```

Semua mesti keluar `No syntax errors detected`.

## Langkah 3 — Aktifkan tema

Dashboard → **Appearance → Themes** → cari **PMNI** → **Activate**

## Langkah 4 — Buat halaman

Dashboard → **Pages → Add New**, buat 6 halaman ini (biarkan kandungan kosong dulu):

| Tajuk | Slug (URL) |
|---|---|
| Profil | `profil` |
| Akademik | `akademik` |
| Pembangunan | `pembangunan` |
| Media | `media` |
| Muat Turun | `muat-turun` |
| Pendaftaran | `pendaftaran` |

Tambah juga satu halaman kosong bertajuk **Berita** dengan slug `berita`.

## Langkah 5 — Tetapkan halaman utama

**Settings → Reading**:
- Your homepage displays → **A static page**
- Homepage → biarkan kosong (tema guna `front-page.php` secara automatik)
- Posts page → pilih **Berita**

## Langkah 6 — Buat menu

**Appearance → Menus** → Create new menu → nama `Menu Utama`

Tambah halaman: Utama (Custom Link → `/`), Profil, Akademik, Pembangunan, Media, Muat Turun, Pendaftaran

Display location → centang **Menu Utama** → Save

Ulang untuk **Menu Footer** dengan 4-5 pautan penting sahaja.

## Langkah 7 — Isi maklumat PMNI

**Appearance → Customize → Maklumat PMNI**

Isi nombor telefon, e-mel, alamat, pautan media sosial, dan **maklumat akaun bank** untuk infaq.

## Langkah 8 — Muat naik logo

**Appearance → Customize → Site Identity → Select logo**

---

## Nota

- Kandungan halaman diisi melalui editor WordPress biasa — klien boleh ubah sendiri
- Berita ditambah melalui **Posts → Add New**, dengan kategori: Berita, Aktiviti, Pencapaian, Pembangunan, Hebahan
- Fail PDF dimuat naik melalui **Media → Add New**
- Foto produk/aktiviti melalui **Media Library**
