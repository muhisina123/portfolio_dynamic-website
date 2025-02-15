# Dynamic Portfolio & Service Booking Website

This is a **portfolio website** that showcases my **skills, education, and services** while allowing users to book an appointment for my services.

## 🚀 Features

✅ **Portfolio Display** – Showcases skills, education, and offered services.  
✅ **User Authentication** – Users can **register, log in, and log out** securely.  
✅ **Service Booking System** – Users can book an appointment for a service.  
✅ **User Profile Management** – Users can **add, update, delete, or edit** their profile information.  
✅ **Appointment Management** – Users can **view, modify, or cancel** their appointments.  
✅ **Admin View** – The owner can see **basic user info** and **appointment details**, including the **date and time** of bookings.  

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3 (Bootstrap), JavaScript  
- **Backend**: PHP (Sessions for authentication)  
- **Database**: MySQL (Stores user data, appointments, and service details)  
  

## 📸 Screenshots

### cv Page
![Home Page](screenshots/homepage.png)

### sign up  form 
![Booking Page](https://github.com/muhisina123/portfolio_dynamic-website/blob/main/localhost_dynamic-website_form.php.png)

### log in form 
![Booking Page](https://github.com/muhisina123/portfolio_dynamic-website/blob/main/localhost_dynamic-website_login.php.png)

### User Profile
![User Profile](https://github.com/muhisina123/portfolio_dynamic-website/blob/main/localhost_dynamic-website_account.php.png)


## 📂 Installation Guide

1. Clone the repository:
   ```bash
   git clone https://github.com/muhisina123/portfolio-booking.git
   ```
2. Import the database (`reservation.sql`) into MySQL:
   ```bash
   mysql -u root -p database_name < visitors_structure.sql
   ```
3. Update the database credentials in `config.php`:
   ```php
   $db_host = 'localhost';
   $db_user = 'root';
   $db_pass = ''; // Your password
   $db_name = 'database_name';
   ```
4. Start a local server (XAMPP, WAMP, or MAMP) and place files in `htdocs`.
5. Open `http://localhost/portfolio-booking` in your browser.
