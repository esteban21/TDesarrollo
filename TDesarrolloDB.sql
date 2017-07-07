/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     06-07-2017 22:45:27                          */
/*==============================================================*/


drop table if exists cnv_actividad_convenio;

drop table if exists cnv_area_convenio;

drop table if exists cnv_convenio;

drop table if exists cnv_coordinador_convenio;

drop table if exists cnv_estado_actividad;

drop table if exists cnv_estado_convenio;

drop table if exists cnv_institucion;

drop table if exists cnv_objetivo_convenio;

drop table if exists cnv_pais;

drop table if exists cnv_responsable_actividad;

drop table if exists cnv_tipo_actividad;

drop table if exists cnv_tipo_convenio;

drop table if exists cnv_tipo_institucion;

drop table if exists contenidos_en;

drop table if exists coordinados_por;

/*==============================================================*/
/* Table: cnv_actividad_convenio                                */
/*==============================================================*/
create table cnv_actividad_convenio
(
   id_actividad_convenio int not null,
   id_tipo_actividad    int not null,
   id_responsable_actividad varchar(20),
   id_estado_actividad  int not null,
   fecha_inicio         datetime,
   fecha_fin            datetime default null,
   nombre_actividad     varchar(200) default null,
   descripcion          varchar(500),
   vigente              char(1),
   primary key (id_actividad_convenio)
);

/*==============================================================*/
/* Table: cnv_area_convenio                                     */
/*==============================================================*/
create table cnv_area_convenio
(
   id_area_convenio     int not null,
   nombre_area_convenio varchar(200) default null,
   descripcion          varchar(500),
   vigente              char(1),
   primary key (id_area_convenio)
);

/*==============================================================*/
/* Table: cnv_convenio                                          */
/*==============================================================*/
create table cnv_convenio
(
   id_convenio          int not null,
   id_institucion       int,
   id_tipo_convenio     int,
   id_estado_convenio   int not null,
   id_objetivo_convenio int,
   id_actividad_convenio int,
   nombre_convenio      varchar(500),
   fecha_inicio         datetime,
   fecha_termino        datetime,
   fecha_firma          datetime,
   fecha_decreto        datetime,
   numero_decreto       int,
   descripcion          varchar(500),
   vigente              char(1),
   vigencia             int,
   primary key (id_convenio)
);

/*==============================================================*/
/* Table: cnv_coordinador_convenio                              */
/*==============================================================*/
create table cnv_coordinador_convenio
(
   id_coordinador_convenio varchar(20) not null,
   rut_coordinador_convenio varchar(10) default null,
   nombre_coordinador_convenio varchar(500) default null,
   dv_coordinador_convenio int default null,
   fecha_inicio         datetime,
   fecha_fin            datetime default null,
   vigente              char(1),
   esexterno            char(1) default null,
   unidad_academica     varchar(300) default null,
   email                varchar(500) default null,
   id_institucion2      int default null,
   primary key (id_coordinador_convenio)
);

/*==============================================================*/
/* Table: cnv_estado_actividad                                  */
/*==============================================================*/
create table cnv_estado_actividad
(
   id_estado_actividad  int not null,
   nombre_estado        varchar(200) default null,
   descripcion          varchar(500),
   vigente              char(1),
   primary key (id_estado_actividad)
);

/*==============================================================*/
/* Table: cnv_estado_convenio                                   */
/*==============================================================*/
create table cnv_estado_convenio
(
   id_estado_convenio   int not null,
   nombre_estado_convenio varchar(200) default null,
   descripcion          varchar(500),
   vigente              char(1),
   primary key (id_estado_convenio)
);

/*==============================================================*/
/* Table: cnv_institucion                                       */
/*==============================================================*/
create table cnv_institucion
(
   nombre_institucion   varchar(500) not null,
   id_institucion       int not null,
   id_pais              int not null,
   id_tipo_institucion  int,
   vigente              char(1),
   rut_institucion      varchar(12) default null,
   razon_social_institucion varchar(500) default null,
   direccion_institucion varchar(500) default null,
   telefono_institucion varchar(100) default null,
   email_institucion    varchar(200) default null,
   link_institucion     varchar(200) default null,
   primary key (id_institucion)
);

/*==============================================================*/
/* Table: cnv_objetivo_convenio                                 */
/*==============================================================*/
create table cnv_objetivo_convenio
(
   id_objetivo_convenio int not null,
   texto_objetivo       varchar(500) default null,
   vigente              char(1),
   primary key (id_objetivo_convenio)
);

