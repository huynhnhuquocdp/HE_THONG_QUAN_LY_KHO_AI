<template>
  <div class="login-page">
    <!-- Background image - optimized -->
    <img
      class="login-bg"
      :src="backgroundImage"
      alt="Background"
      loading="lazy"
    />

    <!-- Overlay -->
    <div class="login-overlay"></div>

    <!-- Login card -->
    <div class="login-container">
      <div class="form-wrapper">
        <!-- Company branding header -->
        <div class="company-header">
          <div class="logo-section">
            <img
              src="@/assets/img/logo_Kho_Nhap-removebg-preview.png"
              alt="Logo Kho"
              class="logo"
              loading="eager"
            />
          </div>
          <div class="company-info">
            <h2 class="company-name">Hệ Thống Quản Lý Kho AI</h2>
            <p class="company-tagline">Quản lý tồn kho thông minh & hiệu quả</p>
          </div>
        </div>

        <div class="form-header">
          <h1>Đăng Nhập Nhân Viên</h1>
          <p>Vui lòng nhập thông tin đăng nhập của bạn</p>
        </div>

        <form @submit.prevent="submit" novalidate>
          <!-- Email input -->
          <div class="form-group">
            <label class="form-label" for="email">
              <i class="bx bx-envelope"></i>
              Tài khoản Email
            </label>
            <div class="input-wrapper">
              <input
                id="email"
                v-model="email"
                type="email"
                class="form-control"
                placeholder="nhanvien@example.com"
                required
                autocomplete="email"
                @blur="validateEmail"
              />
              <span v-if="email && !errors.email" class="input-icon valid">
                <i class="bx bx-check-circle"></i>
              </span>
            </div>
            <div v-if="errors.email" class="error-message">
              <i class="bx bx-info-circle"></i>
              {{ errors.email }}
            </div>
          </div>

          <!-- Password input -->
          <div class="form-group">
            <label class="form-label" for="password">
              <i class="bx bx-lock"></i>
              Mật khẩu
            </label>
            <div class="password-group">
              <input
                :type="showPassword ? 'text' : 'password'"
                id="password"
                v-model="password"
                class="form-control"
                placeholder="Nhập mật khẩu của bạn"
                required
                autocomplete="current-password"
                @blur="validatePassword"
              />
              <button
                type="button"
                class="toggle-password"
                @click.prevent="showPassword = !showPassword"
                :title="showPassword ? 'Ẩn mật khẩu' : 'Hiện mật khẩu'"
                tabindex="-1"
              >
                <i :class="showPassword ? 'bx bx-show' : 'bx bx-hide'"></i>
              </button>
            </div>
            <div v-if="errors.password" class="error-message">
              <i class="bx bx-info-circle"></i>
              {{ errors.password }}
            </div>
          </div>

          <!-- Remember & Forgot password -->
          <div class="form-options">
            <label class="remember-check">
              <input type="checkbox" v-model="remember" />
              <span>Ghi nhớ đăng nhập trong 30 ngày</span>
            </label>
            <a href="#" class="forgot-link">
              <i class="bx bx-question-mark"></i>
              Quên mật khẩu?
            </a>
          </div>

          <!-- Submit button -->
          <button
            class="btn-submit"
            type="submit"
            :disabled="isSubmitting"
            :class="{ 'is-loading': isSubmitting }"
          >
            <span v-if="!isSubmitting">
              <i class="bx bx-log-in"></i>
              Đăng Nhập
            </span>
            <span v-else class="loading-spinner">
              <i class="bx bx-loader-alt"></i>
              Đang xử lý...
            </span>
          </button>
        </form>

        <!-- Footer info -->
        <div class="form-footer">
          <p class="footer-text">
            Bạn chưa có tài khoản?
            <a href="#" class="signup-link">Liên hệ quản trị viên</a>
          </p>
          <div class="security-info">
            <i class="bx bx-shield-alt"></i>
            <span>Kết nối được bảo mật bằng SSL</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import backgroundImage from "@/assets/images/backgroud-login/login_1.jpg";

