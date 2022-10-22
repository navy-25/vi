<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        // PAGE
        $page['title']              = "Welcome to Nafi's CV";
        $page['author']             = "Muhammad Nafi";
        $page['keywords']           = "viproject, web developer, graphic designer, Muhammad Nafi Maula hakim, Nafi, vidisen, curiculum vitae,cv";
        $page['site_ver']           = "z2qT-oHcq7pVEXxmNTAbB19CSGlj4DLNk5dnrohA0Fg";
        $page['description']        = "Hello, my name is Muhammad Nafi' Maula Hakim< but you can call me nafi. Born in Jombang, on January 25, 1999. Now I live in the city of Surabaya, East Java. I am a hardworking person and willing to learn new things. Thank you for visiting my web site. Have a nice day. By the way, I am very interested in the topics of graphic design, programmers, data analysts, and creative content.";
        $page['favicon']            = asset('img/my-photo.png');
        // END PAGE

        // SECTION 1
        $data['old']                = date('Y') - 1999;
        $data['passions_en']        = ['Graphic Designer', 'Web Developer'];
        $data['passions_id']        = ['Desainer Grafis', 'Pengembang Web'];
        $data['passions_icon']      = ['graphic-designer-black.png', 'coding-black.png'];

        $data['contact_icon']       = ['linkedin-yellow.png', 'instagram-yellow.png', 'whatsapp-yellow.png', 'dribble-yellow.png', 'placeholder-yellow.png',];
        $data['link']               = ['https://www.linkedin.com/in/muhammad-nafi-maula-hakim-8583b3139', 'https://www.instagram.com/n_vi25', 'https://wa.me/6282132521665', 'https://dribbble.com/n_vi25', 'https://maps.app.goo.gl/LGLgJFVK8iu1RgJy9'];
        $data['label']              = ['Linkedin', 'Instagram', 'Whatsapp', 'Dribble', 'Home'];
        // END SECTION 1


        // SECTION 3
        $data['school_name_en']     = ['Ar Roudlotul Ilmiah', 'SMK Muhammadiyah 1', 'Muhammadiyah Malang'];
        $data['school_name_id']     = ['Ar Roudlotul Ilmiah', 'SMK Muhammadiyah 1', 'Muhammadiyah Malang'];
        $data['vational_en']        = ['none', 'Multimedia', 'Informatics Engineering'];
        $data['vational_id']        = ['none', 'Multimedia', 'Teknik Informatika'];
        $data['school_level_en']    = ['Madrasah Tsanawiyah (2011-2014)', 'Vocational Schools (2014-2017)', 'University (2017-2021)'];
        $data['school_level_id']    = ['Madrasah Tsanawiyah (2011-2014)', 'Sekolah Kejurusan (2014-2017)', 'Universitas (2017-2021)'];
        $data['school_icon']        = ['quran-black.png', 'multimedia-black.png', 'coding-black.png'];
        $data['school_place_en']    = ['Nganjuk, East Java', 'Nganjuk, East Java', 'Malang, East Java'];
        $data['school_place_id']    = ['Nganjuk, Jawa Timur', 'Nganjuk, Jawa Timur', 'Malang, Jawa Timur'];
        // SECTION 3

        // SECTION 4
        $data['job_icon']           = ['indoai-logo.png', 'headway-logo.png', 'vidisen-logo.png', 'indoai-logo.png', 'grab-logo.png',];
        $data['job_name']           = ['PT. Teknologi Artifisial Indonesia', 'PT. Heksa Adhitek Wayatama', 'ViDisen - Jasa Desain Grafis', 'PT. Teknologi Artifisial Indonesia', 'PT. Grab Indonesia',];
        $data['job_position_in']    = ['Tim Kreatif/Content Creator', 'Pengembang Web Fullstack', 'Desainer Grafis & Owner', 'Mentor - Pemrograman Python Dasar', 'Driver Grab Bike',];
        $data['job_years_in']       = ['Jan 2022 - Sekarang', 'Agu 2021 - Sekarang', 'Jan 2019 - Sekarang', 'Jan 2021 - Mei 2021', 'Apr 2018 - Okt 2020',];
        $data['job_type_in']        = ['Paruh Waktu', 'Penuh Waktu', 'Pekerja Lepas', 'Paruh Waktu', 'Paruh Waktu',];
        $data['job_category_in']    = ['Layanan', 'Layanan', 'Layanan', 'Mentoring', 'Layanan',];
        $data['job_desc_in']        = [
            [
                'Merencanakan konten sosial media (Content Planning)',
                'Penulisan Konten Marketing & Sosial Media (Copywriting)',
                'Mengerjakan desain untuk konten sosial media menggunakan Corel Draw, Photoshop, ataupun Adobe Ilustrator',
            ],
            [
                'Bekerja sebagai Pengembang web secara penuh waktu',
                'Pemeliharaan aplikasi web (Maintance)',
                'Mengembangkan website dengan framework Laravel',
                'Mempelajari berbagai macam framework untuk membantu pengerjaan dalam projek kantor',
                'Mengerjakan dan Pengelolaan aplikasi perusahaan',
            ],
            [
                'Menyelesaikan desain sesuai dengan apa yang dimau pelanggan',
                'Mampu mengerjakan beberapa kategori desain seperti : Logo, Flyer/Poster, UI Aplikasi, Karakter/Maskot, Keperluan Acara (Banner/Merchandise/dsb)',
                'Melakukan promosi sekaligus menangani pelanggan secara daring/luring',
            ],
            [
                'Melakukan proses belajar mengajar (mentoring) dengan class yang sudah ditentukan perbulanya',
                'Memberikan materi dan pelatihan terkait bahasa pemrograman python',
                'Pemberian Tugas setiap minggunya',
                'Menjawab pertanyaan dari mente (Mahasiswa/orang yang ikut course online)',
                'Monitoring dan evaluasi',
            ],
            [
                'Menyelesaikan lebih dari 20 tugas utama perharinya',
                'Mampu bekerja 4-5 jam perhari',
                'Memiliki rating 4.9/5',
                'Jujur dan selalu berusaha memberikan pelayanan terbaik',
                'Mengutamakan Keselamatan dan ketepatan waktu',
            ],
        ];
        $data['job_position_eng']   = ['Creative Team/Content Creator', 'Fullstack Web Developer', 'Graphic Designer & Owner', 'Mentor - Basic Python Programming', 'Driver Grab Bike',];
        $data['job_years_eng']      = ['Jan 2022 - Now', 'Aug 2021 - Now', 'Jan 2019 - Now', 'Jan 2021 - May 2021', 'Apr 2018 - Oct 2020',];
        $data['job_type_eng']       = ['Part Time', 'Full Time', 'Freelance', 'Part Time', 'Part Time',];
        $data['job_category_eng']   = ['Service', 'Service', 'Service', 'Mentoring', 'Service',];
        $data['job_desc_eng']       = [
            [
                'Planning social media content (Content Planning)',
                'Content Writing Marketing & Social Media (Copywriting)',
                'Work on designs for social media content using Corel Draw, Photoshop, or Adobe Illustrator',
            ],
            [
                'Work as a web Developer on a full-time basis',
                'Web application maintenance',
                'Developing a website with the Laravel framework',
                'Learn various frameworks to help work in office projects',
                'Work on and Manage enterprise applications',
            ],
            [
                'Complete the design according to what the customer wants',
                'Able to work on several design categories such as: Logo, Flyer / Poster, Application UI, Character / Mascot, Event Needs (Banner/Merchandise/etc)',
                'Conducting promotions while handling customers online / offline',
            ],
            [
                'Conducting the teaching and learning process (mentoring) with predetermined classes/month',
                'Providing materials and training related to the python programming language',
                'Assignments every week',
                'Answering questions from the cashew (Students / people who take the online course)',
                'Monitoring and evaluation',
            ],
            [
                'Complete more than 20 main tasks per day',
                'Able to work 4-5 hours/day',
                'Have a rating 4.9/5',
                'Honest and always try to provide the best service',
                'Safety and punctuality first',
            ]
        ];
        // END SECTION 4
        return view('index', compact('page', 'data'));
    }
}