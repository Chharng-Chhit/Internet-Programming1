<!-- resources/js/App.vue -->
<template>
    <div id="app">
      <ChatBox :rootUrl="rootUrl" />
    </div>
  </template>

  <script>
  import ChatBox from './components/ChatBox.vue';

  export default {
    components: {
      ChatBox
    },
    data() {
      return {
        rootUrl: 'http://127.0.0.1:8000'
      };
    }
  };
  </script>
