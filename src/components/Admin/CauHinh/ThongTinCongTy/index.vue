<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Thông Tin Công Ty</h5>
                    <button type="button" class="btn btn-success me-2">
                        <i class="fa-regular fa-file-excel"></i> Xuất Excel
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="input-group mb-2">
                            <button type="button" class="btn btn-primary">
                                <i class="bx bx-search"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Tìm kiếm theo tên thú cưng" />
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th class="align-middle">#</th>
                                    <th class="align-middle">Tên Công Ty</th>
                                    <th class="align-middle">Logo_url</th>
                                    <th class="align-middle">Địa Chỉ</th>
                                    <th class="align-middle">Mã Số Thuế</th>
                                    <th class="align-middle">Múi Giờ</th>
                                    <th class="align-middle">Ngôn Ngữ Mặc Định</th>
                                    <th class="align-middle">Tiền Tệ Mặc Định</th>
                                    <th class="align-middle">Chủ Đề Giao Diện</th>
                                    <th class="align-middle">Quy Tắc Mã Tự Động</th>
                                    <th class="align-middle">Phương Pháp Tính Giá</th>
                                    <th class="align-middle">Tình Trạng</th>
                                    <th class="align-middle">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">Công Ty ABC</td>
                                    <td class="align-middle">
                                        <img src="https://via.placeholder.com/50" alt="Logo Công Ty ABC" />
                                    </td>
                                    <td class="align-middle">123 Đường Lê Lợi, Quận 1, TP.HCM</td>
                                    <td class="align-middle">0101234567</td>
                                    <td class="align-middle">GMT+7</td>
                                    <td class="align-middle">Tiếng Việt</td>
                                    <td class="align-middle">VND</td>
                                    <td class="align-middle">Sáng</td>
                                    <td class="align-middle">CT-YYYY-0001</td>
                                    <td class="align-middle">Giá Gốc + Phụ Phí</td>
                                    <td class="align-middle">
                                        <span class="badge bg-success">Hoạt Động</span>
                                    </td>
                                    <td class="align-middle">
                                        <button type="button" class="btn btn-primary me-1"
                                            data-bs-toggle="modal" data-bs-target="#CapNhatThuCung">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-toggle="modal" data-bs-target="#XoaThuCung">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Modal Cập nhật thú cưng -->
                        <div class="modal fade" id="CapNhatThuCung" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Cập Nhật Thông Tin Thú Cưng</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="mb-3">
                                                <label class="mb-2">Tên Gọi</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Nhập tên thú cưng (ví dụ: Miu)" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Loại</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Nhập loại (ví dụ: Chó, Mèo)" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Giống</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Nhập giống (ví dụ: Poodle, Ba Tư)" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Tuổi</label>
                                                <input type="number" class="form-control"
                                                    placeholder="Nhập tuổi (số năm)" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Cân Nặng</label>
                                                <input type="number" step="0.01" class="form-control"
                                                    placeholder="Nhập cân nặng (kg)" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Lịch Sử Y Tế</label>
                                                <textarea rows="3" class="form-control"
                                                    placeholder="Nhập lịch sử y tế (nếu có)"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Tình Trạng</label>
                                                <select class="form-control">
                                                    <option value="">Chọn tình trạng</option>
                                                    <option :value="1">Hoạt động</option>
                                                    <option :value="0">Không hoạt động</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Xóa thú cưng -->
                        <div class="modal fade" id="XoaThuCung" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Xóa Thú Cưng</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn chắc chắn muốn xóa thú cưng <b></b> này không?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button v-on:click="xoaThuCung()" type="button" class="btn btn-primary">
                                            Xóa
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap");

body {
    background-color: #f3f4f6;
    font-family: "Roboto", Arial, sans-serif;
    margin: 0;
    padding-top: 90px;
    color: #374151;
}

.card {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border: none;
    margin-bottom: 20px;
}

.card-header {
    background: #ffffff;
    border-bottom: 1px solid #e5e7eb;
    padding: 15px 25px;
    font-size: 1.5rem;
    font-weight: 600;
    color: #1e40af;
}

.card-header h5 {
    margin: 0;
    font-size: inherit;
    font-weight: inherit;
    color: inherit;
}

.card-body {
    padding: 25px;
}

.card-footer {
    background: #ffffff;
    border-top: 1px solid #e5e7eb;
    padding: 15px 25px;
    text-align: right;
}

