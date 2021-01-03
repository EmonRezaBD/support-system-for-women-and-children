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