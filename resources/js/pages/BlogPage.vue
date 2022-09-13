<template>
    <div class="container">
        <h2> I miei post</h2>
        <Posts/>
    </div>
   
</template>

<script>
    import Posts from '../components/Posts.vue';


export default {
    name: 'BlogPage',
    components: {
        Posts
    }
}
</script>