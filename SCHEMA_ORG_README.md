# Schema.org Implementation untuk Website Maestro

## Overview

Dokumen ini menjelaskan implementasi Schema.org markup untuk website PT. KINARYA MAESTRO NUSANTARA (Maestro) yang merupakan perusahaan konstruksi.

## Jenis Schema.org yang Diimplementasikan

### 1. Organization Schema

**File:** `resources/views/layouts/main.blade.php`
**Tipe:** `Organization`
**Fitur:**

-   Informasi perusahaan lengkap
-   Kontak dan alamat
-   Sertifikasi dan lisensi
-   Area layanan
-   Logo dan URL

### 2. WebSite Schema

**File:** `resources/views/layouts/main.blade.php`
**Tipe:** `WebSite`
**Fitur:**

-   Informasi website
-   Publisher (perusahaan)
-   Search functionality

### 3. LocalBusiness Schema

**File:** `resources/views/components/schema-org.blade.php`
**Tipe:** `LocalBusiness`
**Fitur:**

-   Jam operasional
-   Area layanan
-   Metode pembayaran
-   Koordinat geografis

### 4. Portfolio Schema

**File:** `resources/views/components/schema-portfolio.blade.php`
**Tipe:** `ItemList` dan `Project`
**Fitur:**

-   Daftar proyek portofolio
-   Detail setiap proyek
-   Gambar dan deskripsi
-   Lokasi proyek

### 5. Testimonial Schema

**File:** `resources/views/components/schema-testimonial.blade.php`
**Tipe:** `Review` dan `AggregateRating`
**Fitur:**

-   Review dari klien
-   Rating agregat perusahaan
-   Detail reviewer
-   Proyek yang direview

### 6. About Page Schema

**File:** `resources/views/components/schema-about.blade.php`
**Tipe:** `AboutPage`, `Article`, `ItemList`
**Fitur:**

-   Informasi halaman about
-   Sejarah perusahaan
-   Sertifikasi perusahaan
-   Layanan yang ditawarkan

### 7. Contact Page Schema

**File:** `resources/views/components/schema-contact.blade.php`
**Tipe:** `ContactPage`, `WebPage`
**Fitur:**

-   Informasi kontak
-   Jam operasional
-   Area layanan
-   Form kontak

### 8. Services Schema

**File:** `resources/views/components/schema-services.blade.php`
**Tipe:** `ItemList`, `Service`, `HowTo`
**Fitur:**

-   Daftar layanan
-   Detail setiap layanan
-   Proses bisnis
-   Katalog layanan

### 9. FAQ Schema

**File:** `resources/views/components/schema-org.blade.php`
**Tipe:** `FAQPage`
**Fitur:**

-   Pertanyaan umum
-   Jawaban untuk proses B2B dan B2C
-   Informasi layanan

## Cara Penggunaan

### 1. Di Layout Utama

```php
// Di resources/views/layouts/main.blade.php
// Schema.org sudah otomatis ter-include
```

### 2. Di Halaman Spesifik

```php
// Di halaman portofolio
@include('components.schema-portfolio')

// Di halaman testimonial
@include('components.schema-testimonial')

// Di halaman about
@include('components.schema-about')

// Di halaman contact
@include('components.schema-contact')

// Di halaman services
@include('components.schema-services')
```

### 3. Di Controller

```php
// Pastikan data yang diperlukan tersedia
public function index()
{
    $portofolio = Portofolio::all();
    $testimoni = Testimoni::all();
    $maesgazine = Maesgazine::all();

    return view('index', compact('portofolio', 'testimoni', 'maesgazine'));
}
```

## Manfaat SEO

### 1. Rich Snippets

-   Informasi perusahaan di hasil pencarian
-   Rating dan review di Google
-   Jam operasional
-   Kontak langsung

### 2. Knowledge Graph

-   Google dapat memahami struktur perusahaan
-   Hubungan antar entitas
-   Informasi layanan

### 3. Local SEO

-   Optimasi untuk pencarian lokal
-   Informasi geografis
-   Area layanan

### 4. Voice Search

-   Optimasi untuk pencarian suara
-   FAQ yang terstruktur
-   Informasi kontak yang mudah diakses

## Testing Schema.org

### 1. Google Rich Results Test

-   Kunjungi: https://search.google.com/test/rich-results
-   Masukkan URL website
-   Periksa hasil testing

### 2. Schema.org Validator

-   Kunjungi: https://validator.schema.org/
-   Masukkan URL atau paste markup
-   Periksa validitas

### 3. Google Search Console

-   Monitor rich snippets di Search Console
-   Periksa error dan warning
-   Optimasi berdasarkan data

## Best Practices

### 1. Konsistensi Data

-   Pastikan data di schema.org konsisten dengan konten website
-   Update informasi secara berkala
-   Gunakan data yang akurat

### 2. Struktur Hierarkis

-   Gunakan struktur yang logis
-   Hubungkan entitas yang berkaitan
-   Hindari duplikasi informasi

### 3. Performance

-   Schema.org tidak mempengaruhi loading time secara signifikan
-   Gunakan komponen yang reusable
-   Optimasi untuk mobile

### 4. Maintenance

-   Update schema.org saat ada perubahan data
-   Monitor error di Search Console
-   Test secara berkala

## Troubleshooting

### 1. Schema.org Tidak Muncul

-   Periksa syntax JSON-LD
-   Pastikan tidak ada error JavaScript
-   Test dengan validator

### 2. Rich Snippets Tidak Muncul

-   Tunggu beberapa hari untuk indexing
-   Pastikan konten berkualitas tinggi
-   Periksa guidelines Google

### 3. Error di Search Console

-   Periksa error yang dilaporkan
-   Fix sesuai rekomendasi
-   Submit untuk review ulang

## Update dan Maintenance

### 1. Update Informasi Perusahaan

-   Update di `resources/views/layouts/main.blade.php`
-   Update di komponen terkait
-   Test setelah update

### 2. Update Layanan

-   Update di `resources/views/components/schema-services.blade.php`
-   Update di komponen lain yang terkait
-   Pastikan konsistensi

### 3. Update Portfolio

-   Otomatis ter-update dari database
-   Pastikan model dan relasi benar
-   Test dengan data baru

## Kesimpulan

Implementasi Schema.org ini akan membantu:

-   Meningkatkan visibilitas di hasil pencarian
-   Memberikan informasi yang lebih lengkap kepada pengguna
-   Meningkatkan click-through rate
-   Optimasi untuk voice search dan local SEO

Pastikan untuk monitoring dan maintenance secara berkala untuk hasil yang optimal.
