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
                             <router-link class="btn btn-primary" :to="{name : 'single-post', params: {slug: post.slug}}"/>Leggi</router-link>
                        </div>
                    </div>
            </div>
                <!-- end col  -->

            </div>
            
                  <nav aria-label="Page navigation example mt-5">
                <ul class="pagination">
                    <li class="page-item" :class="{'disabled' : currentPaginationPage == 1}">
                          <a class="page-link"  @click="getPosts(currentPaginationPage - 1)" href="#">Previous</a>
                        </li>

                        <li v-for="pageNumber in lastPaginationPage" :key="pageNumber" class="page-item" :class="{'active' : pageNumber == currentPaginationPage}">
                            <a @click="getPosts(pageNumber)" class="page-link" href="#">{{pageNumber}}</a>
                        </li>

                        <li class="page-item" :class="{'disabled' : currentPaginationPage == lastPaginationPage}">
                          <a class="page-link"  @click="getPosts(currentPaginationPage + 1)" href="#">Next</a>
                        </li>
                </ul>
            </nav>
      </div>

    </section>
</template>

<script>

export default {
    name: 'Posts',
    data() {
        return {
            pageTitle: 'I nostri post',
            posts: [],
            currentPaginationPage: 1,
            lastPaginationPage: null
        };
    },
    methods: {
        truncateText(text){
             if(text.length > 75) {
                return text.slice(0,75) + '...';
             }
             return text;
        },
        getPosts(pageNumber) {
                axios.get('http://127.0.0.1:8000/api/posts', {
                    params:{
                        page: pageNumber
                    }
                })
                .then((response) => {
                     this.posts = response.data.results.data;
                     this.currentPaginationPage = response.data.results.current_page;
                     this.lastPaginationPage = response.data.results.last_page;
            });
        }
    },
    mounted() {
         this.getPosts(1);
    }
}
</script>

