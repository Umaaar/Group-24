---Overarching comment---
--Date--
--regular comment

--8/11/22--
---Making the regular tables---

--User table
CREATE TABLE `u_210103351_TP_website_schema`.`Users` 
    ( `UserID` INT NOT NULL AUTO_INCREMENT , 
    `FirstName` VARCHAR(50) NOT NULL , 
    `Surname` VARCHAR(50) NOT NULL , 
    `Address` VARCHAR(10) NOT NULL , 
    `PostCode` VARCHAR(50) NOT NULL , 
    `Gender` VARCHAR(10) NOT NULL , 
    `DateOfBirth` DATE NOT NULL , 
    `Email` VARCHAR(100) NOT NULL , 
    `Password` VARCHAR(100) NOT NULL , 
    PRIMARY KEY (`UserID`)) ENGINE = InnoDB;

--Added the isAdmin column
ALTER TABLE `Users` ADD `isAdmin` BOOLEAN NULL DEFAULT FALSE AFTER `Password`;

--Basket table
CREATE TABLE `u_210103351_TP_website_schema`.`Basket` 
    ( `BasketID` INT NOT NULL AUTO_INCREMENT , 
    `UserID` INT NOT NULL , 
    PRIMARY KEY (`BasketID`)) ENGINE = InnoDB;

