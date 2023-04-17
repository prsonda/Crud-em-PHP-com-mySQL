CREATE DATABASE novaescola;

CREATE TABLE pessoas (
    id INT NOT NULL AUTO_INCREMENT,
    cpf VARCHAR(15) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    tipo_user VARCHAR(3) NOT NULL,
    data_nasc DATE,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

INSERT INTO pessoas (cpf, nome, senha, tipo_user, data_nasc) VALUES 
('12345678901', 'João da Silva', '123456', '1', '1990-01-01'),
('12345678902', 'Maria da Silva', '123456', '2', '1990-01-01'),
('12345678903', 'José da Silva', '123456', '3', '1990-01-01')