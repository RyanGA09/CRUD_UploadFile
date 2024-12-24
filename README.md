# CRUD - File Upload Manager

A lightweight web application for managing file uploads, built using PHP with the MVC architecture. It enables users to upload, view, download, and delete files while maintaining a clean separation of concerns using the MVC design pattern.

## Features

- Upload files with descriptive names.
- View a list of uploaded files in a tabular format.
- Download files with a single click.
- Delete files securely from the server.
- Implements MVC (Model-View-Controller) architecture for better maintainability.

## Tech Stack

- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Database:** MySQL
- **Architecture:** MVC

## Folder Structure

```markdown
/project-root
├── /app
│ ├── /controllers
│ │ └── Controller.php
│ ├── /models
│ │ └── Model.php
│ ├── /views
│ │ ├── /files
│ │ │ ├── index.php
│ │ │ ├── add.php
│ │ │ ├── view.php
│ │ │ └── delete.php
│ └── /core
│ ├── Database.php
├── /public
│ ├── /assets
│ │ ├── /css
│ │ │ └── styles.css
│ │ ├── /js
│ │ │ └── scripts.js
│ ├── /uploads
│ │ └── (uploaded files will go here)
│ └── index.php
├── .htaccess
├── database.sql
├── LICENSE
└── README.md
```

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/RyanGA09/CRUD_UploadFile.git
   ```

2. Navigate to the project directory:

   ```bash
   cd CRUD_UploadFile
   ```

3. Set up the database:

   - Create a MySQL database named `file_upload_mvc`
   - Import the `file_upload_mvc.sql` file from the repository into your database using a tool like phpMyAdmin or the MySQL command line:

   ```sql
   mysql -u root -p file_upload_mvc < file_upload_mvc.sql
   ```

4. Update database credentials in `/app/core/Database.php`:

   ```php
   private $host = "localhost";
   private $dbname = "file_upload_mvc";
   private $username = "root";
   private $password = "";
   ```

5. Set up the server and run the project on a local server (e.g., XAMPP, WAMP):

   - Place the project in the `htdocs` folder (for XAMPP) or equivalent.
   - Access the project at `http://localhost/CRUD_UploadFile/public/index.php`.

6. Ensure `.htaccess` is properly configured if needed (optional).

## Usage

- Home Page: View all uploaded files in a list with options to download or delete.
- Upload Page: Add new files by providing a name and selecting a file to upload.
- Delete: Remove files securely with confirmation.

## Contribution

Feel free to contribute to this project by submitting issues or pull requests.

## License

&copy; 2024 Ryan Gading Abdullah. All rights reserved.

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
