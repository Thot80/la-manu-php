-- EX 1


SELECT languages.name as languageName, frameworks.name as frameworkName 
FROM languages
LEFT JOIN frameworks
ON languages.id = frameworks.languagesId;

-- EX 2

SELECT languages.name as languageName, frameworks.name as frameworkName 
FROM languages
INNER JOIN frameworks
ON languages.id = frameworks.languagesId;

-- EX 3 

SELECT languages.name as languageName, COUNT(frameworks.name) as frameworkeNumber 
FROM languages
INNER JOIN frameworks
ON languages.id = frameworks.languagesId
GROUP by languageName;

-- EX 4 

SELECT languages.name as languageName,COUNT(frameworks.name) as frameworkeNumber 
FROM languages
INNER JOIN frameworks
ON languages.id = frameworks.languagesId
GROUP by languageName
HAVING COUNT(frameworks.name) > 3;