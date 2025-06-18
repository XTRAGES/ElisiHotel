# 🚀 Installation Guide - Elisi Hotel Management System

## Prerequisites

Before installing, make sure you have:
- **PHP 7.4+** with MySQL extension
- **MySQL 5.7+** or **MariaDB**
- **Web Server** (Apache, Nginx, or XAMPP/WAMP for local development)
- **Modern Web Browser**

## Step-by-Step Installation

### 1. Download/Clone the Project
```bash
git clone https://github.com/yourusername/hotel-management-system.git
cd hotel-management-system
```

### 2. Database Setup

#### Option A: Using phpMyAdmin
1. Open phpMyAdmin in your browser
2. Create a new database (e.g., `hotel_management`)
3. Import the `database_sample.sql` file
4. Note your database credentials

#### Option B: Using MySQL Command Line
```bash
mysql -u root -p
CREATE DATABASE hotel_management;
USE hotel_management;
SOURCE database_sample.sql;
EXIT;
```

### 3. Configure Database Connection

1. Copy the example configuration file:
   ```bash
   cp config.example.php config.php
   ```

2. Edit `config.php` with your database details:
   ```php
   $host = 'localhost';           // Your database host
   $db = "hotel_management";      // Your database name  
   $user = 'your_username';       // Your database username
   $password = 'your_password';   // Your database password
   ```

### 4. Web Server Setup

#### For XAMPP/WAMP (Local Development)
1. Copy project folder to `htdocs` (XAMPP) or `www` (WAMP)
2. Start Apache and MySQL services
3. Access: `http://localhost/hotel-management-system`

#### For Production Server
1. Upload files to your web server's public directory
2. Ensure PHP has proper permissions
3. Configure virtual host if needed

### 5. Test Installation

1. Open your browser and navigate to the project URL
2. You should see the hotel homepage
3. Test login with default credentials:
   - **Username**: `admin`
   - **Password**: `admin123`

## Default Accounts

The sample database includes:

**Admin Account:**
- Username: `admin`
- Email: `admin@hotel.com`
- Password: `admin123`

**Sample Customer:**
- Username: `johndoe`
- Email: `john@example.com`
- Password: `password`

> ⚠️ **Important**: Change these passwords after installation!

## Troubleshooting

### Common Issues

**1. Database Connection Error**
- Check database credentials in `config.php`
- Ensure MySQL service is running
- Verify database exists and user has permissions

**2. Page Not Loading**
- Check web server is running
- Verify file permissions (755 for directories, 644 for files)
- Check PHP error logs

**3. Images Not Displaying**
- Verify image file paths
- Check file permissions
- Ensure images exist in `img/` folder

**4. Login Not Working**
- Check database connection
- Verify user table has sample data
- Enable PHP sessions

### File Permissions (Linux/Mac)
```bash
chmod -R 755 /path/to/project
chmod -R 644 /path/to/project/*.php
chmod -R 644 /path/to/project/*.html
```

## Next Steps

After successful installation:

1. **Change Default Passwords**
2. **Update Hotel Information** in HTML files
3. **Replace Sample Images** with your hotel photos
4. **Customize Styling** in `css/style.css`
5. **Test All Features** thoroughly

## Security Recommendations

For production use:
- Use strong database passwords
- Enable HTTPS
- Implement input validation
- Add CSRF protection
- Regular security updates
- Backup database regularly

## Support

If you encounter issues:
1. Check this installation guide
2. Review error logs
3. Create an issue on GitHub
4. Contact support

---

**Happy Coding! 🎉**
