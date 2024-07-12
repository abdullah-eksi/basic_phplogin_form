### Simple PHP Login Application

This project is a basic PHP login application demonstrating user registration, login, and session management. It includes features such as secure password handling and session control. The project structure and functionality are briefly explained below.

### Project Structure

1. **`baglan.php`**: This file is responsible for establishing a connection to the MySQL database using PDO. It ensures that the application can interact with the database securely.

2. **`index.php`**: This file checks if a user session is active. If the user is logged in, it redirects them to the admin dashboard. If not, it redirects to the login page.

3. **`islem.php`**: This script handles the main operations such as:
   - User registration: Validates input, checks for existing users, and stores new user data.
   - User login: Verifies user credentials and starts a session.
   - User logout: Destroys the session and redirects to the login page.

4. **`login.php`**: This is the login page where users can enter their credentials to log in. It includes form handling to capture username and password, and displays appropriate messages based on login status.

5. **`kayit.php`**: This is the registration page where new users can create an account. It includes form handling for username and password, and displays messages based on the registration status.

6. **`admin/index.php`**: This is the admin dashboard that is accessible only to logged-in users. It welcomes the user and provides an option to log out.

### Key Features

- **Secure Database Connection**: Uses PDO for secure and efficient database interactions.
- **User Registration**: Validates user input, checks for existing usernames, and ensures password strength.
- **User Login**: Verifies user credentials and manages user sessions.
- **Session Management**: Controls access to the admin dashboard and manages user sessions for login/logout.

### Usage

1. **Database Setup**:
   - Create a MySQL database named `login`.
   - Create a table named `user` with columns `id` (INT, AUTO_INCREMENT, PRIMARY KEY), `username` (VARCHAR), and `userpassword` (VARCHAR).

2. **Configuration**:
   - Update database credentials in `baglan.php`.

3. **Running the Application**:
   - Open `login.php` to access the login page.
   - Open `kayit.php` to create a new user account.
   - Upon successful login, users will be redirected to `admin/index.php`.

### Notes

- Ensure that your server supports PHP and has the necessary extensions for PDO.
- For better security, consider using password hashing functions like `password_hash()` for storing passwords.

This project serves as a foundational example of user authentication in PHP applications. You can extend its functionality and security based on your needs.
