--create database MyDB6;
--use MyDB6


create table guest(
gId char(6),
f_name char(12),
l_name char(12),
addres char(12),

CONSTRAINT guest001 PRIMARY KEY(gId)
);


create table account(
accId char(7),
gId char(6),
create_data char(12),

CONSTRAINT account001 PRIMARY KEY(accId),
CONSTRAINT account002 FOREIGN KEY(gId) REFERENCES guest(gId)
);

create table register(
lId char(6),
username char(12),
password_ char(12),
accId char(7),
cId char(6),

CONSTRAINT register001 PRIMARY KEY(lId),
CONSTRAINT register002 FOREIGN KEY(accId) REFERENCES account(accId)
);


create table administrator(

aId char(12),
a_Name char(12),
addres char(12),
email char(12),

CONSTRAINT administrator001 PRIMARY KEY(aId),

);

create table customer(
cId char(6),
cus_name char(12),
addres char(12),
aId char(12),

CONSTRAINT customer001 PRIMARY KEY(cId),
CONSTRAINT customer002 FOREIGN KEY(aId) REFERENCES administrator(aId)

);


create table storeKeeper(
skId char(12),
s_Name char(12),
addres char(12),
aId char(12)

CONSTRAINT storeKeeper001 PRIMARY KEY(skId),
CONSTRAINT storeKeeper002 FOREIGN KEY(aId) REFERENCES administrator(aId)

);



create table deliverPerson(
dId char(12),
skId char(12),
d_Name char(12),
addres char(12),

CONSTRAINT deliverPerson001 PRIMARY KEY(dId),
CONSTRAINT deliverPerson002 FOREIGN KEY(skID) REFERENCES storeKeeper(skId)

);

create table item(
item_num char(12),
item_name char(12),
brand varchar(12),
aId char(12),
skId char(12),
dId char(12),
price double precision,


CONSTRAINT item001 PRIMARY KEY(item_num),
CONSTRAINT item002 FOREIGN KEY(dId) REFERENCES deliverPerson(dId),
CONSTRAINT item003 FOREIGN KEY(aId) REFERENCES administrator(aId),
CONSTRAINT item004 FOREIGN KEY(skId) REFERENCES storeKeeper(skId)

);



create table report(

rId char(12),
priority_ char(12),
normal char(12),
dId char(12),

CONSTRAINT report001 PRIMARY KEY(rId),
CONSTRAINT report002 FOREIGN KEY(dId) REFERENCES deliverPerson(dId)

);




create table payment(
pId char(12),
date_ char(12),
description_ char(12),
cashondeliver char(20),
ez_cash char(20),
credit_card char(30),
cId char(6),
oId char(12),

CONSTRAINT payment001 PRIMARY KEY(pId),
CONSTRAINT payment002 FOREIGN KEY(cId) REFERENCES customer(cId),


);




create table orderr(

oId char(12),
date_ char(12),
priority_ char(12),
normal char(12),
aId char(12),

CONSTRAINT orderr001 PRIMARY KEY(oId),
CONSTRAINT orderr002 FOREIGN KEY(aId) REFERENCES administrator(aId)

);


create table guest_contact(

gId char(6),
phone char(10),

CONSTRAINT guest_contact001 PRIMARY KEY(gId,phone),
);


create table customer_contact(

cId char(6),
phone char(10),

CONSTRAINT store_contact001 PRIMARY KEY(cId,phone),


);

create table store_contact(

skId char(12),
phone char(10),

CONSTRAINT store_contact002 PRIMARY KEY(skId,phone),

);


create table administrator_contact(

aId char(12),
phone char(12),

CONSTRAINT administrator_contact001 PRIMARY KEY(aId,phone)

);


create table delivery_contact(

dId char(12),
phone char(10),



CONSTRAINT delivery_contact001 PRIMARY KEY(dId,phone),

);


create table g_item(

gId char(6),
item_num char(12),

CONSTRAINT g_item001 PRIMARY KEY(gId,item_num),

);

create table c_item(

cId char(6),
item_num char(12),

CONSTRAINT c_item001 PRIMARY KEY(cId,item_num),

);

create table buys(

cId char(6),
item_num char(12),

CONSTRAINT g_item002 PRIMARY KEY(cId,item_num)

);






INSERT INTO Guest(gId,f_name,l_name,addres)
VALUES	(1111,'AMAL','Perera','Kilinochchi'),
		(1112,'Kamal','Senkada','Kotte'),
        (1113,'Supun','Senpathi','Maharagama'),
        (1114,'Sachin','Pivithuru','Weliwita'),
        (1115,'Vishwa','Peiris','Polonnaruwa'),
        (1116,'Visal','Thamara','Malabe');

INSERT INTO account
VALUES ('abc11',1111,'2022-01-02'),
       ('abc12',1112,'2022-01-02'),
       ('abc13',1113,'2022-01-02'),
       ('abc14',1114,'2022-01-02'),
       ('abc15',1115,'2022-01-02'),
       ('abc16',1116,'2022-01-02');



INSERT INTO register
VALUES ('HS115','123abc','durdans12','abc11','sup001'),
       ('HS654','143abc','centl344','abc12','sup002'),
       ('HS678','153abc','siri124','abc13','sup003'),
       ('HS788','163abc','gen56','abc14','sup004'),
       ('HS248','173abc','9well9','abc15','sup005'),
       ('HS454','183abc','q234','abc16','sup006');



