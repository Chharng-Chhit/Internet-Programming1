<template>
    <div class="input-group">
        <input
            v-model="message"
            @input="updateMessage"
            autocomplete="off"
            type="text"
            class="form-control"
            placeholder="Message..."
        />
        <div class="input-group-append">
            <button @click="sendMessage" class="btn btn-primary" type="button">
                Send
            </button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            message: "",
        };
    },
    methods: {
        async messageRequest(text) {
            try {
                await axios.post(`${this.rootUrl}/message`, { text });
            } catch (err) {
                console.log(err.message);
            }
        },
        sendMessage() {
            if (!this.message.trim()) {
                alert("Please enter a message!");
                return;
            }

            this.messageRequest(this.message);
            this.message = "";
        },
        updateMessage(event) {
            this.message = event.target.value;
        },
    },
    props: {
        rootUrl: String,
    },
};
</script>

<style>
/* Add your styles here */
</style>
