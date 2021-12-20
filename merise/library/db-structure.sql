#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Authors
#------------------------------------------------------------

CREATE TABLE Authors(
        id        Int  Auto_increment  NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        firstname Varchar (50) NOT NULL
	,CONSTRAINT Authors_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genre
#------------------------------------------------------------

CREATE TABLE genre(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT genre_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: books
#------------------------------------------------------------

CREATE TABLE books(
        id         Int  Auto_increment  NOT NULL ,
        title      Varchar (50) NOT NULL ,
        nb_pages   Int NOT NULL ,
        id_Authors Int NOT NULL ,
        id_genre   Int NOT NULL
	,CONSTRAINT books_PK PRIMARY KEY (id)

	,CONSTRAINT books_Authors_FK FOREIGN KEY (id_Authors) REFERENCES Authors(id)
	,CONSTRAINT books_genre0_FK FOREIGN KEY (id_genre) REFERENCES genre(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: clients
#------------------------------------------------------------

CREATE TABLE clients(
        id               Int  Auto_increment  NOT NULL ,
        lastname         Varchar (50) NOT NULL ,
        firstname        Varchar (50) NOT NULL ,
        birthdate        Date NOT NULL ,
        inscription_date Date NOT NULL ,
        id_genre         Int NOT NULL
	,CONSTRAINT clients_PK PRIMARY KEY (id)

	,CONSTRAINT clients_genre_FK FOREIGN KEY (id_genre) REFERENCES genre(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: register
#------------------------------------------------------------

CREATE TABLE register(
        id         Int  Auto_increment  NOT NULL ,
        outdate    Date NOT NULL ,
        backdate   Date NOT NULL ,
        id_books   Int NOT NULL ,
        id_clients Int NOT NULL
	,CONSTRAINT register_PK PRIMARY KEY (id)

	,CONSTRAINT register_books_FK FOREIGN KEY (id_books) REFERENCES books(id)
	,CONSTRAINT register_clients0_FK FOREIGN KEY (id_clients) REFERENCES clients(id)
)ENGINE=InnoDB;

