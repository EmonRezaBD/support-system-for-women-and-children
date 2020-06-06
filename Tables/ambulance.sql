create table ambulance(
ambulance_no varchar2(20) primary key,
driver_name varchar2(40),
availability varchar2(40),
parking_address varchar2(40),
mobile_no number,
address varchar2(40)
);

--------------------------------------
insert into ambulance
values('202A','majed','8.00 pm to 4.00 pm','mirpur-12','0175','mirpur-12,Dhaka');

insert into ambulance
values('202B','zahid','8.00 pm to 10.00 pm','mirpur-14','01753526','mirpur-14,Dhaka');
