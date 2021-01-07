create table councellor
(
  user_id varchar2(15) not null primary key,
  type varchar2(30),
  appointment_time varchar2(40)

);

/*Inserted data*/

insert into councellor
values('101','psychology','sat 3 pm');
values('102','psychology','mon 3 pm');
values('103','child specialist','mon 5 pm');
values('104','child specialist','wed 10 am');
values('105','Medicine','wed 11 am');