export default {
  name: "DangNhap",
  data() {
    return {
      email: "",
      password: "",
      showPassword: false,
      remember: true,
      errors: {},
      backgroundImage: backgroundImage,
      isSubmitting: false,
    };
  },
  methods: {
    validateEmail() {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!this.email) {
        this.errors.email = "Email là bắt buộc.";
      } else if (!emailPattern.test(this.email)) {
        this.errors.email =
          "Định dạng email không đúng. Ví dụ: nhanvien@example.com";
      } else {
        delete this.errors.email;
      }
    },

    validatePassword() {
      if (!this.password) {
        this.errors.password = "Mật khẩu là bắt buộc.";
      } else if (this.password.length < 6) {
        this.errors.password = "Mật khẩu phải có ít nhất 6 ký tự.";
      } else {
        delete this.errors.password;
      }
    },

    submit() {
      this.errors = {};
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      // Validate email
      if (!this.email) {
        this.errors.email = "Email là bắt buộc.";
      } else if (!emailPattern.test(this.email)) {
        this.errors.email =
          "Định dạng email không đúng. Ví dụ: nhanvien@example.com";
      }

      // Validate password
      if (!this.password) {
        this.errors.password = "Mật khẩu là bắt buộc.";
      } else if (this.password.length < 6) {
        this.errors.password = "Mật khẩu phải có ít nhất 6 ký tự.";
      }

      // If no errors, submit
      if (Object.keys(this.errors).length === 0) {
        this.isSubmitting = true;

        // Simulate API call (remove in production and use actual API)
        setTimeout(() => {
          this.$emit("submit", {
            email: this.email,
            password: this.password,
            remember: this.remember,
          });
          this.isSubmitting = false;
        }, 800);
      }
    },
  },
};
</script>

<style scoped>
* {
  box-sizing: border-box;
}

/* Page background with video */
.login-page {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    "Helvetica Neue", Arial, sans-serif;
  position: relative;
  overflow: hidden;
  background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 100%);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  contain: layout;
}

/* Background image - optimized */
.login-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  z-index: 0;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  contain: layout style paint;
  will-change: transform;
  image-rendering: -webkit-optimize-contrast;
  image-rendering: crisp-edges;
  filter: contrast(1.05) brightness(0.95) saturate(1.1);
  -webkit-filter: contrast(1.05) brightness(0.95) saturate(1.1);
}

/* Overlay to darken image */
.login-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    135deg,
    rgba(10, 14, 39, 0.45) 0%,
    rgba(10, 14, 39, 0.65) 100%
  );
  z-index: 1;
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
  pointer-events: none;
  will-change: opacity;
  contain: strict;
}

/* Main login container */
.login-container {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 480px;
  background: rgba(255, 255, 255, 0.98);
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  border-radius: 16px;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4), 0 0 1px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.35);
  animation: slideUp 0.6s cubic-bezier(0.23, 1, 0.32, 1) forwards;
  will-change: transform, opacity;
  contain: layout style;
  overflow: hidden;
}

.login-container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.6),
    transparent
  );
  pointer-events: none;
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Form wrapper */
.form-wrapper {
  padding: 48px 44px;
  position: relative;
}

/* Company header section */
.company-header {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 36px;
  padding-bottom: 28px;
  border-bottom: 2px solid #f0f2f7;
}

.logo-section {
  flex-shrink: 0;
  width: 70px;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 14px;
  box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
}

.logo {
  max-height: 55px;
  width: auto;
  object-fit: contain;
  filter: brightness(0) invert(1) drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
}

.company-info {
  flex: 1;
}

.company-name {
  font-size: 18px;
  font-weight: 800;
  color: #1a1a1a;
  margin: 0 0 4px 0;
  letter-spacing: -0.4px;
  line-height: 1.2;
}

.company-tagline {
  font-size: 13px;
  color: #999;
  margin: 0;
  font-weight: 500;
  letter-spacing: 0.2px;
}

/* Form header */
.form-header {
  margin-bottom: 32px;
  text-align: center;
  animation: fadeInDown 0.6s ease-out 0.2s both;
}

