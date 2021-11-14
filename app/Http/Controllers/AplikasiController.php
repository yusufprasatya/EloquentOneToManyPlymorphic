<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Beasiswa;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function inputBeasiswa1()
    {
        $dosen = Dosen::where('nama', 'Eddie Raynor M.Sc')->first();
        $dosen->beasiswas()->createMany([
            [
                'nama' => "Beasiswa Unggulan Dosen Indonesia",
                'jumlah_dana' => 50000000,
            ],
            [
                'nama' => "Beasiswa Pendidikan Pascasarjana Dalam Negeri",
                'jumlah_dana' => 100000000,
            ]
        ]);
        echo "$dosen->nama sudah mendapat beasiswa";
    }

    public function inputBeasiswa2()
    {
        $mahasiswa = Mahasiswa::where('nama', 'Elliot Crist')->first();
        $mahasiswa->beasiswas()->createMany([
            [
                'nama' => "Beasiswa PPA",
                'jumlah_dana' => 20000000,
            ],
            [
                'nama' => "Beasiswa Pertamina",
                'jumlah_dana' => 33000000,
            ],
            [
                'nama' => "Beasiswa LPDP",
                'jumlah_dana' => 50000000,
            ]
        ]);
        echo "$mahasiswa->nama sudah mendapat beasiswa <br>";

        $mahasiswa = Mahasiswa::where('nama', 'Domenico Moore')->first();
        $mahasiswa->beasiswas()->createMany([
            [
                'nama' => "Beasiswa Telkom",
                'jumlah_dana' => 44000000,
            ],
            [
                'nama' => "Beasiswa Unggulan Kemendikbud",
                'jumlah_dana' => 50000000,
            ]
        ]);
        echo "$mahasiswa->nama sudah mendapat beasiswa";
    }

    public function tampilBeasiswa1()
    {
        $dosen = Dosen::where('nama', 'Eddie Raynor M.Sc')->first();

        echo "## Daftar beasiswa $dosen->nama ##";
        echo "<hr>";
        foreach ($dosen->beasiswas as $beasiswa) {
            echo "Beasiswa $beasiswa->nama
                   (Rp. " . number_format($beasiswa->jumlah_dana) . ")<br>";
        }
    }

    public function tampilBeasiswa2()
    {
        $mahasiswas = Mahasiswa::has('beasiswas')->get();

        foreach ($mahasiswas as $mahasiswa) {
            echo "## Daftar beasiswa $mahasiswa->nama ##";
            echo "<hr>";
            foreach ($mahasiswa->beasiswas as $beasiswa) {
                echo "Beasiswa $beasiswa->nama  
                     (Rp. " . number_format($beasiswa->jumlah_dana) . ")<br>";
            }
            echo "<br>";
        }
    }

    public function tampilBeasiswa3()
    {
        $beasiswa = Beasiswa::where('nama', 'Beasiswa Telkom')->first();
        echo "Yang dapat $beasiswa->nama adalah {$beasiswa->beasiswaable->nama}";
    }

    public function whereHasMorph()
    {
        $beasiswas = Beasiswa::whereHasMorph('beasiswaable', 'App\Models\Mahasiswa')->get();
        //$beasiswas = Beasiswa::whereHasMorph('beasiswaable', 'App\Models\Dosen')->get();
        // $beasiswas = Beasiswa::whereHasMorph('beasiswaable', ['App\Models\Mahasiswa', 'App\Models\Dosen'])->get();
        foreach ($beasiswas as $beasiswa) {
            echo "$beasiswa->nama, diambil oleh {$beasiswa->beasiswaable->nama} <br>";
        }
    }
}
