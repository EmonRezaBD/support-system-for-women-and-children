create table S_N
(
  Service_No varchar2(15) not null check(Service_No>0),
  name varchar2(15) unique

);




alter table S_N
add constraint S_N_pk primary key(Service_No ,name);


/*Inserted data*/

