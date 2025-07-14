<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function index()
    {
        $kategori = ['presiden', 'kepala-daerah', 'legislatif'];
        return view('landingpage.informasi.pemilu.index', compact('kategori'));
    }

    public function show($kategori)
    {
        $data = $this->getPaslonData($kategori);

        // Pastikan data selalu berupa array
        $data = is_array($data) ? $data : [];

        return view('landingpage.informasi.pemilu.list', [
            'kategori' => $kategori,
            'data' => $data
        ]);
    }

    public function detail($kategori, $id)
    {
        $data = $this->getPaslonData($kategori);

        if (!$data) {
            abort(404);
        }

        // Cari paslon berdasarkan ID
        $paslon = collect($data)->firstWhere('no_urut', $id);

        if (!$paslon) {
            abort(404);
        }

        return view('landingpage.informasi.pemilu.detail', [
            'kategori' => $kategori,
            'paslon' => $paslon
        ]);
    }

    private function getPaslonData($kategori)
    {
        return match ($kategori) {
            'presiden' => [
                [
                    'no_urut' => 1,
                    'nama' => 'Paslon Presiden 1',
                    'nama_wakil' => 'Wakil Presiden 1',
                    'tempat_lahir' => 'Jakarta',
                    'tanggal_lahir' => '1970-01-01',
                    'pendidikan' => 'S1 Hukum UI',
                    'pekerjaan' => 'Pengacara',
                    'jenis_kelamin' => 'Laki-laki',
                    'foto' => 'presiden1.jpg',
                    'foto_wakil' => 'wakil1.jpg',
                    'foto_bersama' => 'paslon1_bersama.jpg',
                    'partai' => 'Partai Merdeka',
                    'suara_sah' => 1250000,
                    'visi' => 'Mewujudkan Indonesia yang adil dan makmur',
                    'misi' => [
                        'Meningkatkan kesejahteraan rakyat secara merata',
                        'Memperkuat sistem pendidikan nasional',
                        'Membangun infrastruktur yang merata di seluruh Indonesia',
                        'Memperkuat pertahanan dan keamanan negara'
                    ]
                ],
                [
                    'no_urut' => 2,
                    'nama' => 'Paslon Presiden 2',
                    'nama_wakil' => 'Wakil Presiden 2',
                    'tempat_lahir' => 'Bandung',
                    'tanggal_lahir' => '1965-02-10',
                    'pendidikan' => 'S2 Ekonomi ITB',
                    'pekerjaan' => 'Wirausaha',
                    'jenis_kelamin' => 'Perempuan',
                    'foto' => 'presiden2.jpg',
                    'foto_wakil' => 'wakil2.jpg',
                    'foto_bersama' => 'paslon2_bersama.jpg',
                    'partai' => 'Partai Bersatu',
                    'suara_sah' => 1100000,
                    'visi' => 'Indonesia maju dan berdaya saing global',
                    'misi' => [
                        'Mengembangkan ekonomi digital nasional',
                        'Meningkatkan kualitas sumber daya manusia',
                        'Memperkuat industri kreatif dan UMKM',
                        'Mendorong inovasi dan teknologi'
                    ]
                ],
                [
                    'no_urut' => 3,
                    'nama' => 'Paslon Presiden 3',
                    'nama_wakil' => 'Wakil Presiden 3',
                    'tempat_lahir' => 'Surabaya',
                    'tanggal_lahir' => '1975-07-20',
                    'pendidikan' => 'S3 Teknik ITS',
                    'pekerjaan' => 'Dosen',
                    'jenis_kelamin' => 'Laki-laki',
                    'foto' => 'presiden3.jpg',
                    'foto_wakil' => 'wakil3.jpg',
                    'foto_bersama' => 'paslon3_bersama.jpg',
                    'partai' => 'Partai Maju',
                    'suara_sah' => 950000,
                    'visi' => 'Indonesia mandiri dan berdaulat',
                    'misi' => [
                        'Memperkuat ketahanan pangan nasional',
                        'Mengembangkan energi terbarukan',
                        'Meningkatkan kualitas layanan kesehatan',
                        'Memperkuat diplomasi internasional'
                    ]
                ],
            ],
            'kepala-daerah' => [
                [
                    'no_urut' => 1,
                    'nama' => 'Paslon Walikota 1',
                    'nama_wakil' => 'Wakil Walikota 1',
                    'tempat_lahir' => 'Bandung',
                    'tanggal_lahir' => '1980-03-15',
                    'pendidikan' => 'S1 Teknik Sipil ITENAS',
                    'pekerjaan' => 'Kontraktor',
                    'jenis_kelamin' => 'Laki-laki',
                    'foto' => 'kepala1.jpg',
                    'foto_wakil' => 'wakil1.jpg',
                    'foto_bersama' => 'kepala1_bersama.jpg',
                    'partai' => 'Partai Pembangunan',
                    'suara_sah' => 800000,
                ],
                [
                    'no_urut' => 2,
                    'nama' => 'Paslon Walikota 2',
                    'nama_wakil' => 'Wakil Walikota 2',
                    'tempat_lahir' => 'Cimahi',
                    'tanggal_lahir' => '1978-06-10',
                    'pendidikan' => 'S2 Administrasi UNPAD',
                    'pekerjaan' => 'PNS',
                    'jenis_kelamin' => 'Perempuan',
                    'foto' => 'kepala2.jpg',
                    'foto_wakil' => 'wakil2.jpg',
                    'foto_bersama' => 'kepala2_bersama.jpg',
                    'partai' => 'Partai Rakyat',
                    'suara_sah' => 750000,
                ],
                [
                    'no_urut' => 3,
                    'nama' => 'Paslon Walikota 3',
                    'nama_wakil' => 'Wakil Walikota 3',
                    'tempat_lahir' => 'Garut',
                    'tanggal_lahir' => '1985-11-25',
                    'pendidikan' => 'S1 Ilmu Politik UGM',
                    'pekerjaan' => 'Aktivis',
                    'jenis_kelamin' => 'Laki-laki',
                    'foto' => 'kepala3.jpg',
                    'foto_wakil' => 'wakil3.jpg',
                    'foto_bersama' => 'kepala3_bersama.jpg',
                    'partai' => 'Partai Amanah',
                    'suara_sah' => 500000,
                ],
                [
                    'no_urut' => 4,
                    'nama' => 'Paslon Walikota 4',
                    'nama_wakil' => 'Wakil Walikota 4',
                    'tempat_lahir' => 'Sumedang',
                    'tanggal_lahir' => '1990-08-09',
                    'pendidikan' => 'S2 Hukum UI',
                    'pekerjaan' => 'Dosen',
                    'jenis_kelamin' => 'Perempuan',
                    'foto' => 'kepala4.jpg',
                    'foto_wakil' => 'wakil4.jpg',
                    'foto_bersama' => 'kepala4_bersama.jpg',
                    'partai' => 'Partai Kebangsaan',
                    'suara_sah' => 430000,
                ],
            ],
            default => [],
        };
    }
}
