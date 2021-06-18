CREATE TABLE Users(
  Uid INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Name varchar(50) NOT NULL,
  Email varchar(20) NOT NULL,
  mobile varchar(20) NOT NULL,
  Password varchar(20) NOT NULL
);

INSERT INTO Users
	(Name, Email, mobile, Password)
VALUES
  ('Ashen' , 'ashen@sliit.lk' , '0784464128', 'Admin@123'),
  ('Damindu', 'Damindu@sliit.lk' , '0775610811', 'Admin@123'),
  ('Ahamed' , 'Ahamed@sliit.lk' , '0767844747', 'Admin@123'),
  ('Dalaxshan' , 'Dalaxshan@sliit.lk' , '0773392101', 'Admin@123'),
  ('Chanika' , 'Chanika@sliit.lk' , '0703695761', 'Admin@123');


CREATE TABLE Staff_Member(
  SID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  F_Name varchar(50) NOT NULL,
  L_Name varchar(20) NOT NULL,
  S_Add varchar(200) NOT NULL,
  J_Type varchar(20) NOT NULL,
  DOB date NOT NULL
);

INSERT INTO Staff_Member
	(SID, F_Name, L_Name, S_Add, J_Type, DOB)
VALUES
('S1001', 'Randil', 'Samarawickrama', 'No. 23, Hospital Road, Galle.', 'Manager', '1992-05-26'),
('S1002', 'Anuttara', 'Bandara', 'No. 4/32, School Road, Panadura.', 'Customer Support', '1993-08-02'),
('S1003', 'Sangeeth', 'Selvakumar', 'No. 08, Garden Street, Hatton.', 'Executive', '1995-06-20'),
('S1004', 'Kasun', 'Weerasingha', 'No.12, Galle Road, Colombo 03.', 'Assistant Manager', '1996-02-06'),
('S1005', 'Chamath', 'Guruge', 'No. 128/A, Main Road, Kurunagala.', 'Marketing Manager', '1990-12-07');


CREATE TABLE Booking(
  BID char(5) PRIMARY KEY NOT NULL,
  T_Amt varchar(100) ,
  RID char(5) NOT NULL,
  ID char(5) NOT NULL,
  S_Time time,
  E_Time time,
  B_Date date,
  N_At int
);

INSERT INTO Booking
	(BID, T_Amt, RID, ID, S_Time, E_Time, B_Date, N_At)
VALUES
  ('B6561','60000','R5261','C2236','09:30:00','11:30:00','2020-01-04','45'),
  ('B6562','45000','R5426','C2237','07:30:00','12:00:00','2020-01-25','2'),
  ('B6563','62000','R6728','C2238','11:00:00','01:30:00','2020-02-15','30'),
  ('B6564','-','R6729','S1001','10:45:00','12:00:00','2020-03-16','5'),
  ('B6565','-','R4241','S1002','02:15:00','03:45:00','2020-04-28','55'),
  ('B6566','-','R5426','S1003','08:00:00','04:30:00','2020-05-11','2');


CREATE TABLE Resources(
  RID char(5) PRIMARY KEY NOT NULL,
  R_Value varchar(100),
  Max_Att int,
  R_Type varchar(200)
);

INSERT INTO Resources
	(RID, R_Value, Max_Att, R_Type)
VALUES
  ('R5261','85000','60','Banquet hall Araliya'),
  ('R5426','45000','2','Luxury room'),
  ('R6728','75000','45','Banquet hall Jesmin'),
  ('R6729','12500','8','Visiting room'),
  ('R4241','25000','15','Meeting room'),
  ('R5263','275000','150','Auditorium');


CREATE TABLE Feed_back(
  Name varchar(50) PRIMARY KEY not null,
  BID varchar(20)not null,
  Email varchar(20),
  Cmnt varchar(100)
);

INSERT INTO Feed_back
	(Name, BID, Email, Cmnt)
VALUES
  ('Bashitha' ,'B6561', 'Basintha@gmail.com','Resources are very comfortable'),
  ('Rashmika' ,'B6562', 'rashmika@gmail.com','Enjoyed well, highly recomended'),
  ('Ahamed' ,'B6563', 'Ahamed.24@gmail.com','Good team work of your crew.');


