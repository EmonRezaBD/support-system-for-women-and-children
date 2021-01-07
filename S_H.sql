create table S_H
(
  Service_No varchar2(15) not null check(Service_No>0),
  Hospital_Name varchar2(15) unique

);




alter table S_H
add constraint S_H_pk primary key(Service_No ,Hospital_Name);


/*Inserted data*/

