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