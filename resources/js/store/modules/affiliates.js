import * as types from "../mutation-types";
import { getAffiliates } from "../../service/service.api.js";
import { sortAffiliates } from "../../service/service.function.js";

// state
const state = {
  affiliates: [],
  totalRows: 0,
};

// getters
const getters = {
  affiliates: (state) => state.affiliates,
  totalRows: (state) => state.totalRows,
};

// mutations
const mutations = {
  [types.MUTATION_SET_AFFILIATES](state, affiliates) {
    state.affiliates = affiliates;
    state.totalRows = affiliates.length;
  },
};

// actions
const actions = {
  async getAllAffiliates({ commit }) {
    try {
      const { data } = await getAffiliates();
      commit(types.MUTATION_SET_AFFILIATES, sortAffiliates(data));
    } catch (e) {}
  },
};

const affiliatesModule = {
  state,
  mutations,
  actions,
  getters,
};

export default affiliatesModule;
