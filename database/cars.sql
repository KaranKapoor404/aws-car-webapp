CREATE TABLE cars (
  id INT AUTO_INCREMENT PRIMARY KEY,
  make VARCHAR(50),
  model VARCHAR(50),
  year INT,
  color VARCHAR(50),
  price DECIMAL(10,2),
  image_url VARCHAR(255)
);

INSERT INTO cars (make, model, year, color, price, image_url) VALUES
('Toyota', 'Camry', 2021, 'Silver', 25000, 'https://upload.wikimedia.org/wikipedia/commons/5/5e/Toyota_Camry.jpg'),
('Honda', 'Civic', 2020, 'Red', 22000, 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Honda_Civic.jpg'),
('Ford', 'Mustang', 2019, 'Black', 35000, 'https://upload.wikimedia.org/wikipedia/commons/1/1e/Ford_Mustang.jpg');