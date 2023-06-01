
# IBP-Project

## Description
this is an IBP project Homework

## Requirements
- MySQL
- XAMPP

## Preparation
- Have default login credentials
- Create a table 


CREATE TABLE `Students` (
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) PRIMARY KEY NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
)

- Activate your apache server
- Move .php files to your 'htdocs' according to xampp installation
- Access the page using localhost/registration.php