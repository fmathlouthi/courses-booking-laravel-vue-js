# Laravel + Vue.js







- - - - -


## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Also add to __.env__ file the variable __SANCTUM_STATEFUL_DOMAINS=myproject.test__ - change "myproject.test" to your domain. __IMPORTANT__: domain should be with port but without https/https prefix. For example, "127.0.0.1:8000" is valid, but "http://project.test" is not valid.
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- Run __npm install__ 
- Run __npm run dev__ 
- That's it: launch the main URL. 
- You can login to adminpanel by going go `/login` URL and login with credentials __admin@admin.com__ - __password__