/*==============================================================*/
/* Table: cnv_pais                                              */
/*==============================================================*/
create table cnv_pais
(
   id_pais              int not null,
   nombre_pais          varchar(200) default null,
   codigo_pais          varchar(10) default null,
   vigente              char(1),
   primary key (id_pais)
);

/*==============================================================*/
/* Table: cnv_responsable_actividad                             */
/*==============================================================*/
create table cnv_responsable_actividad
(
   id_responsable_actividad varchar(20) not null,
   nombre_responsable   varchar(200) default null,
   vigente              char(1),
   primary key (id_responsable_actividad)
);

/*==============================================================*/
/* Table: cnv_tipo_actividad                                    */
/*==============================================================*/
create table cnv_tipo_actividad
(
   id_tipo_actividad    int not null,
   nombre_tipo_actividad varchar(300) default null,
   descripcion          varchar(500),
   vigente              char(1),
   primary key (id_tipo_actividad)
);

/*==============================================================*/
/* Table: cnv_tipo_convenio                                     */
/*==============================================================*/
create table cnv_tipo_convenio
(
   id_tipo_convenio     int not null,
   nombre_tipo_convenio varchar(200) default null,
   nemonico             char(1) default null,
   vigente              char(1),
   primary key (id_tipo_convenio)
);

/*==============================================================*/
/* Table: cnv_tipo_institucion                                  */
/*==============================================================*/
create table cnv_tipo_institucion
(
   descripcion          varchar(500),
   id_tipo_institucion  int not null,
   vigente              char(1),
   primary key (id_tipo_institucion)
);

/*==============================================================*/
/* Table: contenidos_en                                         */
/*==============================================================*/
create table contenidos_en
(
   id_convenio          int not null,
   id_area_convenio     int not null,
   primary key (id_convenio, id_area_convenio)
);

/*==============================================================*/
/* Table: coordinados_por                                       */
/*==============================================================*/
create table coordinados_por
(
   id_convenio          int not null,
   id_coordinador_convenio varchar(20) not null,
   primary key (id_convenio, id_coordinador_convenio)
);

alter table cnv_actividad_convenio add constraint fk_incluye foreign key (id_tipo_actividad)
      references cnv_tipo_actividad (id_tipo_actividad) on delete restrict on update restrict;

alter table cnv_actividad_convenio add constraint fk_responsable_por foreign key (id_responsable_actividad)
      references cnv_responsable_actividad (id_responsable_actividad) on delete restrict on update restrict;

alter table cnv_actividad_convenio add constraint fk_se_encuentra_en foreign key (id_estado_actividad)
      references cnv_estado_actividad (id_estado_actividad) on delete restrict on update restrict;

alter table cnv_convenio add constraint fk_corresponde foreign key (id_actividad_convenio)
      references cnv_actividad_convenio (id_actividad_convenio) on delete restrict on update restrict;

alter table cnv_convenio add constraint fk_encuentran_en foreign key (id_estado_convenio)
      references cnv_estado_convenio (id_estado_convenio) on delete restrict on update restrict;

alter table cnv_convenio add constraint fk_pertenecen_a foreign key (id_institucion)
      references cnv_institucion (id_institucion) on delete restrict on update restrict;

alter table cnv_convenio add constraint fk_posee foreign key (id_tipo_convenio)
      references cnv_tipo_convenio (id_tipo_convenio) on delete restrict on update restrict;

alter table cnv_convenio add constraint fk_tiene foreign key (id_objetivo_convenio)
      references cnv_objetivo_convenio (id_objetivo_convenio) on delete restrict on update restrict;

alter table cnv_institucion add constraint fk_pertenece_a foreign key (id_pais)
      references cnv_pais (id_pais) on delete restrict on update restrict;

alter table cnv_institucion add constraint fk_tipo_de foreign key (id_tipo_institucion)
      references cnv_tipo_institucion (id_tipo_institucion) on delete restrict on update restrict;

alter table contenidos_en add constraint fk_contenidos_en foreign key (id_convenio)
      references cnv_convenio (id_convenio) on delete restrict on update restrict;

alter table contenidos_en add constraint fk_contenidos_en2 foreign key (id_area_convenio)
      references cnv_area_convenio (id_area_convenio) on delete restrict on update restrict;

alter table coordinados_por add constraint fk_coordinados_por foreign key (id_convenio)
      references cnv_convenio (id_convenio) on delete restrict on update restrict;

alter table coordinados_por add constraint fk_coordinados_por2 foreign key (id_coordinador_convenio)
      references cnv_coordinador_convenio (id_coordinador_convenio) on delete restrict on update restrict;

