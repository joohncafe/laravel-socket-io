<template>
        <div>
            <h1 class="text-center text-3x1 uppercase font-black py-8">Posts</h1>

            <div class="bg-white w-full p-4 my-4 rounded-xl shadow border"
             v-for="(post, index) in posts.data" :key="index">
                {{post.title}}
            </div>

        </div>
</template>

<script>
import axios from 'axios'
import Bus from '../../bus'


export default {

    mounted() {
        this.loadPosts()
        Bus.$on('post.created', post => {
            this.posts.data.unshift(post)
        });
    },

    data(){
        return {
            posts: {
                data: []
            }
        }
    },

    methods: {
        loadPosts(){
            axios.get('/api/posts').then(response => {
                this.posts = response.data
            }).catch(response => {
                this.$vToastify.error('Falha ao carregar os posts', 'error')
            })
        }
    },

}
</script>


