# PHP Form with Database

This project aims to create a website with user registration and login functionalities using PHP and a MySQL database. It includes a registration form, a login system, and associated pages to provide a comprehensive user experience. The site comprises a home page, a login page, a sign-up page, and a welcome page, all navigable using a navigation bar.

## Features

- **User Registration:** Users can sign up by filling out a form with their first name, last name, email address, and password.
- **User Login:** Registered users can log in using their email address and password.
- **Welcome Page:** After logging in or signing up, users are directed to a personalized welcome page.

## Technologies Used

- **PHP:** Used for server-side logic.
- **MySQL:** Used as a database to store user information.
- **HTML/CSS:** Used for website structure and presentation.
- **WAMP/XAMPP/MAMP:** Used as local development platforms to run the webserver, MySQL, and PHP.

## Usage

### Installation

To run this code, follow these steps:

1. **Install WAMP, XAMPP, MAMP:** Download and install one of these local development platforms. They provide an environment with a web server (Apache), a MySQL database, and PHP.

2. **Launch PHPMyAdmin:** Once WAMP, XAMPP, or MAMP is installed, start the server and open PHPMyAdmin from the control panel.

3. **Importing the Database:**
   - Go to PHPMyAdmin and select the "Import" option.
   - Choose the SQL file provided with the code located in the "Database Code/tutosql.sql" folder and import it into PHPMyAdmin. This file contains the structure and data for the database.

### Running the Code

- Ensure your local server (WAMP, XAMPP, or MAMP) is active.
- Place the PHP code in the appropriate folder of the local webserver (e.g., htdocs for XAMPP).
- Open your browser and access the site using the URL provided by your local server (e.g., http://localhost/myproject).

## Project Structure

The project is organized with the following structure:

- **home.php:** Website homepage.
- **login.php:** Login page for registered users.
- **nav.php:** File containing the navigation menu structure.
- **signup.php:** Registration page for new users.
- **treatment.php:** File handling data sent from the forms.
- **welcome.php:** Welcome page for logged-in users.
- **Database Code:** Folder containing the SQL file for the database.

This structure organizes the different parts of the project, each fulfilling a specific role in the overall functioning of the website.

## Author 👨‍💻

This project was created by me. Feel free to reach out for any inquiries or collaboration opportunities.
