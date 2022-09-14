<template>
    <div class="container">
        <h2>ciao sono un single post</h2>
        {{$route.params.slug}}
    </div>
</template>

<script>
import Axios from 'axios';

export default {
    name: 'SinglePost',
    mounted() {
        axios.get('/api/posts/' + this.$route.params.slug)
        .then((response) =>{
             console.log("",response);
        });
        
    }

}
</script>

<style>

</style>