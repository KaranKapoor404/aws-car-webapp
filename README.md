# 🚗 Car Explorer - AWS Deployed Web App

## 📌 Overview
A cloud-deployed web application that allows users to search for cars and view details including images, year, color, and price.

## 🌐 Live Demo
http://13.201.41.174

## 🛠️ Tech Stack
- PHP, MySQL
- HTML, CSS
- AWS (EC2, VPC, IAM, Security Groups)

## ⚙️ Features
- Search cars by brand or model
- Dynamic database query handling
- Responsive modern UI
- Live cloud-hosted on AWS EC2

## ☁️ AWS Architecture
| Service | Role |
|--------|------|
| EC2 (t3.micro) | Hosts Apache + PHP backend |
| MariaDB | MySQL database on server |
| VPC | Secure networking |
| Security Groups | HTTP + SSH access control |

## ▶️ Run Locally
1. Install XAMPP
2. Import `database/cars.sql` in phpMyAdmin
3. Start Apache and MySQL
4. Open `http://localhost/aws-car-webapp/index.php`

## ☁️ Deployment
- Launched EC2 instance on AWS (Amazon Linux 2023)
- Installed Apache, PHP, MariaDB on server
- Cloned repo and imported database
- Configured security groups for public HTTP access

## 📈 Future Improvements
- Add login system
- Price and brand filters
- HTTPS with SSL certificate