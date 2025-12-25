<div align="center">

# 📦 HỆ THỐNG QUẢN LÝ KHO THÔNG MINH  
## 🔹 TÍCH HỢP TRÍ TUỆ NHÂN TẠO (AI)

**AI-Powered Inventory Management System**

![GitHub last commit](https://img.shields.io/github/last-commit/huynhnhuquocdp/HE_THONG_QUAN_LY_KHO_AI)
![GitHub repo size](https://img.shields.io/github/repo-size/huynhnhuquocdp/HE_THONG_QUAN_LY_KHO_AI)
![License](https://img.shields.io/badge/license-Academic-blue)

</div>

---

## 📖 Giới thiệu

**Hệ thống Quản lý Kho Thông minh tích hợp Trí tuệ Nhân tạo (AI)** là một ứng dụng web hiện đại, được xây dựng nhằm hỗ trợ doanh nghiệp quản lý kho hàng **một cách chính xác, hiệu quả và tự động hóa**.

Khác với các hệ thống quản lý kho truyền thống chỉ tập trung vào việc lưu trữ và xử lý dữ liệu nhập – xuất – tồn, hệ thống này **ứng dụng AI và phân tích dữ liệu** để:
- Phân tích hành vi tiêu thụ hàng hóa
- Dự báo nhu cầu trong tương lai
- Cảnh báo sớm tình trạng thiếu hàng hoặc tồn kho dư thừa
- Hỗ trợ nhà quản lý ra quyết định dựa trên dữ liệu

Dự án được phát triển theo **chuẩn quy trình kỹ thuật phần mềm**, phù hợp cho **đồ án tốt nghiệp, nghiên cứu học thuật**, đồng thời có khả năng mở rộng thành **sản phẩm triển khai thực tế trong doanh nghiệp**.

---

## 🎯 Mục tiêu của hệ thống

- Số hóa toàn bộ quy trình quản lý kho
- Giảm thiểu sai sót do thao tác thủ công
- Theo dõi tồn kho theo thời gian thực
- Ứng dụng trí tuệ nhân tạo để hỗ trợ phân tích và ra quyết định
- Xây dựng hệ thống có kiến trúc rõ ràng, dễ mở rộng và bảo trì

---

## 👥 Đối tượng sử dụng

- Doanh nghiệp vừa và nhỏ (SMEs)
- Nhân viên kho
- Quản lý kho
- Quản trị viên hệ thống
- Sinh viên và giảng viên ngành Công nghệ Thông tin

---

## 🚀 Chức năng chính

### 📦 Quản lý kho
- Quản lý thông tin kho hàng
- Quản lý vị trí lưu trữ (kệ, khu vực)
- Theo dõi số lượng tồn kho theo thời gian thực

### 🧾 Quản lý sản phẩm
- Thêm, sửa, xóa sản phẩm
- Quản lý mã SKU, mã sản phẩm
- Phân loại sản phẩm theo danh mục

### 🔄 Nhập – Xuất kho
- Quản lý phiếu nhập kho
- Quản lý phiếu xuất kho
- Lưu trữ lịch sử giao dịch kho chi tiết

### 📊 Thống kê & báo cáo
- Báo cáo tồn kho tổng hợp
- Báo cáo nhập – xuất theo thời gian
- Biểu đồ trực quan hỗ trợ phân tích

### 🤖 Tích hợp Trí tuệ Nhân tạo (AI)
- 📈 Dự báo nhu cầu hàng hóa dựa trên dữ liệu lịch sử
- ⚠️ Cảnh báo thiếu hàng hoặc tồn kho vượt ngưỡng
- 📊 Phân tích xu hướng tiêu thụ
- 🤖 Gợi ý kế hoạch nhập hàng thông minh

### 🔐 Quản lý người dùng & phân quyền
- Phân quyền theo vai trò (Admin, Quản lý, Nhân viên)
- Kiểm soát quyền truy cập chức năng
- Bảo mật thông tin người dùng

---

## 🏗️ Kiến trúc hệ thống

Hệ thống được xây dựng theo mô hình **Client – Server**, tách biệt rõ ràng giữa Frontend và Backend:

┌───────────────┐ REST API ┌──────────────────┐
│ Frontend │ <-----------------> │ Backend │
│ (Vue.js) │ │ (Laravel / PHP) │
└───────────────┘ └──────────────────┘
│
│
┌────────────┐
│ Database │
└────────────┘

Cách tiếp cận này giúp hệ thống:
- Dễ mở rộng
- Dễ bảo trì
- Phù hợp triển khai trong môi trường thực tế

---

## 🛠️ Công nghệ sử dụng

### 🎨 Frontend
- **Vue.js 3**
- **Bootstrap 5**
- HTML5, CSS3
- JavaScript (ES6+)
- Axios
- Chart.js

### ⚙️ Backend
- **Laravel Framework**
- **PHP 8+**
- RESTful API
- JWT Authentication

### 🗄️ Cơ sở dữ liệu
- MySQL / MariaDB
- Thiết kế chuẩn hóa (3NF)

### 🧠 AI & Phân tích dữ liệu
- Thuật toán dự báo (Regression, Time Series)
- Phân tích dữ liệu tồn kho
- Python (mở rộng AI Service trong tương lai)

### 🧰 Công cụ phát triển
- Git & GitHub
- XAMPP / Laragon
- Postman
- Visual Studio Code

---

## 📂 Cấu trúc thư mục dự án

HE_THONG_QUAN_LY_KHO_AI
│
├── frontend/ # Vue.js Frontend
│ ├── src/
│ ├── components/
│ ├── router/
│ └── views/
│
├── backend/ # Laravel Backend
│ ├── app/
│ ├── routes/
│ ├── controllers/
│ ├── models/
│ └── database/
│
├── docs/ # Tài liệu dự án
├── .gitignore
└── README.md

---

## ⚙️ Hướng dẫn cài đặt

### 🔧 Yêu cầu môi trường
- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL
- XAMPP hoặc Laragon

---

### 1️⃣ Clone source code
git clone https://github.com/huynhnhuquocdp/HE_THONG_QUAN_LY_KHO_AI.git

### 2️⃣ Cài đặt Backend (Laravel)
cd backend
composer install
cp .env.example .env
php artisan key:generate

Cấu hình database trong file `.env`, sau đó:
php artisan migrate
php artisan serve

---

### 3️⃣ Cài đặt Frontend (Vue.js)
cd frontend
npm install
npm run dev

---

## ▶️ Hướng dẫn sử dụng

1. Truy cập giao diện hệ thống
2. Đăng nhập bằng tài khoản được cấp
3. Thực hiện các chức năng:
   - Quản lý sản phẩm
   - Nhập – xuất kho
   - Theo dõi tồn kho
   - Xem báo cáo và biểu đồ
4. Quản trị viên có thể:
   - Quản lý người dùng
   - Phân quyền hệ thống
   - Theo dõi toàn bộ hoạt động kho

---

## 🔐 Bảo mật
- Xác thực người dùng bằng JWT
- Phân quyền theo vai trò
- Kiểm tra và validate dữ liệu đầu vào
- Bảo vệ API khỏi truy cập trái phép

---

## 📈 Hướng phát triển trong tương lai
- Nâng cấp mô hình AI (Deep Learning)
- Kết nối IoT (RFID, cảm biến kho)
- Triển khai kiến trúc Microservices
- Phát triển ứng dụng Mobile
- Tích hợp Chatbot AI hỗ trợ quản lý

---

## 👨‍💻 Tác giả

**Huỳnh Như Quốc**  
GitHub: https://github.com/huynhnhuquocdp

---

## 📄 Giấy phép

Dự án được phát triển phục vụ **học tập, nghiên cứu và đồ án tốt nghiệp**.  
Có thể mở rộng cho mục đích thương mại trong tương lai.
