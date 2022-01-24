Steps followed :

- Install laravel
- Setup docker
- Setup tailwind
    `docker run --rm npm install -D tailwindcss postcss autoprefixer`
    `docker run --rm npx tailwindcss init`
- Add default views and blade components    
- Install and setup livewire
    `docker-compose run --rm composer require livewire/livewire`
- Install alpine and setup mix
    `docker run --rm npm install alpinejs`
- Install and setup wire-elements/modal
    `docker-compose run --rm composer require wire-elements/modal`
- Add a CartButton livewire component
    `docker-compose run --rm artisan make:livewire CartButton`
- Add a AddToCart modal component
    `docker-compose run --rm artisan make:livewire AddToCart`
