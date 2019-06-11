use heroku_70d7290d39f4cdc;

insert into Houses
	(ID,  StreetAddress, City, State ,MainPhoto, HouseTypeID ,PhotoID)
    values(0, '1234 blue st', 'boise', 'id' , load_file('C:\Users\Jonathan Aparicio\Documents\web\project\ventures\blue-house.jpg'), 0, 0);
    
    load data infile 'C:\Users\Jonathan Aparicio\Documents\web\project\ventures\blue-house.jpg' into table Houses
    (MainPhoto);
    
    insert into Houses
	(ID,  StreetAddress, City, State ,MainPhoto, HouseTypeID ,PhotoID)
    values(1, '4321 white st', 'boise', 'id' , load_file('C:\Users\Jonathan Aparicio\Documents\web\project\ventures\white-house.jpg'), 0, 1);
    
    insert into Houses
	(ID,  StreetAddress, City, State ,MainPhoto, HouseTypeID ,PhotoID)
    values(2, '5643 bage st', 'boise', 'id' , load_file('C:\Users\Jonathan Aparicio\Documents\web\project\ventures\bage-house.jpg'), 0, 2);

insert into Images
	(ID, image)
    values(0,
    'C:\Users\Jonathan Aparicio\Documents\web\project\ventures\white-house.jpg');
    