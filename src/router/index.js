import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save

const routes = [
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