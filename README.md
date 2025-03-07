# NebulaNest - Real Estate Platform

A web-based real estate platform that connects property buyers and sellers, featuring separate interfaces for buyers, sellers, and administrators.

## Features

- Multi-user system (Admin/Buyer/Seller)
- Property listing management
- Interactive property cards with flip animation
- Image upload system
- Responsive design
- Secure authentication

## Tech Stack

- PHP
- MySQL
- HTML/CSS
- JavaScript/jQuery
- Bootstrap
- Font Awesome

## Project Structure
```
nebulanest/
├── css/                  # Stylesheet files
├── fonts/               # Font assets
├── images/              # Website images
├── img/                 # Property images
├── js/                  # JavaScript files
├── User Management
│   ├── admin_dashboard.php
│   ├── admin_login.php
│   ├── buyer_dashboard.php
│   ├── buyer_login.php
│   ├── seller_dashboard.php
│   └── seller_login.php
├── Registration
│   ├── buyer_register.php
│   ├── seller_register.php
│   └── adminform.php
├── Database Setup
│   ├── create_admin_user.php
│   ├── create_buyer.php
│   ├── create_cards.php
│   └── create_users_table.php
├── Styles
│   ├── style_buyer.css
│   ├── style_seller.css
│   ├── style_index.css
│   └── style_register.css
├── Property Management
│   ├── insert_card.php
│   ├── insert_card_admin.php
│   ├── delete_card.php
│   └── deleteform.php
├── index.php            # Main landing page
├── index_choose.php     # User type selection
├── db.php              # Database configuration
└── logout.php          # Session management
```

## Installation Steps

1. Clone or download the repository to your web server directory:
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

3. Create required directories with proper permissions:
```bash
mkdir img
chmod 777 img
```

4. Set up database tables by accessing these URLs in order:
```
http://localhost/nebulanest/create_admin_user.php
http://localhost/nebulanest/create_buyer.php
http://localhost/nebulanest/create_cards.php
http://localhost/nebulanest/create_users_table.php
```

5. Access the application:
```
http://localhost/nebulanest/index.php
```

## Default Admin Credentials
- Username: admin
- Password: admin

## Usage

1. **For Buyers:**
   - Click "REGISTER" on homepage
   - Select "BUYER"
   - Complete registration
   - Login to view properties

2. **For Sellers:**
   - Click "REGISTER" on homepage
   - Select "SELLER"
   - Complete registration
   - Login to manage listings

3. **For Administrators:**
   - Use admin login
   - Manage all listings and users
   - Add/edit/delete properties

## File Requirements

- Property Images: Upload to `/img` directory
- Maximum file size: 2MB
- Supported formats: JPG, PNG
- Image dimensions: Minimum 800x600px

## Troubleshooting

1. **Database Connection Issues**
   - Verify credentials in db.php
   - Check MySQL service status

2. **Image Upload Problems**
   - Check /img directory permissions
   - Verify file size and format

3. **Login Issues**
   - Clear browser cache
   - Check database connection
   - Verify correct credentials

## Support

For support, contact [shravanthsai1825@gmail.com]
