create table S_C
(
  Service_No varchar2(15) not null check(Service_No>0),
  user_id varchar2(15)

);

alter table S_C
add constraint S_C_pk primary key(Service_No ,user_id);


/*Inserted data*/

