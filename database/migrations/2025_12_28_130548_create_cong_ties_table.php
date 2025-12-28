<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cong_ties', function (Blueprint $table) {
            $table->id();
            $table->string('ten_cong_ty')->comment('Tên công ty');
            $table->string('logo_url')->nullable()->comment('Đường dẫn file logo');
            $table->string('dia_chi')->comment('Địa chỉ');
            $table->string('ma_so_thue')->comment('Mã số thuế');
            $table->string('mui_gio')->default('Asia/Ho_Chi_Minh')->comment('Múi giờ (ví dụ: Asia/Ho_Chi_Minh)');
            $table->enum('ngon_ngu_mac_dinh', ['VI', 'EN'])->default('VI')->comment('Ngôn ngữ mặc định');
            $table->enum('tien_te_mac_dinh', ['VND', 'USD'])->default('VND')->comment('Tiền tệ mặc định');
            $table->string('chu_de_giao_dien')->default('light')->comment('Chủ đề giao diện');
            $table->json('quy_tac_ma_tu_dong')->nullable()->comment('Quy tắc tạo mã SKU, PO, PhieuNhap...');
            $table->enum('phuong_phap_tinh_gia', ['FIFO', 'LIFO', 'TrungBinh'])->default('FIFO')->comment('Phương pháp tính giá');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cong_ties');
    }
};
