# 🏗️ Maestro2025 - Website Perusahaan Konstruksi

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![Filament](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-purple.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

Website resmi perusahaan konstruksi Maestro yang menampilkan layanan, portofolio, dan informasi perusahaan dengan sistem manajemen konten yang powerful menggunakan Filament Admin Panel.

## ✨ Fitur Utama

### 🌐 Frontend Website

-   **Halaman Beranda** - Landing page dengan banner dan layanan utama
-   **Tentang Kami** - Profil perusahaan, visi misi, dan tim
-   **Layanan Konstruksi** - Detail layanan structural, heavy, dan light construction
-   **Portofolio** - Galeri project yang telah diselesaikan
-   **Maesgazine** - Blog/artikel seputar konstruksi
-   **Testimoni** - Ulasan dari klien
-   **Kontak** - Informasi kontak dan lokasi

### 🔧 Admin Panel (Filament)

-   **Dashboard** - Overview statistik website
-   **Manajemen Banner** - Upload dan kelola banner homepage
-   **Manajemen Kategori** - Kategorisasi layanan dan portofolio
-   **Manajemen Portofolio** - Upload project dan galeri foto
-   **Manajemen Maesgazine** - Buat dan edit artikel blog
-   **Manajemen Testimoni** - Kelola testimoni klien
-   **Manajemen User** - Kelola user admin

### 🎨 Fitur Teknis

-   **Responsive Design** - Optimized untuk desktop, tablet, dan mobile
-   **SEO Optimized** - Schema.org markup untuk search engine
-   **Multi-language** - Support bahasa Indonesia dan Inggris
-   **Media Management** - Upload dan kelola gambar dengan Spatie Media Library
-   **Image Optimization** - Format WebP untuk performa optimal

## 🚀 Teknologi yang Digunakan

-   **Backend**: Laravel 10.x
-   **Admin Panel**: Filament 3.x
-   **Frontend**: Blade Templates, Tailwind CSS
-   **Database**: MySQL/PostgreSQL
-   **Media**: Spatie Media Library
-   **Deployment**: Vite for asset compilation

## 📋 Prasyarat

Sebelum menjalankan project ini, pastikan sistem Anda memiliki:

-   PHP >= 8.1
-   Composer
-   Node.js & NPM
-   MySQL/PostgreSQL
-   Web server (Apache/Nginx)

## 🛠️ Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/your-username/maestro2025.git
cd maestro2025
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database

Edit file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=maestro2025
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Jalankan Migration & Seeder

```bash
php artisan migrate
php artisan db:seed
```

### 6. Build Assets

```bash
npm run build
```

### 7. Setup Storage Link

```bash
php artisan storage:link
```

### 8. Jalankan Server

```bash
php artisan serve
```

Website akan tersedia di `http://localhost:8000`
Admin panel tersedia di `http://localhost:8000/admin`

## 👤 Default Admin Account

Setelah menjalankan seeder, Anda dapat login dengan:

-   **Email**: admin@maestro.com
-   **Password**: password

## 📁 Struktur Project

```
maestro2025/
├── app/
│   ├── Filament/           # Admin panel resources
│   ├── Http/Controllers/   # Controllers
│   ├── Models/            # Eloquent models
│   └── Services/          # Business logic
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/          # Database seeders
├── public/
│   └── img/              # Static images
├── resources/
│   └── views/            # Blade templates
└── routes/
    └── web.php           # Web routes
```

## 🎯 Halaman Website

-   **Homepage** (`/`) - Landing page utama
-   **About** (`/about`) - Tentang perusahaan
-   **Services** (`/structural`, `/heavy`, `/light`) - Layanan konstruksi
-   **Portfolio** (`/portofolio`) - Galeri project
-   **Maesgazine** (`/maesgazine`) - Blog artikel
-   **Directors** (`/director`) - Profil direksi

## 🔐 Keamanan

-   Authentication menggunakan Laravel Breeze
-   Role-based access control di admin panel
-   CSRF protection
-   XSS protection
-   SQL injection protection

## 📱 Responsive Design

Website dioptimalkan untuk berbagai ukuran layar:

-   **Desktop**: 1200px+
-   **Tablet**: 768px - 1199px
-   **Mobile**: < 768px

## 🌍 Multi-language Support

Website mendukung multiple bahasa:

-   Bahasa Indonesia (default)
-   Bahasa Inggris

## 📊 SEO Features

-   Schema.org markup untuk:
    -   Organization
    -   Service
    -   Portfolio
    -   Testimonial
    -   Contact
-   Meta tags optimization
-   Sitemap generation
-   Open Graph tags

## 🚀 Deployment

### Production Setup

1. Set environment ke production
2. Optimize autoloader: `composer install --optimize-autoloader --no-dev`
3. Cache config: `php artisan config:cache`
4. Cache routes: `php artisan route:cache`
5. Cache views: `php artisan view:cache`

### Environment Variables

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
```

## 🤝 Contributing

1. Fork project
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 License

Project ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

## 📞 Support

Untuk pertanyaan dan dukungan:

-   **Email**: deniasitudimas@gmail.com
-   **Website**: https://maestrokontraktor.com/

## 🙏 Acknowledgments

-   [Laravel](https://laravel.com) - PHP Framework
-   [Filament](https://filamentphp.com) - Admin Panel
-   [Tailwind CSS](https://tailwindcss.com) - CSS Framework
-   [Spatie Media Library](https://spatie.be/docs/laravel-medialibrary) - Media Management

---

**Dibuat dengan ❤️ oleh Tim Development Maestro**
