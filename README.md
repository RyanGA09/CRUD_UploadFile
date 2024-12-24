# CRUD - Upload File

A simple web application built using PHP with the MVC architecture to manage file uploads. This application allows users to upload, view, and delete files efficiently.

## Features

- Upload files with custom names.
- View a list of uploaded files.
- Download files directly.
- Delete files from the server.
- Follows the MVC (Model-View-Controller) design pattern.

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
│ │ │ └── main.js
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
   git clone https://github.com/yourusername/CRUD_UploadFile.git
   ```

2. Navigate to the project directory:

   ```bash
   cd CRUD_UploadFile
   ```

3. Set up the database:

   - Create a MySQL database named `file_upload_mvc`
   - Import the `file_upload_mvc.sql` file in the repository.

4. Update database credentials in `/app/core/Database.php`:

   ```php
   private $host = "localhost";
   private $dbname = "file_upload_mvc";
   private $username = "root";
   private $password = "";
   ```

5. Run the project on a local server (e.g., XAMPP, WAMP):
   - Place the project in the `htdocs` folder (for XAMPP) or equivalent.
   - Access the project at `http://localhost/CRUD_UploadFile/public/index.php`.

## Usage

- Home Page: View all uploaded files.
- Upload Page: Add new files to the server.
- Delete: Remove files permanently.

## License

&copy; 2024 Ryan Gading Abdullah. All rights reserved.

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
