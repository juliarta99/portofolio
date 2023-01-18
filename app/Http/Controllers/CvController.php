<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        return view('cv.index',
    [
        'title' => 'CV Juliarta',
        'name' => 'Si Ngurah Putu Juliarta',
        'work' => 'Siswa SMK NEGERI 1 DENPASAR',
        'about' => 'Nama saya Si Ngurah Putu Juliarta, saya adalah siswa jurusan Rekayasa Perangkat Lunak di SMK Negeri 1 Denpasar. Saya adalah pribadi yang displin, jujur, dan bertanggung jawab. Saya memiliki keahlian di bidang Web Developer.',
        'lahir' => 'Denpasar, 09-07-2006',
        'sekolah' => 'SMK NEGERI 1 DENPASAR',
        'agama' => 'Hindu',
        'alamat' => 'Br. Kangin, Sempidi, No. 49',
        'handphone' => '0896-0588-0609',
        'email' => 'adij4255@gmail.com',
        'website' => 'juliarta.epizy.com',
        'pendidikans' => [
            [
                'tahun' => '2021-Sekarang',
                'sekolah' => 'SMK NEGERI 1 DENPASAR',
                'jurusan' => 'RPL ( Rekayasa Perangkat Lunak )'
            ],
            [
                'tahun' => '2018-2021',
                'sekolah' => 'SMP NEGERI 5 MENGWI',
                'jurusan' => 'Nilai saya',
            ]
        ],
        'skills' => [
            [
                'name' => 'html',
                'image' => 'img/html.png',
            ],
            [
                'name' => 'css',
                'image' => 'img/css.png',
            ],
            [
                'name' => 'javascript',
                'image' => 'img/js.png',
            ],
            [
                'name' => 'php',
                'image' => 'img/php.png',
            ],
            [
                'name' => 'tailwind',
                'image' => 'img/tailwind.png',
            ],
            [
                'name' => 'laravel',
                'image' => 'img/laravel.png',
            ],
        ],
        'softskills' => [
            [
                'name' => 'Displin'
            ],
            [
                'name' => 'Kreatif'
            ],
            [
                'name' => 'Jujur'
            ],
            [
                'name' => 'Teliti'
            ],
            [
                'name' => 'Bertanggung jawab'
            ],
            [
                'name' => 'Komunikasi baik'
            ],
            [
                'name' => 'Membangun relasi'
            ],
            [
                'name' => 'Bisa bekerja tim'
            ],
            [
                'name' => 'Bisa bekerja individu'
            ],
        ]
    ]);
    }
}
