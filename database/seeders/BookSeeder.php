<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'isbn' => '978-602-8519-93-9',
            'category_id' => 1001,
            'title' => 'Matematika Diskrit',
            'author' => 'Rinaldi Munir',
            'publisher' => 'Informatika',
            'year' => 2020,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/722d4y9/matematika-diskrit.jpg',
            'readers' => 81,
            'views' => 3,
            'synopsis' => 'Matematika Diskrit (descrete mathematics atau finite mathematics) adalah cabang matematika yang mengkaji objek-objek diskrit. Buku Matematika disusun sebagai buku teks mahasiswa yang mengambil mata kuliah Matematika Diskrit. Matematika Diskrit merupakan mata kuliah yang fundamental dalam pendidikan Ilmu Komputer atau Teknik Informatika. Bahkan, saat ini Matematika Dsikrit merupakan mata kuliah wajib pada program pendidikan yang termasuk dalam kelompok teknologi informasi. Bahan kuliah matematika diskrit yang disajikan di dalam buku ini meliputi : - Logika - Himpunan - Matriks, relasi dan fungsi - Induksi matematika - Algoritma dan bilangan bulat (integer) - Kombinatorial dan peluang diskrit - Aljabar boolean - Graf - Pohon'
        ]);

        DB::table('books')->insert([
            'isbn' => '978-602-0498-93-5',
            'category_id' => 1001,
            'title' => 'Mudah Menguasai Framework Laravel',
            'author' => 'Yudho Yudhanto & Helmi Adi Prasetyo',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2020,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/Sy7f8x4/mudah-menguasai-framework-laravel.png',
            'synopsis' => 'Laravel adalah salah satu framework berbasis open source yang paling populer saat ini. Sejak diluncurkan tahun 2011, aplikasi berbasis Laravel ini banyak digemari oleh para komunitas programmer di Github hingga akhirnya menyebar ke seluruh dunia. Framework Laravel menyediakan beberapa jenis PHP library dan beberapa fungsi lain yang bisa memudahkan kita dalam menuliskan baris kode program. Framework Laravel juga dibuat dengan tujuan mempermudah cara untuk membuat aplikasi berbasis web dan memperindah tampilan karena modelnya yang sederhana dan elegan. Framework ini juga terkenal dengan dokumentasinya yang lengkap dan selalu update. Setiap ada pembaharuan versi terbaru selalu ada pembaharuan pada dokumentasinya. Buku ini selain berisi teori dasar juga memberikan studi kasus aplikasi CRUD dan Toko Online. Mengacu kepada buku karya penulis sebelumnya yang berjudul “Panduan Mudah Belajar Framework Laravel”, buku ini telah di-update dan direvisi sedemikian rupa agar semakin lengkap untuk pembaca.',
            'readers' => 98,
            'views' => 1
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-2443-52-5',
            'category_id' => 1001,
            'title' => 'Buku Sakti Pemrograman Web',
            'author' => 'Didik Setiawan',
            'publisher' => 'Anak Hebat Indonesia',
            'year' => 2017,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/6sht7Cr/buku-sakti-pemrograman-web.jpg',
            'synopsis' => 'Buku Pemrograman Web ini mengenalkan bagian dari sebuah pembentukan pemrograman web. Buku ini sebagian besar menyajikan langkah-langkah program yang disusun secara terstruktur. Dengan adanya langkah-langkah program tersebut, diharapkan pembaca dapat mempraktikkan secara langsung dan dapat menyimpulkan sendiri maksud dari setiap perintah dalam program dengan cara melihat hasil yang ditampilkan di web browser.',
            'readers' => 76,
            'views' => 8
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-2446-41-0',
            'category_id' => 1002,
            'title' => 'Kamus Lengkap Bahasa Korea',
            'author' => 'Tri Istiyani',
            'publisher' => 'Anak Hebat Indonesia',
            'year' => 2017,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/bK5gxph/kamus-lengkap-bahasa-korea.jpg',
            'synopsis' => 'Hallyu atau Korean Wave telah menggema hingga ke Indonesia. Banyak masyarakat Indonesia tersihir akan pesona Korea. Budaya tradisional maupun kontemporer Korea begitu diminati di Indonesia. Salah satunya minat masyarakat Indonesia mempelajari bahasa Korea. Kamus mini bahasa korea ini disusun untuk membantu mempelajari bahasa Korea. Berisi kosakata yang sering digunakan dalam kehidupan sehari-hari. Kamus ini juga disusun ringkas agar dapat dipahami secara lebih mudah dan praktis.',
            'readers' => 101,
            'views' => 1
        ]);
        
        DB::table('books')->insert([
            'isbn' => '978-602-2910-20-6',
            'category_id' => 1002,
            'title' => 'Kamus Saku Bahasa Indonesia',
            'author' => 'Tim B First',
            'publisher' => 'PT Bentang Pustaka',
            'year' => 2014,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/8j0QgXb/kamus-saku-bahasa-indonesia.png',
            'synopsis' => 'Kamus Saku Bahasa Indonesia ini memiliki keunggulan: • Mudah dibawa ke mana-mana karena ukurannya yang kecil • Berisi kosa kata pilihan yang biasa digunakan dalam dunia pendidikan • Dilengkapi dengan petunjuk pemakaian kamus, sejarah terbentuknya bahasa Indonesia, artikel mengenai bahasa baku, definisi singkat, imbuhan, kata tugas, dan EYD',
            'readers' => 93,
            'views' => 2
        ]);

        DB::table('books')->insert([
            'isbn' => '978-602-2808-69-5',
            'category_id' => 1002,
            'title' => 'Kamus Saku Onomatope Bahasa Mandarin',
            'author' => 'Diana C.Sahertian',
            'publisher' => 'Deepublish',
            'year' => 2015,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/2jm1CKs/kamus-saku-onomatope-bahasa-mandarin.jpg',
            'synopsis' => 'Onomatope adalah penamaan benda atau perbuatan dengan peniruan bunyi yang diasosiasikan dengan benda atau perbuatan itu; mis. berkokok, suara dengung, deru, aum, cicit, dsb. (Kridalaksana, hal. 167). Onomatope ada dalam berbagai bahasa, termasuk bahasa Indonesia dan bahasa Mandarin.',
            'readers' => 65,
            'views' => 1
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-0061-42-2',
            'category_id' => 1003,
            'title' => 'Ensiklopedia Tanaman Hias',
            'author' => 'Redaksi AgroMedia',
            'publisher' => 'PT AgroMedia Pustaka',
            'year' => 2007,
        'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
        'cover' => 'https://i.ibb.co/SsYJt1J/ensiklopedia-tanaman-hias.jpg',
        'synopsis' => 'Encyclopedia of ornamental plants.',
        'readers' => 91,
        'views' => 1
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-6889-86-0',
            'category_id' => 1003,
            'title' => 'Ensiklopedia Mini Sains',
            'author' => 'Chris Oxlade, Anita Ganeri',
            'publisher' => 'Erlangga for Kids',
            'year' => 2003,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/QD3Kk0K/ensiklopedia-mini-sains.jpg',
            'synopsis' => 'Ensiklopedia ini akan membantu orang tua untuk menjelaskan secara sederhana kepada anak-anak tentang kehidupan mereka sehari-hari. Dalam keluarga ada silsilah keluarga seperti ayah, ibu, nenek, kakek, paman, bibi dan lain sebagainya. Setiap keluarga hidup di dalam rumah yang bermacam-macam sesuai dengan lingkungannya, dalam ensiklopedia anak juga diajarkan bagaimana membantu orang tua merawat rumah apa yang harus mereka perhatikan, dan barang apa yang berbahaya bagi mereka. Setelah belajar tentang keluarga, anak-anak diajak untuk belajar bermasyarakat, siapa saja yang disebut masyarakat bagaimana berhubungan dengan orang lain secara baik. Belajar tentang kehidupan sekolah dan mengenal lingkungan. Belajar tentang merawat tubuh dan menjaga kesehatan badan. Mengenal macam-macam permaianan yang dapat mereka mainkan dan tempat-tempat rekreasi. Mengenal hari raya dan perayaan hari besar. Dan yang terahir yang terpenting, anak diajarkan untuk mengenali perasaan dan emosinya.',
            'readers' => 74,
            'views' => 5
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-6889-85-3',
            'category_id' => 1003,
            'title' => 'Ensiklopedia Mini Dunia Kita',
            'author' => 'Angela Wilkes',
            'publisher' => 'Erlangga for Kids',
            'year' => 2003,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/fkWtT7R/ensiklopedia-mini-dunia-kita.jpg',
            'synopsis' => 'Ensiklopedia ini akan membantu orang tua untuk menjelaskan secara sederhana kepada anak-anak tentang kehidupan mereka sehari-hari. Dalam keluarga ada silsilah keluarga seperti ayah, ibu, nenek, kakek, paman, bibi dan lain sebagainya. Setiap keluarga hidup di dalam rumah yang bermacam-macam sesuai dengan lingkungannya, dalam ensiklopedia anak juga diajarkan bagaimana membantu orang tua merawat rumah apa yang harus mereka perhatikan, dan barang apa yang berbahaya bagi mereka. Setelah belajar tentang keluarga, anak-anak diajak untuk belajar bermasyarakat, siapa saja yang disebut masyarakat bagaimana berhubungan dengan orang lain secara baik. Belajar tentang kehidupan sekolah dan mengenal lingkungan. Belajar tentang merawat tubuh dan menjaga kesehatan badan. Mengenal macam-macam permaianan yang dapat mereka mainkan dan tempat-tempat rekreasi. Mengenal hari raya dan perayaan hari besar. Dan yang terahir yang terpenting, anak diajarkan untuk mengenali perasaan dan emosinya.',
            'readers' => 100,
            'views' => 7
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-2955-85-9',
            'category_id' => 1004,
            'title' => 'Ilmu Kesehatan Masyarakat',
            'author' => 'Alexander Lucas Slamet Ryadi',
            'publisher' => 'Penerbit Andi',
            'year' => 2016,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/19Q5R2r/ilmu-kesehatan-masyarakat.jpg',
            'synopsis' => 'Ilmu Kesehatan Masyarakat sebagai terjemahan dari Public Health pendekatannya berbeda dengan Kedokteran Klinik (Medical Clinic). Pada Kedokteran Klinik individu-individu yang datang sudah dalam keadaan sakit. Keadaan berbeda terjadi pada Kesehatan Masyarakat, di mana individuindividu tersebut berada dalam suatu komunitas tertentu (community), namun bisa juga pada masyarakat yang lebih luas dan umum (public). Pada masyarakat yang luas kita menangani yang sakit maupun tidak sakit dan masih dalam status sehat.',
            'readers' => 78,
            'views' => 8
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-2631-53-3',
            'category_id' => 1004,
            'title' => 'Makanan dan Kesehatan',
            'author' => 'Edi Suwasono',
            'publisher' => 'Alprin',
            'year' => 2020,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/mtMZz6t/makanan-dan-kesehatan.jpg',
            'synopsis' => 'Buku ini berisi pengetahuan tentang fungsi makanan bagi tubuh, nutrisi yang dikandung makanan dan dibutuhkan oleh tubuh dan menjelaskan tentang 4 sehat 5 sempurna secara mendalam. Untuk lebih jelasnya silakan membaca buku ini. Selamat membaca.',
            'readers' => 88,
            'views' => 6
        ]);

        DB::table('books')->insert([
            'isbn' => '978-602-1083-68-0',
            'category_id' => 1004,
            'title' => 'Etika dan Perilaku Kesehatan',
            'author' => 'Dr. Irwan',
            'publisher' => 'Absolute Media',
            'year' => 2020,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/pzkdqHg/etika-dan-perilaku-kesehatan.png',
            'synopsis' => 'Buku ini berisikan tentang informasi kesehatan masyarakat dalam konteks etika dan perilaku kesehatan lebih khususnya membahas tentang ruang lingup dan sejarah kesehatan masyarakat, konsep sehat dan sakit, etika dan perilaku kesehatan. Kami berharap buku ini dapat memberikan informasi tambahan kepada kita semua khususnya kepada mahasiswa kesehatan.',
            'readers' => 94,
            'views' => 2
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-3239-05-7',
            'category_id' => 1005,
            'title' => 'Psikologi Musik',
            'author' => 'Djohan',
            'publisher' => 'Best Publisher',
            'year' => 2009,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/hLrxgQ1/psikologi-musik.jpg',
            'synopsis' => 'Psikologi dan musikologi merupakan dua cabang ilmu pengetahuan tua, yang satu mendalami perilaku manusia dan satunya lagi memaparkan hasil/produk dari perilaku tersebut. Kedua elemen tersebut pada prinsipnya tidak terpisahkan karena saat ini telah banyak penelitian interdisiplin yang hasilnya memberikan sumbangsih positif dalam kehidupan sehari-hari. Oleh karena itu, penulis berupaya mendiseminasikan psikologi musik sebagai pengetahuan yang relatif masih baru di Indonesia ini kepada berbagai kalangan.',
            'readers' => 83,
            'views' => 1
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-6907-99-1',
            'category_id' => 1005,
            'title' => 'Sejarah Musik dan Apresiasi Seni',
            'author' => 'Sila Widhyatama',
            'publisher' => 'Balai Pustaka',
            'year' => 2012,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/PZ1bL4Q/sejarah-musik-dan-apresiasi-seni.jpg',
            'synopsis' => 'Penulis menyadari sepenuhnya bahwa tanpa adanya bantuan dan bimbingan dari berbagai pihak, buku ini tidak dapat terselesaikan dengan baik, oleh karena itu, dalam kesempatan ini penulis dengan tulus mengucapkan terima kasih yang sebesar-besarnya kepada orang tua, suami, saudara dan handai taulan yang memberikan dukungan dan semangat sehingga dapat terselesaikan tanpa ada halangan suatu apapun. Balai Pustaka',
            'readers' => 89,
            'views' => 7
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-0204-12-8',
            'category_id' => 1005,
            'title' => 'Karakteristik Penciptaan Lagu Anak',
            'author' => 'Fahmy Thohary',
            'publisher' => 'Deepublish',
            'year' => 2019,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/YjSmpnB/karakteristik-penciptaan-lagu-anak.jpg',
            'synopsis' => 'Lagu anak-anak pada umumnya memiliki karakter tersendiri yang membedakannya dengan lagu orang dewasa yang bisa kita dengar. Karakter itulah yang membuat lagu anak-anak terdengar lebih riang, ceria, penuh semangat, serta sarat akan pesan moral. Di dalam buku “Karakteristik Penciptaan Lagu Anak” ini, penulis mengupas secara padat dan jelas mengenai berbagai karakteristik yang terdapat di dalam lagu anak-anak, mulai dari tempo, birama, tonalitas, akord, ambitus suara, interval, melodi, frase, lirik, hingga harmoni.',
            'readers' => 88,
            'views' => 2
        ]);

        DB::table('books')->insert([
            'isbn' => '978-602-0623-39-9',
            'category_id' => 1006,
            'title' => 'Komet Minor',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2019,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/wsdDQvz/komet-minor.png',
            'synopsis' => 'Ia bercerita tentang aliansi bernama Para Pemburu, yang salah satu anggotanya membuat sebuah senjata pusaka berupa tombak, senjata terkuat di dunia paralel, dan bagaimana tombak tersebut dipecah menjadi tiga bagian dan disebar di berbagai tempat, dijaga oleh anggota Para Pemburu.',
            'readers' => 198,
            'views' => 10
        ]);
        DB::table('books')->insert([
            'isbn' => '978-602-0351-17-9',
            'category_id' => 1006,
            'title' => 'Bintang',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2019,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/vYnmrbS/bintang.png',
            'synopsis' => 'Novel Bintang mengisahkan petualangan ketiga remaja SMA–bisa dikatakan persahabatan ketiga anak–yang memiliki rasa ingin tahu sangat tinggi dan banyak, mereka bertiga adalah Raib, Seli, dan Ali.',
            'readers' => 199,
            'views' => 11
        ]);

        DB::table('books')->insert([
            'isbn' => '978-602-0332-11-6',
            'category_id' => 1006,
            'title' => 'Matahari',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2019,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/FmKHCWn/matahari.png',
            'synopsis' => 'Cerita ini dibuka dengan suasana duka yang menyelimuti Raib, Seli, dan Ali atas tewasnya Ily saat pertarungan di klan Matahari (di novel sebelumnya). Para ksatria dari klan Bulan pun turut merasakan yang sama, hingga membuat Miss Selena tak dapat pulang ke klan Bumi.',
            'readers' => 200,
            'views' => 15
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-5525-39-6',
            'category_id' => 1007,
            'title' => 'Antropologi Budaya',
            'author' => 'Maswita',
            'publisher' => 'GUEPEDIA',
            'year' => 2021,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/C86sLXX/antropologi-budaya.png',
            'synopsis' => 'Bahan ajar ini disusun dari berbagai sumber untuk dapat dijadikan pedoman bagi mahasiswa yang sedang mengikuti perkuliahan Antropologi Budaya.',
            'readers' => 87,
            'views' => 5
        ]);

        DB::table('books')->insert([
            'isbn' => '978-602-6338-47-1',
            'category_id' => 1007,
            'title' => 'Antropologi dan Sosiologi Budaya',
            'author' => 'Erdinson Simbolon',
            'publisher' => 'Media Sains Indonesia',
            'year' => 2021,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/0J0bScG/antropologi-dan-sosiologi-pendidikan.jpg',
            'synopsis' => 'Dari buku ini diharapkan dapat menambah pengetahuan para mahasiswa, pembaca, penulis, pengajar, pekerja, yang terkait dengan Antropologi & Sosiologi Pendidikan. Terutama pada suatu lembaga survai, lembaga nonprofit, lembaga pemerintah, serta lembaga non-pemerintah, lembaga misi, lembaga kebudayaan, komunitas dan asosiasi keahlian, perguruan tinggi, yayasan pendidikan, maupun organisasi dan lembaga berbadan hukum lainnya. Terutama dalam pendirian, program kegiatan serta pengembangan lembaganya.',
            'readers' => 67,
            'views' => 3
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-6761-56-4',
            'category_id' => 1007,
            'title' => 'Bahan Ajar Antropologi Ekonomi',
            'author' => 'Murni Eva Marlina Rumapea',
            'publisher' => 'Yayasan Kita Menulis',
            'year' => 2020,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/HpXT8PV/bahan-ajar-antropologi-ekonomi.jpg',
            'synopsis' => 'Pada dasarnya buku ini bukan menjelaskan ilmu-ilmu ekonomi, tetapi membahas bentuk atau ekonomi masyarakat dari tinjauan antropologis. Seperti pendekatan antropologis ekonomi, pertukaran, pemberian, marxisme, antropologi dalam pembangunan, ekonomi dan kebudayaan, teori pembangunan, dan globalisasi dan pembangunan. Buku ini ditulis dengan format bahan ajar, dan ringkas. Artinya buku ini ditulis dengan point-point yang sangat penting dalam pembelajaran Antropologi Ekonomi. Meskipun buku ini menjelaskan dengan ringkas dan sederhana, akan tetapi dapat dipahami dan tidak menggunakan istilah-istilah yang sulit bagi mahasiswa. Selain itu buku ini juga ada menjadi pintu awal membuka wawasan mahasiswa untuk mengembangkan pemahaman antropologi ekonomi. Mahasiswa tidak hanya berfokus pada ilmu ekonomi, tetapi memahami ekonomi dari segi budaya suatu etnis.',
            'readers' => 65,
            'views' => 2
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-2797-47-3',
            'category_id' => 1008,
            'title' => 'Why? Scientific Events',
            'author' => 'YeaRimDang',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2021,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/84Lw452/why-scientific-events.jpg',
            'synopsis' => 'Sejarah umat manusia dan peristiwa-peristiwa sains, keduanya merupakan hal yang mengagumkan. Sejak penemuan peristiwa sains pertama kali, yaitu penggunaan api, sampai kloning, menyadarkan kita bahwa kejadian sehari-hari yang dialami oleh manusia ada hubungannya dengan penemuan dan perkembangan teknologi sains. Penemuan roda, penemuan sel, peluncuran satelit pertama kali dan sebagainya adalah peristiwa sains yang telah memperkaya dan mempermudah kehidupan kita. Kalian semua pun cobalah bermimpi menjadi tokoh dalam peristiwa sains yang baru.',
            'readers' => 98,
            'views' => 8
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-2798-47-3',
            'category_id' => 1008,
            'title' => 'Why? Future Science',
            'author' => 'YeaRimDang',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2021,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/L6bqYzy/why-future-science.jpg',
            'synopsis' => 'Apakah kamu pernah membayangkan menaiki mobil terbang, melihat robot yang sangat kecil menyembuhkan penyakit di dalam tubuh manusia, atau pun menghabiskan libur panjang di luar angkasa? Apa kamu pikir itu hanya dapat terjadi di film? Tentu tidak. Meski sekarang cerita ini akan terdengar seperti mimpi, namun hal-hal di mana ada komputer yang bisa dipakai seperti baju, mengetahui penyakit sebelum penyakit itu muncul, maupun bermain game hanya dengan kekuatan pikiran akan terwujud sebentar lagi. Imajinasi kalianlah yang menjadi kunci menuju masa depan yang seperti itu. Melalui buku ini bukalah imajinasi kalian tentang ilmu pengetahuan di masa depan! ',
            'readers' => 150,
            'views' => 8
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-2799-47-3',
            'category_id' => 1008,
            'title' => 'Why? Crime Science',
            'author' => 'YeaRimDang',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2021,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/4VQSVVb/why-crime-scene.jpg',
            'synopsis' => 'Pernahkah kalian menonton aksi para investigator ilmiah dalam serial drama kriminal di TV? Dalam aksinya, para investigator mampu menemukan bukti-bukti kejahatan melalui helai rambut, sidik jari, bahkan noda darah, hingga mereka berhasil menangkap penjahatnya dengan mengagumkan. Mereka adalah orang-orang yang bertugas menyelidiki suatu kasus yang sulit dan meneliti hasil penyelidikan mereka untuk memecahkan kasus. Investigasi ilmiah semakin berkembang seiring dengan perkembangan ilmu pengetahuan dan teknologi. Nah, sudah siapkah kalian memasuki dunia investigasi ilmiah yang menakjubkan? Sekarang giliran kalian menjadi investigator ilmiah yang akan mengungkap identitas sang penjahat! Perkembangan investigasi ilmiah seiring sejalan dengan perkembangan ilmu pengetahuan itu sendiri. Zaman sekarang, DNA seseorang bisa diketahui hanya dengan cara menganalisis sehelai rambut.',
            'readers' => 167,
            'views' => 5
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-3281-48-5',
            'category_id' => 1009,
            'title' => 'Pengantar Ilmu Ekonomi',
            'author' => 'Dr. Agoes Parera',
            'publisher' => 'Bumi Aksara',
            'year' => 2021,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/1MhKHjs/pengantar-ilmu-ekonomi.jpg',
            'synopsis' => 'Buku Pengantar Ilmu Ekonomi ini penulis hadirkan khususnya kepada mahasiswa di lingkungan Fakultas Hukum, Fakultas Ekonomi & Bisnis, Sekolah Tinggi Ilmu Ekonomi dan sejenis lainnya hingga masyarakat pada umumnya.',
            'readers' => 108,
            'views' => 1
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-2955-60-6',
            'category_id' => 1009,
            'title' => 'Ekonomi dan Bisnis',
            'author' => 'Dr. I Gusti Ketut Purnaya',
            'publisher' => 'Penerbit Andi',
            'year' => 2016,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/tD7yb70/ekonom-dan-bisnis.jpg',
            'synopsis' => 'Perkembangan perekonomian dunia di masa yang akan datang dapat diprediksi akan selalu meningkat yang didukung kemajuan teknologi yang demikian pesat. Buku ini ditujukan untuk mahasiswa agar dapat memperlancar proses belajar mengajar dalam kuliah Ekonomi Bisnis. Buku ini juga bermanfaat bagi organisasi/perusahaan dan masyarakat umum yang memilih jalan kehidupan dalam berbisnis, sehingga dapat lebih cepat dan gamblang dalam memahami tentang konsep-konsep bisnis.',
            'readers' => 77,
            'views' => 0
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-6906-85-9',
            'category_id' => 1009,
            'title' => 'Perekonomian Indonesia',
            'author' => 'Royda',
            'publisher' => 'Penerbit NEM',
            'year' => 2021,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/7bXDVYP/perekonomian-indonesia.jpg',
            'synopsis' => 'Buku Perekonomian Indonesia ini berisi tentang teori-teori ekonomi pembangunan yang khususnya membahas keadaan ekonomi yang ada di Indonesia. Materi-materi yang disajikan pada buku ini lebih sederhana dibandingkan buku–buku perekonomian Indonesia yang ditulis oleh penulis lainnya.',
            'readers' => 83,
            'views' => 2
        ]);

        DB::table('books')->insert([
            'isbn' => '978-979-0767-45-4',
            'category_id' => 1010,
            'title' => 'Sosiologi Korupsi',
            'author' => 'Prof.DR.H. Ali Anwar, M.Si',
            'publisher' => 'Pustaka Setia',
            'year' => 2019,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/MV7bMvs/sosiologi-korupsi.jpg',
            'synopsis' => 'Korupsi seakan tidak bisa dilepaskan dari budaya birokrasi yang berada di berbagai negara. Slogan-slogan anti korupsi yang selalu didengungkan seakan tak mempengaruhi budaya korupsi yang masih berlangsung hingga saat ini. Di Indonesia, kasus korupsi masih marak terjadi. Belum ada sebuah gebrakan mutakhir untuk mengatasinya.',
            'readers' => 54,
            'views' => 6
        ]);

        DB::table('books')->insert([
            'isbn' => '978-623-2180-69-7',
            'category_id' => 1010,
            'title' => 'Sosiologi Anak',
            'author' => 'Prof. Dr. Bagong Suyanto',
            'publisher' => 'Prenada Media Group',
            'year' => 2019,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/SJHy6cQ/Sosiologi-Anak.jpg',
            'synopsis' => 'Dengan hadirnya buku ini, diharapkan dapat menggugah sekaligus mengajak para pendidik, mahasiswa, dan pemerhati anak bersedia meluangkan waktu bersama-sama berdiskusi dan berusaha mencari pemecahan terbaik untuk menangani permasalahan anak rawan.',
            'readers' => 59,
            'views' => 3
        ]);

        DB::table('books')->insert([
            'isbn' => '978-602-7985-69-8',
            'category_id' => 1010,
            'title' => 'Teori Sosiologi Modern Ed 7',
            'author' => 'George Ritzer',
            'publisher' => 'Kencana',
            'year' => 2014,
            'data' => 'https://pdfobject.com/pdf/sample-3pp.pdf',
            'cover' => 'https://i.ibb.co/t2VvtTv/Teori-Sosiologi-Modern.jpg',
            'synopsis' => 'Edisi ketujuh Teori Sosiologi Modern karya George Ritzer ini merupakan rujukan utama teori sosiologi. Sebagaimana edisi terdahulu, ulasan komprehensif tentang aliran pemikiran sosiologi kontemporer tetap dimuat sebagai isu penting: Teori kunci yang dipaparkan di dalamnya diintegrasikan dengan sketsa biografi para ahli teorinya, dan ditempatkan dalam konteks latar sejarah dan intelektual mereka. Semua itu dilakukan untuk membantu pembaca meraih pemahaman yang lebih mendalam terhadap asal usul atau latar belakang kelahiran sebuah teori, dan membangun apresiasi atas keberagaman teori sosiologi kontemporer.',
            'readers' => 89,
            'views' => 4
        ]);
    }
}
