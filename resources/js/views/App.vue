<template>
  <div>
    <Header />
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<style lang="scss">
body {
  font-family: "Nunito", sans-serif;
}

.selector-for-some-widget {
  box-sizing: content-box;
}
</style>

<script>
import Header from "../components/Header.vue";

export default {
  name: "App",
  components: {
    Header,
  },
};
</script>
