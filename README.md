#ShopMart – Laravel E-commerce
A simple Laravel-based e-commerce application

Current Features:

User registration and login pages

Welcome page with app name and subtitle

Dark themed UI with text animations

Dashboard displaying products with:

Name, description, category, price, and image

“Add to Cart” functionality 

SQLite database integration

Work In Progress:
Category-wise grouped products 

Cart view page

Checkout and payment integration

Admin panel for adding products

Advanced responsive styling


git clone https://github.com/Shravyabk/E-com.git
cd shopmart
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
