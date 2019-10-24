use gauchorocket;

select distinct l.nombre as codigo, v.origen as nombre
from viaje as v inner join lugar as l on v.origen = l.codigo;
select distinct l.nombre as codigo, v.origen as nombre from viaje as v inner join lugar as l on v.origen = l.codigo;

select *
from viaje
where origen = 1 and destino = 3;
select * from viaje where origen = 1 and destino = 3;
