create table E_S
(
  name varchar2(15) unique,
  Service_No varchar2(15) not null check(Service_No>0)
  

);

alter table E_S
add constraint E_S_pk primary key(name,Service_No);



/*Inserted data*/

