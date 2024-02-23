CREATE DATABASE db_digitalCollege;

USE db_digitalCollege;


CREATE TABLE tb_curso(
    curso_id INT(10) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30)
);

CREATE TABLE tb_professor (
    professor_id VARCHAR(100) PRIMARY KEY,
    nome VARCHAR(120),
    email VARCHAR(40),
    disciplina VARCHAR(20)
);

CREATE TABLE tb_alunos (
    aluno_id VARCHAR(100) PRIMARY KEY,
    nome VARCHAR(100),
    matricula INT(10),
    email VARCHAR(50),
    turma_id VARCHAR(100),
    FOREIGN KEY (turma_id) REFERENCES tb_turma(turma_id)
);

CREATE TABLE tb_turma (
    turma_id VARCHAR(100) PRIMARY KEY,
    dia DATETIME,
    horario VARCHAR(20),
    professor_id VARCHAR(100),
    curso_id INT(10),
    FOREIGN KEY (professor_id) REFERENCES tb_professor(professor_id),
    FOREIGN KEY (curso_id) REFERENCES tb_curso(curso_id)
);

CREATE TABLE tb_unidade(
    unidade_id INT(6)PRIMARY KEY,
    nome VARCHAR(100),
    CNPJ INT(20)
)


CREATE TABLE tb_colaboradores (
    id VARCHAR(100) PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    unidade_id INT(6),
    FOREIGN KEY (unidade_id) REFERENCES tb_unidade(unidade_id)
)