<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = [

            // 🍛 MAKANAN UTAMA
            ['id' => 1, 'name' => 'Nasi', 'price' => 3000, 'category' => 'Makanan Utama', 'description' => 'Nasi putih hangat, cocok dipadukan dengan lauk pilihan.', 'image' => asset('images/menu/nasi.jpg')],
            ['id' => 2, 'name' => 'Nasi Ayam Goreng', 'price' => 10000, 'category' => 'Makanan Utama', 'description' => 'Nasi dengan ayam goreng kampung dan sambal khas.', 'image' => asset('images/menu/Ayam.jpg')],
            ['id' => 3, 'name' => 'Nasi Ayam Geprek', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Ayam goreng krispi digeprek dengan sambal pedas.', 'image' => asset('images/menu/geprek.jpg')],
            ['id' => 4, 'name' => 'Nasi Telur', 'price' => 8000, 'category' => 'Makanan Utama', 'description' => 'Nasi hangat dengan telur dadar gurih dan sambal.', 'image' => asset('images/menu/nasi telur.jpg')],
            ['id' => 5, 'name' => 'Nasi Goreng', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Nasi goreng khas MJ dengan bumbu rempah pilihan.', 'image' => asset('images/menu/nasi goreng.jpg')],
            ['id' => 6, 'name' => 'Nasi Godok', 'price' => 15000, 'category' => 'Makanan Utama', 'description' => 'Nasi goreng kuah dengan rasa khas Jawa.', 'image' => asset('images/menu/nasi godok.jpg')],
            ['id' => 7, 'name' => 'Magelangan', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Perpaduan nasi dan mie goreng dalam satu piring lezat.', 'image' => asset('images/menu/magelangan.jpg')],
            ['id' => 8, 'name' => 'Bakmie Kuah', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Bakmie berkuah kaldu gurih dengan topping ayam.', 'image' => asset('images/menu/bakmi kuah.jpg')],
            ['id' => 9, 'name' => 'Bakmie Goreng', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Bakmie goreng spesial dengan rasa autentik Jawa.', 'image' => asset('images/menu/bakmi.jpg')],
            ['id' => 10, 'name' => 'Mie Dokdok', 'price' => 14000, 'category' => 'Makanan Utama', 'description' => 'Mie goreng dengan bumbu khas dan topping telur.', 'image' => asset('images/menu/miedok.jpg')],
            ['id' => 11, 'name' => 'Seblak Original', 'price' => 15000, 'category' => 'Makanan Utama', 'description' => 'Seblak pedas khas Bandung dengan campuran kerupuk dan sosis.', 'image' => asset('images/menu/seblak.jpg')],
            ['id' => 12, 'name' => 'Mie Ayam', 'price' => 9000, 'category' => 'Makanan Utama', 'description' => 'Mie ayam lembut dengan topping ayam manis gurih.', 'image' => asset('images/menu/mie ayam.jpg')],
            ['id' => 13, 'name' => 'Capcay Kuah', 'price' => 15000, 'category' => 'Makanan Utama', 'description' => 'Campuran sayuran segar dan daging ayam dalam kuah gurih.', 'image' => asset('images/menu/capcay.jpg')],
            ['id' => 14, 'name' => 'Indomie', 'price' => 10000, 'category' => 'Makanan Utama', 'description' => 'Mie instan favorit dengan topping telur dan sayur.', 'image' => asset('images/menu/indomie.jpg')],
            ['id' => 15, 'name' => 'Soto Ayam', 'price' => 10000, 'category' => 'Makanan Utama', 'description' => 'Soto ayam kuning segar dengan suwiran ayam dan sambal.', 'image' => asset('images/menu/soto.jpg')],
            ['id' => 16, 'name' => 'Paket Nasi Tepong', 'price' => 22000, 'category' => 'Makanan Utama', 'description' => 'Nasi, ayam goreng tepung, sambal, lalapan, dan kerupuk.', 'image' => asset('images/menu/nasi tepong.jpg')],
            ['id' => 17, 'name' => 'sambal', 'price' => 3000, 'category' => 'Makanan Utama', 'description' => 'sambal dengan cabe segar,', 'image' => asset('images/menu/sambal.jpg')],
            ['id' => 18, 'name' => 'krupuk', 'price' => 2000, 'category' => 'Makanan Utama', 'description' => 'kerupuk.', 'image' => asset('images/menu/kerupuk.jpg')],

            // 🍰 DESSERT
            ['id' => 19, 'name' => 'Kentang Goreng', 'price' => 8000, 'category' => 'Dessert', 'description' => 'Kentang goreng renyah disajikan dengan saus cocol.', 'image' => asset('images/menu/kentang.jpg')],
            ['id' => 20, 'name' => 'Mix Platter', 'price' => 15000, 'category' => 'Dessert', 'description' => 'Campuran kentang, nugget, dan sosis goreng.', 'image' => asset('images/menu/mix.jpg')],
            ['id' => 21, 'name' => 'Roti Bakar', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Roti bakar dengan topping keju dan susu kental manis.', 'image' => asset('images/menu/roti.jpg')],
            ['id' => 22, 'name' => 'Pisang Coklat Keju', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Pisang goreng manis dengan coklat dan keju.', 'image' => asset('images/menu/pisang.jpg')],
            ['id' => 23, 'name' => 'Dimsum', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Olahan daging ayam lembut dengan saus spesial.', 'image' => asset('images/menu/dimsum.jpg')],
            ['id' => 24, 'name' => 'Jamur Crispy', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Jamur renyah digoreng garing dengan tepung.', 'image' => asset('images/menu/jamur.jpg')],
            ['id' => 25, 'name' => 'Cireng Isi Ayam', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Cireng gurih isi ayam pedas.', 'image' => asset('images/menu/cireng.jpg')],
            ['id' => 26, 'name' => 'Gorengan', 'price' => 5000, 'category' => 'Dessert', 'description' => 'Aneka gorengan gurih dan renyah cocok untuk teman minum teh.', 'image' => asset('images/menu/gorengan.jpg')],
            ['id' => 27, 'name' => 'Onion Ring', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Cincin bawang goreng renyah dengan bumbu gurih.', 'image' => asset('images/menu/onionring.jpg')],
            ['id' => 28, 'name' => 'Sempol Ayam', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Olahan ayam berbentuk tusuk dengan adonan tepung gurih.', 'image' => asset('images/menu/sempol.jpg')],
            ['id' => 29, 'name' => 'Roll Tape', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Tape manis dibalut kulit lumpia dan digoreng garing.', 'image' => asset('images/menu/rolltape.jpg')],
            ['id' => 30, 'name' => 'Roll Keju', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Keju lumer di dalam kulit lumpia renyah.', 'image' => asset('images/menu/rollkeju.jpg')],
            ['id' => 31, 'name' => 'Udang Rambutan', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Udang dibalut mie goreng renyah berbentuk bola.', 'image' => asset('images/menu/udangrambutan.jpg')],
            ['id' => 32, 'name' => 'Tempura', 'price' => 5000, 'category' => 'Dessert', 'description' => 'Olahan ikan dan udang khas Jepang dengan tepung renyah.', 'image' => asset('images/menu/tempura.jpg')],
            ['id' => 33, 'name' => 'Cireng Salju', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Cireng lembut pedas dan tekstur kenyal.', 'image' => asset('images/menu/cirengsalju.jpg')],


            // ☕ MINUMAN (Coffee, Tea, Milk, Latte, dll)
            ['id' => 34, 'name' => 'Kopi Hitam Tubruk', 'price' => 6000, 'category' => 'Minuman', 'description' => 'Kopi hitam tradisional diseduh langsung.', 'image' => asset('images/menu/kopi-tubruk.jpg')],
            ['id' => 35, 'name' => 'Kopi Susu', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Kopi hitam dengan susu kental manis.', 'image' => asset('images/menu/kopi susu.jpg')],
            ['id' => 36, 'name' => 'Arabica', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Kopi Arabica dengan aroma lembut dan rasa halus.', 'image' => asset('images/menu/arabica.jpg')],
            ['id' => 37, 'name' => 'Redvelved Latte 16oz', 'price' => 15000, 'category' => 'Minuman', 'description' => 'Latte dengan rasa redvelved lembut.', 'image' => asset('images/menu/redvelved latte.jpg')],
            ['id' => 38, 'name' => 'Butter Latte 14oz', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Latte creamy dengan butter lembut.', 'image' => asset('images/menu/butter.jpg')],
            ['id' => 39, 'name' => 'Matcha Coffee', 'price' => 18000, 'category' => 'Minuman', 'description' => 'Kombinasi matcha dan espresso nikmat.', 'image' => asset('images/menu/MatchaCoffee.jpg')],
            ['id' => 40, 'name' => 'Mochallo', 'price' => 20000, 'category' => 'Minuman', 'description' => 'Perpaduan kopi dan cokelat premium.', 'image' => asset('images/menu/mochallo.jpg')],
            ['id' => 41, 'name' => 'Soda Gembira', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman bersoda manis menyegarkan.', 'image' => asset('images/menu/soda.jpg')],
            ['id' => 42, 'name' => 'Wedang Uwuh', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Wedang rempah hangat khas Jawa.', 'image' => asset('images/menu/wedang.jpg')],
            ['id' => 43, 'name' => 'Grape Yakult', 'price' => 15000, 'category' => 'Minuman', 'description' => 'Minuman segar yakult rasa anggur.', 'image' => asset('images/menu/yakult.jpg')],
            ['id' => 44, 'name' => 'Pink Lava', 'price' => 17000, 'category' => 'Minuman', 'description' => 'Minuman pink manis dan lembut.', 'image' => asset('images/menu/pinklava.jpg')],
            ['id' => 45, 'name' => 'Teh Original', 'price' => 4000, 'category' => 'Minuman', 'description' => 'Teh hangat dengan cita rasa klasik dan menyegarkan.', 'image' => asset('images/menu/teh.jpg')],
            ['id' => 46, 'name' => 'Teh Apel / Teh Leci', 'price' => 5000, 'category' => 'Minuman', 'description' => 'Teh dengan tambahan sari apel atau leci, memberikan rasa manis alami.', 'image' => asset('images/menu/tehleci.jpg')],
            ['id' => 47, 'name' => 'Jeruk', 'price' => 5000, 'category' => 'Minuman', 'description' => 'Minuman segar dari perasan jeruk asli, bisa disajikan hangat atau dingin.', 'image' => asset('images/menu/jeruk.jpg')],
            ['id' => 48, 'name' => 'Lemon Tea', 'price' => 5000, 'category' => 'Minuman', 'description' => 'Teh segar dengan perasan lemon yang menyegarkan.', 'image' => asset('images/menu/lemontea.jpg')],
            ['id' => 49, 'name' => 'Lemonade', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Minuman dingin dengan campuran lemon segar dan gula, menyegarkan hari Anda.', 'image' => asset('images/menu/lemonade.jpg')],
            ['id' => 50, 'name' => 'Jahe Sereh', 'price' => 6000, 'category' => 'Minuman', 'description' => 'Minuman hangat dari jahe dan sereh, cocok untuk menghangatkan tubuh.', 'image' => asset('images/menu/jahesereh.jpg')],
            ['id' => 51, 'name' => 'Susu Jahe Sereh', 'price' => 8000, 'category' => 'Minuman', 'description' => 'Perpaduan susu, jahe, dan sereh yang nikmat dan menenangkan.', 'image' => asset('images/menu/susujahesereh.jpg')],
            ['id' => 52, 'name' => 'Jahe Sereh Nipis', 'price' => 7000, 'category' => 'Minuman', 'description' => 'Campuran jahe, sereh, dan jeruk nipis yang menyehatkan.', 'image' => asset('images/menu/jaheserehnipis.jpg')],
            ['id' => 53, 'name' => 'Wedang Tape', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Minuman hangat tradisional dengan tape singkong manis.', 'image' => asset('images/menu/wedangtape.jpg')],
            ['id' => 54, 'name' => 'Kopi Gayo', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Kopi arabika khas Aceh Gayo dengan aroma kuat dan cita rasa seimbang.', 'image' => asset('images/menu/kopigayo.jpg')],   
            ['id' => 55, 'name' => 'Kopi Toraja', 'price' => 15000, 'category' => 'Minuman', 'description' => 'Kopi premium asal Toraja dengan cita rasa earthy dan aroma kuat.', 'image' => asset('images/menu/kopitoraja.jpg')],
            ['id' => 56, 'name' => 'Kopi Bali', 'price' => 15000, 'category' => 'Minuman', 'description' => 'Kopi khas Bali Kintamani dengan rasa fruity dan keasaman ringan.', 'image' => asset('images/menu/kopibali.jpg')],
            ['id' => 57, 'name' => 'Jus Buah', 'price' => 10000, 'category' => 'Minuman', 'description' => 'jus buah segar', 'image' => asset('images/menu/jus.jpg')],
            ['id' => 58, 'name' => 'Chocolate Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman susu cokelat lembut dengan rasa manis pas.', 'image' => asset('images/menu/chocolate.jpg')],
            ['id' => 59, 'name' => 'Matcha', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Susu dengan campuran bubuk matcha Jepang yang lembut dan harum.', 'image' => asset('images/menu/matcha.jpg')],
            ['id' => 60, 'name' => 'Bubblegum Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman manis dengan rasa khas permen karet yang unik.', 'image' => asset('images/menu/bubblegum.jpg')],
            ['id' => 61, 'name' => 'Vanilla Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman susu vanilla dengan aroma lembut dan manis.', 'image' => asset('images/menu/vanilla.jpg')],
            ['id' => 62, 'name' => 'Redvelved Latte 14oz', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman lembut dengan cita rasa redvelvet yang creamy.', 'image' => asset('images/menu/redvelvet14oz.jpg')],
            ['id' => 62, 'name' => 'Blueberry Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman segar dengan rasa blueberry manis dan sedikit asam.', 'image' => asset('images/menu/blueberry.jpg')],
            ['id' => 63, 'name' => 'Strawberry Squash', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman soda segar dengan rasa strawberry yang menyegarkan.', 'image' => asset('images/menu/strawberrysquash.jpg')],
            ['id' => 64, 'name' => 'Melon Squash', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman soda segar dengan aroma melon lembut dan manis.', 'image' => asset('images/menu/melonsquash.jpg')],
            ['id' => 65, 'name' => 'Orange Squash', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman soda segar dengan rasa jeruk yang nikmat.', 'image' => asset('images/menu/orangesquash.jpg')],
            ['id' => 66, 'name' => 'Teh Tarik', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Minuman teh tarik adalah paduan teh dengan creamy.', 'image' => asset('images/menu/tehtarik.jpg')],
            ['id' => 67, 'name' => 'Milodino', 'price' => 19000, 'category' => 'Minuman ', 'description' => 'Minuman susu Milo dengan rasa cokelat lembut dan creamy.', 'image' => asset('images/menu/milodino.jpg')],
            ['id' => 68, 'name' => 'Taro Coffee', 'price' => 18000, 'category' => 'Minuman', 'description' => 'Perpaduan kopi dengan taro yang menghasilkan rasa unik dan manis.', 'image' => asset('images/menu/tarocoffee.jpg')],
            ['id' => 69, 'name' => 'Pandan Latte 14oz', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Latte dengan aroma pandan yang wangi dan lembut.', 'image' => asset('images/menu/pandanlatte14oz.jpg')],
            ['id' => 70, 'name' => 'Pandan Latte 16oz', 'price' => 19000, 'category' => 'Minuman', 'description' => 'Versi besar dari Pandan Latte, creamy dan harum pandan.', 'image' => asset('images/menu/pandanlatte16oz.jpg')],
            ['id' => 71, 'name' => 'Orange Latte 14oz', 'price' => 14000, 'category' => 'Minuman', 'description' => 'Latte dengan aroma jeruk segar dan rasa lembut.', 'image' => asset('images/menu/orangelatte14oz.jpg')],
            ['id' => 72, 'name' => 'Orange Latte 16oz', 'price' => 19000, 'category' => 'Minuman', 'description' => 'Latte jeruk ukuran besar dengan cita rasa manis segar.', 'image' => asset('images/menu/orangelatte16oz.jpg')],
            ['id' => 73, 'name' => 'Vanilla Strawberry Latte 14oz', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Campuran vanilla dan strawberry dalam minuman latte lembut.', 'image' => asset('images/menu/vanillastrawberrylatte14oz.jpg')],
            ['id' => 74, 'name' => 'Vanilla Strawberry Latte 16oz', 'price' => 19000, 'category' => 'Minuman', 'description' => 'Versi besar Vanilla Strawberry Latte dengan rasa creamy.', 'image' => asset('images/menu/vanillastrawberrylatte16oz.jpg')],
            ['id' => 75, 'name' => 'Caramel Macchiato', 'price' => 19000, 'category' => 'Minuman', 'description' => 'Kopi susu dengan sirup karamel lembut dan aroma kuat.', 'image' => asset('images/menu/caramelmacchiato.jpg')],
            ['id' => 76, 'name' => 'Strawberi Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'paduan Strawberi dan susu.', 'image' => asset('images/menu/StrawberiMilk.jpg')],
            ['id' => 77, 'name' => 'SChocolateMilk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'paduan hocolate dan susu.', 'image' => asset('images/menu/ChocolateMilk.jpg')],
            ['id' => 78, 'name' => 'Matcha Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'paduan Matcha dan susu.', 'image' => asset('images/menu/matcha.jpg')],
            ['id' => 79, 'name' => 'Redvelved Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'paduan rasa redvelvet yang creamy dan susu.', 'image' => asset('images/menu/redvelvet.jpg')],



        ];
        

        return view('menu', compact('menus'));
    }
}