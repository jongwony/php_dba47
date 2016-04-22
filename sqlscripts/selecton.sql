set serveroutput on

define &&table

declare
	query varchar(50);
	tablelen number;
	viewlen number;
	len number;
begin
	select count(*) into tablelen from dba_tables where owner=upper('&&table');
	select count(*) into viewlen from dba_views where owner=upper('&table');
	len := tablelen + viewlen;
	dbms_output.put_line(len);
	
	select count(segment_name) into len from dba_segments 
	where owner=upper('&table')
	and segment_type in ('VIEW','TABLE');
	dbms_output.put_line(len);
;
	

end;
/

undefine &&table
