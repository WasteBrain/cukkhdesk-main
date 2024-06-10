/* selecting tiket berdasrakan user PIC table*/
SELECT *
FROM view_tiket_details
WHERE area_id IN (
    SELECT a.area_id
    FROM area a
    JOIN pic p ON p.area_id = a.area_id
    JOIN user u ON u.user_id = p.user_id
    WHERE u.user_id  = 5
    );
