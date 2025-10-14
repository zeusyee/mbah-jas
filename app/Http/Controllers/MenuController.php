<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = [

            // 🍛 MAKANAN UTAMA
            ['id' => 1, 'name' => 'Nasi', 'price' => 3000, 'category' => 'Makanan Utama', 'description' => 'Nasi putih hangat, cocok dipadukan dengan lauk pilihan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/nasi.jpg?raw=true'],
            ['id' => 2, 'name' => 'Nasi Ayam Goreng', 'price' => 10000, 'category' => 'Makanan Utama', 'description' => 'Nasi dengan ayam goreng kampung dan sambal khas.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Ayam.jpg?raw=true'],
            ['id' => 3, 'name' => 'Nasi Ayam Geprek', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Ayam goreng krispi digeprek dengan sambal pedas.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/geprek.jpg?raw=true'],
            ['id' => 4, 'name' => 'Nasi Telur', 'price' => 8000, 'category' => 'Makanan Utama', 'description' => 'Nasi hangat dengan telur dadar gurih dan sambal.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/nasi%20telur.jpg?raw=true'],
            ['id' => 5, 'name' => 'Nasi Goreng', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Nasi goreng khas MJ dengan bumbu rempah pilihan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/nasi%20goreng.jpg?raw=true'],
            ['id' => 6, 'name' => 'Nasi Godok', 'price' => 15000, 'category' => 'Makanan Utama', 'description' => 'Nasi goreng kuah dengan rasa khas Jawa.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/nasi%20godok.jpg?raw=true'],
            ['id' => 7, 'name' => 'Magelangan', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Perpaduan nasi dan mie goreng dalam satu piring lezat.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/magelangan.jpg?raw=true'],
            ['id' => 8, 'name' => 'Bakmie Kuah', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Bakmie berkuah kaldu gurih dengan topping ayam.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/bakmi%20kuah.jpg?raw=true'],
            ['id' => 9, 'name' => 'Bakmie Goreng', 'price' => 12000, 'category' => 'Makanan Utama', 'description' => 'Bakmie goreng spesial dengan rasa autentik Jawa.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/bakmi.jpg?raw=true'],
            ['id' => 10, 'name' => 'Mie Dokdok', 'price' => 14000, 'category' => 'Makanan Utama', 'description' => 'Mie goreng dengan bumbu khas dan topping telur.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/miedok.jpg?raw=true'],
            ['id' => 11, 'name' => 'Seblak Original', 'price' => 15000, 'category' => 'Makanan Utama', 'description' => 'Seblak pedas khas Bandung dengan campuran kerupuk dan sosis.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/seblak.jpg?raw=true'],
            ['id' => 12, 'name' => 'Mie Ayam', 'price' => 9000, 'category' => 'Makanan Utama', 'description' => 'Mie ayam lembut dengan topping ayam manis gurih.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/mie%20ayam.jpg?raw=true'],
            ['id' => 13, 'name' => 'Capcay Kuah', 'price' => 15000, 'category' => 'Makanan Utama', 'description' => 'Campuran sayuran segar dan daging ayam dalam kuah gurih.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/capcay.jpg?raw=true'],
            ['id' => 14, 'name' => 'Indomie', 'price' => 10000, 'category' => 'Makanan Utama', 'description' => 'Mie instan favorit dengan topping telur dan sayur.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/indomie.jpg?raw=true'],
            ['id' => 15, 'name' => 'Soto Ayam', 'price' => 10000, 'category' => 'Makanan Utama', 'description' => 'Soto ayam kuning segar dengan suwiran ayam dan sambal.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/soto.jpg?raw=true'],
            ['id' => 16, 'name' => 'Paket Nasi Tepong', 'price' => 22000, 'category' => 'Makanan Utama', 'description' => 'Nasi, ayam goreng tepung, sambal, lalapan, dan kerupuk.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/nasi%20tepong.jpg?raw=true'],
            ['id' => 17, 'name' => 'sambal', 'price' => 3000, 'category' => 'Makanan Utama', 'description' => 'sambal dengan cabe segar,', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/sambal.jpg?raw=true'],
            ['id' => 18, 'name' => 'krupuk', 'price' => 2000, 'category' => 'Makanan Utama', 'description' => 'kerupuk.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/kerupuk.jpg?raw=true'],

            // 🍰 DESSERT
            ['id' => 19, 'name' => 'Kentang Goreng', 'price' => 8000, 'category' => 'Dessert', 'description' => 'Kentang goreng renyah disajikan dengan saus cocol.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/kentang.jpg?raw=true'],
            ['id' => 20, 'name' => 'Mix Platter', 'price' => 15000, 'category' => 'Dessert', 'description' => 'Campuran kentang, nugget, dan sosis goreng.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/mix.jpg?raw=true'],
            ['id' => 21, 'name' => 'Roti Bakar', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Roti bakar dengan topping keju dan susu kental manis.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/roti.jpg?raw=true'],
            ['id' => 22, 'name' => 'Pisang Coklat Keju', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Pisang goreng manis dengan coklat dan keju.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/pisang.jpg?raw=true'],
            ['id' => 23, 'name' => 'Dimsum', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Olahan daging ayam lembut dengan saus spesial.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Dimsum.jpg?raw=true'],
            ['id' => 24, 'name' => 'Jamur Crispy', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Jamur renyah digoreng garing dengan tepung.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Jamur.jpg?raw=true'],
            ['id' => 25, 'name' => 'Cireng Isi Ayam', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Cireng gurih isi ayam pedas.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/cireng.jpg?raw=true'],
            ['id' => 26, 'name' => 'Gorengan', 'price' => 5000, 'category' => 'Dessert', 'description' => 'Aneka gorengan gurih dan renyah cocok untuk teman minum teh.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/gorengan.jpg?raw=true'],
            ['id' => 27, 'name' => 'Onion Ring', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Cincin bawang goreng renyah dengan bumbu gurih.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/onionring.jpg?raw=true'],
            ['id' => 28, 'name' => 'Sempol Ayam', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Olahan ayam berbentuk tusuk dengan adonan tepung gurih.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/sempol.jpg?raw=true'],
            ['id' => 29, 'name' => 'Roll Tape', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Tape manis dibalut kulit lumpia dan digoreng garing.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/rolltape.jpg?raw=true'],
            ['id' => 30, 'name' => 'Roll Keju', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Keju lumer di dalam kulit lumpia renyah.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/rollkeju.jpg?raw=true'],
            ['id' => 31, 'name' => 'Udang Rambutan', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Udang dibalut mie goreng renyah berbentuk bola.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/udangrambutan.jpg?raw=true'],
            ['id' => 32, 'name' => 'Tempura', 'price' => 5000, 'category' => 'Dessert', 'description' => 'Olahan ikan dan udang khas Jepang dengan tepung renyah.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/tempura.jpg?raw=true'],
            ['id' => 33, 'name' => 'Cireng Salju', 'price' => 10000, 'category' => 'Dessert', 'description' => 'Cireng lembut pedas dan tekstur kenyal.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/cirengsalju.jpg?raw=true'],


            // ☕ MINUMAN (Coffee, Tea, Milk, Latte, dll)
            ['id' => 34, 'name' => 'Kopi Hitam Tubruk', 'price' => 6000, 'category' => 'Minuman', 'description' => 'Kopi hitam tradisional diseduh langsung.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Kopi-Tubruk.jpg?raw=true'],
            ['id' => 35, 'name' => 'Kopi Susu', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Kopi hitam dengan susu kental manis.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/kopi%20susu.jpg?raw=true'],
            ['id' => 36, 'name' => 'Arabica', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Kopi Arabica dengan aroma lembut dan rasa halus.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Arabica.jpg?raw=true'],
            ['id' => 37, 'name' => 'Redvelved Latte 16oz', 'price' => 15000, 'category' => 'Minuman', 'description' => 'Latte dengan rasa redvelved lembut.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Redvelved%20Latte.jpg?raw=true'],
            ['id' => 38, 'name' => 'Butter Latte 14oz', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Latte creamy dengan butter lembut.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Butter.jpg?raw=true'],
            ['id' => 39, 'name' => 'Matcha Coffee', 'price' => 18000, 'category' => 'Minuman', 'description' => 'Kombinasi matcha dan espresso nikmat.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/MatchaCoffee.jpg?raw=true'],
            ['id' => 40, 'name' => 'Mochallo', 'price' => 20000, 'category' => 'Minuman', 'description' => 'Perpaduan kopi dan cokelat premium.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Mochallo.jpg?raw=true'],
            ['id' => 41, 'name' => 'Soda Gembira', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman bersoda manis menyegarkan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Soda.jpg?raw=true'],
            ['id' => 42, 'name' => 'Wedang Uwuh', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Wedang rempah hangat khas Jawa.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Wedang.jpg?raw=true'],
            ['id' => 43, 'name' => 'Grape Yakult', 'price' => 15000, 'category' => 'Minuman', 'description' => 'Minuman segar yakult rasa anggur.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Yakult.jpg?raw=true'],
            ['id' => 44, 'name' => 'Pink Lava', 'price' => 17000, 'category' => 'Minuman', 'description' => 'Minuman pink manis dan lembut.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Pinklava.jpg?raw=true'],
            ['id' => 45, 'name' => 'Teh Original', 'price' => 4000, 'category' => 'Minuman', 'description' => 'Teh hangat dengan cita rasa klasik dan menyegarkan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/teh.jpg?raw=true'],
            ['id' => 46, 'name' => 'Teh Apel / Teh Leci', 'price' => 5000, 'category' => 'Minuman', 'description' => 'Teh dengan tambahan sari apel atau leci, memberikan rasa manis alami.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/tehleci.jpg?raw=true'],
            ['id' => 47, 'name' => 'Jeruk', 'price' => 5000, 'category' => 'Minuman', 'description' => 'Minuman segar dari perasan jeruk asli, bisa disajikan hangat atau dingin.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/jeruk.jpg?raw=true'],
            ['id' => 48, 'name' => 'Lemon Tea', 'price' => 5000, 'category' => 'Minuman', 'description' => 'Teh segar dengan perasan lemon yang menyegarkan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/lemontea.jpg?raw=true'],
            ['id' => 49, 'name' => 'Lemonade', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Minuman dingin dengan campuran lemon segar dan gula, menyegarkan hari Anda.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Lemonade.jpg?raw=true'],
            ['id' => 50, 'name' => 'Jahe Sereh', 'price' => 6000, 'category' => 'Minuman', 'description' => 'Minuman hangat dari jahe dan sereh, cocok untuk menghangatkan tubuh.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/jahesereh.jpg?raw=true'],
            ['id' => 51, 'name' => 'Susu Jahe Sereh', 'price' => 8000, 'category' => 'Minuman', 'description' => 'Perpaduan susu, jahe, dan sereh yang nikmat dan menenangkan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/susujahesereh.jpg?raw=true'],
            ['id' => 52, 'name' => 'Jahe Sereh Nipis', 'price' => 7000, 'category' => 'Minuman', 'description' => 'Campuran jahe, sereh, dan jeruk nipis yang menyehatkan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/jaheserehnipis.jpg?raw=true'],
            ['id' => 53, 'name' => 'Wedang Tape', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Minuman hangat tradisional dengan tape singkong manis.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/wedangtape.jpg?raw=true'],
            ['id' => 54, 'name' => 'Kopi Gayo', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Kopi arabika khas Aceh Gayo dengan aroma kuat dan cita rasa seimbang.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/kopigayo.jpg?raw=true'],   
            ['id' => 55, 'name' => 'Kopi Toraja', 'price' => 15000, 'category' => 'Minuman', 'description' => 'Kopi premium asal Toraja dengan cita rasa earthy dan aroma kuat.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/kopitoraja.jpg?raw=true'],
            ['id' => 56, 'name' => 'Kopi Bali', 'price' => 15000, 'category' => 'Minuman', 'description' => 'Kopi khas Bali Kintamani dengan rasa fruity dan keasaman ringan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/kopibali.jpg?raw=true'],
            ['id' => 57, 'name' => 'Jus Buah', 'price' => 10000, 'category' => 'Minuman', 'description' => 'jus buah segar', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Jus.jpg?raw=true'],
            ['id' => 58, 'name' => 'Chocolate Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman susu cokelat lembut dengan rasa manis pas.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/chocolate.jpg?raw=true'],
            ['id' => 59, 'name' => 'Matcha', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Susu dengan campuran bubuk matcha Jepang yang lembut dan harum.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Matcha.jpg?raw=true'],
            ['id' => 60, 'name' => 'Bubblegum Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman manis dengan rasa khas permen karet yang unik.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/bubblegum.jpg?raw=true'],
            ['id' => 61, 'name' => 'Vanilla Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman susu vanilla dengan aroma lembut dan manis.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/vanilla.jpg?raw=true'],
            ['id' => 62, 'name' => 'Redvelved Latte 14oz', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman lembut dengan cita rasa redvelvet yang creamy.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/redvelvet14oz.jpg?raw=true'],
            ['id' => 62, 'name' => 'Blueberry Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman segar dengan rasa blueberry manis dan sedikit asam.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/blueberry.jpg?raw=true'],
            ['id' => 63, 'name' => 'Strawberry Squash', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman soda segar dengan rasa strawberry yang menyegarkan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/strawberrysquash.jpg?raw=true'],
            ['id' => 64, 'name' => 'Melon Squash', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman soda segar dengan aroma melon lembut dan manis.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/melonsquash.jpg?raw=true'],
            ['id' => 65, 'name' => 'Orange Squash', 'price' => 12000, 'category' => 'Minuman', 'description' => 'Minuman soda segar dengan rasa jeruk yang nikmat.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/orangesquash.jpg?raw=true'],
            ['id' => 66, 'name' => 'Teh Tarik', 'price' => 10000, 'category' => 'Minuman', 'description' => 'Minuman teh tarik adalah paduan teh dengan creamy.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/tehtarik.jpg?raw=true'],
            ['id' => 67, 'name' => 'Milodino', 'price' => 19000, 'category' => 'Minuman ', 'description' => 'Minuman susu Milo dengan rasa cokelat lembut dan creamy.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/milodino.jpg?raw=true'],
            ['id' => 68, 'name' => 'Taro Coffee', 'price' => 18000, 'category' => 'Minuman', 'description' => 'Perpaduan kopi dengan taro yang menghasilkan rasa unik dan manis.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/tarocoffee.jpg?raw=true'],
            ['id' => 69, 'name' => 'Pandan Latte 14oz', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Latte dengan aroma pandan yang wangi dan lembut.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/pandanlatte14oz.jpg?raw=true'],
            ['id' => 70, 'name' => 'Pandan Latte 16oz', 'price' => 19000, 'category' => 'Minuman', 'description' => 'Versi besar dari Pandan Latte, creamy dan harum pandan.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/pandanlatte16oz.jpg?raw=true'],
            ['id' => 71, 'name' => 'Orange Latte 14oz', 'price' => 14000, 'category' => 'Minuman', 'description' => 'Latte dengan aroma jeruk segar dan rasa lembut.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/orangelatte14oz.jpg?raw=true'],
            ['id' => 72, 'name' => 'Orange Latte 16oz', 'price' => 19000, 'category' => 'Minuman', 'description' => 'Latte jeruk ukuran besar dengan cita rasa manis segar.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/orangelatte16oz.jpg?raw=true'],
            ['id' => 73, 'name' => 'Vanilla Strawberry Latte 14oz', 'price' => 13000, 'category' => 'Minuman', 'description' => 'Campuran vanilla dan strawberry dalam minuman latte lembut.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/vanillastrawberrylatte14oz.jpg?raw=true'],
            ['id' => 74, 'name' => 'Vanilla Strawberry Latte 16oz', 'price' => 19000, 'category' => 'Minuman', 'description' => 'Versi besar Vanilla Strawberry Latte dengan rasa creamy.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/vanillastrawberrylatte16oz.jpg?raw=true'],
            ['id' => 75, 'name' => 'Caramel Macchiato', 'price' => 19000, 'category' => 'Minuman', 'description' => 'Kopi susu dengan sirup karamel lembut dan aroma kuat.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/caramelmacchiato.jpg?raw=true'],
            ['id' => 76, 'name' => 'Strawberi Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'paduan Strawberi dan susu.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/StrawberiMilk.jpg?raw=true'],
            ['id' => 77, 'name' => 'SChocolateMilk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'paduan hocolate dan susu.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/ChocolateMilk.jpg?raw=true'],
            ['id' => 78, 'name' => 'Matcha Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'paduan Matcha dan susu.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/Matcha.jpg?raw=true'],
            ['id' => 79, 'name' => 'Redvelved Milk', 'price' => 12000, 'category' => 'Minuman', 'description' => 'paduan rasa redvelvet yang creamy dan susu.', 'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/redvelvet.jpg?raw=true'],



        ];
        

        return view('menu', compact('menus'));
    }
}