INSERT INTO administrator(aId,a_name,addres,email)
VALUES	('admin121','amare','dabulla','a1@gmail.com'),
		('admin122','akalanka','dabulla','a2@gmail.com'),
		('admin123','kaweesha','dabulla','a3@mail.com'),
		('admin124','amali','dabulla','a4@gmail.com'),
		('admin125','madura','dabulla','a5@gmail.com'),
		('admin126','sumane','dabulla','a6@gmail.com');



INSERT INTO customer
VALUES ('sup001','Janet','Colombo','admin121'),
       ('sup002','Robin','Malabe','admin122'),
       ('sup003','David','Welimada','admin123'),
       ('sup004','Uvindu','Jaffna','admin124'),
       ('sup005','Sampath','Colpetty','admin125'),
       ('sup006','Dilshan','Kirulapone','admin126');

INSERT INTO storeKeeper(skId,s_Name,addres,aId)
VALUES	('sk111','supun','pannipitiya','admin121'),
		('sk112','pasindu','pannipitiya','admin122'),
		('sk113','susan','pannipitiya','admin123'),
		('sk114','saman','pannipitiya','admin124'),
		('sk115','danushka','pannipitiya','admin125'),
		('sk116','kamal','pannipitiya','admin126');



INSERT INTO deliverPerson(dId,skId,d_Name,addres)
VALUES	('di1231','sk111','sampath','homagama'),
		('di1232','sk112','nithila','homagama'),
		('di1233','sk113','kelum','homagama'),
		('di1234','sk114','kumara','homagama'),
		('di1235','sk115','iduwara','homagama'),
		('di1236','sk116','dinuka','homagama');

INSERT INTO item(item_num,item_Name,brand,aId,skId,dId,price)
VALUES	('item001','short','lee','admin121','sk111','di1231','3500.00'),
		('item002','sort','leew','admin122','sk112','di1232','5500.00'),
		('item003','shoirt','leewe','admin123','sk113','di1233','7500.00'),
		('item004','sht','leewe','admin124','sk114','di1234','8500.00'),
		('item005','shrt','leewee','admin125','sk115','di1235','9500.00'),
		('item006','shirt','leee','admin126','sk116','di1236','6500.00');


INSERT INTO report(rId,priority_,normal,dId)
VALUES	('re001','asdm','dsa','di1231'),
		('re002','asdn','dsan','di1232'),
		('re003','asdb','dsam','di1233'),
		('re004','asdb','dsab','di1234'),
		('re005','asdv','dsav','di1235'),
		('re006','asdc','dsac','di1236');




INSERT INTO payment(pId,date_,description_,cashondeliver,ez_cash,credit_card,cId,oId)
VALUES	('p001','2022-01-04','nice','cash on deliver','ez cash','0001 0002 0003 0004','sup001','or001'),
		('p002','2022-01-04','nice','cash on deliver','ez cash','0002 0002 0003 0004','sup002','or002'),
		('p003','2022-01-04','nice','cash on deliver','ez cash','0003 0002 0003 0004','sup003','or003'),
		('p004','2022-01-04','nice','cash on deliver','ez cash','0004 0002 0003 0004','sup004','or004'),
		('p005','2022-01-04','nice','cash on deliver','ez cash','0005 0002 0003 0004','sup005','or005'),
		('p006','2022-01-04','nice','cash on deliver','ez cash','0006 0002 0003 0004','sup006','or006');





INSERT INTO orderr(oId,date_,priority_,normal,aId)
VALUES	('or001','2022-01-04','asdm','dsa','admin121'),
		('or002','2022-01-04','asdn','dsan','admin122'),
		('or003','2022-01-04','asdb','dsam','admin123'),
		('or004','2022-01-04','asdb','dsab','admin124'),
		('or005','2022-01-04','asdv','dsav','admin125'),
		('or006','2022-01-04','asdc','dsac','admin126');


INSERT INTO guest_contact
VALUES	('1111','0768939331'),
		('1112','0768939332'),
		('1113','0768939333'),
		('1114','0768939334'),
		('1115','0768939335'),
		('1116','0768939336');


INSERT INTO customer_contact
VALUES	('sup001','0768823121'),
		('sup002','0768823122'),
		('sup003','0768823123'),
		('sup004','0768823124'),
		('sup005','0768823125'),
		('sup006','0768823126');



INSERT INTO store_contact
VALUES	('sk111','0761212331'),
		('sk112','0761212332'),
		('sk113','0761212333'),
		('sk114','0761212334'),
		('sk115','0761212335'),
		('sk116','0761212336');


INSERT INTO administrator_contact
VALUES	('admin121','0772123111'),
		('admin122','0772123112'),
		('admin123','0772123113'),
		('admin124','0772123114'),
		('admin125','0772123115'),
		('admin126','0772123116');



INSERT INTO delivery_contact
VALUES	('di1231','0778767441'),
		('di1232','0778767442'),
		('di1233','0778767443'),
		('di1234','0778767444'),
		('di1235','0778767445'),
		('di1236','0778767446');


INSERT INTO g_item
VALUES	('1111','item001'),
		('1112','item002'),
		('1113','item003'),
		('1114','item004'),
		('1115','item005'),
		('1116','item006');



INSERT INTO c_item
VALUES	('sup001','item001'),
		('sup002','item002'),
		('sup003','item003'),
		('sup004','item004'),
		('sup005','item005'),
		('sup006','item006');




INSERT INTO buys
VALUES	('sup001','item001'),
		('sup002','item002'),
		('sup003','item003'),
		('sup004','item004'),
		('sup005','item005'),
		('sup006','item006');
