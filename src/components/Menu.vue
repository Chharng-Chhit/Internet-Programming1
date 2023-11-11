<template>
  <div class="wrapper">
    <div class="feature">
      <div>{{ feature }}</div>
    </div>
    <div class="category">
      <a v-for="i in category" href="">{{ i }}</a>
    </div>
  </div>
</template>

<script>
// import { useTodoStore } from "../store/todo";
// import { mapState } from "pinia";
export default {
  name: "Menu",
  props: {
    feature: String,
    category: Array,
  },
  // setup() {
  //   const todoStore = useTodoStore();
  //   return { todoStore };
  // },
  // computed: {
  //   ...mapState(useTodoStore, ["groups"]),
  // },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap");

.feature {
  font-family: "Quicksand", sans-serif;
  font-size: 32px;
  font-style: normal;
  font-weight: 700;
  line-height: 40px; /* 125% */
  letter-spacing: -0.013px;
}
.wrapper {
  
  width: 1590px;
  margin: auto;
  margin-top: 20px;
  margin-bottom: 20px;
  display: flex;
  justify-content: space-between;
}
.category {
  
  display: flex;
  font-family: "Quicksand", sans-serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 600;
  line-height: 24px; /* 150% */
}
.category a{
  margin-left: 20px;
  text-decoration: none;
  color: #253D4E;
}
</style>
