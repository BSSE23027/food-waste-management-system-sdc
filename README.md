# Food Waste Management System

## Overview

The Food Waste Management System is a web-based platform designed to connect food donors with organizations in need. The system collects excess or leftover food from restaurants, hotels, marriage halls, and other food-producing entities, and distributes it to needy individuals and organizations. This initiative helps reduce food waste while supporting those in need.

## Tech Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Web Server:** XAMPP Server
- **Database:** MySQL

## System Modules

The system consists of three main modules:

### User Module

The User module enables individuals and organizations to donate excess food. Key features include:

- Registration and secure login
- Food donation submission with type and quantity details
- Automatic matching with nearby recipients
- Donation history and tracking
- Direct communication with the Admin module for request processing

### Admin Module

The Admin module manages the overall food distribution process for registered NGOs, charities, and trusts. Responsibilities include:

- Receiving and listing all food donations
- Matching donations with organization requests
- Managing pickup and delivery requests
- Tracking donation status and organization assignments
- Coordinating with the Delivery module for logistics

### Delivery Module

The Delivery module facilitates pickup and drop-off services. Features include:

- Delivery personnel registration and management
- Assigned pickup locations and drop-off destinations
- Real-time tracking of donation deliveries
- Service management for NGOs and charitable organizations

## Key Features

- **Responsive Design:** Fully optimized for mobile and desktop screens
- **Chatbot Support:** Intelligent chatbot assistance for user queries
- **Secure Authentication:** Hash-based password encryption for user security

## Installation Instructions

1. Download the project repository
2. Extract the downloaded file
3. Copy the folder to your web server root directory:
   - XAMPP: `xampp/htdocs`
   - WAMP: `wamp/www`
   - LAMP: `/var/www/html`
4. Open PHPMyAdmin at `http://localhost/phpmyadmin`
5. Create a new database
6. Import the `demo.sql` file located in the `database` folder
7. Access the application at `http://localhost/folderName`

## Demo

View the live demo: [Food Donate Demo](https://kishor-23.github.io/food-donate/index.html)
