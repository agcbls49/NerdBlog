# NerdBlog
A lightweight blog application built with PHP, HTML, CSS (Bootstrap), and MySQL.
- The Home page allows logged-in users to create new posts.
- The NerdBlog page (linked in the navbar) displays all posts. Posts are visible to both logged-in and guest users.
- Authentication required: Only logged-in users can create, edit, or delete posts, and users may only modify their own posts.

## Screenshots


## Technologies Used 
- PHP 8.2.12
- XAMPP Server v3.3.0
- HTML, Bootstrap, CSS

## Setup
1. Clone this repository into your htdocs directory (for XAMPP).
2. Start Apache and MySQL in the XAMPP Control Panel.
3. Open the project in your browser:
> http://localhost/nerdblog
  
## Database Setup
1. Open phpMyAdmin 
> http://localhost/phpmyadmin
2. Create a new database called `nerdblog`.
3. Import the SQL file:
   - Go to the `Import` tab.
   - Select `database/nerdblog.sql`.
   - Click **Go**.
4. Update `database.php` with your database credentials if needed:
>  $db_server = "localhost";  
    $db_user = "root";  
    $db_password = "";  
    $db_name = "nerdblog";  

## Development Setup
- Recommended editor: VSCode
- Extensions: PHP Server, Live Server, PHP Intelephense
- Browser: Chrome with Live Server Extension

## Enabling Live Reload
Install the Live Server extension in Chrome.

Configure two addresses:

Actual server address: http://localhost/nerdblog/

Live server address: http://127.0.0.1:5500/

Click Apply. Your browser will now auto-reload whenever PHP files are updated.