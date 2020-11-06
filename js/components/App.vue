<template>
  <div id="app">
    <h1>Hello {{ name }}</h1>
    <hr>
    <label for="name">Name: </label>
    <input type="text" id="name" v-model="name" autofocus>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: 'World',
    };
  }
};
</script>
