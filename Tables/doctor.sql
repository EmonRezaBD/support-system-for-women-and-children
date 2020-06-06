create table doctor(
id varchar2(30) primary key,
name varchar2(40),
type varchar2(40),
appointment_time varchar2(40),
contact con
);

------------------------------------------------>

insert into doctor
values('1','Sajedul','Eye Consultant','4 pm',con('sajed45@gmail.com','01566','017566'));

insert into doctor
values('2','Fahim','neurosurgeon','5 pm',con('fahim80@gmail.com','0156446','017566'));