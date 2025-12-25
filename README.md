# 🏗️ BACKEND – HỆ THỐNG QUẢN LÝ KHO THÔNG MINH TÍCH HỢP AI  
*(AI Warehouse Management System – Backend Service)*

> ⚙️ Backend được xây dựng bằng **Laravel Framework**, cung cấp API cho hệ thống quản lý kho, xử lý nghiệp vụ, bảo mật, dữ liệu và sẵn sàng tích hợp Trí tuệ Nhân tạo (AI).

---

## 📌 Giới thiệu

Backend của **Hệ thống Quản Lý Kho tích hợp AI** đóng vai trò trung tâm trong việc:
- Xử lý logic nghiệp vụ
- Quản lý dữ liệu kho hàng
- Cung cấp API cho Frontend (Vue.js)
- Phân quyền và xác thực người dùng
- Chuẩn bị nền tảng tích hợp AI (dự báo, phân tích, gợi ý)

Hệ thống được thiết kế theo **kiến trúc RESTful API**, dễ mở rộng, dễ bảo trì và phù hợp triển khai thực tế.

---

## 🎯 Mục tiêu Backend

- 🔐 Bảo mật và phân quyền người dùng
- 📦 Quản lý dữ liệu kho chính xác
- 🔄 Cung cấp API ổn định cho Frontend
- 🤖 Sẵn sàng tích hợp AI & Data Analytics
- ⚡ Hiệu năng tốt, dễ scale

---

## 🛠️ Công nghệ sử dụng

### 🔹 Core Backend
- **PHP 8+**
- **Laravel Framework**
- **RESTful API**
- **MVC Architecture**

### 🔹 Cơ sở dữ liệu
- MySQL / MariaDB (định hướng)
- Migration & Seeder

### 🔹 Xác thực & Bảo mật
- Laravel Authentication
- JWT / Sanctum (dự kiến)
- Middleware phân quyền

### 🔹 Công cụ & Hệ sinh thái
- Composer
- Artisan CLI
- Git & GitHub
- PHPUnit (Test)
- Vite (build assets)

### 🔹 AI & Mở rộng (định hướng)
- Kết nối AI Service (Python)
- Machine Learning Models
- Dự báo tồn kho & phân tích dữ liệu

---

## 📁 Cấu trúc thư mục Backend

```bash
HE_THONG_QUAN_LY_KHO_AI_BE/
├── app/                # Logic nghiệp vụ
├── bootstrap/          # Khởi tạo ứng dụng
├── config/             # Cấu hình hệ thống
├── database/
│   ├── migrations/     # Migration CSDL
│   ├── seeders/        # Seeder dữ liệu
│   └── factories/
├── public/             # Entry point
├── resources/          # View, assets
├── routes/
│   ├── api.php         # API routes
│   └── web.php
├── storage/            # Logs, cache
├── tests/              # Unit & Feature tests
├── .env.example
├── composer.json
├── artisan
└── README.md
```
---
⚙️ Hướng dẫn cài đặt Backend
🔸 Yêu cầu hệ thống

PHP >= 8.0

Composer

MySQL / MariaDB

Node.js (nếu build assets)

Git
