<template>
    <div id="app">
        <h1>Hello {{ name }}</h1>

        <div>
            <label for="name">Name: </label>
            <input type="text" id="name" v-model="name" autofocus>
        </div>

        <hr>

        <h2>People</h2>
        <ul>
            <li v-for="person in people" :key="person.id">{{ person.name }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            people: this.$root.people || [],
            name: 'World',
        };
    }
};
</script>
