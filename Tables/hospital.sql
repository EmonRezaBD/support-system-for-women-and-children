create table Hospital (

Hospital_Name varchar2(30),
Mobile varchar2(30),
Email varchar2(30),
Location varchar2(30),
Fax_No varchar2(30)

);

/*Values*/

insert into hospital
values('Apollo','01521255***','apollohospital@gmail.com','Dhaka','3000');
values('Bardem','01721255***','bardemhospital@gmail.com','Dhaka','3001');
values('Bagura Zila Hopital','01811255***','bagurazilahospital@gmail.com','Bagura','3002')
values('Bagmara Upazila Hospital','01911255***','bagmaraupazilahos@gmail.com','Bagmara','3003');


create or replace trigger NewTrigger
before insert on Hospital
for each row 
enable
declare
  Hospital_Name varchar2(20);
begin
  select user into Hospital_Name from dual;
  dbms_output.put_line('You have inserted a line');
end;