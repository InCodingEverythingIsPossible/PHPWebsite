
DROP DATABASE Wojciechowski_32010_USOS;

CREATE DATABASE Wojciechowski_32010_USOS;

CREATE TABLE Wojciechowski_32010_USOS.discipline_PW(
    discipline_id integer not null auto_increment primary key,
    discipline_name varchar(70) not null
);

INSERT INTO Wojciechowski_32010_USOS.discipline_PW (
    discipline_name
) VALUES
    ('Web technologies'),
    ('Mobile applications'),
    ('Mathematics'),
    ('Software engineering'),
    ('Databases'),
    ('Programming languages');

CREATE TABLE Wojciechowski_32010_USOS.subject_PW(
    subject_id integer not null auto_increment primary key,
    subject_name varchar(70) not null,
    discipline_id integer not null,
    subject_hours integer not null,
    CONSTRAINT discipline_id FOREIGN KEY (discipline_id) REFERENCES Wojciechowski_32010_USOS.discipline_PW (discipline_id)
);

INSERT INTO Wojciechowski_32010_USOS.subject_PW(
    subject_name, 
    discipline_id, 
    subject_hours
) VALUES
    ('Corporate portal', 1, 34),
    ('Database websites', 1, 22),
    ('JavaScripts websites', 1, 28),
    ('Android games', 2, 18),
    ('Test applications', 2, 31),
    ('Statistics', 3, 11),
    ('Real functions', 3, 21),
    ('Application lifecycle', 4, 18),
    ('Software care methods', 4, 23),
    ('Creating databases', 5, 23),
    ('Database management', 5, 27),
    ('Java', 6, 13),
    ('Python', 6 , 19);

CREATE TABLE Wojciechowski_32010_USOS.lecturer_PW(
    lecturer_id integer not null auto_increment primary key,
    lecturer_name varchar(70) not null
);

INSERT INTO Wojciechowski_32010_USOS.lecturer_PW(
    lecturer_name
)VALUES
    ('Smith'),
    ('Brown'),
    ('Hiroki'),
    ('Kowalski');

CREATE TABLE Wojciechowski_32010_USOS.lecture_PW(
    lecture_id integer not null auto_increment primary key,
    subject_id integer not null,
    lecturer_id integer not null,
    FOREIGN KEY (subject_id) REFERENCES Wojciechowski_32010_USOS.subject_PW (subject_id),
    FOREIGN KEY (lecturer_id) REFERENCES Wojciechowski_32010_USOS.lecturer_PW (lecturer_id)
);

INSERT INTO Wojciechowski_32010_USOS.lecture_PW(
    subject_id, lecturer_id
)VALUES
    (2,2), 
    (3,1), 
    (4,1), 
    (5,3);
