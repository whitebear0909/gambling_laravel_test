<template>
  <section class="content">
    <div class="aff-text"><h3>Affiliates</h3></div>
    <b-table
      striped
      hover
      :items="affiliates"
      :fields="fields"
      :current-page="currentPage"
      :per-page="perPage"
      show-empty
      :busy="isLoading"
      class="mt-3"
      outlined
    >
      <template #table-busy>
        <div class="text-center text-danger my-2">
          <b-spinner class="align-middle"></b-spinner>
          <strong>Loading...</strong>
        </div>
      </template>
    </b-table>
    <b-col sm="7" md="6" class="my-1 m-auto">
      <b-pagination
        v-model="currentPage"
        :total-rows="totalRows"
        :per-page="perPage"
        align="fill"
        size="sm"
        class="my-0"
      ></b-pagination>
    </b-col>
  </section>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  name: "Affiliate",
  computed: {
    ...mapGetters({
      affiliates: "affiliates",
      isLoading: "isLoading",
      totalRows: "totalRows",
    }),
  },
  data() {
    return {
      fields: ["affiliate_id", "name"],
      currentPage: 1,
      perPage: 10,
    };
  },
  mounted() {
    this.$store.dispatch("getAllAffiliates");
  },
};
</script>
