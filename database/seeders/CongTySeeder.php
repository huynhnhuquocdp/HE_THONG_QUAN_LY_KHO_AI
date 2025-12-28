<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CongTySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cong_ties')->delete();
        DB::table('cong_ties')->truncate();
        DB::table('cong_ties')->insert([
            [
                'ten_cong_ty' => 'Công ty TNHH ABC',
                'logo_url' => '/images/logo-abc.png',
                'dia_chi' => '123 Đường Nguyễn Huệ, Quận 1, TP. Hồ Chí Minh',
                'ma_so_thue' => '0123456789',
                'mui_gio' => 'Asia/Ho_Chi_Minh',
                'ngon_ngu_mac_dinh' => 'VI',
                'tien_te_mac_dinh' => 'VND',
                'chu_de_giao_dien' => 'light',
                'quy_tac_ma_tu_dong' => json_encode([
                    'sku' => 'SKU-{year}{month}{day}-{seq}',
                    'po' => 'PO-{year}-{seq}',
                    'phieu_nhap' => 'PN-{year}-{seq}'
                ]),
                'phuong_phap_tinh_gia' => 'FIFO',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
