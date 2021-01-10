create table police_station(
id varchar2(30) primary key,
name varchar2(30),
complain com,
address addr,
contact con

);

------------------------------
insert into police_station
values ('01 gulshan','Tejgoan police station',com('Domestic Violance','A women is tortured by his husband','on-going','03-03-2020'),addr('Dhaka','Tejgoan','Framgate','Framgate'),con('adcsaika22@gmail.com','01754','017888')
);



insert into police_station
values ('02 banani','Tejgoan police station',com('Domestic Violance','A women is tortured by his husband','on-going','03-06-2020'),addr('Dhaka','Tejgoan','Framgate','Framgate'),con('ahdjdb@gmail.com','01754','017888')
);

----------------------> Single Loop------------
DECLARE 
CURSOR p_cursor IS
select id,name from police_station;
p_val p_cursor%ROWTYPE;
BEGIN
OPEN p_cursor;
LOOP
FETCH p_cursor INTO p_val;
EXIT WHEN p_cursor%NOTFOUND;
DBMS_OUTPUT.PUT_LINE(p_val.id);
END LOOP;
CLOSE p_cursor;
END;

----------------------------------For Loop--------->

DECLARE 
CURSOR p_cursor IS
select id,name from police_station;
BEGIN
FOR p_val IN p_cursor
LOOP
EXIT WHEN
 p_cursor%NOTFOUND;

DBMS_OUTPUT.PUT_LINE(p_val.id);
END LOOP;

END;