.form-control,
.form-select {
    font-size: 1rem;
    font-weight: 400;
    border-radius: 6px;
    border: 1px solid #e5e7eb;
    padding: 10px 12px;
    color: #374151;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.form-control:focus,
.form-select:focus {
    border-color: #1e40af;
    box-shadow: 0 0 0 0.2rem rgba(30, 64, 175, 0.25);
    outline: none;
}

.form-control::placeholder {
    color: #9ca3af;
}

label {
    font-size: 1rem;
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
    display: block;
}

.btn-primary {
    background: #1e40af;
    border: none;
    font-size: 1rem;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 6px;
    color: #ffffff;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-primary:hover {
    background: #3b82f6;
    transform: translateY(-1px);
}

.btn-success {
    background: #15803d;
    border: none;
    font-size: 1rem;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 6px;
    color: #ffffff;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-success:hover {
    background: #22c55e;
    transform: translateY(-1px);
}

.btn-danger {
    background: #b91c1c;
    border: none;
    font-size: 1rem;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 6px;
    color: #ffffff;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-danger:hover {
    background: #ef4444;
    transform: translateY(-1px);
}

.btn-secondary {
    background: #6b7280;
    border: none;
    font-size: 1rem;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 6px;
    color: #ffffff;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-secondary:hover {
    background: #4b5563;
    transform: translateY(-1px);
}

.table {
    font-size: 1rem;
    color: #374151;
    width: 100%;
    border-collapse: collapse;
}

.table th,
.table td {
    padding: 12px;
    vertical-align: middle;
    text-align: center;
}

.table thead th {
    background: #f9fafb;
    font-weight: 600;
    color: #1e40af;
    border-bottom: 2px solid #e5e7eb;
}

.table-bordered {
    border: 1px solid #e5e7eb;
}

.table-bordered th,
.table-bordered td {
    border: 1px solid #e5e7eb;
}

.input-group {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
}

.input-group .btn-primary {
    border-radius: 6px 0 0 6px;
    padding: 10px;
}

.input-group .form-control {
    border-radius: 0 6px 6px 0;
    border-left: none;
}

.modal-content {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    border: none;
    overflow: hidden;
}

.modal-header {
    background: linear-gradient(90deg, #1e40af 0%, #3b82f6 100%);
    border-bottom: none;
    padding: 20px 25px;
    display: flex;
    align-items: center;
}

.modal-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

.btn-close {
    background: none;
    color: #ffffff;
    opacity: 0.7;
    transition: opacity 0.2s ease;
    filter: none;
}

.btn-close:hover {
    opacity: 1;
}

.modal-body {
    padding: 25px;
    font-size: 1rem;
    color: #374151;
    background: #ffffff;
}

.modal-body b {
    color: #1e40af;
    font-weight: 600;
}

.modal-footer {
    border-top: 1px solid #e5e7eb;
    padding: 15px 25px;
    background: #ffffff;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.modal-dialog-scrollable .modal-content {
    max-height: 90vh;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}

.border-primary {
    border-color: #1e40af !important;
}

@media (max-width: 767px) {
    body {
        padding-top: 80px;
    }

    .card {
        margin-bottom: 15px;
    }

    .card-header {
        font-size: 1.25rem;
        padding: 12px 20px;
    }

    .card-body {
        padding: 20px;
    }

    .card-footer {
        padding: 12px 20px;
    }

    .form-control,
    .form-select {
        font-size: 0.95rem;
        padding: 8px 10px;
    }

    label {
        font-size: 0.95rem;
    }

    .btn-primary,
    .btn-success,
    .btn-danger,
    .btn-secondary {
        font-size: 0.95rem;
        padding: 8px 16px;
    }

    .table {
        font-size: 0.95rem;
    }

    .table th,
    .table td {
        padding: 8px;
    }

    .input-group .btn-primary,
    .input-group .form-control {
        font-size: 0.95rem;
    }

    .modal-header {
        padding: 15px 20px;
    }

    .modal-title {
        font-size: 1.25rem;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-footer {
        padding: 12px 20px;
        gap: 8px;
    }

    .modal-dialog {
        margin: 0.5rem;
    }

    .modal-dialog-scrollable .modal-content {
        max-height: 80vh;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .card-header {
        font-size: 1.35rem;
    }

    .form-control,
    .form-select {
        font-size: 0.95rem;
        padding: 8px 10px;
    }

    .btn-primary,
    .btn-success,
    .btn-danger,
    .btn-secondary {
        font-size: 0.95rem;
        padding: 8px 16px;
    }

    .table {
        font-size: 0.95rem;
    }

    .table th,
    .table td {
        padding: 10px;
    }

    .modal-title {
        font-size: 1.35rem;
    }

    .modal-body {
        padding: 20px;
    }
}
</style>
