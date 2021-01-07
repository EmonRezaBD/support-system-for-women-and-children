create table B_H
(
id varchar2(15) not null check(id>0),
Hospital_name varchar2(30) not null unique

);

alter table B_H
add constraint B_H_id_fk foreign key(id)
references blood_bank(id);

alter table B_H
add constraint B_H_Hospital_Name_fk foreign key(Hospital_Name)
references hospital(Hospital_Name);

alter table B_H
add constraint B_H_pk primary key(id,Hospital_Name);


/*Inserted data*/

insert into B_H
values('1','Apollo');

insert into B_H
values('2','Bardem');



