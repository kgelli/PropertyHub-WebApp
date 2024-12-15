# NebulaNest - Real Estate Platform

A web-based real estate platform that connects property buyers and sellers, featuring separate interfaces for buyers, sellers, and administrators.

## Features

- User role-based system (Admin/Buyer/Seller)
- Property listing management
- Interactive property cards with flip animation
- Image upload for properties
- Responsive design
- Secure authentication system

## Tech Stack

- PHP
- MySQL
- HTML/CSS
- JavaScript
- Bootstrap
- jQuery

## Prerequisites

- PHP 7.0 or higher
- MySQL Server
- Apache/Nginx web server
- Web browser (Chrome/Firefox/Safari)

## Installation Steps

1. Clone the repository to your web server directory:
```bash
git clone [repository-url]
cd nebulanest
```

2. Configure database connection in `db.php`:
```php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
```

3. Create database tables by accessing these URLs in order:
```
http://localhost/nebulanest/create_admin_user.php
http://localhost/nebulanest/create_buyer.php
http://localhost/nebulanest/create_cards.php
http://localhost/nebulanest/create_users_table.php
```

4. Set proper permissions for the image upload directory:
```bash
chmod 777 img/
```

5. Access the application:
```
http://localhost/nebulanest/index.php
```

## Default Admin Credentials
- Username: admin
- Password: admin
- Email: admin@nebulanest.com

## Usage

1. **As a Buyer:**
   - Register using the "REGISTER" button
   - Choose "BUYER" option
   - Login and browse properties

2. **As a Seller:**
   - Register using the "REGISTER" button
   - Choose "SELLER" option
   - Login to list properties

3. **As an Admin:**
   - Use default admin credentials
   - Access admin dashboard to manage listings

## Project Structure
```
nebulanest/
├── admin_dashboard.php    # Admin control panel
├── buyer_dashboard.php    # Buyer interface
├── seller_dashboard.php   # Seller interface
├── index.php             # Landing page
├── db.php                # Database configuration
├── img/                  # Property images
└── css/                  # Stylesheets
```

## Common Issues & Solutions

1. **Database Connection Failed**
   - Verify database credentials in db.php
   - Ensure MySQL service is running

2. **Image Upload Issues**
   - Check img/ directory permissions
   - Verify PHP file upload settings

3. **Login Issues**
   - Clear browser cache
   - Verify correct credentials
   - Check database connection

## Support

For support, please contact [shravanthsai1825@gmail.com]
