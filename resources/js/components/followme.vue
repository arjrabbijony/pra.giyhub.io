<template>
    <div>
        <button @click="followUser" class="btn btn outline-success">Follow</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
          methods: {
          followUser()
          }
        }
    }
</script>
