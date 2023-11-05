<template>
  <div class="feature">
    <div>Featured Categories</div>
  </div>
  <div class="category">
    <div v-for="i in groups">{{ i }}</div>
  </div>
</template>

<script>
import { useTodoStore } from "../store/todo";
import { mapState } from "pinia";
export default {
  name: "Menu",
  setup() {
    const todoStore = useTodoStore();
    return { todoStore };
  },
  computed:{
    ...mapState(useTodoStore,["groups"])
  }
};
</script>

<style scoped></style>
