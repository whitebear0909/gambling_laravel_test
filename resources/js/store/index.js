import Vue from "vue";
import Vuex from "vuex";
Vue.use(Vuex);

import affiliatesModule from "./modules/affiliates.js";

export default new Vuex.Store({
  modules: {
    affiliatesModule,
  },
});
