<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Kayla Rachmaudina'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'title' => 'Manfaat Kaktus dan Sukulen untuk Kehidupan Sehari-Hari',
                'author' => 'Kayla Rachmaudina',
                'body' => 'Kaktus dan sukulen bukan hanya tanaman hias yang indah, tetapi juga memiliki banyak manfaat praktis untuk kehidupan sehari-hari. Dengan kemampuannya menyimpan air, tanaman ini sangat tahan terhadap kondisi lingkungan yang kering, membuatnya mudah dirawat dan cocok untuk pemilik dengan jadwal padat. Selain itu, kaktus dan sukulen dapat meningkatkan kualitas udara di dalam ruangan dengan menyerap karbon dioksida dan melepaskan oksigen, terutama di malam hari. Kehadiran tanaman ini juga menciptakan suasana yang menenangkan, membantu mengurangi stres dan meningkatkan fokus, sehingga ideal untuk ruang kerja atau belajar. Beberapa sukulen, seperti lidah buaya, bahkan memiliki manfaat tambahan sebagai bahan alami untuk perawatan kulit dan penyembuhan luka. Dengan keindahan dan fungsinya, kaktus dan sukulen adalah pilihan sempurna untuk dekorasi yang estetis sekaligus bermanfaat.'
            ],
            [
                'id' => 2,
                'title' => 'Manfaat Kaktus dan Sukulen untuk Kehidupan Sehari-Hari',
                'author' => 'Kayla Rachmaudina',
                'body' => 'Plantdecor Malang adalah destinasi utama bagi pecinta tanaman hias di Malang, Jawa Timur, yang menawarkan beragam koleksi tanaman seperti kaktus, sukulen, hingga hampers tanaman unik. Dengan fokus pada estetika dan kualitas, Plantdecor membantu pelanggan menciptakan ruang hijau yang indah dan menenangkan. Tidak hanya menjual tanaman, mereka juga menyediakan layanan pengantaran untuk memudahkan pelanggan membawa kebahagiaan hijau langsung ke rumah atau sebagai hadiah istimewa bagi orang tersayang. Temukan inspirasi hijau di Plantdecor melalui Instagram mereka di plantdecor.malang.'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
