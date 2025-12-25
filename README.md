# 🏭 HỆ THỐNG QUẢN LÝ KHO THÔNG MINH TÍCH HỢP AI (AI WAREHOUSE MANAGEMENT SYSTEM)

> 🚀 Một nền tảng quản lý kho hiện đại, linh hoạt và thông minh, ứng dụng Trí tuệ Nhân tạo (AI) nhằm tối ưu vận hành, dự báo tồn kho và hỗ trợ ra quyết định cho doanh nghiệp.

---

## 📌 Giới thiệu chung

**Hệ thống Quản lý Kho tích hợp AI** được xây dựng nhằm giải quyết các vấn đề phổ biến trong quản lý kho truyền thống như:
- Quản lý thủ công, thiếu chính xác
- Khó theo dõi tồn kho theo thời gian thực
- Không có khả năng dự báo nhu cầu
- Thiếu công cụ phân tích và hỗ trợ ra quyết định

Hệ thống áp dụng **kiến trúc Web hiện đại**, tách riêng **Frontend (Vue.js)** và **Backend (Laravel/PHP)**, dễ mở rộng, dễ bảo trì và sẵn sàng tích hợp các mô hình AI trong tương lai.

---

## 🎯 Mục tiêu hệ thống

- ✅ Quản lý kho hàng **chính xác – thời gian thực**
- 🤖 Ứng dụng **AI** để:
  - Dự báo nhu cầu nhập/xuất kho
  - Phát hiện bất thường tồn kho
  - Gợi ý tối ưu hóa lưu trữ
- 📊 Cung cấp dashboard trực quan cho nhà quản lý
- 🔐 Phân quyền người dùng rõ ràng
- 🌐 Dễ triển khai, dễ mở rộng, phù hợp cho doanh nghiệp vừa và nhỏ

---

## 🧩 Phạm vi của nhánh này (Frontend – FE)

Nhánh này tập trung phát triển **Frontend (FE)** của hệ thống, bao gồm:
- Giao diện người dùng (UI/UX)
- Tương tác với Backend thông qua API
- Hiển thị dữ liệu kho, biểu đồ, báo cáo
- Quản lý trạng thái ứng dụng phía client

---

## 🛠️ Công nghệ sử dụng

### 🔹 Frontend
- **Vue.js 3** – Framework JavaScript hiện đại
- **Vite** – Công cụ build nhanh, nhẹ
- **JavaScript (ES6+)**
- **Bootstrap 5** – Thiết kế giao diện responsive
- **Axios** – Giao tiếp API
- **Vue Router** – Quản lý routing
- **Pinia / Vuex (dự kiến)** – Quản lý state

### 🔹 Backend (định hướng tích hợp)
- **Laravel Framework**
- **PHP 8+**
- **RESTful API**
- **JWT Authentication**

### 🔹 AI & Phân tích dữ liệu (định hướng)
- Python (AI Service)
- Machine Learning / Deep Learning
- Data Analytics

### 🔹 Công cụ & Hệ sinh thái
- **Git & GitHub** – Quản lý mã nguồn
- **VS Code** – IDE chính
- **Postman** – Test API
- **Node.js & NPM**

---

## 📁 Cấu trúc thư mục (Frontend)

```bash
HE_THONG_QUAN_LY_KHO_AI_FE/
├── public/                 # Tài nguyên tĩnh
├── src/
│   ├── assets/             # Ảnh, CSS, font
│   ├── components/         # Component tái sử dụng
│   ├── views/              # Các trang chính
│   ├── router/             # Vue Router
│   ├── services/           # Gọi API
│   ├── utils/              # Hàm tiện ích
│   └── main.js              # Entry point
├── index.html
├── package.json
├── vite.config.js
└── README.md
```
---
## ⚙️ Hướng dẫn cài đặt


🔸 Yêu cầu hệ thống

      - Node.js >= 16
      - NPM >= 8
      - Git
      - Trình duyệt hiện đại (Chrome, Edge, Firefox)
🔸 Các bước cài đặt


  1️⃣ Clone repository

      - git clone https://github.com/huynhnhuquocdp/HE_THONG_QUAN_LY_KHO_AI.git
      - cd HE_THONG_QUAN_LY_KHO_AI_FE
  2️⃣ Cài đặt thư viện
  
      - npm install
  3️⃣ Chạy môi trường phát triển
  
      - npm run dev
  ➡️ Truy cập ứng dụng tại:
  
      👉 http://localhost:5173
  ▶️ Hướng dẫn sử dụng (Frontend)
  
      - Người dùng đăng nhập vào hệ thống
      - Xem tổng quan kho hàng trên Dashboard
      - Quản lý nhập – xuất – tồn kho
      - Theo dõi biểu đồ, báo cáo trực quan
      - Nhận gợi ý thông minh (khi tích hợp AI)


🔐 Phân quyền người dùng (dự kiến)

      - Admin: Toàn quyền hệ thống
      - Quản lý kho: Quản lý nhập/xuất, xem báo cáo
      - Nhân viên: Thao tác kho cơ bản, xem dữ liệu được cấp quyền
🚀 Định hướng phát triển

      - Hoàn thiện giao diện Dashboard
      - Kết nối Backend Laravel
      - Tích hợp AI dự báo tồn kho
      - Thêm biểu đồ phân tích nâng cao
      - Đóng gói & triển khai production
👨‍💻 Tác giả

      - Huỳnh Như Quốc
      - GitHub: https://github.com/huynhnhuquocdp
    Vai trò: Frontend Developer / Fullstack 
📜 Giấy phép

    Mọi hình thức sử dụng thương mại cần có sự cho phép của tác giả.
