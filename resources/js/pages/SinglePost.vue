<template>
    <div class="container">
       <div v-if="post">
          <h2>{{post.title}}</h2>
          <div v-if="post.tags.length > 0">
            <span v-for="tag in post.tags" :key="tag.id" class="badge bg-warning text-dark mr-1">{{tag.name}}</span>
          </div>
           <div v-if="post.category">
            <hr>
            <h6>Categoria: {{post.category.name}}</h6>
          </div>
          <p>{{post.content}}</p>
       </div>
    </div>
</template>

<script>

export default {
    name: 'SinglePost',
    data() {
        return {
            post: null
        };
    },
    mounted() {
        axios.get('/api/posts/' + this.$route.params.slug)
        .then((response) =>{
             this.post = response.data.results;
        });
        
    }

}
</script>

<style>

</style>