<template>
  <v-card>
    <v-card-title style="background-color: #b2dfdb">Home</v-card-title>
    <v-card-text>
      <p>some transcations & logics here....</p>
    </v-card-text>
    <v-btn @click="ran">Click Meh</v-btn>
  </v-card>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    ran() {
      console.log("meh");
    },
  },
};
</script>
