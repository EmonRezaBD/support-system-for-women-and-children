create table S_Ed
(
  EIIN varchar2(15) not null check(EIIN>0),
  Service_No varchar2(15) unique not null check (Service_No>0)

);



alter table S_Ed
add constraint S_Ed_pk primary key(EIIN ,Service_No);



/*Inserted data*/

