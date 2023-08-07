-- Creación de la tabla avión
CREATE TABLE avion (
  id INT PRIMARY KEY NOT NULL,
  Fabricante VARCHAR(255) NOT NULL,
  Modelo VARCHAR(255) NOT NULL
);

-- Creación de la tabla pasajero
CREATE TABLE pasajero (
  identificacion INT PRIMARY KEY NOT NULL,
  usuario VARCHAR(255) NOT NULL,
  Contraseña VARCHAR(255) NOT NULL,
  nombre VARCHAR(255) NOT NULL,
  Pais VARCHAR(255) NOT NULL,
  Ciudad VARCHAR(255) NOT NULL,
  Dirección VARCHAR(255) NOT NULL,
  Teléfono INT NOT NULL,
  Email VARCHAR(255) NOT NULL,
  CONSTRAINT usuario_unique UNIQUE (usuario),
  CONSTRAINT email_unique UNIQUE (Email)
);

-- Creación de la tabla tarjeta
CREATE TABLE tarjeta (
  Numero INT NOT NULL,
  fechavencimiento TIMESTAMP NOT NULL,
  Nombre VARCHAR(255) NOT NULL,
  empresaTarjeta VARCHAR(255) NOT NULL,
  PRIMARY KEY (Numero, fechavencimiento)
);

-- Creación de la tabla reserva
CREATE TABLE reserva (
  codigoreserva VARCHAR(255) PRIMARY KEY NOT NULL,
  pasajero_identificacion INT NOT NULL,
  tarjeta_Numero INT NOT NULL,
  tarjeta_fechavencimiento TIMESTAMP NOT NULL,
  FOREIGN KEY (pasajero_identificacion) REFERENCES pasajero(identificacion),
  FOREIGN KEY (tarjeta_Numero, tarjeta_fechavencimiento) REFERENCES tarjeta(Numero, fechavencimiento)
);

-- Creación de la tabla aerolínea
CREATE TABLE aerolinea (
  nombre VARCHAR(255) PRIMARY KEY NOT NULL
);

-- Creación de la tabla aeropuerto
CREATE TABLE aeropuerto (
  nombre VARCHAR(255) PRIMARY KEY NOT NULL,
  pais VARCHAR(255) NOT NULL,
  ciudad VARCHAR(255) NOT NULL
);

-- Creación de la tabla vuelo
CREATE TABLE vuelo (
  numero VARCHAR(255) PRIMARY KEY NOT NULL,
  aeropuertoOrigen_nombre VARCHAR(255) NOT NULL,
  aeropuertoDestino_nombre VARCHAR(255) NOT NULL,
  fecha_llegada TIMESTAMP NOT NULL,
  fecha_salida TIMESTAMP NOT NULL,
  avion_id INT NOT NULL,
  aerolinea_nombre VARCHAR(255) NOT NULL,
  FOREIGN KEY (aeropuertoOrigen_nombre) REFERENCES aeropuerto(nombre),
  FOREIGN KEY (aeropuertoDestino_nombre) REFERENCES aeropuerto(nombre),
  FOREIGN KEY (avion_id) REFERENCES avion(id),
  FOREIGN KEY (aerolinea_nombre) REFERENCES aerolinea(nombre)
);

-- Creación de la tabla asiento
CREATE TABLE asiento (
  id INT PRIMARY KEY NOT NULL,
  vuelo_numero VARCHAR(255) NOT NULL,
  claseAsiento VARCHAR(255) NOT NULL,
  fila VARCHAR(255) NOT NULL,
  letra VARCHAR(255) NOT NULL,
  FOREIGN KEY (vuelo_numero) REFERENCES vuelo(numero)
);

-- Creación de la tabla horario
CREATE TABLE horario (
  id INT PRIMARY KEY NOT NULL,
  vuelo_numero VARCHAR(255) NOT NULL,
  fecha DATE NOT NULL,
  hora TIME NOT NULL,
  FOREIGN KEY (vuelo_numero) REFERENCES vuelo(numero)
);

