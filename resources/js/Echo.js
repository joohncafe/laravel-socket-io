import Vue from 'vue';

import Bus from './bus'


window.Echo.channel('laravel_database_post-create')
        .listen('PostCreated', (e)=>{
            Bus.$emit('post.created' , e.post)
            Vue.$vToastify.success(`Titulo: ${e.post.title}`, 'New post.');
        });
