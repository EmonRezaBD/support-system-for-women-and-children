create table V_I
(
  incident_id varchar2(20) unique,
  user_id varchar2(30) not null


);


/*Inserted data*/

insert into V_I
values('I-01','101');

insert into V_I
values('I-200','115');

insert into V_I
values('I-205','200');

insert into V_I
values('I-201','102');