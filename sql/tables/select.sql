-- EX 1
SELECT * FROM languages;

-- EX 2

SELECT version FROM languages WHERE language = 'PHP';

-- EX 3 

SELECT version FROM languages WHERE language = 'PHP' OR language = 'JavaScript';

-- EX 4 

SELECT * FROM languages WHERE id IN (3,5,7);

-- EX 5

SELECT * FROM languages WHERE language = "JavaScript"  ORDER BY id ASC LIMIT 2;

-- EX 6

SELECT * FROM languages WHERE NOT language = "PHP";

-- EX 7

SELECT * FROM languages ORDER BY language ASC;