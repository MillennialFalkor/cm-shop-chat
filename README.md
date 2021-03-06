# cm-shop-chat
Code Challenge! Chat page where a Creative Market shop can talk directly to their customers, in order to answer common questions about products.  

## Environment Installation
This project is built using Laravel's Homestead Vagrant box dev environment. Homestead documentation can be found [here](https://laravel.com/docs/5.6/homestead).

For portability, rather than using the global Homestead installation this project was created using the [Per Project Installation](https://laravel.com/docs/5.6/homestead#per-project-installation). Side note - had to specify the Homestead package version when requiring via Composer.

### Dependency Installation
Dependencies installed included:  

- [VirtualBox](https://www.virtualbox.org/wiki/Downloads)  
- [Vagrant](https://www.vagrantup.com/downloads.html)  
- [Node.js](https://nodejs.org/en/download/)  
- [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)
- [Composer](https://getcomposer.org/download/)
- [Homestead Vagrant Box](https://laravel.com/docs/5.6/homestead#first-steps)

### Generate Keypair
You'll need to create an SSH keypair to boot Vagrant.

1. Run `ssh-keygen -t rsa -C "dev@shopchat.cm"` and name the file `shopchat`.
2. Move the resulting files into your user's `.ssh` directory:  `mv shopchat shopchat.pub ~/.ssh/`

### Configure a Homestead.yaml File
This file isn't tracked since it contains environment-specific variables. Duplicate and save the included `Homestead.yaml.sample` file as `Homestead.yaml` and update paths as needed, for example:  

- folders:
	- map: `/path/to/your/project/root`

### Configure a .env File
Within the `shopchat` app directory, find the `.env.example` file. Duplicate, save as `.env`, and set the `DB_DATABASE` to be `shopchat`.

### Set Up Host
Add an `/etc/hosts` file entry for `shopchat.cm`:  
`192.168.10.10  shopchat.cm`

### Install Dependencies With Composer
From the repo root directory, run `composer install`. Then `cd shopchat` and run `composer install` there.

### Boot Vagrant Box
From the project root, run the `vagrant up --provision` command.

### Run Migrations
From the repo root, SSH in by typing `vagrant ssh`. Then change directories from there to get into the `shopchat` directory (follow the path in the Homestead.yaml file to get there). Bring your environment up to speed with database updates and sample data by running `php artisan migrate`.

### Generate an Application Key
While still connected via SSH, create an application key. Since you created your `.env` file using the `.env.example` file as a starting point, a key won't yet have been set. From the `shopchat` directory run `php artisan key:generate`.

### Access Project Via Browser
Access your project at [http://shopchat.cm](http://shopchat.cm).

## Project Scope

### Project Overview
Mock product page where users and shop owners can post questions/answers. 

### Project Work Outline
1. Planning
	- Define basic functionality
	- Roughly wireframe layout
	- Outline database schema
	- Define templates
	- Define front-end dependencies
	- Update documentation
2. Environment Build
	- Install Homestead and dependencies
	- Configure per-project install of Homestead
	- Update documentation with instructions for running project
3. Development
	- Create basic template structure
	- Make migrations, build models with corresponding tables
	- Create routes for AJAX and CRUD requests
	- Build controllers for page requests and updating views
	- Create sample data and corresponding migrations
4. Testing & Delivery
	- Test project locally
	- Test environment build and project on additional dev machine
	- Tweak build and documentation as needed for compatibility
	- Deliver to CM

### Models
- User
- UserAttribute
- Product
- Message

### Templates
- Master
- Header
- Footer
- Alert Messages
- Success Messages
- Home Page
- Product Page
- Product List
- Product List Single
- Message List Panel
- Message List Index
- Message List Single
- Message List Post

### Front-End Dependencies
- Google Fonts
- Bootstrap
- jQuery
- jQuery UI

### Database Schema
- messages
	- id
	- user_id
	- product_id
	- content
	- created_at
	- updated_at
- migrations (system table)
	- id
	- migration
	- batch
- password_resets (not important for this exercise)
	- email
	- token
	- created_at
- products
	- id
	- user_id
	- key
	- title
	- description
	- image
	- created_at
	- updated_at
- user_attributes
	- id
	- user_id
	- attr_name
	- attr_value
	- created_at
	- updated_at
- users
	- id
	- username
	- name
	- email
	- password
	- remember_token
	- created_at
	- updated_at

### User Attributes Table
Specifically requested: "When a new comment is posted, write to a supporting table that increments the number of comments made by each unique username. We'll use this data to track how many comments a given username made."

As requested, when a user makes a comment, a record of their total number of comments is updated in a supporting table. This data is stored in rows in the  `user_attributes` table, where the `attr_name` is `messages_count`.


## Dev Notes

### Compiling Assets
CSS is compiled via SASS - details [here](https://laravel.com/docs/5.6/mix#sass).
