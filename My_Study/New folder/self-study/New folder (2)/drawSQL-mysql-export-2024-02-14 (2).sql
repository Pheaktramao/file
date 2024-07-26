CREATE TABLE `Foods`(
    `Food_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Foodname` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `price` VARCHAR(255) NOT NULL,
    `category_id` INT NOT NULL
);
ALTER TABLE
    `Foods` ADD INDEX `foods_category_id_index`(`category_id`);
CREATE TABLE `OrderDetails`(
    `orderDetail_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT NOT NULL,
    `Food_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `checkorder` VARCHAR(255) NOT NULL,
    `total_price` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `OrderDetails` ADD INDEX `orderdetails_order_id_index`(`order_id`);
ALTER TABLE
    `OrderDetails` ADD INDEX `orderdetails_food_id_index`(`Food_id`);
CREATE TABLE `Categories`(
    `category_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `description` BIGINT NOT NULL
);
CREATE TABLE `roles`(
    `role_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `role_type` VARCHAR(255) NOT NULL
);
CREATE TABLE `notificatins`(
    `notification_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `content` VARCHAR(255) NOT NULL,
    `comment_id` INT NOT NULL,
    `user_id` INT NOT NULL
);
ALTER TABLE
    `notificatins` ADD INDEX `notificatins_comment_id_index`(`comment_id`);
CREATE TABLE `Deliverers`(
    `deliver_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone_number` INT NOT NULL,
    `gender` VARCHAR(255) NOT NULL
);
CREATE TABLE `Comments`(
    `comment_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `content` BIGINT NOT NULL,
    `date` DATETIME NOT NULL,
    `deliver_id` INT NOT NULL,
    `user_id` INT NOT NULL
);
ALTER TABLE
    `Comments` ADD INDEX `comments_deliver_id_index`(`deliver_id`);
ALTER TABLE
    `Comments` ADD INDEX `comments_user_id_index`(`user_id`);
CREATE TABLE `Res_categories`(
    `res_categoryID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `restaurant_id` INT NOT NULL,
    `category_id` INT NOT NULL
);
ALTER TABLE
    `Res_categories` ADD INDEX `res_categories_restaurant_id_index`(`restaurant_id`);
ALTER TABLE
    `Res_categories` ADD INDEX `res_categories_category_id_index`(`category_id`);
CREATE TABLE `Orders`(
    `order_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `date` DATETIME NOT NULL,
    `user_id` INT NOT NULL,
    `deliver_id` BIGINT NOT NULL
);
ALTER TABLE
    `Orders` ADD INDEX `orders_user_id_index`(`user_id`);
ALTER TABLE
    `Orders` ADD INDEX `orders_deliver_id_index`(`deliver_id`);
CREATE TABLE `Users`(
    `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `gender` CHAR(255) NOT NULL,
    `role_id` INT NOT NULL
);
ALTER TABLE
    `Users` ADD INDEX `users_role_id_index`(`role_id`);
CREATE TABLE `Restaurants`(
    `restaurant_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `restaurant_name` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `time_open` VARCHAR(255) NOT NULL,
    `time_close` DATETIME NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `user_id` INT NOT NULL
);
CREATE TABLE `favorites`(
    `favorite_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `Food_id` BIGINT NOT NULL
);
ALTER TABLE
    `favorites` ADD INDEX `favorites_user_id_index`(`user_id`);
ALTER TABLE
    `favorites` ADD INDEX `favorites_food_id_index`(`Food_id`);
ALTER TABLE
    `Users` ADD CONSTRAINT `users_username_foreign` FOREIGN KEY(`username`) REFERENCES `roles`(`role_id`);
ALTER TABLE
    `Orders` ADD CONSTRAINT `orders_order_id_foreign` FOREIGN KEY(`order_id`) REFERENCES `Users`(`user_id`);
ALTER TABLE
    `Foods` ADD CONSTRAINT `foods_description_foreign` FOREIGN KEY(`description`) REFERENCES `Categories`(`category_id`);
ALTER TABLE
    `Comments` ADD CONSTRAINT `comments_content_foreign` FOREIGN KEY(`content`) REFERENCES `Deliverers`(`deliver_id`);
ALTER TABLE
    `Restaurants` ADD CONSTRAINT `restaurants_address_foreign` FOREIGN KEY(`address`) REFERENCES `Res_categories`(`restaurant_id`);
ALTER TABLE
    `OrderDetails` ADD CONSTRAINT `orderdetails_order_id_foreign` FOREIGN KEY(`order_id`) REFERENCES `Foods`(`Foodname`);
ALTER TABLE
    `Users` ADD CONSTRAINT `users_username_foreign` FOREIGN KEY(`username`) REFERENCES `Comments`(`comment_id`);
ALTER TABLE
    `Users` ADD CONSTRAINT `users_password_foreign` FOREIGN KEY(`password`) REFERENCES `Restaurants`(`restaurant_id`);
ALTER TABLE
    `Comments` ADD CONSTRAINT `comments_content_foreign` FOREIGN KEY(`content`) REFERENCES `notificatins`(`notification_id`);
ALTER TABLE
    `Res_categories` ADD CONSTRAINT `res_categories_category_id_foreign` FOREIGN KEY(`category_id`) REFERENCES `Categories`(`category_id`);
ALTER TABLE
    `favorites` ADD CONSTRAINT `favorites_food_id_foreign` FOREIGN KEY(`Food_id`) REFERENCES `Foods`(`category_id`);
ALTER TABLE
    `Users` ADD CONSTRAINT `users_email_foreign` FOREIGN KEY(`email`) REFERENCES `favorites`(`favorite_id`);
ALTER TABLE
    `Deliverers` ADD CONSTRAINT `deliverers_email_foreign` FOREIGN KEY(`email`) REFERENCES `Orders`(`order_id`);
ALTER TABLE
    `notificatins` ADD CONSTRAINT `notificatins_content_foreign` FOREIGN KEY(`content`) REFERENCES `Users`(`email`);
ALTER TABLE
    `Orders` ADD CONSTRAINT `orders_date_foreign` FOREIGN KEY(`date`) REFERENCES `OrderDetails`(`orderDetail_id`);