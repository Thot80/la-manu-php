-- EX 1 
SELECT * FROM frameworks 
    WHERE version LIKE '2.%';

-- EX 2 

SELECT * FROM frameworks WHERE id = 1 OR id = 3;

-- EX 3

SELECT * FROM ide WHERE ide.date  BETWEEN "2010-01-01" AND "2011-12-31";