<template>
    <section>
       <div class="container">
            <h1 class="mt-5">I nostri Post</h1>

            <div class="row row-cols-3">

                <!-- start col  -->
                <div v-for="post in posts" :key="post.id" class="col">
                    <div class="card mt-3"  >
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <p class="card-text">{{ truncateText(post.content)}}</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
            </div>
                <!-- end col  -->

            </div>
      </div>
    </section>
</template>

<script>

export default {
    name: 'Posts',
    data() {
        return {
            posts: []
        };
    },
    methods: {
        truncateText(text){
             if(text.length > 75) {
                return text.slice(0,75) + '...';
             }
             return text;
        }
    },
    mounted() {
        axios.get('http://127.0.0.1:8000/api/posts')
        .then((response) => {
            this.posts = response.data.results;
        });
    }
}
</script>

