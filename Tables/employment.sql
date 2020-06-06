create table employment(
name varchar2(30) primary key,
type varchar2(30),
vacancy number(10),
address addr,
contact con

);

inserted val------------>


insert into employment
values ('Grameen Phone','ML Engineer','20',addr('Dhaka','Dhaka','Banani','Banani'),con('info@grameenphone.com','01754456','01788800')
);


insert into employment
values ('Robi','Guard','20',addr('Dhaka','Dhaka','Banani','Banani'),con('info@robi.com','01754456','01788800')
);

