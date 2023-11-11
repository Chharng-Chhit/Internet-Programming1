<template>

  <div class="wrap">
    <Menu feature="Featured Categories" :category="groups" class="menu"></Menu>
    <div class="container">
      <div style="display: flex; justify-content: space-between;">
        <div v-for="i in category" class="_fruit">
          <FruitItem
            :bgColor="i.bg"
            :Img="i.img"
            :Title="i.title"
            :Item="i.item"
          ></FruitItem>
        </div>
      </div>
      <div style="display: flex; justify-content: space-between; margin-top: 20px;;">
        <div v-for="i in promotion">
          <Promotion
            :text="i.text"
            :img="i.img"
            :pro_bg="i.bg"
            :btn="i.btnColor"
            :textBtn="i.txtBtn"
          ></Promotion>
        </div>
      </div>
      <Menu feature="Featured Categories" :category="groups" style="margin-top: 50px;"></Menu>
    <div class="Product" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
      <div v-for="i in products">
          <Product
          :tag="i.tag"
          :tagBg="i.tagBg"
          :image="i.image"
          :name="i.name"
          :rate="i.rate"
          :sellPrice="i.sellPrice"
          :discountPrice="i.discountPrice"
        ></Product>
      </div>
    </div>
    </div>
    
  </div>
</template>

<script>
import Menu from "./components/Menu.vue";
import Button from "./components/Button.vue";
import FruitItem from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";
import { useTodoStore } from "./store/todo";
import { mapState } from "pinia";
import test from "./components/test.vue";
import Product from "./components/Product.vue";

export default {
  name: "App",
  components: {
    Button,
    FruitItem,
    Promotion,
    Image,
    Menu,
    test,
    Product
  },
  setup() {
    const todoStore = useTodoStore();
    return { todoStore };
  },
  computed: {
    ...mapState(useTodoStore, ["groups"]),
    ...mapState(useTodoStore, ["promotion"]),
    ...mapState(useTodoStore, ["category"]),
    ...mapState(useTodoStore, ["products"]),
  },
};
</script>
<style scoped>
._fruit {
  display: flex;
  justify-content: space-between;
}

/* .wrap {
  width: 1080px;
  margin: auto;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
} */
.menu{
  margin-top: 50px;
}
.container {
  margin: auto;
  width: 1590px;
  
  /* border: 1px solid gold; */
  /* padding: 20px; */
  /* box-shadow: 0 0 10px gold inset 0 0 10px rgb(172, 158, 78) ; */
}
</style>
