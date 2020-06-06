create table accomodation(
name varchar2(30) primary key,
type varchar2(30),
availability varchar2(20),
address addr,
contact con

);

insert into accomodation
values ('Brac','non-profitable','yes 60 seats',addr('Rajshahi','Natore','poba','alaibad'),con('emon22@gmail.com','01754','017888')
);

insert into accomodation
values ('Asha','non-profitable','yes 20 seats',addr('Barishal','Natore','tanor','alaibad'),con('atik02@gmail.com','01754456','01788800')
);

