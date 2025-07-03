<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    // Data dummy untuk digunakan di semua method
    private function getDummyData()
    {
        return collect([
            (object)[
                'id' => 1,
                'title' => 'Diskon Kopi Spesial Awal Bulan',
                'description' => 'Nikmati diskon 50% untuk semua varian kopi single origin. Promo berlaku hanya di minggu pertama setiap bulan. Ini adalah data dummy yang ditampilkan tanpa database.',
                'image' => 'https://via.placeholder.com/800x400?text=Promo+Kopi',
                'created_at' => now()->subDays(10),
            ],
            (object)[
                'id' => 2,
                'title' => 'Promo Bundling Gadget Terbaru',
                'description' => 'Dapatkan smartphone terbaru dengan bonus smartwatch eksklusif. Stok terbatas, jangan sampai kehabisan! Data ini tidak berasal dari database.',
                'image' => 'https://via.placeholder.com/800x400?text=Promo+Gadget',
                'created_at' => now()->subDays(5),
            ],
            (object)[
                'id' => 3,
                'title' => 'Cashback Belanja Fashion',
                'description' => 'Dapatkan cashback hingga 30% untuk setiap pembelian produk fashion di atas Rp 500.000. Promo hanya berlaku akhir pekan ini.',
                'image' => 'https://via.placeholder.com/800x400?text=Promo+Fashion',
                'created_at' => now()->subDays(2),
            ],
        ]);
    }

    // Menampilkan semua promosi (Homepage)
    public function index()
    {
        $promotions = $this->getDummyData();
        return view('promotions.index', compact('promotions'));
    }

    // Menampilkan form tambah promosi (UI saja)
    public function create()
    {
        return view('promotions.create');
    }

    // Menampilkan detail satu promosi
    public function show($id)
    {
        // Cari promosi berdasarkan ID dari data dummy
        $promotion = $this->getDummyData()->firstWhere('id', $id);

        if (!$promotion) {
            abort(404); // Jika ID tidak ditemukan
        }

        return view('promotions.show', compact('promotion'));
    }

    // Menampilkan form edit promosi (UI saja)
    public function edit($id)
    {
        $promotion = $this->getDummyData()->firstWhere('id', $id);

        if (!$promotion) {
            abort(404);
        }

        return view('promotions.edit', compact('promotion'));
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promotion $promotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        //
    }
}
