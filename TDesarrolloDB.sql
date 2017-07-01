/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     28-06-2017 0:45:54                           */
/*==============================================================*/


drop table if exists cnv_actividad_convenio;

drop table if exists cnv_area_convenio;

drop table if exists cnv_convenio;

drop table if exists cnv_convenio_area_convenio;

drop table if exists cnv_convenio_institucion;

drop table if exists cnv_coordinador_convenio;

drop table if exists cnv_estado_actividad;

drop table if exists cnv_estado_convenio;

drop table if exists cnv_institucion;

drop table if exists cnv_login;

drop table if exists cnv_modalidad_colaboracion;

drop table if exists cnv_modalidad_colaboracion_convenio;

drop table if exists cnv_modalidad_convenio;

drop table if exists cnv_noticia;

drop table if exists cnv_objetivo_convenio;

drop table if exists cnv_pais;

drop table if exists cnv_participante_actividad;

drop table if exists cnv_participante_convenio;

drop table if exists cnv_responsable_actividad;

drop table if exists cnv_responsable_convenio;

drop table if exists cnv_tipo_actividad;

drop table if exists cnv_tipo_convenio;

drop table if exists cnv_tipo_documento;

drop table if exists cnv_tipo_institucion;

/*==============================================================*/
/* Table: cnv_actividad_convenio                                */
/*==============================================================*/
create table cnv_actividad_convenio
(
   ID_ESTADO_ACTIVIDAD  int(11) not null,
   ID_TIPO_ACTIVIDAD    int(11) not null,
   ID_RESPONSABLE_ACTIVIDAD varchar(20) not null,
   FECHA_INICIO         datetime default NULL,
   FECHA_FIN            datetime default NULL,
   ID_ACTIVIDAD_CONVENIO int(11) not null,
   ID_CONVENIO          int(11) default NULL,
   NOMBRE_ACTIVIDAD     varchar(200) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_ACTIVIDAD_CONVENIO)
)
ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_area_convenio                                     */
/*==============================================================*/
create table cnv_area_convenio
(
   ID_AREA_CONVENIO     int(11) not null,
   NOMBRE_AREA_CONVENIO varchar(200) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_AREA_CONVENIO)
)
ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_convenio                                          */
/*==============================================================*/
create table cnv_convenio
(
   ID_CONVENIO          int(11) not null,
   ID_TIPO_CONVENIO     int(11) not null,
   ID_COORDINADOR_CONVENIO varchar(20) default NULL,
   ID_ESTADO_CONVENIO   int(11) not null,
   NOMBRE_CONVENIO      varchar(500) default NULL,
   FECHA_INICIO         datetime default NULL,
   FECHA_TERMINO        datetime default NULL,
   FECHA_FIRMA          datetime default NULL,
   FECHA_DECRETO        datetime default NULL,
   NUMERO_DECRETO       int(11) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   VIGENCIA             int(11) default NULL,
   primary key (ID_CONVENIO)
)
ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_convenio_area_convenio                            */
/*==============================================================*/
create table cnv_convenio_area_convenio
(
   ID_AREA_CONVENIO     int(11) default NULL,
   ID_CONVENIO          int(11) default NULL
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_convenio_institucion                              */
/*==============================================================*/
create table cnv_convenio_institucion
(
   ID_INSTITUCION       int(11) default NULL,
   ID_CONVENIO          int(11) default NULL,
   KEY                  `FK_CONVENIO_INSTITUCION_RELACION` (`ID_CONVENIO`), ADD KEY `FK_INSTITUCION_CONVENIO_RELACION` (`ID_INSTITUCION`)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_coordinador_convenio                              */
/*==============================================================*/
create table cnv_coordinador_convenio
(
   ID_COORDINADOR_CONVENIO varchar(20) not null,
   RUT_COORDINADOR_CONVENIO varchar(10) default NULL,
   NOMBRE_COORDINADOR_CONVENIO varchar(500) default NULL,
   DV_COORDINADOR_CONVENIO int(11) default NULL,
   FECHA_INICIO         datetime default NULL,
   FECHA_FIN            datetime default NULL,
   VIGENTE              char(1) default NULL,
   ESEXTERNO            char(1) default NULL,
   UNIDAD_ACADEMICA     varchar(300) default NULL,
   EMAIL                varchar(500) default NULL,
   ID_INSTITUCION       int(11) default NULL,
   primary key (ID_COORDINADOR_CONVENIO)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_estado_actividad                                  */
/*==============================================================*/
create table cnv_estado_actividad
(
   ID_ESTADO_ACTIVIDAD  int(11) not null,
   NOMBRE_ESTADO        varchar(200) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_ESTADO_ACTIVIDAD)
)
ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_estado_convenio                                   */
/*==============================================================*/
create table cnv_estado_convenio
(
   ID_ESTADO_CONVENIO   int(11) not null,
   NOMBRE_ESTADO_CONVENIO varchar(200) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_ESTADO_CONVENIO)
)
ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_institucion                                       */
/*==============================================================*/
create table cnv_institucion
(
   ID_TIPO_INSTITUCION  int(11) not null,
   NOMBRE_INSTITUCION   varchar(500) not null,
   ID_INSTITUCION       int(11) not null,
   ID_PAIS              int(11) not null,
   VIGENTE              char(1) default NULL,
   ID_INTERNACIONAL     char(1) default NULL,
   RUT_INSTITUCION      varchar(12) default NULL,
   RAZON_SOCIAL_INSTITUCION varchar(500) default NULL,
   DIRECCION_INSTITUCION varchar(500) default NULL,
   TELEFONO_INSTITUCION varchar(100) default NULL,
   EMAIL_INSTITUCION    varchar(200) default NULL,
   LINK_INSTITUCION     varchar(200) default NULL,
   primary key (ID_INSTITUCION)
)
ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_login                                             */
/*==============================================================*/
create table cnv_login
(
   IP_LOGIN             varchar(200) default NULL,
   INICIO_LOGIN         datetime default NULL,
   FIN_LOGIN            datetime default NULL,
   ID_LOGIN             int(11) not null,
   RUT_USUARIO          varchar(10) default NULL,
   DV_USUARIO           int(11) default NULL,
   primary key (ID_LOGIN)
)
ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_modalidad_colaboracion                            */
/*==============================================================*/
create table cnv_modalidad_colaboracion
(
   ID_MODALIDAD_COLABORACION int(11) not null,
   NOMBRE_MODALIDAD_COLABORACION varchar(200) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_MODALIDAD_COLABORACION)
)
ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_modalidad_colaboracion_convenio                   */
/*==============================================================*/
create table cnv_modalidad_colaboracion_convenio
(
   ID_CONVENIO          int(11) default NULL,
   ID_MODALIDAD_COLABORACION int(11) default NULL,
   KEY                  `FK_CONVENIO_MODALIDAD_COLABORACION` (`ID_CONVENIO`), ADD KEY `FK_MODALIDAD_COLABORACION_CONVENIO` (`ID_MODALIDAD_COLABORACION`)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_modalidad_convenio                                */
/*==============================================================*/
create table cnv_modalidad_convenio
(
   ID_MODALIDAD_CONVENIO int(11) not null,
   ID_CONVENIO          int(11) default NULL,
   NOMBRE_MODALIDAD_CONVENIO varchar(200) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_MODALIDAD_CONVENIO)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_noticia                                           */
/*==============================================================*/
create table cnv_noticia
(
   id_noticia           int(11) not null,
   titulo               varchar(500) not null,
   cuerpo               text not null,
   fecha                date not null,
   url_imagen           varchar(500) default NULL,
   vigente              char(1) not null,
   primary key (id_noticia)
)
ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_objetivo_convenio                                 */
/*==============================================================*/
create table cnv_objetivo_convenio
(
   ID_OBJETIVO_CONVENIO int(11) not null,
   ID_CONVENIO          int(11) default NULL,
   TEXTO_OBJETIVO       varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_OBJETIVO_CONVENIO)
)
ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_pais                                              */
/*==============================================================*/
create table cnv_pais
(
   ID_PAIS              int(11) not null,
   NOMBRE_PAIS          varchar(200) default NULL,
   CODIGO_PAIS          varchar(10) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_PAIS)
)
ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_participante_actividad                            */
/*==============================================================*/
create table cnv_participante_actividad
(
   ID_PARTICIPANTE      varchar(20) not null default '',
   RUT_PARTICIPANTE     varchar(10) default NULL,
   DV_PARTICIPANTE      int(11) default NULL,
   NOMBRE_PARTICIPANTE  varchar(200) default NULL,
   CARGO_PARTICIPANTE   varchar(500) default NULL,
   PAIS_PARTICIPANTE    varchar(200) default NULL,
   VIGENTE              char(1) default NULL,
   ESPECIALIDAD         varchar(500) default NULL,
   primary key (ID_PARTICIPANTE)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_participante_convenio                             */
/*==============================================================*/
create table cnv_participante_convenio
(
   RUT_PARTICIPANTE_CONVENIO varchar(10) not null,
   DV_PARTICIPANTE_CONVENIO int(11) not null,
   NOMBRE_PARTICIPANTE_CONVENIO varchar(200) default NULL,
   PATERNO_PARTICIPANTE_CONVENIO varchar(200) default NULL,
   MATERNO_PARTICIPANTE_CONVENIO varchar(200) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (RUT_PARTICIPANTE_CONVENIO, DV_PARTICIPANTE_CONVENIO)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_responsable_actividad                             */
/*==============================================================*/
create table cnv_responsable_actividad
(
   ID_RESPONSABLE_ACTIVIDAD varchar(20) not null,
   NOMBRE_RESPONSABLE   varchar(200) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_RESPONSABLE_ACTIVIDAD)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_responsable_convenio                              */
/*==============================================================*/
create table cnv_responsable_convenio
(
   ID_RESPONSABLE_CONVENIO varchar(200) not null,
   RUT_RESPONSABLE_CONVENIO varchar(10) default NULL,
   DV_RESPONSABLE_CONVENIO int(11) default NULL,
   NOMBRE_RESPONSABLE_CONVENIO varchar(200) default NULL,
   PATERNO_RESPONSABLE_CONVENIO varchar(200) default NULL,
   MATERNO_RESPONSABLE_CONVENIO varchar(200) default NULL,
   VIGENTE              char(1) default NULL,
   EMAIL                varchar(200) not null,
   PASSWORD             varchar(500) not null,
   UNIDAD_ACADEMICA     varchar(500) default NULL,
   primary key (ID_RESPONSABLE_CONVENIO)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_tipo_actividad                                    */
/*==============================================================*/
create table cnv_tipo_actividad
(
   ID_TIPO_ACTIVIDAD    int(11) not null,
   NOMBRE_TIPO_ACTIVIDAD varchar(300) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_TIPO_ACTIVIDAD)
)
ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_tipo_convenio                                     */
/*==============================================================*/
create table cnv_tipo_convenio
(
   ID_TIPO_CONVENIO     int(11) not null,
   NOMBRE_TIPO_CONVENIO varchar(200) default NULL,
   NEMONICO             char(1) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_TIPO_CONVENIO)
)
ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_tipo_documento                                    */
/*==============================================================*/
create table cnv_tipo_documento
(
   ID_TIPO_DOCUMENTO    int(11) not null,
   NOMBRE_TIPO_DOCUMENTO varchar(200) default NULL,
   DESCRIPCION          varchar(500) default NULL,
   VIGENTE              char(1) default NULL,
   primary key (ID_TIPO_DOCUMENTO)
)
ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*==============================================================*/
/* Table: cnv_tipo_institucion                                  */
/*==============================================================*/
create table cnv_tipo_institucion
(
   DESCRIPCION          varchar(200) default NULL,
   ID_TIPO_INSTITUCION  int(11) not null,
   VIGENTE              char(1) default NULL,
   primary key (ID_TIPO_INSTITUCION)
)
ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

alter table cnv_actividad_convenio add constraint FK_ACTIVIDAD_CONVENIO foreign key (ID_CONVENIO)
      references cnv_convenio (ID_CONVENIO);

alter table cnv_convenio add constraint FK_ESTADO_CONVENIO foreign key (ID_ESTADO_CONVENIO)
      references cnv_estado_convenio (ID_ESTADO_CONVENIO);

alter table cnv_convenio add constraint FK_Reference_8 foreign key (ID_COORDINADOR_CONVENIO)
      references cnv_coordinador_convenio (ID_COORDINADOR_CONVENIO) on delete restrict on update restrict;

alter table cnv_convenio_institucion add constraint FK_CONVENIO_INSTITUCION_RELACION foreign key (ID_CONVENIO)
      references cnv_convenio (ID_CONVENIO);

alter table cnv_convenio_institucion add constraint FK_Reference_7 foreign key (ID_INSTITUCION)
      references cnv_institucion (ID_INSTITUCION) on delete restrict on update restrict;

alter table cnv_modalidad_colaboracion_convenio add constraint FK_CONVENIO_MODALIDAD_COLABORACION foreign key (ID_CONVENIO)
      references cnv_convenio (ID_CONVENIO);

alter table cnv_modalidad_convenio add constraint FK_MODALIDAD_CONVENIO foreign key (ID_CONVENIO)
      references cnv_convenio (ID_CONVENIO);

alter table cnv_objetivo_convenio add constraint FK_CONVENIO_OBJETIVO foreign key (ID_CONVENIO)
      references cnv_convenio (ID_CONVENIO);

