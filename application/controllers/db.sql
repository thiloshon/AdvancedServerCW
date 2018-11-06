CREATE TABLE Libooks (ID INTEGER PRIMARY KEY AUTO_INCREMENT,
					Title VARCHAR(150),
					Publisher VARCHAR(150),
					Band VARCHAR(50),
					Genre VARCHAR(100),
					CopiesHeld INTEGER,
					CopiesOut INTEGER);

					CREATE TABLE Categories (genreID VARCHAR(50) PRIMARY KEY,
                    					Title VARCHAR(150)             )       			;


CREATE TABLE SESSION (Session_id VARCHAR(50) NOT NULL, date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, book_id INTEGER);



INSERT INTO Categories (genreID, Title) VALUES ('horror', 'Horror');
INSERT INTO Categories (genreID, Title) VALUES ('romance', 'Romance');
INSERT INTO Categories (genreID, Title) VALUES ('drama', 'Drama');
INSERT INTO Categories (genreID, Title) VALUES ('mystery', 'Mystery');
INSERT INTO Categories (genreID, Title) VALUES ('health', 'Health');
INSERT INTO Categories (genreID, Title) VALUES ('sci-fi', 'Sci-Fi');
INSERT INTO Categories (genreID, Title) VALUES ('cookbook', 'Cook Books');
INSERT INTO Categories (genreID, Title) VALUES ('action', 'Action');

SELECT c.book_id, COUNT(*)
FROM `session` a
JOIN `session` b ON a.book_id=b.book_id
JOIN `session` c ON b.Session_id=c.Session_id
WHERE a.`book_id`=3 AND c.book_id!=3
GROUP BY c.book_id
ORDER BY 2 DESC;




INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Abolish the Monarchy?', 'Literacy Land info tr', 'Brown', 'horror', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Account The', 'Collins Big Cats', 'White', 'romance', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Adrenalin Rush  ', 'Oxford Project X', 'Red', 'drama', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Adventure for Robo-Dog An', 'Oxford All Stars', 'Gold', 'mystery', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Adventurous Snail The', 'Young Corgi', 'Grey', 'mystery', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Against All Odds  ', 'Oxford TreeTops', 'Gold', 'drama', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Air Raid!', 'Oxford TreeTops', 'Pale Blue', 'mystery', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Albertine Goose Queen', 'Jets', 'Gold', 'mystery', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Alices Magic Alice Band', 'Banana Libooks', 'Lime', 'mystery', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Alien Invasion', 'Oxford Project X', 'Orange', 'mystery', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Alien on the 99th Floor The', 'Collins Big Cats', 'Brown', 'health', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Alien Swap', 'Oxford Snapdragons', 'Gold', 'health', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('All at Sea', 'Sunshine Libooks', 'Gold', 'Play', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('All Because of Jackson', 'Young Corgi', 'Brown', 'health', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Allotment Ghost The', 'MPG Libooks', 'Pale Blue', 'health', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Almost the Last Dodo', 'Ginn Pocket Libooks', 'Purple', 'health', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Alroys Very Nearly Clean Bedroom', 'Superdoopers', 'White', 'health', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Amazing Brain', 'Oxford TreeTops', 'Brown', 'drama', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Amazing Escapes', 'Big Cat Progress', 'Green', 'drama', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Amazing Paint', 'Oxford TreeTops', 'Brown', 'sci-fi', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Amber Cat The', 'Collins', 'Pale Blue', 'sci-fi', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Amy the Hedgehog Girl', 'Oxford TreeTops', 'Gold', 'sci-fi', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Amy the Hedgehog Girl', 'Oxford TreeTops', 'White', 'sci-fi', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('And So to Bed', 'Oxford TreeTops', 'Grey', 'sci-fi', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Angel for May An', 'Puffin', 'Dark Red', 'cookbook', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Angel House', 'Big Cat Progress', 'Green', 'cookbook', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Animal Ancestors', 'Collins Big Cats', 'Gold', 'drama', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Animal Conflicts', 'Oxford Project X', 'Brown', 'romance', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Animal Magic', 'Oxford Project X', 'Turquoise', 'romance', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Animal Parents', 'Oxford TreeTops', 'Brown', 'romance', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Animal Trainer', 'Oxford TreeTops', 'White', 'cookbook', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Animal Tricksters', 'Oxford TreeTops', 'Brown', 'cookbook', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Animals in War', 'Big Cat Progress', 'Dark Blue', 'romance', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Animals on the Move', 'Collins Big Cats', 'Brown', 'romance', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Anne Frank-The Last Days of Freedom', 'MacDonald Young', 'Brown', 'romance', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Annies Game', 'Yearling', 'Pale Blue', 'academic', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Ant and Snail', 'Big Cat Phonics', 'Yellow', 'academic', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Ant and the Break-bot', 'Oxford Project X', 'White', 'academic', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Ant Attack', 'Oxford Project X', 'Brown', 'academic', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Ant Storm', 'Oxford Project X', 'Brown', 'academic', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Antarctic Adventure', 'Dark Readers', 'Grey', 'romance', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Antarctica Land of the Penguins', 'Collins Big Cats', 'White', 'romance', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Anti-Bully Machine The', 'Oxford TreeTops', 'Grey', 'academic', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Ants The', 'Starpol Ginn', 'Brown', 'academic', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Ants at Home', 'Oxford Project X', 'Lime', 'sci-fi', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Aquila', 'Puffin', 'Dark Red', 'action', 1, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Arabian Nights', 'Oxford All Stars', 'Lime', 'action', 3, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Arctic Hero', 'Oxford True Stories', 'White', 'sci-fi', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Ark of the People The', 'Hodder', 'Dark Red', 'action', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Asifs Party', 'Ginn Pocket Libooks', 'Gold', 'action', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Assassins of Rome The', 'Orion', 'Light Blue', 'action', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Astronaut Living in Space', 'Dark Readers', 'Gold', 'horror', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Atlantic Adventure', 'Oxford Project X', 'Purple', 'horror', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Attack of the Centipede', 'Oxford Project X', 'Purple', 'action', 5, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Attack of the X-Bots', 'Oxford Project X', 'Brown', 'mystery', 4, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Aunt Jinksies Miracle Seeds', 'Colour Jets', 'Lime', 'mystery', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('A-Z of Survival', 'Oxford TreeTops', 'Brown', 'horror', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Badcats', 'Oxford All Stars', 'White', 'mystery', 2, 0);
INSERT INTO Libooks (Title, Publisher, Band, Genre, CopiesHeld, CopiesOut) VALUES ('Ballerina of Doom The', 'Oxford Project X', 'Lime', 'mystery', 5, 0);
