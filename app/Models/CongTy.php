<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CongTy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cong_ties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ten_cong_ty',
        'logo_url',
        'dia_chi',
        'ma_so_thue',
        'mui_gio',
        'ngon_ngu_mac_dinh',
        'tien_te_mac_dinh',
        'chu_de_giao_dien',
        'quy_tac_ma_tu_dong',
        'phuong_phap_tinh_gia',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'quy_tac_ma_tu_dong' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