--Made UserID a foreign key
ALTER TABLE `Basket` ADD FOREIGN KEY (`UserID`) REFERENCES `Users`(`UserID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--9/11/22--
--Products table
CREATE TABLE `u_210103351_TP_website_schema`.`Products` 
    ( `ProductID` INT NOT NULL AUTO_INCREMENT , 
    `Name` VARCHAR(100) NOT NULL , 
    `Size` INT NOT NULL , 
    `Price` INT NOT NULL , 
    `Stock` INT NOT NULL DEFAULT '0' , 
    `Description` VARCHAR(535) NULL , 
    `Gender` VARCHAR(10) NOT NULL , 
    PRIMARY KEY (`ProductID`)) ENGINE = InnoDB;

--Category table
CREATE TABLE `u_210103351_TP_website_schema`.`Categories` 
    ( `CategoryID` INT NOT NULL AUTO_INCREMENT , 
    `Name` VARCHAR(100) NOT NULL , 
    PRIMARY KEY (`CategoryID`)) ENGINE = InnoDB;

--10/11/22--
---Making the composite tables---

--Basket Contents table
CREATE TABLE `u_210103351_TP_website_schema`.`Basket Contents` 
    ( `BasketID` INT NOT NULL  , 
    `ProductID` INT NOT NULL  , 
    `Quantity` INT NOT NULL , 
    `TotalPrice` INT NOT NULL , 
    PRIMARY KEY (`BasketID`, `ProductID`)) ENGINE = InnoDB;

--Making it relate to the basket table
ALTER TABLE `Basket Contents` ADD FOREIGN KEY (`BasketID`) REFERENCES `Basket`(`BasketID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--Making it relate to the products table
ALTER TABLE `Basket Contents` ADD FOREIGN KEY (`ProductID`) REFERENCES `Products`(`ProductID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--14/11/22--
--Product Categories table
CREATE TABLE `u_210103351_TP_website_schema`.`Product Categories` 
    ( `ProductID` INT NOT NULL , 
    `CategoryID` INT NOT NULL , 
    PRIMARY KEY (`ProductID`, `CategoryID`)) ENGINE = InnoDB;

--Making it relate to the products table
ALTER TABLE `Product Categories` ADD FOREIGN KEY (`ProductID`) 
    REFERENCES `Products`(`ProductID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--Making it relate to the categories table
ALTER TABLE `Product Categories` ADD FOREIGN KEY (`CategoryID`) 
    REFERENCES `Categories`(`CategoryID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--15/11/22--
---Making sure NOT NULL and NULLs are correct on the tables (NOT NULL means that the field cannot be a NULL value,---
    ---NULL means it can be a NULL value in that field).---

--Changed to NOT Null, also corrected mistake being the default value is 0. This column works as a boolean, 
    --0 means that the user is not an admin and 1 means the user is an admin.
ALTER TABLE `Users` CHANGE `isAdmin` `isAdmin` TINYINT(1) NOT NULL DEFAULT '0';

---Creating the admin table as it needs to be seperate from users---

--removing the isAdmin field from the Users table (no more need for it as there's going to be an admin table).
ALTER TABLE `Users` DROP `isAdmin`;

--Admin table
CREATE TABLE `u_210103351_TP_website_schema`.`Admins` 
    ( `AdminID` INT NOT NULL AUTO_INCREMENT , 
    `Name` VARCHAR(100) NOT NULL , 
    `Email` VARCHAR(100) NOT NULL , 
    `Password` VARCHAR(100) NOT NULL , 
    PRIMARY KEY (`AdminID`)) ENGINE = InnoDB;

--Adding the Admin foreign key to the Basket table.
ALTER TABLE `Basket` ADD `AdminID` INT NOT NULL AFTER `UserID`;
ALTER TABLE `Basket` ADD FOREIGN KEY (`AdminID`) REFERENCES `Admins`(`AdminID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--16/11/22--
---Correcting a varchar character limit mistake on the user table (swapping address and postcode)---

ALTER TABLE `Users` CHANGE `Address` `Address` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL;
ALTER TABLE `Users` CHANGE `PostCode` `PostCode` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL;

---A many to many relationship between admins and basket tables exists which needs to be corrected---

--Composite table for stopping m2m relationship
CREATE TABLE `u_210103351_TP_website_schema`.`Admin Basket View` 
    ( `AdminID` INT NOT NULL , 
    `BasketID` INT NOT NULL , 
    PRIMARY KEY (`AdminID`, `BasketID`)) ENGINE = InnoDB;

--Adding in relations to other tables
ALTER TABLE `Admin Basket View` ADD FOREIGN KEY (`AdminID`) REFERENCES `Admins`(`AdminID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `Admin Basket View` ADD FOREIGN KEY (`BasketID`) REFERENCES `Basket`(`BasketID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--Removing the connection between admins and basket
ALTER TABLE u_210103351_TP_website_schema.Basket DROP FOREIGN KEY Basket_ibfk_2; --Basket_ibfk_2 refers to adminID being a foreign key
ALTER TABLE `Basket` DROP `AdminID`;

---Field is needed for product images in the products table---

ALTER TABLE `Products` ADD `Images` VARCHAR(100) NOT NULL AFTER `Gender`;

---Changing all field names to not have capital letters at the start as it causes problems in laravel---

--Changing Admin Basket View table
ALTER TABLE `Admin Basket View` CHANGE `AdminID` `adminID` INT NOT NULL;
ALTER TABLE `Admin Basket View` CHANGE `BasketID` `basketID` INT NOT NULL;

--Changing Admins table
ALTER TABLE `Admins` CHANGE `AdminID` `adminID` INT NOT NULL AUTO_INCREMENT;
ALTER TABLE `Admins` CHANGE `Name` `name` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `Email` `email` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `Password` `password` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL;

--Changing Basket table
ALTER TABLE `Basket` CHANGE `BasketID` `basketID` INT NOT NULL AUTO_INCREMENT, 
    CHANGE `UserID` `userID` INT NOT NULL;

--Changing Basket Contents table
ALTER TABLE `Basket Contents` CHANGE `BasketID` `basketID` INT NOT NULL, 
    CHANGE `ProductID` `productID` INT NOT NULL, 
    CHANGE `Quantity` `quantity` INT NOT NULL, 
    CHANGE `TotalPrice` `totalPrice` INT NOT NULL;

--Changing Categories table
ALTER TABLE `Categories` CHANGE `CategoryID` `categoryID` INT NOT NULL AUTO_INCREMENT, 
    CHANGE `Name` `name` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL;

--Changing Product Categories table
ALTER TABLE `Product Categories` CHANGE `ProductID` `productID` INT NOT NULL, 
    CHANGE `CategoryID` `categoryID` INT NOT NULL;

--Changing Products table
ALTER TABLE `Products` CHANGE `ProductID` `productID` INT NOT NULL AUTO_INCREMENT, 
    CHANGE `Name` `name` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `Size` `size` INT NOT NULL, 
    CHANGE `Price` `price` INT NOT NULL, 
    CHANGE `Stock` `stock` INT NOT NULL DEFAULT '0', 
    CHANGE `Description` `description` VARCHAR(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL, 
    CHANGE `Gender` `gender` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `Images` `images` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL;

--Changing Users table
ALTER TABLE `Users` CHANGE `UserID` `userID` INT NOT NULL AUTO_INCREMENT, 
    CHANGE `FirstName` `firstName` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `Surname` `surname` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `Address` `address` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `PostCode` `postCode` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `Gender` `gender` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `DateOfBirth` `dateOfBirth` DATE NOT NULL, 
    CHANGE `Email` `email` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL, 
    CHANGE `Password` `password` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL;

--21/11/22--
---Creating an Order table---
CREATE TABLE `u_210103351_TP_website_schema`.`Orders` 
    (`orderID` INT NOT NULL AUTO_INCREMENT , 
    `date` DATE NOT NULL , 
    `status` VARCHAR(50) NOT NULL , 
    PRIMARY KEY (`orderID`)) ENGINE = InnoDB;

--Adding relationship (12m) with basket contents
ALTER TABLE `Basket Contents` ADD `orderID` INT NOT NULL AFTER `totalPrice`;
ALTER TABLE `Basket Contents` ADD FOREIGN KEY (`orderID`) REFERENCES `Orders`(`orderID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--22/11/22--
---Renaming tables to have lower case letters---
RENAME TABLE `u_210103351_TP_website_schema`.`Admin Basket View` TO `u_210103351_TP_website_schema`.`admin basket view`;

RENAME TABLE `u_210103351_TP_website_schema`.`Admins` TO `u_210103351_TP_website_schema`.`admins`;

RENAME TABLE `u_210103351_TP_website_schema`.`Basket` TO `u_210103351_TP_website_schema`.`basket`;

RENAME TABLE `u_210103351_TP_website_schema`.`Basket Contents` TO `u_210103351_TP_website_schema`.`basket contents`;

RENAME TABLE `u_210103351_TP_website_schema`.`Categories` TO `u_210103351_TP_website_schema`.`categories`;

RENAME TABLE `u_210103351_TP_website_schema`.`Orders` TO `u_210103351_TP_website_schema`.`orders`;

RENAME TABLE `u_210103351_TP_website_schema`.`Product Categories` TO `u_210103351_TP_website_schema`.`product categories`;

RENAME TABLE `u_210103351_TP_website_schema`.`Products` TO `u_210103351_TP_website_schema`.`products`;

RENAME TABLE `u_210103351_TP_website_schema`.`Users` TO `u_210103351_TP_website_schema`.`users`;

--23/11/22--
---Adding default values to particular fields---
ALTER TABLE `basket contents` CHANGE `quantity` `quantity` INT NOT NULL DEFAULT '0', 
    CHANGE `totalPrice` `totalPrice` INT NOT NULL DEFAULT '0';

ALTER TABLE `orders` CHANGE `status` `status` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci 
    NOT NULL DEFAULT 'Ongoing';

ALTER TABLE `products` CHANGE `size` `size` INT NOT NULL DEFAULT '1', 
    CHANGE `price` `price` INT NOT NULL DEFAULT '0', 
    CHANGE `description` `description` VARCHAR(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci 
        NOT NULL DEFAULT 'No description given.';

---Correcting size field in products table---
--The default means that the size is small (S=small)
ALTER TABLE `products` CHANGE `size` `size` VARCHAR(10) NOT NULL DEFAULT 'S';

--Changing the varchar size from 10 to 5
ALTER TABLE `products` CHANGE `size` `size` VARCHAR(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'S';

---Shortening the max length of status in the orders table---
ALTER TABLE `orders` CHANGE `status` `status` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci 
    NOT NULL DEFAULT 'Ongoing';

--24/11/22--
---Changing the names of foreign keys and composite keys in the database---
--Composite will have CK on the end and foreign will have FK on the end
ALTER TABLE `admin basket view` CHANGE `adminID` `adminCK` INT NOT NULL, 
    CHANGE `basketID` `basketCK` INT NOT NULL;

ALTER TABLE `basket` CHANGE `userID` `userFK` INT NOT NULL;

ALTER TABLE `basket contents` CHANGE `basketID` `basketCK` INT NOT NULL, 
    CHANGE `productID` `productCK` INT NOT NULL, 
    CHANGE `orderID` `orderFK` INT NOT NULL;

ALTER TABLE `product categories` CHANGE `productID` `productCK` INT NOT NULL, 
    CHANGE `categoryID` `categoryCK` INT NOT NULL;

--26/11/22--
---Setting images in products to have null values---
ALTER TABLE `products` CHANGE `images` `images` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL;

---Getting rid of all capitals in the product table---
ALTER TABLE `products` CHANGE `productID` `productid` INT NOT NULL AUTO_INCREMENT;

---Removal of all capital letters as it keeps on causing issues---
ALTER TABLE `admin basket view` CHANGE `adminCK` `adminck` INT NOT NULL, 
    CHANGE `basketCK` `basketck` INT NOT NULL;

ALTER TABLE `admins` CHANGE `adminID` `adminid` INT NOT NULL AUTO_INCREMENT;

ALTER TABLE `basket` CHANGE `basketID` `basketid` INT NOT NULL AUTO_INCREMENT, 
    CHANGE `userFK` `userfk` INT NOT NULL;

ALTER TABLE `basket contents` CHANGE `basketCK` `basketck` INT NOT NULL, 
    CHANGE `productCK` `productck` INT NOT NULL, 
    CHANGE `orderFK` `orderfk` INT NOT NULL;

ALTER TABLE `categories` CHANGE `categoryID` `categoryid` INT NOT NULL AUTO_INCREMENT;

ALTER TABLE `orders` CHANGE `orderID` `orderid` INT NOT NULL AUTO_INCREMENT;

ALTER TABLE `product categories` CHANGE `productCK` `productck` INT NOT NULL, 
    CHANGE `categoryCK` `categoryck` INT NOT NULL;

ALTER TABLE `users` CHANGE `userID` `userid` INT NOT NULL AUTO_INCREMENT;

--29/11/22--
---Removing all spaces from table names---
RENAME TABLE `laravel`.`admin basket view` TO `laravel`.`admin_basket_view`;

RENAME TABLE `laravel`.`basket contents` TO `laravel`.`basket_contents`;

RENAME TABLE `laravel`.`product categories` TO `laravel`.`product_categories`;

---Removing restraints on composite keys that makes it unique---
ALTER TABLE `admin_basket_view` ADD INDEX(`adminck`, `basketck`);
--removing useless code
ALTER TABLE `admin_basket_view` DROP INDEX `BasketID`;
ALTER TABLE `admin_basket_view` DROP INDEX `adminck`;

ALTER TABLE `basket_contents` ADD INDEX(`basketck`, `productck`);
ALTER TABLE `basket_contents` DROP INDEX `basketck`;
ALTER TABLE `basket_contents` DROP INDEX `ProductID`;
ALTER TABLE `basket_contents` DROP INDEX `orderID`;

ALTER TABLE `product_categories` ADD INDEX(`productck`, `categoryck`);
ALTER TABLE `product_categories` DROP INDEX `CategoryID`;

---Changing productid to id and fixing orderfk so it isn't required---
ALTER TABLE `products` CHANGE `productid` `id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `basket_contents` CHANGE `orderfk` `orderfk` INT(11) NULL;
ALTER TABLE `basket_contents` ADD INDEX(`orderfk`); --accidently removed this

---New setup for composite keys, new field to uniquely identfy the row and what would be the compsite key will have primary keys removed---
ALTER TABLE `basket_contents` DROP PRIMARY KEY;
ALTER TABLE `basket_contents` ADD `basketcontentsid` INT NOT NULL AUTO_INCREMENT AFTER `orderfk`, ADD PRIMARY KEY (`basketcontentsid`);
--readding the foreign keys
ALTER TABLE `basket_contents` DROP INDEX `basketck_2`;
ALTER TABLE laravel.basket_contents DROP FOREIGN KEY basket_contents_ibfk_1;
--Error in the way of adding foreign keys so remaking the table
DROP TABLE `laravel`.`basket_contents`
CREATE TABLE `laravel`.`basket_contents` 
    (`basketcontentsid` INT NOT NULL AUTO_INCREMENT , 
    `basketck` INT NOT NULL , `productck` INT NOT NULL , 
    `orderfk` INT NULL , `quantity` INT NOT NULL DEFAULT '0' , 
    `totalprice` INT NOT NULL DEFAULT '0' , 
    PRIMARY KEY (`basketcontentsid`)) ENGINE = InnoDB;

--Adding the foreign keys
ALTER TABLE `basket_contents` ADD FOREIGN KEY (`basketck`) REFERENCES `basket`(`basketid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `basket_contents` ADD FOREIGN KEY (`productck`) REFERENCES `products`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `basket_contents` ADD FOREIGN KEY (`orderfk`) REFERENCES `orders`(`orderid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

---Doing the same for the other 2 composite key tables---
DROP TABLE `laravel`.`admin_basket_view`
CREATE TABLE `laravel`.`admin_basket_view` 
    (`adminbasketviewid` INT NOT NULL AUTO_INCREMENT , 
    `adminck` INT NOT NULL , 
    `basketck` INT NOT NULL , 
    PRIMARY KEY (`adminbasketviewid`)) ENGINE = InnoDB;
ALTER TABLE `admin_basket_view` ADD FOREIGN KEY (`adminck`) REFERENCES `admins`(`adminid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `admin_basket_view` ADD FOREIGN KEY (`basketck`) REFERENCES `basket`(`basketid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

DROP TABLE `laravel`.`product_categories`
CREATE TABLE `laravel`.`product_categories` 
    (`productcategoriesid` INT NOT NULL AUTO_INCREMENT , 
    `productck` INT NOT NULL , 
    `categoryck` INT NOT NULL , 
    PRIMARY KEY (`productcategoriesid`)) ENGINE = InnoDB;
ALTER TABLE `product_categories` ADD FOREIGN KEY (`productck`) REFERENCES `products`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `product_categories` ADD FOREIGN KEY (`categoryck`) REFERENCES `categories`(`categoryid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--30/11/2022--
---Adding in a relationship between orders and users---
ALTER TABLE `orders` ADD `userfk` INT NULL AFTER `orderid`;
ALTER TABLE `orders` ADD FOREIGN KEY (`userfk`) REFERENCES `users`(`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

---Adding in relationship between orders and products---
ALTER TABLE `orders` ADD `productfk` INT NULL AFTER `userfk`;
ALTER TABLE `orders` ADD FOREIGN KEY (`productfk`) REFERENCES `products`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;