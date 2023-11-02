

<template>
  <div class="wrap">
    <div style="display: flex;">

      <div v-for="i in category" class="_fruit">
        <FruitItem :bgColor=i.bg :Img=i.img :Title=i.title :Item=i.item></FruitItem>
      </div>
    </div>
    <div style="display: flex;">

      <div v-for="i in promotion">
        <Promotion :text="i.text" :img="i.img" :pro_bg="i.bg" :btn="i.btnColor" :textBtn="i.txtBtn"></Promotion>
      </div>
    </div>
    <!-- <Image :imageUrl="localImageUrl"></Image> -->
  </div>

  <!-- <RouterView /> -->
</template>

<script>
import Onion from "./assets/img/Onion.png";
import Vegetable from "./assets/img/vegetable.png";
import Button from "./components/Button.vue";
import FruitItem from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";
export default {
  name: "App",
  components: {
    Button,
    FruitItem,
    Promotion,
    Image
  },
  data() {
    return {

      promotion: [
        {
          text: "Everyday Fresh & Clean with Our Products",
          img: new URL(Onion, import.meta.url).href,
          // img: "https://s3-alpha-sig.figma.com/img/de8c/488a/87b9ce16acd7436a6dec758331c840bc?Expires=1699228800&Signature=Tpz2rQzeVvnBr9y2ieTzTBCjDCr-H5sSfMxsCQx0rs0IisW~gCJjfdRGfOHtJRt3xBUghQBrlnmRnmMhxlpBMg7j~NdKkQ7Y3kKgMYGkIORWZeuzappL3WKroT23gv9jInhkULvKQB9NpdYkfXgWoMcTymyEB8LvUij6lzDfCrIGhnnxyO2ZIFryVmrpU69PWGDgI6532jA9Ky15d7mvZZFcJ9jm36VvwiZcy9EoTeprsDc1ZxTEeEw4A6T2n51qT7nx4RplP1RNL3fi~NBj9jrvRx2Btm0P0kvVB1xmRyyTWrWscO8ibDneoBrieCoOQow3LlaITubTPbG2epaK3Q__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          txtBtn: "Shop now",
          btnColor: "#3BB77E",
          bg: "#F3E8E8"

        }, {
          text: "Make your Breakfast Healthy and Easy",
          img: "https://s3-alpha-sig.figma.com/img/2738/f29f/1c4542246febe8c91ddb74ce42b81c5d?Expires=1698624000&Signature=msK-LsxOQNUgcPxY9Up9cDJft0cTCRC1I3As6VGOzP2OcQR7WOeaRxlpUKIzngBkUztAsgG1XrnmLrMyJk1xt~WG5ISom7QcooEbq8KhTNEDNAhzz11OhtF5Z9fJhgkEk-cAiLlCkI8Jc0V8z0QQQiRdVnIuIetu-0gtZVxV5X52T072T21lpEmOGzuvMDs6r0ttPIFxC78pfi0Rmhg24nrFvT-LBkkoe4av-Y3WKMLEJDCf4S76VdxI6vmGGa5kJlTlhBx-1E9cK8pfEXBadOq8yXjINwj5ksiZYIPSsvtiD5G9Ak8DeHu7JdCc3l0XbygDfSvj4yWZJ4bPyHZxCA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          txtBtn: "Shop now",
          btnColor: "#3BB77E",
          bg: "#F3E8E8"
        }, {
          text: "The best Organic Products Online",
          img: new URL(Vegetable, import.meta.url).href,
          txtBtn: "Shop now",
          btnColor: "#FDC040",
          bg: "#E7EAF3"
        },
      ],
      category: [
        {
          bg: "#F2FCE4",
          img: "https://s3-alpha-sig.figma.com/img/8370/e915/8a586f746c0b10b70cd405c8aa1f2038?Expires=1698624000&Signature=efjk3l27pdR9DDpQkIPN0F2PM-3G5AWiuVspKR-LX7cHoikxjkxhR-cFbHmuxFQWp14~RAfoZs6cWzL9WGTgdm2KBz319La9E3Tp6pc9m5l0kyqkQhgX1SoQtEN05kDUigdbEuaI1FTvP4jWpUDcMb~QYqyo30vqssiK4uJAJSUcR~d9QRSnsZgYJnJE4VlQG9ATle4~fRUTMIqEmVsnDsT0Z0VSi6TIw8V9ZqActoiWyZpop1XKR0JMg~6RlWFqUqUPBjYACZkGCeFWQC30nl7F0MJx2dI24tUOartX3qTp7Cm50zjJYYOmHCD-woYgaPnofI-IU7ZcRd2a-rRdbw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Cake & Milk",
          item: "14 items"
        },
        {
          bg: "#FFFCEB",
          img: "https://s3-alpha-sig.figma.com/img/fa19/6bce/6720167ebdfcf5d3f8a2d76053176f9a?Expires=1698624000&Signature=LQudV55sLcsC1q7f1ZAhgyb8mBhdFnwCoITLpZ1BgP8pTo1MTFT7crtI-19kLLndu9yZdAaSbzdqm6hDdjOaf2L1I4C4Yr1wIizIs0187L1iBcBIKjkdBF0z3sa-D7Z0iV7cmkhjGKvT4mhKzS4r0jtY~TzY5ZfBPpnrJyrQSf2h1QJqc9F7jsvGUqA7nG9J6iEuq0xOpwYSHi9AW8P-jJY5oc0ygAGJmsUoW077n26E1CTzZdI-uqJiOllKlJ7WrVseIOlQ1KI2kh6WFP1gCAbojqpgHKWa-zQSf2vdEHAR27zfU05ph6gRFOy8Aex2-WYjBU9Wlrp7u~YrckkVTQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Peach",
          item: "17 items"
        },
        {
          bg: "#ECFFEC",
          img: "https://s3-alpha-sig.figma.com/img/eb0a/46d6/bf3d30616b8cd69f4b03064fe254350c?Expires=1698624000&Signature=N9KYoOEnKPElwZU2-aD0Tz8mE4m-sji5guk4g-ra-YuJmZ-u8e0tvRLEPtN9IflO-F5xUgLfGkHllnNBMeoU1CIVDOJiFGAKxaRLKX7Bi2gzgJqg5ARjbQtGHYHmw9hAE32nbtOGLvkcPj7fOO-qMRTJJTXstd~5MEpO-re5XsCGtubotjdWXpAJMO5QL8kXuvSO64hogL9hBi3VqZPI2cbSlSkbN4FX6iq1OmjrIlrV5CZIMVh-~ryLIqp49FPMclxNJmeWPRydrRIi9n3bniw8RV-vJxNeV2E2Q-aC0jG-Ed~PWcDsffzlq85b8ZYvGLJGT-wfmGr94-FBsZAXWw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Oganic Kiwi",
          item: "21 items"
        },
        {
          bg: "#FEEFEA",
          img: "https://s3-alpha-sig.figma.com/img/21b6/3a1e/f2a493eea176934bcab372692ab59a29?Expires=1698624000&Signature=cRJXAwXoGiivpT9TyLEPAsoac-pKJr2gSyWi7DP4N7ZEgoGlI1OPox~rw14KZ6oQl0kqchFSNErJUvVoZLDsB1uYx1W8xY~gHJe20uHF8Yf-YZthm~yV03xLjIR5tE960Hb~T8JR54H-P23YPkIajloGP8~eie592CR4T5bnJMoFvLwLMHrkHB-CpvsXSFCyQtJwnT-jzafH3EKmzbsEA4CC8bHKkzEFVkWOeWGUrLDKzrj4xoLzuOuPHNsAUl5Bs2Qusm6Ah9VrJF2K61k7RKkK4iyMm-wep5zEPED7u-db6jf6D0unyk6PG13BGiEjoxztqmxBBGxqU~D5~QSs8A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Red Apple",
          item: "68 items"
        },
        {
          bg: "#FFF3EB",
          img: "https://s3-alpha-sig.figma.com/img/488c/b40d/98f6efd89c2347f8ab7f23b7757a7e2f?Expires=1698624000&Signature=gZtl~Oi38sUqJ5YwcjSfCADmeqy1fBvbgb2KSDWVoGKJerniOAYZI8QE2Bqi4TT16l2jvfbt8s2ayJbGmv5FpBpyw2BKM9yuwgsOUb05vcebCv~avwFoI6lUDcHWsFz1JtBFJWMeT4WBwhUqkVVSxwDbkMDAkz~xJ1WlHIIA1CWre9MVDHgBTpQArFmOwNY2qguYTysZdDz-WzOg7F1K7pwaqB-SzJ~WMEuT-bqu3jmXqIKcnD1AlD2s8v74LQJxjZyr2Xd7stLs9~w-4s~916xy48UEq9CCIW5CaomXqrw3z7bE221fpoXt0K~aHBYDJEa2Wel4jDak4wtUHAjgig__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Snack",
          item: "34 items"
        },
        {
          bg: "#FFF3FF",
          img: "https://s3-alpha-sig.figma.com/img/13f9/afc8/02816b515e817bcd88800c49b947f860?Expires=1698624000&Signature=R5HAcE3KoFXk0Xg5Fw3TfYPw35KBBkyDJtjg4Pu6wc~3RjOECLgxkUcCVd6gKqSQP7kqLIFw2ZOBhk7nxkkqttA7PsWlsRW5VSPZM3ZuTbjrGlb6kUcbsnOYBHYi4S9FJWB3bjKcrq8p5-Asvoebo01U0YTBSQ6KSdwN5HPn~5bqpPQMYwofx4e7HonVP~OqGi57X4OUl9-oA-EemXT4auVRFJG~QKllCjpI8METqySp3MGTjvHV-y5CT2zkoufJw5QUdyEsiyLeC2Mj3R7o60bWej1JlBMaJccCxUkF9Y3lZ8vi~BNStYtSw9TuHm0MTYAxiIvbpMcnODFmgQ7TNg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Black plum ",
          item: "25 items"
        },
        {
          bg: "#F2FCE4",
          img: "https://s3-alpha-sig.figma.com/img/5e6d/35bc/cc6f73e5412576546dca6b013f4fc9c7?Expires=1698624000&Signature=UBWKCxALtrGAqdcRn0llGRIFrr0UpS6TUebvmCvrMAGFqNsy7hMPMwyPoIMGGxNL9wQFaTfb4ZyqF-~oGa7RGBKboq3lfbRzNOO8qBLl5p3G1akGNzdydPKDEHIkj378g90M8tY7uAa1UY4j08bqEQ-vVzn8yDrmK2AeLV5gcztd74eoRq5BYtUfij3atNjmje7N6X3H72lIWuPRHh1PiklEjXilIuqgMMQ8IP-Qh5AUK7y120blzjOY~4g1-wBxKRdd2Ph2aurdyOSSFoHPFBHXQQYW3Ti~vd1YBG5ZW6Bc-aHYeGD5tG1~88QOyAC8Ha3e6pMSC65qgi8yKGzv6A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Vegetables",
          item: "65 items"
        },
        {
          bg: "#FFFCEB",
          img: "https://s3-alpha-sig.figma.com/img/0ed9/44fa/3bcccc269ae2cadb2fb25ac9b02ea29e?Expires=1698624000&Signature=p5jpj2sw418m353LKmTVqoxg5radDWdMBOox5iYqRnddYV9foIweZ9ng3~JncWK9~gfLNg4KmkkbpyQ29XQA4xgXQAPaKDHN9JymJ55soyzOnE4xFBce708ByebbE8zhr2uSUgcO3X4ALgnaxqAPIgwOJFfOPKdDbu1xNFIeNreBUHqINKR088dMI1ejjNvLsCjX73~9FqVIhhKzwEB8VdW~giQoXJ9FIvoDFvQsHHyIe6MBbG57~dKXYnJA9KutKhvVpPyf01MhO1IUDlz10ehuUhwKeZXE8igspxQQZbSDfJhxS4ZXk2LUH8oyFPsv~c~0Fwm4Lo8y1s9ltWRppA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Headphone",
          item: "33 items"
        },
        {
          bg: "#FFF3FF",
          img: "https://s3-alpha-sig.figma.com/img/78c4/8886/688817c7c490b88407c4904743141184?Expires=1698624000&Signature=D0f8QNjwZX71buFHISl0BLjm7eRlWBSPNX9aItcPDvb1gTH99-3f6Lrpdl5~TsAKBHd3FK3c36ONwDt2L0Cs-37EE7~LV0NpGlQ7YVmduF6EqhP9RFyJHQaFgE96X9JhB0OwEI7ir8OtokufxZqSLV8ZSzY8WLAwV9tI0lYCvkMTvM-NVskPtz2NXzT2CHc3Gs~5nnBeCDOeJ-sGTrrIcM4TdrXtl9X8PFPURjaYkfmYSeNnwhJe8~lkvzDJsNqccP0z4BnhCfPCQDBHbtyZBmLfS5TZA2AazAm38ic3Kg3UsPhFabmwUV6k2MJTv990vGryyteBA5WcKoeC~NQROg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Cake & Milk",
          item: "63 items"
        },
        {
          bg: "#FFF3FF",
          img: "https://s3-alpha-sig.figma.com/img/aadc/a20d/2ca905cbdfec3bf306fbe70e1ca34a8a?Expires=1698624000&Signature=ooiPFEh2oS94ELUcD7JdyMbImjND4e94vZONhlEl7WW3EAd4xDiU12AftlQvkm6P5eGvZFW29kRWgNM7zuIAe5p9rjVqRhnZRfH7OAHPE1p5XjUeu9aBcsDi8pYHdOldb0LPSYVatFYe7qA9pMu9xBseGyhynlBZ53AuTPpa95SfQZDSJorCA6wR1MQnWsZnl~8gZAIjB7a2BCOz4mFsdjEFGO5EezsrPSeoQQPRdDL2g9AXYKB~sCjlugp~Twb4p6tVXJoubRpodzBue3KQBUMJ~6EvBBI1UL1Pd08~jz9aLzPnj56POzqkLPqOim5JyZmeWbRhvTrijrEyVBauSg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          title: "Orange",
          item: "63 items"
        }
      ]

    };
  }
}
</script>
<style scoped>
._fruit {
  display: flex;
  margin-right: 25px;
}

.wrap {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>
