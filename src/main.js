import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Default from './layout/wrapper/index.vue'
import DangNhap from './layout/wrapper/DangNhap.vue'
import Toaster from "@meforma/vue-toaster";
const app = createApp(App)
app.use(Toaster);
app.use(router)
app.component("default-layout", Default);
app.component("dangnhap-layout", DangNhap);

app.mount("#app")