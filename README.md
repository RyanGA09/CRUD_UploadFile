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
│ │ └── FileController.php
│ ├── /models
│ │ └── FileModel.php
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
