use gauchorocket;

insert into lugar(codigo, nombre) values
(1, 'Buenos Aires'),
(2, 'Ankara'),
(3, 'Luna'),
(4, 'Marte'),
(5, 'Europa'),
(6, 'Io'),
(7, 'Encelado'),
(8, 'Titan'),
(9, 'Orbiter Hotel'),
(10, 'EEI'),
(11, 'Ganimedes'),
(12, 'Neptuno');

insert into tipoDeViaje(codigo, descripcion) values
(1, 'Orbitales'),
(2, 'SubOrbitales');

insert into tipoDeEquipo(codigo, descripcion) values
(1, 'Baja aceleracion'),
(2, 'Alta aceleracion'),
(3, 'Orbitales'),
(4, 'SubOrbitales');

insert into equipo(matricula, modelo, capacidad, tipoDeEquipo) values
(1111, 'Calandria', 100, 4),
(2222, 'Colibri', 200, 4),
(3333, 'Modelo Uno', 300, 1),
(4444, 'Guanaco', 400, 2);

insert into viaje (codigo, img, descripcion, precio, nombre, fecha, duracion, origen, destino, tipoDeViaje, codigoEquipo) values
(1, 'img/Luna.jpg', null, 4000, 'Ankara - Luna', '21-10-2019', 8, 2, 3, 2, 1111),
(2, 'img/Luna2.jpg', '', 4000, 'Bs. As. - Luna', '22-10-2019', 8, 1, 3, 2, 2222),
(3, 'img/Marte.jpg', 'Vuelo desde Buenos Aires a Marte en 8hs.', 7000, 'Bs. As. - Marte', '22-10-2019', 8, 1, 4, 2, 2222),
(4, 'img/titan.jpg', 'Vuelo completo desde Buenos Aires hacia Titan en 77 hs.', 10000, 'Bs. As. - Titan', '23-10-2019', 72, 1, 8, 1, 4444),
(5, 'img/marte2.jpg', 'Vuelo desde Ankara hasta Marte en 8hs.', 6300, 'Ankara - Marte', '25-10-2019', 8, 2, 4, 2, 2222),
(6, 'img/titan2.jpg', 'Vuelo desde Ankara hasta Titan en 72hs.', 11000, 'Ankara - Titan', '27-10-2019', 72, 2, 8, 1, 4444);

insert into usuario (nick, dni, rol, nombre, apellido, fnac) values
('usuarioUno', 36897789, false, 'Susana','Oria', '2000.01.01');

insert into login (email, pass, fknick) values
('usuario@gmail.com', md5('pass'), 'usuarioUno');

insert into centroMedico (codigo, turnos, lugar) values
(1, 200, 1);

insert into cliente (usuario, verifMedica, nivelVuelo, lugarMedico) values
('usuarioUno', false, 1, 1);















