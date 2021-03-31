window.Echo.channel('laravel_database_post-create')
        .listen('PostCreated', (e)=>{
            console.log(e);
            console.log(e.post)
        });
