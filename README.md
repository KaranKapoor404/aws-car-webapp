# 🚗 Car Explorer - AWS Deployed Web App

## 📌 Overview
A cloud-deployed web application that allows users to search for cars and view details including images, year, color, and price.

## 🛠️ Tech Stack
- PHP, MySQL
- HTML, CSS
- AWS (EC2, RDS, S3, CloudFront, VPC, IAM)

## ⚙️ Features
- Search cars by brand or model
- Dynamic database query handling
- Responsive modern UI
- Cloud-hosted on AWS EC2

## ☁️ AWS Architecture
| Service | Role |
|--------|------|
| EC2 | Hosts PHP backend / web server |
| RDS | Managed MySQL database |
| S3 | Static asset & image storage |
| CloudFront | CDN for fast content delivery |
| VPC | Secure networking with public/private subnets |
| IAM | Access control and permissions |

## ▶️ Run Locally
1. Install XAMPP
2. Import `database/cars.sql` in phpMyAdmin
3. Start Apache & MySQL
4. Open `http://localhost/aws-car-webapp/index.php`

## ☁️ Deployment (AWS Free Tier)
1. Launch EC2 instance (Amazon Linux, t2.micro)
2. Install Apache, PHP, MariaDB on EC2
3. Clone this repo onto the server
4. Import database and configure connection
5. Access via EC2 public IP

## 📸 Screenshots
*(Add after deployment)*

## 📈 Future Improvements
- Add login system
- Price and brand filters
- Mobile responsive layout