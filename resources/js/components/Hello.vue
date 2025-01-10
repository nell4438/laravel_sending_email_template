<template>
  <v-card>
    <v-card-title style="background-color: #ffcc80">Hello</v-card-title>
    <v-card-text>
      <p>some transcations & logics here....</p>
      <v-btn @click="send">button</v-btn>
    </v-card-text>
  </v-card>
</template>

<script>
export default {
  
  data() {
    return {};
  },
  methods: {
    send: function () {
      axios.get(`api/send_email`).then((res) => {
        console.log(res.data);
      });
    },
  },
};
</script>
