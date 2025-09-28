CREATE DATABASE IF NOT EXISTS hospital;

USE hospital;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    telefono VARCHAR(20),
    email VARCHAR(100) UNIQUE
);

CREATE TABLE medicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    especialidad VARCHAR(100) NOT NULL
);

CREATE TABLE turnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATETIME NOT NULL,
    paciente_id INT,
    medico_id INT,
    estado VARCHAR(20) DEFAULT 'pendiente',
    FOREIGN KEY (paciente_id) REFERENCES pacientes(id),
    FOREIGN KEY (medico_id) REFERENCES medicos(id)
);

CREATE TABLE consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    turno_id INT,
    diagnostico TEXT,
    tratamiento TEXT,
    FOREIGN KEY (turno_id) REFERENCES turnos(id)
);

-- Datos de prueba
INSERT INTO pacientes (nombre, apellido, fecha_nacimiento, telefono, email)
VALUES 
('Lucas', 'Palú', '1996-05-20', '+55-99999-1111', 'lucas@example.com'),
('María', 'Gómez', '1988-03-15', '+55-99999-2222', 'maria@example.com');

INSERT INTO medicos (nombre, apellido, especialidad)
VALUES
('Juan', 'Fernández', 'Cardiología'),
('Ana', 'Silva', 'Clínica General');

INSERT INTO turnos (fecha, paciente_id, medico_id, estado)
VALUES
('2025-09-22 10:00:00', 1, 1, 'confirmado'),
('2025-09-23 14:30:00', 2, 2, 'pendiente');
