import Vue from 'vue';
window.Echo.channel('laravel_database_post-create')
        .listen('PostCreated', (e)=>{
            Vue.$vToastify.success(`Titulo: ${e.post.title}`, 'New post.');
        });
