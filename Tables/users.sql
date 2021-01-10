create table users(

user_id varchar2(30) not null unique check(user_id>0),
name varchar2(30) not null,
age  varchar2(30) not null,
dob  varchar2(30) not null,
email  varchar2(30) not null,
contact_no  varchar2(30) not null check(contact_no>0),
address  varchar2(30) not null,
spouses_name  varchar2(30) ,
fathers_name  varchar2(30),
mothers_name  varchar2(30),
gender  varchar2(30) not null

);


/*Inserted data*/

insert into users
values('102','Mr Rahim','40','12 jan 1960','abc@gmail.com','01745','23/A banani','xyz','kabila','rokeya','male');

insert into users
values('101','Mr Karim','40','13 jan 1963','abcg@gmail.com','01745','24/A banani','xyz','karim','alen','male');

insert into users
values('200','Alex','20','13 jan 2000','abcg@gmail.com','01745','24/A banani','xyz','Max','alen','male');

insert into users
values('220','Rahima','12','25 oct 2006','abcg@gmail.com','01745','chittagong','xyz','Max','alen','female');

insert into users
values('120','Rahima','08','25 oct 2014','abcg@gmail.com','0174511','Dhaka','xyz','Max','alen','female');

insert into users
values('155','Asha','08','25 oct 2014','asha@gmail.com','0174511','Rajshahi','habib','Max2','ale1n','female');


CREATE OR REPLACE TRIGGER ACCOUNT_OVERDRAFT
BEFORE UPDATE
ON users
FOR EACH ROW
WHEN ( NEW.age < 0 )
DECLARE
OVERDRAFT_ERROR EXCEPTION;
BEGIN
RAISE OVERDRAFT_ERROR;
EXCEPTION
WHEN OVERDRAFT_ERROR
THEN
RAISE_APPLICATION_ERROR(-20001,'OVERDRAFT NOT
ALLOWED' );
END;


CREATE OR REPLACE TRIGGER ageTrigger
BEFORE UPDATE
ON users
FOR EACH ROW
WHEN ( age < 0 )
DECLARE
OVERDRAFT_ERROR EXCEPTION;
BEGIN
RAISE OVERDRAFT_ERROR;
EXCEPTION
WHEN OVERDRAFT_ERROR
THEN
RAISE_APPLICATION_ERROR(-20001,'OVERDRAFT NOT
ALLOWED' );
END;
