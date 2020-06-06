create table ngo
(
 name varchar2(30) primary key,
type  varchar2(30),
details varchar2(40),
address addr,
contact con
);

inserted data----

insert into ngo
values
(
'Brac','international','mainly work for development for people',addr('dhaka','dhaka','mirpur','DOHS'),con('emn@gmail.com','017','017888')

);

access-------

select n.address.area from ngo n;

