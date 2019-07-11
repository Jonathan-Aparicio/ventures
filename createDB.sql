drop database if exists heroku_70d7290d39f4cdc;
create database heroku_70d7290d39f4cdc;

use heroku_70d7290d39f4cdc;

CREATE TABLE Houses (
    ID INT NOT NULL,
    StreetAddress NVARCHAR(50) NULL,
    City NVARCHAR(30) NULL,
    State NVARCHAR(50) NULL,
    MainPhoto nvarchar(100),
    HouseTypeID nvarchar(3) NOT NULL,
    PhotoID INT NOT NULL,
    PRIMARY KEY (ID)
);

create table Images (
	ID int not null,
    image nvarchar(100)
    );
    
    
CREATE TABLE User(
	Email VARCHAR (256) NOT NULL,
	Password VARCHAR(64) NOT NULL,
    Renting int null,
	Access bit NOT NULL DEFAULT 0);