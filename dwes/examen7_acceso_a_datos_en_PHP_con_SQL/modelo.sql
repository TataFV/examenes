-- Database: Viajes

-- DROP DATABASE "Viajes";

CREATE DATABASE "Viajes"
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Spanish_Spain.1252'
    LC_CTYPE = 'Spanish_Spain.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
CREATE TABLE viajero(
	id INTEGER PRIMARY KEY,
	direccion VARCHAR(70),
	fechaNacimiento DATE
);

CREATE TABLE ciudad(
	id INTEGER PRIMARY KEY,
	nombre VARCHAR (50),
	numHabitantes INTEGER, 
	descripcion VARCHAR (150)	
);

CREATE TABLE viaje(
	id INTEGER PRIMARY KEY,
	idViajero INTEGER,
	idOrigen INTEGER,
	idDestino INTEGER,
	fechaSalida DATE,
	fechaLLegada DATE,
	FOREIGN KEY (idViajero) REFERENCES viajero(id),
	FOREIGN KEY (idOrigen) REFERENCES ciudad(id),
	FOREIGN KEY (idDestino) REFERENCES ciudad(id)
);