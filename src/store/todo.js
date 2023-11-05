

import { defineStore } from "pinia";

export const useTodoStore = defineStore('todo',{
    // :() => ({
      state: () => ({
        groups: ["Milks & Diaries", "Coffees & Teas", "Pet Foods", "Meats", "Vegetables", "Fruits"],
        promotion: [
          {
            text: "Everyday Fresh & Clean with Our Products",
            img: "./src/assets/img/Onion.png",
            txtBtn: "Shop now",
            btnColor: "#3BB77E",
            bg: "#F3E8E8"
  
          }, {
            text: "Make your Breakfast Healthy and Easy",
            img: "./src/assets/img/bottle.png",
            txtBtn: "Shop now",
            btnColor: "#3BB77E",
            bg: "#F3E8E8"
          }, {
            text: "The best Organic Products Online",
            img: "./src/assets/img/vegetable.png",
            txtBtn: "Shop now",
            btnColor: "#FDC040",
            bg: "#E7EAF3"
          },
        ],
        category: [
          {
            bg: "#F2FCE4",
            img: "./src/assets/img/cat1.png",
            title: "Cake & Milk",
            item: "14 items"
          },
          {
            bg: "#FFFCEB",
            img: "./src/assets/img/cat2.png",
            title: "Peach",
            item: "17 items"
          },
          {
            bg: "#ECFFEC",
            img: "./src/assets/img/cat3.png",
            title: "Oganic Kiwi",
            item: "21 items"
          },
          {
            bg: "#FEEFEA",
            img: "./src/assets/img/cat4.png",
            title: "Red Apple",
            item: "68 items"
          },
          {
            bg: "#FFF3EB",
            img: "./src/assets/img/cat5.png",
            title: "Snack",
            item: "34 items"
          },
          {
            bg: "#FFF3FF",
            img: "./src/assets/img/cat6.png",
            title: "Black plum ",
            item: "25 items"
          },
          {
            bg: "#F2FCE4",
            img: "./src/assets/img/cat7.png",
            title: "Vegetables",
            item: "65 items"
          },
          {
            bg: "#FFFCEB",
            img: "./src/assets/img/cat8.png",
            title: "Headphone",
            item: "33 items"
          },
          {
            bg: "#FFF3FF",
            img: "./src/assets/img/cat9.png",
            title: "Cake & Milk",
            item: "63 items"
          },
          {
            bg: "#FFF3FF",
            img: "./src/assets/img/cat10.png",
            title: "Orange",
            item: "63 items"
          }
        ],
        products: [
          {
            id: 1,
            tag: "-17%",
            image: "...path to your image...",
            category: 3,
            name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
            rate: 4,
            description: "500 gram",
            sellPrice: "3",
            discountPercentage: 17,
            discountPrice: 0,
          },
        ],
      }),
    // }),
    
})