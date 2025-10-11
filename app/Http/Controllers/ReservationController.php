<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $menus = [
            // 🍚 MAKANAN
            ['id'=>1,'name'=>'Nasi','price'=>3000,'category'=>'Makanan'],
            ['id'=>2,'name'=>'Nasi Ayam Goreng','price'=>10000,'category'=>'Makanan'],
            ['id'=>3,'name'=>'Nasi Ayam Geprek','price'=>12000,'category'=>'Makanan'],
            ['id'=>4,'name'=>'Nasi Telur','price'=>8000,'category'=>'Makanan'],
            ['id'=>5,'name'=>'Nasi Goreng','price'=>12000,'category'=>'Makanan'],
            ['id'=>6,'name'=>'Nasi Godok','price'=>15000,'category'=>'Makanan'],
            ['id'=>7,'name'=>'Magelangan','price'=>12000,'category'=>'Makanan'],
            ['id'=>8,'name'=>'Bakmie Kuah','price'=>12000,'category'=>'Makanan'],
            ['id'=>9,'name'=>'Bakmie Goreng','price'=>12000,'category'=>'Makanan'],
            ['id'=>10,'name'=>'Mie Dokdok','price'=>14000,'category'=>'Makanan'],
            ['id'=>11,'name'=>'Seblak Original','price'=>15000,'category'=>'Makanan'],
            ['id'=>12,'name'=>'Mie Ayam','price'=>9000,'category'=>'Makanan'],
            ['id'=>13,'name'=>'Capcay Kuah','price'=>15000,'category'=>'Makanan'],
            ['id'=>14,'name'=>'Indomie','price'=>10000,'category'=>'Makanan'],
            ['id'=>15,'name'=>'Soto Ayam','price'=>10000,'category'=>'Makanan'],
            ['id'=>16,'name'=>'Sambel','price'=>3000,'category'=>'Makanan'],
            ['id'=>17,'name'=>'Kerupuk','price'=>2000,'category'=>'Makanan'],
            ['id'=>18,'name'=>'Paket Nasi Tepong','price'=>22000,'category'=>'Makanan'],

            // 🍰 DESSERT
            ['id'=>19,'name'=>'Kentang Goreng','price'=>8000,'category'=>'Dessert'],
            ['id'=>20,'name'=>'Mix Platter','price'=>15000,'category'=>'Dessert'],
            ['id'=>21,'name'=>'Roti Bakar','price'=>10000,'category'=>'Dessert'],
            ['id'=>22,'name'=>'Pisang Coklat Keju','price'=>10000,'category'=>'Dessert'],
            ['id'=>23,'name'=>'Gorengan (4pcs)','price'=>5000,'category'=>'Dessert'],
            ['id'=>24,'name'=>'Onion Ring','price'=>10000,'category'=>'Dessert'],
            ['id'=>25,'name'=>'Sempol Ayam','price'=>10000,'category'=>'Dessert'],
            ['id'=>26,'name'=>'Roll Tape','price'=>10000,'category'=>'Dessert'],
            ['id'=>27,'name'=>'Roll Keju','price'=>10000,'category'=>'Dessert'],
            ['id'=>28,'name'=>'Dimsum','price'=>10000,'category'=>'Dessert'],
            ['id'=>29,'name'=>'Udang Rambutan','price'=>10000,'category'=>'Dessert'],
            ['id'=>30,'name'=>'Tempura','price'=>6000,'category'=>'Dessert'],
            ['id'=>31,'name'=>'Jamur Crispy','price'=>10000,'category'=>'Dessert'],
            ['id'=>32,'name'=>'Cireng Salju','price'=>5000,'category'=>'Dessert'],
            ['id'=>33,'name'=>'Cireng Isi Ayam','price'=>10000,'category'=>'Dessert'],

            // ☕ COFFEE SERIES
            ['id'=>34,'name'=>'Arabica','price'=>13000,'category'=>'Coffee'],
            ['id'=>35,'name'=>'Robusta','price'=>12000,'category'=>'Coffee'],
            ['id'=>36,'name'=>'Gayo','price'=>13000,'category'=>'Coffee'],
            ['id'=>37,'name'=>'Toraja','price'=>15000,'category'=>'Coffee'],
            ['id'=>38,'name'=>'Bali','price'=>15000,'category'=>'Coffee'],
            ['id'=>39,'name'=>'Kopi Hitam Tubruk','price'=>6000,'category'=>'Coffee'],
            ['id'=>40,'name'=>'Kopi Susu','price'=>10000,'category'=>'Coffee'],

            // 🍶 TEA & WEDANG
            ['id'=>41,'name'=>'Teh Original','price'=>4000,'category'=>'Tea & Wedang'],
            ['id'=>42,'name'=>'Teh Apel/Teh Lecy','price'=>5000,'category'=>'Tea & Wedang'],
            ['id'=>43,'name'=>'Jeruk','price'=>5000,'category'=>'Tea & Wedang'],
            ['id'=>44,'name'=>'Lemontea','price'=>5000,'category'=>'Tea & Wedang'],
            ['id'=>45,'name'=>'Lemonade','price'=>10000,'category'=>'Tea & Wedang'],
            ['id'=>46,'name'=>'Jahe Sereh','price'=>6000,'category'=>'Tea & Wedang'],
            ['id'=>47,'name'=>'Susu Jahe Sereh','price'=>8000,'category'=>'Tea & Wedang'],
            ['id'=>48,'name'=>'Jahe Sereh Nipis','price'=>7000,'category'=>'Tea & Wedang'],
            ['id'=>49,'name'=>'Teh Jahe','price'=>7000,'category'=>'Tea & Wedang'],
            ['id'=>50,'name'=>'Wedang Uwuh','price'=>10000,'category'=>'Tea & Wedang'],
            ['id'=>51,'name'=>'Wedang Tape','price'=>10000,'category'=>'Tea & Wedang'],
            ['id'=>52,'name'=>'Soda Gembira','price'=>12000,'category'=>'Tea & Wedang'],

            // 🥤 MILK SERIES & SQUASH
            ['id'=>53,'name'=>'Chocolate Milk','price'=>12000,'category'=>'Milk Series'],
            ['id'=>54,'name'=>'Strawberi Milk','price'=>12000,'category'=>'Milk Series'],
            ['id'=>55,'name'=>'Matcha Milk','price'=>12000,'category'=>'Milk Series'],
            ['id'=>56,'name'=>'Bubblegum Milk','price'=>12000,'category'=>'Milk Series'],
            ['id'=>57,'name'=>'Vanilla Milk','price'=>12000,'category'=>'Milk Series'],
            ['id'=>58,'name'=>'Redvelved Milk','price'=>12000,'category'=>'Milk Series'],
            ['id'=>59,'name'=>'Blueberry Milk','price'=>12000,'category'=>'Milk Series'],
            ['id'=>60,'name'=>'Squash Strawberry','price'=>12000,'category'=>'Squash'],
            ['id'=>61,'name'=>'Squash Melon','price'=>12000,'category'=>'Squash'],
            ['id'=>62,'name'=>'Squash Orange','price'=>12000,'category'=>'Squash'],
            ['id'=>63,'name'=>'Teh Tarik','price'=>10000,'category'=>'Tea & Wedang'],
            ['id'=>64,'name'=>'Jus Buah','price'=>10000,'category'=>'Minuman'],

            // ☕ LATTE SERIES
            ['id'=>65,'name'=>'Butter Latte 14oz','price'=>13000,'category'=>'Latte'],
            ['id'=>66,'name'=>'Butter Latte 16oz','price'=>18000,'category'=>'Latte'],
            ['id'=>67,'name'=>'Vanilla Strawberry Latte 14oz','price'=>13000,'category'=>'Latte'],
            ['id'=>68,'name'=>'Vanilla Strawberry Latte 16oz','price'=>19000,'category'=>'Latte'],
            ['id'=>69,'name'=>'Pandan Latte 14oz','price'=>13000,'category'=>'Latte'],
            ['id'=>70,'name'=>'Pandan Latte 16oz','price'=>19000,'category'=>'Latte'],
            ['id'=>71,'name'=>'Orange Coffee Latte 14oz','price'=>14000,'category'=>'Latte'],
            ['id'=>72,'name'=>'Orange Coffee Latte 16oz','price'=>19000,'category'=>'Latte'],
            ['id'=>73,'name'=>'Redvelved Latte 14oz','price'=>15000,'category'=>'Latte'],
            ['id'=>74,'name'=>'Redvelved Latte 16oz','price'=>20000,'category'=>'Latte'],
            ['id'=>75,'name'=>'Pure Matcha','price'=>15000,'category'=>'Latte'],
            ['id'=>76,'name'=>'Grape Yakult','price'=>15000,'category'=>'Latte'],
            ['id'=>77,'name'=>'Pink Lava','price'=>17000,'category'=>'Latte'],
            ['id'=>78,'name'=>'Ice Coconut Americano','price'=>18000,'category'=>'Latte'],
            ['id'=>79,'name'=>'Matcha Coffee','price'=>18000,'category'=>'Latte'],
            ['id'=>80,'name'=>'Millodino','price'=>19000,'category'=>'Latte'],
            ['id'=>81,'name'=>'Taro Coffee','price'=>18000,'category'=>'Latte'],
            ['id'=>82,'name'=>'Caramel Mocchiato','price'=>19000,'category'=>'Latte'],
            ['id'=>83,'name'=>'Mochallo','price'=>20000,'category'=>'Latte'],
        ];

        return view('reservation', compact('menus'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string',
            'phone'=>'required|string',
            'date'=>'required|date',
            'time'=>'required',
            'guests'=>'required|integer',
            'selected_menus'=>'nullable|array',
            'quantities'=>'nullable|array',
            'notes'=>'nullable|string',
        ]);

      $message = "Halo, saya ingin reservasi di *MJ Coffee Shop*\n\n";
      $message .= "- Nama: {$data['name']}\n";
      $message .= "- No HP: {$data['phone']}\n";
      $message .= "- Tanggal: {$data['date']}\n";
      $message .= "- Waktu: {$data['time']}\n";
      $message .= "- Jumlah Tamu: {$data['guests']} orang\n";

        $menus = $this->getAllMenus();
        $total = 0;
        if(!empty($data['selected_menus'])){
            $message .= "\n Menu Dipesan:\n";
            foreach($data['selected_menus'] as $i=>$id){
                $m = collect($menus)->firstWhere('id',$id);
                $qty = $data['quantities'][$i] ?? 1;
                $subtotal = $m['price']*$qty;
                $total += $subtotal;
                $message .= "- {$m['name']} x{$qty} = Rp ".number_format($subtotal,0,',','.')."\n";
            }
            $message .= "\n Total: Rp ".number_format($total,0,',','.')."\n";
        }
        if(!empty($data['notes'])){
            $message .= "\n Catatan: {$data['notes']}\n";
        }

        $wa = env('WHATSAPP_NUMBER','6285786695051');
        $url = "https://wa.me/$wa?text=".urlencode($message);
        return redirect()->away($url);
    }

    private function getAllMenus()
    {
        return $this->index()->getData()['menus'];
    }
}