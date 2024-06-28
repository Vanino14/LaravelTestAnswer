<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KendaraanController extends Controller
{
    private $wilayah = [
        'KB' => 'Kalimantan Barat',
        'AA' => 'Temanggung',
        'B'  => 'Jakarta',
        'AD' => 'Surakarta',
    ];

    public function index()
    {
        $kendaraans = Kendaraan::all();

        $result = $kendaraans->map(function ($item) {
            $kode = explode(' ', $item->nopol)[0];
            return [
                'NOPOL' => $item->nopol,
                'WILAYAH' => $this->wilayah[$kode] ?? 'Unknown'
            ];
        });

        return view('index', ['kendaraans' => $result]);
    }
    public function MostFrequent()
    {
        $mostFrequentNopol = DB::select('SELECT MostFrequent() AS nopol')[0]->nopol;
        $kendaraan = Kendaraan::where('nopol', $mostFrequentNopol)->first();
        $kode = explode(' ', $kendaraan->nopol)[0];
        $wilayah = $this->wilayah[$kode] ?? 'Unknown';
        $result = [
            'NOPOL' => $kendaraan->nopol,
            'WILAYAH' => $wilayah
        ];

        return view('most_frequent', ['kendaraan' => $result]);
    }
}
