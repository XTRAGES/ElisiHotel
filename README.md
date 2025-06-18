# 🏨 Elisi Hotel Management System

A modern hotel management system built with PHP, MySQL, HTML, CSS, and JavaScript. This project demonstrates a complete hotel booking and management solution with both customer-facing and administrative features.

## 🔒 IMPORTANT NOTICE - INTELLECTUAL PROPERTY PROTECTION

**This codebase has been intentionally modified to protect intellectual property.** Critical business logic components have been strategically removed to prevent unauthorized completion of this project.

**📋 Please read [IP_PROTECTION_NOTICE.md](IP_PROTECTION_NOTICE.md) for complete details on what has been removed and why.**

## ✨ Features

### Customer Features
- **Hotel Showcase**: Beautiful homepage with hotel information and services
- **Room Browsing**: View available rooms with details and pricing
- **Online Booking**: Book rooms with an intuitive booking system
- **User Registration & Login**: Secure user authentication system
- **Responsive Design**: Mobile-friendly interface

### Admin Features
- **Dashboard**: Administrative control panel
- **Room Management**: Add, edit, and delete hotel rooms
- **User Management**: Manage customer accounts
- **Staff Management**: Handle staff information
- **Booking Management**: View and manage reservations

## 🛠️ Technologies Used

- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript
- **Frameworks**: Bootstrap 5
- **Libraries**: jQuery, Owl Carousel, Font Awesome

## 📋 Prerequisites

- PHP 7.4 or higher
- MySQL 5.7+ or MariaDB
- Web server (Apache/Nginx)
- Modern web browser

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/XTRAGES/ElisiHotel.git
   cd ElisiHotel
   ```

2. **Database Setup**
   - Create a new MySQL database
   - Import the `database_sample.sql` file
   - Update database credentials in `config.php`

3. **Configuration**
   - Copy `config.php` and update with your database details:
   ```php
   $host = 'localhost';
   $db = "your_database_name";
   $user = 'your_username';
   $password = 'your_password';
   ```

4. **Web Server Setup**
   - Place files in your web server directory
   - Ensure PHP has write permissions for uploads
   - Access via `http://localhost/ElisiHotel`

## 📁 Project Structure

```
hotel-management-system/
├── css/                 # Stylesheets
├── js/                  # JavaScript files
├── img/                 # Images and media
├── lib/                 # Third-party libraries
├── fonts/               # Font files
├── *.php               # PHP application files
├── *.html              # Static HTML pages
├── config.php          # Database configuration
├── database_sample.sql # Sample database structure
└── README.md           # This file
```

## 🔐 Default Login Credentials

**Admin Account:**
- Username: `admin`
- Password: `admin123`

*Note: Change these credentials after first login*

## 🌟 Key Pages

- **Homepage**: `index.php` - Main hotel showcase
- **Rooms**: `room.php` - Room listings and details
- **Booking**: `booking.html` - Reservation form
- **Login**: `login.html` - User authentication
- **Dashboard**: `dashboard.php` - Admin panel
- **About**: `about.html` - Hotel information
- **Contact**: `contact.html` - Contact form

## 🎨 Customization

### Styling
- Main styles: `css/style.css`
- Bootstrap customization: `css/bootstrap.min.css`
- Responsive design: `css/responsive.css`

### Images
- Replace images in `img/` folder with your hotel photos
- Update image references in HTML/PHP files
- Recommended image sizes:
  - Carousel: 1920x1080px
  - Rooms: 800x600px
  - Gallery: 600x400px

## 🔧 Development

### Adding New Features
1. Create new PHP files for backend logic
2. Add corresponding HTML templates
3. Update navigation menus
4. Test functionality thoroughly

### Database Schema
- `users` - Customer and admin accounts
- `rooms` - Hotel room information
- `bookings` - Reservation records
- `staff` - Employee information

## 🐛 Troubleshooting

**Common Issues:**
- **Database Connection Error**: Check credentials in `config.php`
- **Images Not Loading**: Verify file paths and permissions
- **Login Issues**: Ensure session support is enabled in PHP
- **Styling Problems**: Check CSS file paths and Bootstrap version

## 📝 License
This project is licensed under a Proprietary License.
It is intended for personal use, educational purposes, and portfolio demonstration only.
Commercial use, distribution, modification, or resale is strictly prohibited without explicit written permission from the author.

See the LICENSE file for full details.

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📞 Support

For support and questions:
- Create an issue on GitHub
- Email: aldinzendeli33@gmail.com

## 🙏 Acknowledgments

- XTRAGES
- Font Awesome for icons
  

---

**Note**: This is a sample project for demonstration purposes. For production use, implement additional security measures, input validation, and error handling.
