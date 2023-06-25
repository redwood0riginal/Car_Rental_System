CREATE TABLE `rental_company` (
  `rental_company_id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `address` varchar(255),
  `email` varchar(255),
  `phone` varchar(255),
  `password` varchar(255)
);

CREATE TABLE `cars_details` (
  `car_id` INT PRIMARY KEY AUTO_INCREMENT,
  `rental_company_id` INT,
  `category` VARCHAR(255),
  `make` VARCHAR(255),
  `model` VARCHAR(255),
  `year` INT,
  `price` DECIMAL(10, 2),
  `availability_status` VARCHAR(255)
);

CREATE TABLE `users` (
  `user_id` integer PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255),
  `password` varchar(255),
  `name` varchar(255),
  `email` varchar(255),
  `phone` varchar(255),
  `address` varchar(255)
);

CREATE TABLE `bookings` (
  `booking_id` integer PRIMARY KEY AUTO_INCREMENT,
  `user_id` integer,
  `car_id` integer,
  `pickup_date` date,
  `dropoff_date` date,
);

CREATE TABLE `payments` (
  `payment_id` integer PRIMARY KEY AUTO_INCREMENT,
  `booking_id` integer,
  `amount` decimal(10, 2),
  `payment_status` varchar(255),
  `timestamp` timestamp
);

CREATE TABLE `rental_history` (
  `rental_id` integer PRIMARY KEY AUTO_INCREMENT,
  `user_id` integer,
  `car_id` integer,
  `rental_dates` varchar(255),
  `rental_status` varchar(255)
);

CREATE TABLE `reviews` (
  `review_id` integer PRIMARY KEY AUTO_INCREMENT,
  `user_id` integer,
  `rental_company_id` integer,
  `car_id` integer,
  `rating` integer,
  `comments` text,
  `timestamp` timestamp
);


ALTER TABLE `bookings` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `bookings` ADD FOREIGN KEY (`car_id`) REFERENCES `cars_details` (`car_id`);

ALTER TABLE `payments` ADD FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`);

ALTER TABLE `rental_history` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `rental_history` ADD FOREIGN KEY (`car_id`) REFERENCES `cars_details` (`car_id`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`rental_company_id`) REFERENCES `rental_company` (`rental_company_id`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`car_id`) REFERENCES `cars_details` (`car_id`);


-- Inserting Tests

-- Insert into rental_company table
INSERT INTO rental_company (rental_company_id, name, address, email, phone, password)
VALUES (1, 'ABC Rentals', '123 Main St', 'abc@example.com', '123-456-7890', 'password123');

-- Insert into cars_details table
INSERT INTO cars_details (car_id, rental_company_id, category, make, model, year, price, availability_status)
VALUES (1, 1, 'Sedan', 'Toyota', 'Camry', 2022, 50.00, 'Available');

-- Insert into users table
INSERT INTO users (user_id, username, password, name, email, phone, address)
VALUES (1, 'john123', 'pass123', 'John Doe', 'john@example.com', '987-654-3210', '456 Elm St');

-- Insert into bookings table
INSERT INTO bookings (booking_id, user_id, car_id, pickup_date, dropoff_date)
VALUES (1, 1, 1, '2023-06-20', '2023-06-25');

-- Insert into payments table
INSERT INTO payments (payment_id, booking_id, amount, payment_status, timestamp)
VALUES (1, 1, 250.00, 'Paid', NOW());

-- Insert into rental_history table
INSERT INTO rental_history (rental_id, user_id, car_id, rental_dates, rental_status)
VALUES (1, 1, 1, '2023-06-20 to 2023-06-25', 'Completed');

-- Insert into reviews table
INSERT INTO reviews (review_id, user_id, rental_company_id, car_id, rating, comments, timestamp)
VALUES (1, 1, 1, 1, 4, 'Great experience!', NOW());

