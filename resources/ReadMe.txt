Frontend 	-> Theme (Customize)
AdaminPanel -> Theme (Customize)

Server  : Apache (127.0.0.1 | localhost)
Database: MySQL
	DB Host: localhost
	DB User: root
	DB Pass: 

Development Process
	-> Core PHP
	-> OOP PHP
		-> Laravel

AdminPanel
----------
Hero Section
	- Title
	- Short Description
	- Button (Text/Link)
	- Banner
About Us
	- Title
	- Description
	- Button (Text/Link)
	- Image
Our Service
	- Title
	- Short Desc
	- Button (Text/Link)
	- Image
Our Expertise
	- Title
	- Content (Text Editors - Summernote)
	- Button (Text/Link)
	- Image
Why Choose Us
	- Title
	- Content (Text Editors - Summernote)
	- Button (Text/Link)
	- Image
How it Works
	- Title
	- Content (Text Editors - Summernote)
Testimonials
	- Name
	- Designation
	- Company Name
	- Comments
	- Picture
	- Rating
FAQs
	- Question
	- Answer
	- Image
CTA
	- Title
	- Description
	- Button 1  (Text/Link)
	- Button 2 (Text/Link)

Company Details:
	- Logo
	- Name
	- Address
	- Email
	- Contact No
Social Media Link
	- Facebook
	- Instagram
	- LinkedIn
	- Twitter (X)
	- Youtube
	- Tiktok





DDL
	- CREATE
		
		CREATE DATABASE demo_db;
		
		CREATE TABLE category (
		    cid INT PRIMARY KEY AUTO_INCREMENT,
		    c_name VARCHAR(255) NOT NULL
		);

	- ALTER
	- DROP
DML
	- INSERT
		INSERT INTO `category`(`cid`, `c_name`) VALUES ('value-1','value-2')
	- UPDATE
		UPDATE `category` SET `c_name`='value-1' WHERE `cid`= 1
	- DELECT
		DELETE FROM `category` WHERE `cid`= 1
	- SELECT
		SELECT * FROM `category` WHERE `cid`= 1
		SELECT `cid`, `c_name` FROM `category` WHERE `cid`= 1


UPDATE `category` 
SET `c_name` = 'Keyboard' 
WHERE `category`.`cid` = 5;