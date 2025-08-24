# NerdBlog
A lightweight blog application built with PHP, HTML, CSS (Bootstrap), and MySQL.
- The Home page allows logged-in users to create new posts.
- The NerdBlog page (linked in the navbar) displays all posts. Posts are visible to both logged-in and guest users.
- Authentication required: Only logged-in users can create, edit, or delete posts, and users may only modify their own posts.

## Screenshots
<img width="1909" height="909" alt="Image" src="https://github.com/user-attachments/assets/3544ab25-cf2b-439c-aa8c-e7eb0ad61b1d" />
<img width="1899" height="692" alt="Image" src="https://github.com/user-attachments/assets/0fcea6e9-7694-422b-a05b-d567332c1ea9" />
<img width="1903" height="437" alt="Image" src="https://github.com/user-attachments/assets/d72c777a-d822-4de1-a1c7-8ff113016ca6" />
<img width="1904" height="762" alt="Image" src="https://github.com/user-attachments/assets/20d3f89c-38ce-422c-b213-9b72aec9ad43" />
<img width="1898" height="830" alt="Image" src="https://github.com/user-attachments/assets/69e3f7c3-40e8-4373-9b4b-993ad35910f2" />
<img width="874" height="637" alt="Image" src="https://github.com/user-attachments/assets/e26ae2c2-2724-472b-b845-8090d81dc3b8" />
<img width="1318" height="642" alt="Image" src="https://github.com/user-attachments/assets/d3f31016-1d32-4f6b-8e6c-4be433737565" />

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
