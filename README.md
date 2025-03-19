# Laravel Project Setup Guide

---  
## Created By:  
- Franz Fernández

---  

## Prerequisites  

This project is developed using **Laravel Sail**, which is only supported on macOS, Linux, and Windows (via WSL2).  

Before starting, make sure you have the following installed on your machine:  

- **PHP >= 8.x**  
- **Composer**  
- **MySQL or MariaDB or SQL server** (for the database)  
- **Git**  
- **Docker Desktop**  

---  

## 1. Clone the Repository  

Run the following command in your terminal:  

```bash
git clone https://github.com/franzfernandez97/laravel-speedtest.git
cd laravel-speedtest
```  

---  

## 2. Install Dependencies  

Run the following command to install Laravel dependencies:  

```bash
composer install
```  

---  

## 3. Start Docker Engine and Create MySQL or MariaDB Database  

Start **Docker Desktop** and ensure that the Docker engine is running.  

Additionally, create a **MariaDB** or **MySQL** database locally, and preferably, create a user to access the new schema. 

---  

## 4. Configure Environment Variables  

Copy the example configuration file:  

```bash
cp .env.example .env
```  

Then, edit the `.env` file and configure the database:  
Keep in mind that if the database is hosted locally, you should use the IPv4 address shown with the `ipconfig` or `ifconfig` command.  

```env
DB_CONNECTION=sqlserv
DB_HOST=ipv4_sql_server
DB_PORT=port
DB_DATABASE=database_name
DB_USERNAME=username
DB_PASSWORD=password
```  

---  

## 5. Start the Laravel Sail Service  

Start the **Sail** service to execute commands inside the container:  

```bash
cd laravel-speedtest
sail up -d
```  

---  

## 6. Generate the Application Key  

Run the following command to generate a unique key for the application:  

```bash
sail php artisan key:generate
```  

---  

## 7. Run Migrations  

Execute the migrations to create the tables in the database along with their test records:  

```bash
sail php artisan migrate --seed
```  

---  

---  

The application runs by default on **`localhost:80`**  
✅ **With these steps, your development environment will be ready! 🚀**  
