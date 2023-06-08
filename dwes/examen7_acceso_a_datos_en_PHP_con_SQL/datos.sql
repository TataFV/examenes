
INSERT INTO viajero (id, direccion, fechaNacimiento) VALUES (1, 'Garcia Barbon, 52', '2008-02-20');
INSERT INTO viajero (id, direccion, fechaNacimiento) VALUES (2, 'Barcelona, 79', '1982-05-07');
INSERT INTO viajero (id, direccion, fechaNacimiento) VALUES (3, 'Serrano, 23', '1970-03-15');
INSERT INTO viajero (id, direccion, fechaNacimiento) VALUES (4, 'Garcia Barbon, 52', '1965-11-01');

INSERT INTO ciudad (id, nombre, numHabitantes, descripcion) VALUES (1, 'Madrid', '3230000', 'Es un municipio y una ciudad de España. La localidad, con categoria historica de villa, es la capital del Estado y de la Comunidad de Madrid.');
INSERT INTO ciudad (id, nombre, numHabitantes, descripcion) VALUES (2, 'Florencia', '378239', 'Es una ciudad situada en el norte de la región central de Italia, capital y ciudad mas poblada de la region de Toscana.');
INSERT INTO ciudad (id, nombre, numHabitantes, descripcion) VALUES (3, 'Tokio', '13960000', 'Es la capital de Japon ubicada en el centro este de la isla de Honshu. Es actualmente la ciudad mas poblada del mundo.');
INSERT INTO ciudad (id, nombre, numHabitantes, descripcion) VALUES (4, 'Lima', '33720000', 'Es la capital de la Republica del Peru.12​ Esta ubicada en la costa central del pais, a orillas del océano Pacifico.');

INSERT INTO viaje (id, idViajero, idOrigen, idDestino, fechaSalida, fechaLLegada) VALUES (1, 4, 3, 1, '2023-06-20', '2023-08-20');
INSERT INTO viaje (id, idViajero, idOrigen, idDestino, fechaSalida, fechaLLegada) VALUES (2, 1, 2, 3, '2023-07-10', '2023-09-05');
INSERT INTO viaje (id, idViajero, idOrigen, idDestino, fechaSalida, fechaLLegada) VALUES (3, 3, 1, 4, '2023-08-22', '2023-10-15');
INSERT INTO viaje (id, idViajero, idOrigen, idDestino, fechaSalida, fechaLLegada) VALUES (4, 3, 4, 2, '2024-12-02', '2024-03-24');
