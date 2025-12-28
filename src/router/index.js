import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save

const routes = [
    /* ---------------------------------Admin----------------------------------------- */
   
    {
        path : '/admin/dang-nhap',
        component: ()=>import('../components/Admin/DangNhap/index.vue'),
        meta: { layout: 'dangnhap-layout' }
    },

    {
        path : '/admin/cau-hinh/thong-tin-cong-ty',
        component: ()=>import('../components/Admin/CauHinh/ThongTinCongTy/index.vue')
    },


    /* ---------------------------------Nhân viên----------------------------------------- */
    
    {
        path : '/nhan-vien/dang-nhap',
        component: ()=>import('../components/NhanVien/DangNhap/index.vue'),
        meta: { layout: 'dangnhap-layout' }
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router