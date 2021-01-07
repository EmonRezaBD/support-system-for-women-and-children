create table A_H
(
 ambulance_no varchar2(20) not null unique,
 Hospital_Name varchar2(30) not null unique


);

alter table A_H
add constraint A_H_pk primary key(ambulance_no,Hospital_Name);



/*Inserted data*/

insert into A_H
values('202A','Apollo');