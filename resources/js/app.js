require("./bootstrap");

// Require Vue
window.Vue = require("vue").default;

//bootstrap imports and assigning
import { BootstrapVue, IconsPlugin } from "bootstrap-vue";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
//bootstrap end

//Routes imports and assigning
import VueRouter from "vue-router";
Vue.use(VueRouter);
import routes from "./routes";

const router = new VueRouter({
  mode: "history",
  routes,
});
// Routes End

import App from "./views/App";

import store from "./store";

const app = new Vue({
  el: "#app",
  components: { App },
  router,
  store,
});
