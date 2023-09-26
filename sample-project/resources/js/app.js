import './bootstrap';

//Vueの記述を追加
import { createApp } from 'vue';
import App from './App.vue';

const app = createApp(App);
app.mount('#app');