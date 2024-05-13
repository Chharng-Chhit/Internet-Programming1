<!-- resources/js/components/ChatBox.vue -->
<template>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Chat Box</div>
          <div class="card-body" style="height: 500px; overflow-y: auto;">
            <message v-for="message in messages"
                     :key="message.id"
                     :userId="user.id"
                     :message="message"
            />
            <span ref="scroll"></span>
          </div>
          <div class="card-footer">
            <message-input :rootUrl="rootUrl" />
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  import axios from 'axios';
  import Message from './Message.vue';
  import MessageInput from './MessageInput.vue';

  export default {
    data() {
      return {
        user: JSON.parse(document.getElementById('main').getAttribute('data-user')),
        messages: []
      };
    },
    methods: {
      scrollToBottom() {
        this.$refs.scroll.scrollIntoView({ behavior: 'smooth' });
      },
      connectWebSocket() {
        // Your WebSocket connection logic here
      },
      async getMessages() {
        try {
          const response = await axios.get(`${this.rootUrl}/messages`);
          this.messages = response.data;
          this.$nextTick(this.scrollToBottom);
        } catch (error) {
          console.error(error.message);
        }
      }
    },
    mounted() {
      this.getMessages();
      this.connectWebSocket();
    },
    props: {
      rootUrl: String
    },
    components: {
      Message,
      MessageInput
    }
  };
  </script>
