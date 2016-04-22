insert into library
values((select id from dba47 where name='&name'),'&book',sysdate,'')
/
