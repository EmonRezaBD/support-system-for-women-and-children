create table S_A
(
  name varchar2(20) not null unique,
  Service_No varchar2(30) not null unique


);

alter table S_A
add constraint S_A_pk primary key(name,Service_No);


/*Inserted data*/

