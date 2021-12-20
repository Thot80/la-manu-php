-- 1. Afficher toutes les notes des élèves (nom et prénom de l'élève, la note et la matière)

SELECT students.firstname as 'Prénom',
students.lastname as 'Nom',
notes.student_note as 'Note',
courses.name as 'Matière'
FROM
notes
INNER JOIN students
    ON notes.id_students = students.id
INNER JOIN courses
    ON notes.id_courses = courses.id;

-- Afficher la moyenne par matière d’un élève.

SELECT students.firstname as 'Prénom',
students.lastname as 'Nom',
AVG(notes.student_note) as 'Moyenne',
courses.name as 'Matière'
FROM
notes
INNER JOIN students
    ON notes.id_students = students.id
INNER JOIN courses
    ON notes.id_courses = courses.id
GROUP BY students.id, courses.id;

-- 3. Afficher la moyenne générale de chaque élève (nom et prénom de l'élève, la classe de
-- -- l'élève, le nom du professeur principal, la moyenne)

SELECT students.firstname as 'Prénom',
students.lastname as 'Nom',
AVG(notes.student_note) as 'Moyenne Générale',
CONCAT(grades.level,grades.name) as 'Classe',
CONCAT(teachers.firstname,' ', teachers.lastname) as 'Prof Principal'
FROM
notes
INNER JOIN students
    ON notes.id_students = students.id
INNER JOIN courses
    ON notes.id_courses = courses.id
INNER JOIN grades
    ON students.id_grades = grades.id
INNER JOIN teachers
    ON courses.id = teachers.id_courses
GROUP BY students.id;

--  Afficher tous les élèves d'un professeur (nom et prénom du professeur, la classe du
-- professeur, nom et prénom de l'élève).

SELECT 
CONCAT(students.firstname, ' ', students.lastname) as 'Eleve',
CONCAT(teachers.firstname, ' ', teachers.lastname) as 'Prof',
CONCAT(grades.level, ' ' ,grades.name) as 'Classe'
FROM students
INNER JOIN grades
    ON students.id_grades = grades.id
INNER JOIN notes
    ON students.id = notes.id_students
INNER JOIN courses 
    ON notes.id_courses = courses.id
RIGHT JOIN teachers
    ON courses.id = teachers.id_courses
ORDER BY teachers.id;


-- Afficher la moyenne générale de chaque élève d’une classe (nom et prénom de l'élève, la
-- classe de l'élève, le nom du professeur principal, la moyenne) et trier de la meilleure
-- moyenne à la pire

SELECT 
CONCAT(students.firstname, ' ', students.lastname) as 'Eleve',
CONCAT(teachers.firstname, ' ', teachers.lastname) as 'Prof',
CONCAT(grades.level,grades.name) as 'Classe',
AVG(notes.student_note) as 'Moyenne_Générale'
FROM students
INNER JOIN grades
    ON students.id_grades = grades.id
INNER JOIN notes
    ON students.id = notes.id_students
INNER JOIN courses 
    ON notes.id_courses = courses.id
RIGHT JOIN teachers
    ON courses.id = teachers.id_courses
WHERE CONCAT(grades.level,grades.name) = '3emeA'
GROUP BY students.id
ORDER BY Moyenne_Générale DESC;
