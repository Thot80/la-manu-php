-- Afficher les lignes du registre (titre, nom et prénom du client, date d'emprunt et de retour du
-- livre).

SELECT
books.title AS 'Titre',
register.outdate AS 'Date de Sortie',
register.backdate AS 'Date de Retour',
CONCAT(clients.firstname, ' ', clients.lastname) AS 'Emprunteur'
FROM
register
INNER JOIN books
    ON register.id_books = books.id
INNER JOIN clients
    ON register.id_clients = clients.id;

-- Lister tous les livres (titre, genre, nom et prénom de l'auteur, disponibilité).

SELECT books.title AS "Titre",
genre.name AS "Genre",
CONCAT(authors.firstname, ' ', authors.lastname) AS 'Auteur'
FROM books
INNER JOIN genre
    ON books.id_genre = genre.id
INNER JOIN authors
    ON books.id_Authors = authors.id
INNER JOIN register
    ON register.id_books = books.id
WHERE register.backdate IS NOT NULL;

-- Afficher le nombre total de livres par genre (nom du genre, total de livres correspondants).

SELECT genre.name as "Genre", COUNT(books.id) AS "Nombre de livres"
FROM books INNER JOIN genre
ON books.id_genre = genre.id
GROUP BY genre.id;

-- Afficher le nombre de livres empruntés par genre (trier du plus populaire au moins
-- populaire)

SELECT genre.name as "Genre", COUNT(books.id) AS "Nombre de livres"
FROM books 
INNER JOIN genre
    ON books.id_genre = genre.id
INNER JOIN register
    ON register.id_books = id_books
GROUP BY genre.id
ORDER BY COUNT(books.id) DESC;


-- Afficher les clients qui n’ont pas encore rendu des livres.

SELECT CONCAT(clients.lastname, ' ', clients.firstname) AS 'Débiteur'
FROM clients
INNER JOIN register
    ON clients.id = register.id_clients
WHERE register.backdate IS NULL;



-- Afficher tous les livres de la bibliothèque correspondant au genre préféré d’un client.


SELECT books.title as "Titre",
CONCAT(clients.lastname, ' ', clients.firstname) AS 'Client',
genre.name as 'Genre'
FROM clients
INNER JOIN genre
    ON clients.id_genre = genre.id
INNER JOIN books
    ON genre.id = books.id_genre
WHERE clients.id = 1;
    