-- Creación de la tabla tarifa
CREATE TABLE tarifa (
  id INT PRIMARY KEY NOT NULL,
  vuelo_numero VARCHAR(255) NOT NULL,
  claseAsiento VARCHAR(255) NOT NULL,
  precio DOUBLE NOT NULL,
  FOREIGN KEY (vuelo_numero) REFERENCES vuelo(numero)
);
-----------------------------------------------------------------------------------------------------

-- Insertar tarifas
INSERT INTO tarifa (id, claseAsiento, precio)
VALUES
  (1, 'Economy', 100.00),
  (2, 'Business', 250.00),
  (3, 'First Class', 500.00);

-- Insertar vuelos con números de reserva correspondientes
INSERT INTO vuelo (numero, aeropuertoOrigen_nombre, aeropuertoDestino_nombre, fecha_llegada, fecha_salida)
VALUES
  ('RES001', 'Airport A', 'Airport B', '2023-07-01 10:00:00', '2023-07-01 08:00:00'),
  ('RES002', 'Airport C', 'Airport D', '2023-07-02 14:30:00', '2023-07-02 12:30:00'),
  ('RES003', 'Airport E', 'Airport F', '2023-07-03 18:45:00', '2023-07-03 16:45:00');

-- Insertar reservas
INSERT INTO reserva (codigoreserva)
VALUES
  ('RES001'),
  ('RES002'),
  ('RES003');

-- Insertar horarios
INSERT INTO horario (id, fecha, hora)
VALUES
  (1, '2023-07-01', '08:00:00'),
  (2, '2023-07-02', '12:30:00'),
  (3, '2023-07-03', '16:45:00');

  -- Insertar asientos
INSERT INTO asiento (id, claseAsiento, fila, letra)
VALUES
  (1, 'Economy', '12', 'A'),
  (2, 'Business', '5', 'C'),
  (3, 'Economy', '20', 'F');

-- Insertar aeropuertos primero
INSERT INTO aeropuerto (nombre, país, ciudad)
VALUES
  ('Airport A', 'USA', 'New York'),
  ('Airport B', 'USA', 'Los Angeles'),
  ('Airport C', 'UK', 'London'),
  ('Airport D', 'UK', 'Manchester'),
  ('Airport E', 'Canada', 'Toronto'),
  ('Airport F', 'Canada', 'Vancouver');

-- Asociar vuelo 1 con aeropuertoOrigen y aeropuertoDestino
INSERT INTO vuelo (numero, aeropuertoOrigen_nombre, aeropuertoDestino_nombre, fecha_llegada, fecha_salida)
VALUES
  ('FL001', 'Airport A', 'Airport B', '2023-07-01 10:00:00', '2023-07-01 08:00:00');

-- Asociar vuelo 2 con aeropuertoOrigen y aeropuertoDestino
INSERT INTO vuelo (numero, aeropuertoOrigen_nombre, aeropuertoDestino_nombre, fecha_llegada, fecha_salida)
VALUES
  ('FL002', 'Airport C', 'Airport D', '2023-07-02 14:30:00', '2023-07-02 12:30:00');

-- Asociar vuelo 3 con aeropuertoOrigen y aeropuertoDestino
INSERT INTO vuelo (numero, aeropuertoOrigen_nombre, aeropuertoDestino_nombre, fecha_llegada, fecha_salida)
VALUES
  ('FL003', 'Airport E', 'Airport F', '2023-07-03 18:45:00', '2023-07-03 16:45:00');

INSERT INTO aerolínea (nombre)
VALUES
  ('Airline A'),
  ('Airline B'),
  ('Airline C');

  INSERT INTO tarjeta (Numero, fechavencimiento, Nombre, empresaTarjeta)
VALUES
  (123456789, '2025-12-01', 'John Doe', 'Visa'),
  (987654321, '2024-08-01', 'Alice Smith', 'Mastercard'),
  (555555555, '2023-10-01', 'Bob Johnson', 'American Express');

INSERT INTO avión (id, Fabricante, Modelo)
VALUES
  (1, 'Boeing', '747'),
  (2, 'Airbus', 'A320'),
  (3, 'Embraer', 'E190');


