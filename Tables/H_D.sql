create table H_D
(
  id varchar2(20) not null check(id>0),
  Hospital_Name varchar2(15) unique

);



alter table H_D
add constraint H_D_pk primary key(id ,Hospital_Name);

/*Inserted data*/

