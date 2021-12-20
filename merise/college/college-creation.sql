#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: grades
#------------------------------------------------------------

CREATE TABLE grades(
        id    Int  Auto_increment  NOT NULL ,
        name  Varchar (50) NOT NULL ,
        level Varchar (50) NOT NULL
	,CONSTRAINT grades_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: students
#------------------------------------------------------------

CREATE TABLE students(
        id        Int  Auto_increment  NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        firstname Varchar (50) NOT NULL ,
        birthdate Date NOT NULL ,
        id_grades Int NOT NULL
	,CONSTRAINT students_PK PRIMARY KEY (id)

	,CONSTRAINT students_grades_FK FOREIGN KEY (id_grades) REFERENCES grades(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: courses
#------------------------------------------------------------

CREATE TABLE courses(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT courses_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: notes
#------------------------------------------------------------

CREATE TABLE notes(
        id           Int  Auto_increment  NOT NULL ,
        student_note Float ,
        id_students  Int NOT NULL ,
        id_courses   Int NOT NULL
	,CONSTRAINT notes_PK PRIMARY KEY (id)

	,CONSTRAINT notes_students_FK FOREIGN KEY (id_students) REFERENCES students(id)
	,CONSTRAINT notes_courses0_FK FOREIGN KEY (id_courses) REFERENCES courses(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: teachers
#------------------------------------------------------------

CREATE TABLE teachers(
        id         Int  Auto_increment  NOT NULL ,
        lastname   Varchar (50) NOT NULL ,
        firstname  Varchar (50) NOT NULL ,
        email      Varchar (50) NOT NULL ,
        id_courses Int NOT NULL
	,CONSTRAINT teachers_PK PRIMARY KEY (id)

	,CONSTRAINT teachers_courses_FK FOREIGN KEY (id_courses) REFERENCES courses(id)
)ENGINE=InnoDB;