.form-header h1 {
  font-size: 28px;
  font-weight: 800;
  color: #1a1a1a;
  margin: 0 0 10px 0;
  letter-spacing: -0.5px;
  line-height: 1.3;
}

.form-header p {
  font-size: 14px;
  color: #888;
  margin: 0;
  font-weight: 500;
  letter-spacing: 0.2px;
}

/* Form group */
.form-group {
  margin-bottom: 24px;
  animation: fadeInUp 0.6s ease-out forwards;
}

.form-group:nth-child(1) {
  animation-delay: 0.3s;
}
.form-group:nth-child(2) {
  animation-delay: 0.4s;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(15px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.form-label {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 12px;
  font-weight: 700;
  color: #2d2d2d;
  margin-bottom: 10px;
  text-transform: uppercase;
  letter-spacing: 0.6px;
}

.form-label i {
  font-size: 14px;
  color: #667eea;
}

/* Input wrapper */
.input-wrapper {
  position: relative;
  display: flex;
  align-items: center;
}

.input-icon {
  position: absolute;
  right: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  color: #27ae60;
  pointer-events: none;
}

.input-icon.valid {
  animation: checkMark 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
}

@keyframes checkMark {
  from {
    opacity: 0;
    transform: scale(0.5);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* Form control */
.form-control {
  width: 100%;
  padding: 13px 44px 13px 16px;
  font-size: 15px;
  border: 2px solid #e3e6f0;
  border-radius: 10px;
  background: linear-gradient(135deg, #f9fafb 0%, #f4f6fb 100%);
  color: #2d2d2d;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  font-family: inherit;
  font-weight: 500;
}

.form-control:hover {
  border-color: #dfe5f0;
  background: linear-gradient(135deg, #fff 0%, #f8f9fc 100%);
}

.form-control:focus {
  outline: none;
  border-color: #667eea;
  background: linear-gradient(135deg, #fff 0%, #f9f9f9 100%);
  box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.12),
    0 8px 24px rgba(102, 126, 234, 0.15);
}

.form-control::placeholder {
  color: #aaa;
}

.input-wrapper .form-control {
  padding-right: 16px;
}

/* Password group */
.password-group {
  position: relative;
  display: flex;
  align-items: center;
}

.password-group .form-control {
  padding-right: 44px;
}

.toggle-password {
  position: absolute;
  right: 12px;
  background: none;
  border: none;
  cursor: pointer;
  font-size: 18px;
  color: #aaa;
  padding: 6px;
  transition: color 0.2s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  will-change: color;
}

.toggle-password:hover {
  color: #667eea;
}

/* Error message */
.error-message {
  color: #e74c3c;
  font-size: 12px;
  margin-top: 8px;
  display: flex;
  align-items: center;
  gap: 6px;
  animation: slideDown 0.3s ease-out;
}

.error-message i {
  flex-shrink: 0;
  font-size: 14px;
}

@keyframes slideDown {
  from {
    opacity: 0;
    transform: translateY(-5px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Form options */
.form-options {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 28px;
  margin-top: 16px;
  animation: fadeInUp 0.6s ease-out 0.45s both;
}

.remember-check {
  display: flex;
  align-items: center;
  cursor: pointer;
  font-size: 13px;
  color: #555;
  user-select: none;
  gap: 8px;
}

.remember-check input {
  width: 18px;
  height: 18px;
  cursor: pointer;
  border: 2px solid #e0e0e0;
  border-radius: 6px;
  accent-color: #667eea;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  will-change: border-color, background-color;
  flex-shrink: 0;
}

.remember-check input:hover {
  border-color: #d0d0d0;
}

.remember-check input:checked {
  background-color: #667eea;
  border-color: #667eea;
  box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.forgot-link {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 13px;
  color: #667eea;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  font-weight: 600;
  will-change: color;
}

.forgot-link:hover {
  color: #764ba2;
  text-decoration: underline;
}

.forgot-link i {
  font-size: 14px;
}

/* Submit button */
.btn-submit {
  width: 100%;
  padding: 15px 20px;
  font-size: 15px;
  font-weight: 700;
  color: #fff;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  text-transform: uppercase;
  letter-spacing: 0.8px;
  box-shadow: 0 8px 24px rgba(102, 126, 234, 0.35),
    0 0 1px rgba(102, 126, 234, 0.5);
  font-family: inherit;
  will-change: transform, box-shadow;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  animation: fadeInUp 0.6s ease-out 0.5s both;
}

.btn-submit::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.2),
    transparent
  );
  transition: left 0.5s;
}

.btn-submit:hover:not(:disabled) {
  transform: translateY(-3px);
  box-shadow: 0 12px 32px rgba(102, 126, 234, 0.45),
    0 0 1px rgba(102, 126, 234, 0.6);
}

.btn-submit:hover:not(:disabled)::before {
  left: 100%;
}

.btn-submit:active:not(:disabled) {
  transform: translateY(-1px);
  box-shadow: 0 4px 16px rgba(102, 126, 234, 0.35);
}

.btn-submit:disabled {
  opacity: 0.7;
  cursor: not-allowed;
  transform: none;
}

.btn-submit.is-loading {
  pointer-events: none;
}

.btn-submit i {
  font-size: 16px;
}

.loading-spinner {
  display: flex;
  align-items: center;
  gap: 8px;
}

.loading-spinner i {
  animation: spin 1s linear infinite;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Form footer */
.form-footer {
  margin-top: 32px;
  padding-top: 28px;
  border-top: 2px solid #f0f2f7;
  text-align: center;
  animation: fadeInUp 0.6s ease-out 0.6s both;
}

.footer-text {
  font-size: 14px;
  color: #777;
  margin: 0 0 16px 0;
}

.signup-link {
  color: #667eea;
  text-decoration: none;
  font-weight: 700;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  will-change: color;
}

.signup-link:hover {
  color: #764ba2;
  text-decoration: underline;
}

.security-info {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  font-size: 12px;
  color: #999;
  font-weight: 500;
}

.security-info i {
  font-size: 14px;
  color: #27ae60;
}

/* Responsive design */
@media (max-width: 640px) {
  .login-container {
    max-width: 100%;
    border-radius: 12px;
  }

  .form-wrapper {
    padding: 36px 24px;
  }

  .company-header {
    gap: 12px;
    margin-bottom: 28px;
    padding-bottom: 20px;
  }

  .logo-section {
    width: 60px;
    height: 60px;
  }

  .company-name {
    font-size: 16px;
  }

  .company-tagline {
    font-size: 12px;
  }

  .form-header h1 {
    font-size: 24px;
  }

  .form-header p {
    font-size: 13px;
  }

  .form-group {
    margin-bottom: 18px;
  }

  .form-control {
    padding: 11px 40px 11px 14px;
    font-size: 14px;
  }

  .btn-submit {
    padding: 12px 18px;
    font-size: 13px;
  }

  .form-footer {
    margin-top: 24px;
    padding-top: 20px;
  }
}

@media (max-width: 480px) {
  .login-page {
    padding: 12px;
  }

  .login-container {
    max-width: 100%;
  }

  .form-wrapper {
    padding: 28px 18px;
  }

  .company-header {
    flex-direction: column;
    gap: 12px;
    text-align: center;
    margin-bottom: 24px;
    padding-bottom: 20px;
  }

  .logo-section {
    width: 65px;
    height: 65px;
    margin: 0 auto;
  }

  .form-header {
    margin-bottom: 24px;
  }

  .form-header h1 {
    font-size: 22px;
  }

  .form-header p {
    font-size: 12px;
  }

  .form-label {
    font-size: 11px;
  }

  .form-control {
    padding: 9px 36px 9px 12px;
    font-size: 13px;
  }

  .form-options {
    flex-direction: column;
    gap: 12px;
    align-items: flex-start;
    margin-bottom: 20px;
  }

  .forgot-link {
    order: -1;
  }

  .btn-submit {
    padding: 10px 16px;
    font-size: 12px;
  }

  .form-footer {
    margin-top: 20px;
    padding-top: 16px;
    font-size: 12px;
  }
}
</style>
