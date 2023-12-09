mysql -u root -p

CREATE DATABASE vittaclinic;
use vittaclinic;

CREATE TABLE pacientes (
    email varchar (100) NOT NULL,
    senha varchar (100) NOT NULL,
    PRIMARY KEY (email)
);

CREATE TABLE medicos (
    email varchar (100) NOT NULL,
    senha varchar (100) NOT NULL,
    PRIMARY KEY (email)
);

CREATE TABLE IF NOT EXISTS horarios_medicoteste (
    horario DATETIME NOT NULL,
    disponivel BOOLEAN NOT NULL,
    email_paciente_fk varchar (100) NOT NULL,
    email_medico_fk varchar (100) NOT NULL,
    PRIMARY KEY (horario),
    FOREIGN KEY (email_paciente_fk) REFERENCES paciente(email),
    FOREIGN KEY (email_medico_fk) REFERENCES medico(email)
);

INSERT INTO pacientes VALUES("paciente@teste.com","123");
INSERT INTO medicos VALUES("medico@teste.com","123");

DELIMITER //
    SET @contador := 0;
    SET @data_atual := '2023-12-01';
    WHILE @contador < 31 DO
        SET @contadorhora := 0;
        WHILE @contadorhora < 16 DO
            INSERT INTO horarios_medicoteste (horario, disponivel, email_paciente_fk, email_medico_fk)
            SELECT DATE_ADD(CONCAT(@data_atual, ' 09:00:00'), INTERVAL @contadorhora * 30 MINUTE), 0, p.email, m.email
            FROM paciente p, medico m
            WHERE p.email = ''
            AND m.email = 'medico@teste.com'; -- Substitua 'medico@teste.com' pelo e-mail do médico desejado

            SET @contadorhora := @contadorhora + 1;
        END WHILE;
        SET @contador := @contador + 1;
        SET @data_atual := DATE_ADD(@data_atual, INTERVAL 1 DAY);
    END WHILE//
DELIMITER ;

SELECT * FROM medicos;
SELECT * FROM pacientes;
SELECT * FROM horario_medicoteste;