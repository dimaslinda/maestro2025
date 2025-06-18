<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Testimoni;
use App\Models\Maesgazine;
use App\Models\Portofolio;
use Illuminate\Http\Request;

/**
 * Controller untuk menangani halaman-halaman utama website
 *
 * Controller ini bertanggung jawab untuk menampilkan halaman-halaman
 * seperti homepage, about, portofolio, dan halaman lainnya
 */
class HomeControllers extends Controller
{
    /**
     * Menampilkan halaman utama (homepage)
     *
     * Mengambil data banner, portofolio highlight, maesgazine terbaru,
     * dan testimoni untuk ditampilkan di homepage
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua data banner untuk slider dengan media
        $banner = Banner::with('media')->get();

        // Ambil 5 portofolio yang di-highlight dengan media
        $portofolio = Portofolio::with('media')
            ->where('highlight', 1)
            ->take(5)
            ->get();

        // Ambil maesgazine terbaru untuk featured section dengan media
        $maesgazinelast = Maesgazine::with('media')->latest()->first();

        // Ambil semua maesgazine dengan media untuk section lainnya
        $maesgazine = Maesgazine::with('media')->get();

        // Ambil semua testimoni dengan media
        $testimoni = Testimoni::with('media')->get();

        return view('index', compact(
            'banner',
            'portofolio',
            'maesgazine',
            'maesgazinelast',
            'testimoni'
        ));
    }

    /**
     * Menampilkan halaman direksi
     *
     * @return \Illuminate\View\View
     */
    public function director()
    {
        return view('director');
    }

    /**
     * Menampilkan halaman about/tentang kami
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Menampilkan halaman heavy construction
     *
     * @return \Illuminate\View\View
     */
    public function heavy()
    {
        return view('heavy');
    }

    /**
     * Menampilkan halaman structural
     *
     * @return \Illuminate\View\View
     */
    public function structural()
    {
        return view('structural');
    }

    /**
     * Menampilkan halaman light construction
     *
     * @return \Illuminate\View\View
     */
    public function light()
    {
        return view('light');
    }

    /**
     * Menampilkan halaman maesgazine dengan pagination
     *
     * Menampilkan maesgazine terbaru di bagian atas dan
     * daftar maesgazine lainnya dengan pagination
     *
     * @return \Illuminate\View\View
     */
    public function maesgazine()
    {
        // Ambil maesgazine terbaru untuk featured section
        $maesgazinelast = Maesgazine::with('media')->latest()->first();

        // Ambil maesgazine dengan pagination (6 item per halaman)
        $maesgazine = Maesgazine::orderBy('id', 'desc')
            ->with('media')
            ->paginate(6);

        return view('maesgazine', compact('maesgazinelast', 'maesgazine'));
    }

    /**
     * Menampilkan halaman portofolio
     *
     * Menampilkan semua portofolio dengan media yang terkait
     *
     * @return \Illuminate\View\View
     */
    public function portofolio()
    {
        // Ambil semua portofolio dengan media
        $portofolio = Portofolio::with('media')->get();

        return view('portofolio', compact('portofolio'));
    }
}
