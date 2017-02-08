LOAD DATA LOCAL INFILE 'C:/Users/Stephen/Dropbox/Rutgers/Fall 2015/Principles of Info & Data Management/Drinks Project/RatedMales.csv'
INTO TABLE Ratings
FIELDS TERMINATED by '|'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES

