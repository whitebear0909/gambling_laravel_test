export default [
  {
    path: "/",
    component: require("./views/Home.vue").default,
  },
  {
    path: "/affiliates",
    component: require("./views/Affiliates.vue").default,
  },
  { path: "*", component: require("./components/NotFound.vue").default },
];
