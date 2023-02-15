SELECT *
FROM `countries`;

-- DELETE
-- FROM `countries`;

SELECT *
FROM `countries`
WHERE 1;

-- this is a comment
SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC;

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 10;

SELECT `id`, `name`, `population`
FROM `countries`
WHERE `population`>20000000
ORDER BY `population`DESC
LIMIT 10;

SELECT *
FROM `countries`
WHERE `population`>20000000
AND `continent`=`Europe`
ORDER BY `population` ASC;
