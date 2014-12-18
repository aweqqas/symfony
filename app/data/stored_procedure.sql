DELIMITER //
CREATE PROCEDURE geoloc (IN locid int, IN dist int) 
BEGIN 
DECLARE mylon double; 
DECLARE mylat double; 
DECLARE lon1 float; 
DECLARE lon2 float; 
DECLARE lat1 float; 
DECLARE lat2 float;
-- get the original lon and lat for the locid
select longitude, latitude into mylon, mylat from Location 
where id=locid limit 1;
-- calculate lon and lat for the rectangle:
set lon1 = mylon-dist/abs(cos(radians(mylat))*69); 
set lon2 = mylon+dist/abs(cos(radians(mylat))*69); 
set lat1 = mylat-(dist/69); set lat2 = mylat+(dist/69);
-- run the query:
SELECT dest.id, 
6371 * 2 * ASIN(SQRT( POWER(SIN((orig.latitude - dest.latitude) 
* pi()/180 / 2), 2) + 
COS(orig.latitude * pi()/180) * COS(dest.latitude * pi()/180) * 
POWER(SIN((orig.longitude -dest.longitude) * pi()/180 / 2), 2) )) as
distance FROM Location dest, Location orig
WHERE orig.id=locid
and dest.longitude between lon1 and lon2 
and dest.latitude between lat1 and lat2 
having distance < dist ORDER BY Distance;
END //
DELIMITER ;


-- CALL geoloc(842, 25);