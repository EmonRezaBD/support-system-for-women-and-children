create table incident(
Id varchar2(10),
Type varchar2(30),
Details varchar2(40),
Time  varchar2(20),
Place  varchar2(40),
Image  varchar2(40),
Audio  varchar2(40),
Video  varchar2(40)

);

-------------------------------------------->>

insert into incident
values (
'01','Domestic Violence', 'Occurred at Makinganj ..', '9 pm', 'Manikganj','no','no','no' 

);

select id,details from incident
where place in (select place from incident where type = 'Child Marriage');


select COUNT(id) from incident group by place;