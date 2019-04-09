create database depo;
use depo;

/*  DATOS NECESARIOS PARA LOA INGRESO DE MERCADERIA*/ 
CREATE TABLE clientes(
id 		int(255) auto_increment not null,
nombre		varchar(50) not null,
direccion	varchar(100) not null,
telefono	varchar(15) not null,
cuit		varchar(20) not null,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT uq_nombre UNIQUE(nombre)
)ENGINE=InnoDb;
	
CREATE TABLE proveedores(
id 			int(255) auto_increment not null,
nombre		varchar(50) not null,
CONSTRAINT pk_proovedor PRIMARY KEY(id),
CONSTRAINT uq_nombre UNIQUE(nombre)
)ENGINE=InnoDb;

CREATE TABLE posiciones(
id 			int(255) auto_increment not null,
pasillo		varchar(3) not null,
columna		varchar(2) not null,
fila		varchar(2) not null,
altura		real not null,
contiene 	int(2),
CONSTRAINT pk_posiciones PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE unidades_med(
id 			int(2) auto_increment not null,
nombre		varchar(10) not null,
CONSTRAINT pk_unidadMed PRIMARY KEY(id),
CONSTRAINT uq_und UNIQUE(nombre)
)ENGINE=InnoDb;

CREATE TABLE tipos_articulos(
id 		int(255) auto_increment not null,
nombre	varchar(20) not null,
CONSTRAINT pk_tipos PRIMARY KEY(id),
CONSTRAINT uq_tipo UNIQUE(nombre)
)ENGINE=InnoDb;

CREATE TABLE articulos(
id 				int(255) auto_increment not null,
codigo			varchar(15) not null,
descripcion		varchar(50) not null,
idCliente		int(255) not null,
idUndMed		int(2) not null,
idTipo			int(255) not null,
CONSTRAINT pk_ariticulos PRIMARY KEY(id),
CONSTRAINT fk_ariticulos_cliente FOREIGN KEY(idCliente) REFERENCES clientes(id),
CONSTRAINT fk_ariticulos_unidadMed FOREIGN KEY(idUndMed) REFERENCES unidades_med(id),
CONSTRAINT fk_ariticulos_tipo FOREIGN KEY(idTipo) REFERENCES tipos_articulos(id)
)ENGINE=InnoDb;


/* TABLAS RELACIONADAS A USUARIOS*/
CREATE TABLE niveles_acceso(
id 			int(255) auto_increment not null,
nombre		varchar(20) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE usuarios(
id 			int(255) auto_increment not null,
nombre		varchar(20) not null,
idNivel		int(2) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT fk_usuarios_nivel FOREIGN KEY(idNivel) REFERENCES niveles_acceso(id),
CONSTRAINT uq_nombre UNIQUE(nombre)
)ENGINE=InnoDb;



/*  TABLAS PARA LAS ORDENES DE SALIDAS, ENTRADAS y REALIZACION DE PEDIDOS */ 
CREATE TABLE tipos_ordenes(
id 			int(2) auto_increment not null,
nombre		varchar(20) not null,
CONSTRAINT pk_tipoOrdenes PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE ordenes(
id              	int(255) auto_increment not null,
numero          	varchar(10) not null,
tipoOrden     		varchar(1) not null,
fechaCreacion   	date not null,
fechaUtilizacion 	date not null,
estado          	varchar(1) not null,
fechaCierre     	date,
idCliente       	int(255) not null,
observacion    		varchar(255) not null,
CONSTRAINT pk_oredenes PRIMARY KEY(id),
CONSTRAINT fk_ordenes_cliente FOREIGN KEY (idCliente) REFERENCES clientes(id)
)ENGINE=InnoDb;

CREATE TABLE tipo_sacado(
id 				int(2) auto_increment not null,
nombre 			varchar(10) not null,
CONSTRAINT pk_tipoSacado PRIMARY KEY(id)
)ENGINE=InnoDb


CREATE TABLE detalle_ordenes(
id              int(255) auto_increment not null,
idOrden         int(255) not null,
idArticulo      int(255) not null,
idPosicion      int(255) ,
cantidad        int not null,
IdTipoSacado	int,
CONSTRAINT pk_detalleOrden PRIMARY KEY(id),
CONSTRAINT fk_detalleOrden_orden FOREIGN KEY (idOrden) REFERENCES ordenes(id),
CONSTRAINT fk_detalleOrden_articulo FOREIGN KEY (idArticulo) REFERENCES articulos(id),
CONSTRAINT fk_detalleOrden_posicion FOREIGN KEY (idPosicion) REFERENCES posiciones(id),
CONSTRAINT fk_detalleOrden_tipoSacado FOREIGN KEY (idTipoSacado) REFERENCES tipo_sacado(id)
)ENGINE=InnoDb;


/* TABLA NECESARIAS PARA LA ENTRADA Y SALIDA DE MERCADERIA*/ 

CREATE TABLE remitos(
id              int(255) auto_increment not null,
numero          varchar(12) not null,
fecha           date not null,
tipo            varchar(2) not null,
idOrden         int(255) not null,
idCliente       int(255) not null,
destinatario    varchar(30) not null,
direccion       varchar(100) not null,
idProveedor     int(255) not null,
horaLlegada     DATETIME,
horainicio      DATETIME,
horaSalida      DATETIME,
CONSTRAINT pk_remitos PRIMARY KEY(id),
CONSTRAINT fk_remitos_orden FOREIGN KEY(idOrden) REFERENCES ordenes(id),
CONSTRAINT fk_remitos_cliente FOREIGN KEY(idCliente) REFERENCES clientes(id),
CONSTRAINT fk_remitos_proveedor FOREIGN KEY(idProveedor) REFERENCES proveedores(id)
)ENGINE=InnoDb;

CREATE TABLE hojas_Rutas(
id              int(255) auto_increment not null,
id              varchar(12) not null,
fechaCreacion   date not null,
fechaDespacho   date not null,
CONSTRAINT pk_hojasRutas PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE detalles_hr(
id              int(255) auto_increment not null,
idHR            int(255) not null,
idRemito        int(255) not null,
bultos          int(4) not null,
CONSTRAINT pk_detallesHR PRIMARY KEY(id),
CONSTRAINT fk_detallesHR_hojaRuta FOREIGN  KEY(idHR) REFERENCES hojas_rutas(id),
CONSTRAINT fk_detallesHR_remito FOREIGN  KEY(idRemito) REFERENCES remitos(id)
)ENGINE=InnoDB;


/* TABLA CON EL DETALLE DE STOCK DEPOSITO*/

CREATE TABLE stock(
id              int(255) auto_increment not null,
fecha           date not null,
idCliente       int(255) not null,
idProveedor     int(255) not null,
idRemitoIng     int(255) not null,
idArticulo      int(255) not null,
cantidad	    int(55) not null,
idUndMed	    int(2) not null,
idPosicion      int(255) not null,
idRemitoEgr     int(255) not null,
idOrden         int(255) not null,
obsercacion     varchar(255) not null,
CONSTRAINT pk_stock PRIMARY KEY(id),
CONSTRAINT fk_deposito_cliente FOREIGN  KEY(idCliente) REFERENCES clientes(id),
CONSTRAINT fk_deposito_Proveedor FOREIGN  KEY(idProveedor) REFERENCES proveedores(id),
CONSTRAINT fk_deposito_remitoIng FOREIGN  KEY(idRemitoIng) REFERENCES remitos(id),
CONSTRAINT fk_deposito_articulo FOREIGN  KEY(idArticulo) REFERENCES articulos(id),
CONSTRAINT fk_deposito_undMed FOREIGN  KEY(idundMed) REFERENCES unidades_med(id),
CONSTRAINT fk_deposito_remitoEgr FOREIGN  KEY(idRemitoEgr) REFERENCES remitos(id),
CONSTRAINT fk_deposito_Orden FOREIGN  KEY(idOrden) REFERENCES ordenes(id)
)ENGINE=InnoDB;

CREATE TABLE ajuste(
id 		      	int(255) auto_increment not null,
descripcion		varchar(255) not null,
fecha  			date not null,
idStock			int(255) auto_increment not null,
cantidad 		int not null,
tipo 			char check(tipo="p" or tipo="n") not null,
CONSTRAINT pk_ajuste PRIMARY KEY(id),
CONSTRAINT fk_ajuste_stock FOREIGN key(idStock) REFERENCES stock(id)
)ENGINE=InnoDB;

INSERT INTO tipo_sacado(nombre) VALUES('parcial'),('completo');
INSERT INTO tipos_ordenes(nombre) VALUES('ingreso'),('salida');