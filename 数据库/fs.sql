/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2016/11/8 16:42:37                           */
/*==============================================================*/


drop table if exists class;

drop table if exists classspace;

drop table if exists homework;

drop table if exists message_board;

drop table if exists presonspace;

drop table if exists student;

drop table if exists teacher;

drop table if exists user;

/*==============================================================*/
/* Table: class                                                 */
/*==============================================================*/
create table class
(
   classid              int not null,
   teacher_id           int not null,
   student_id           int not null,
   username             char(100) not null,
   primary key (classid)
);

/*==============================================================*/
/* Table: classspace                                            */
/*==============================================================*/
create table classspace
(
   classid              int not null,
   messageid            int not null,
   student_id           int,
   username             char(100) not null,
   message              text not null,
   time                 datetime not null,
   imageid              longblob,
   primary key (messageid)
);

/*==============================================================*/
/* Table: homework                                              */
/*==============================================================*/
create table homework
(
   homeworkid           int not null auto_increment,
   teacher_id           int not null,
   student_id           int not null,
   homework             text not null,
   homework_time        datetime not null,
   username             char(100),
   subject              char(100),
   primary key (homeworkid)
);

/*==============================================================*/
/* Table: message_board                                         */
/*==============================================================*/
create table message_board
(
   teacher_id           int not null,
   student_id           int not null,
   classid              int not null,
   imageid              longblob not null,
   username             char(100) not null,
   time                 datetime not null,
   wordid               int not null auto_increment,
   primary key (wordid)
);

/*==============================================================*/
/* Table: presonspace                                           */
/*==============================================================*/
create table presonspace
(
   student_id           int not null,
   messageid            int not null,
   username             char(100) not null,
   message              text not null,
   time                 datetime not null,
   imageid              longblob,
   primary key (student_id)
);

/*==============================================================*/
/* Table: student                                               */
/*==============================================================*/
create table student
(
   id                   int not null,
   username             char(100) not null,
   student_id           int not null auto_increment,
   classid              int not null,
   studyblock           char(100) not null,
   primary key (student_id)
);

/*==============================================================*/
/* Table: teacher                                               */
/*==============================================================*/
create table teacher
(
   id                   int not null,
   classid              int not null,
   teacher_id           int not null auto_increment,
   username             char(100) not null,
   subject              char(100) not null,
   primary key (teacher_id)
);

/*==============================================================*/
/* Table: user                                                  */
/*==============================================================*/
create table user
(
   id                   int not null auto_increment,
   student_id           int,
   teacher_id           int,
   username             varchar(40) not null,
   password             char(100) not null,
   name                 char(100) not null,
   sex                  char(100),
   birthday             date,
   school               char(100) not null,
   gard                 char(100) not null,
   localation           char(100) not null,
   primary key (id)
);

alter table class add constraint FK_Reference_11 foreign key (teacher_id)
      references teacher (teacher_id) on delete restrict on update restrict;

alter table class add constraint FK_Reference_12 foreign key (student_id)
      references student (student_id) on delete restrict on update restrict;

alter table classspace add constraint FK_Reference_10 foreign key (student_id)
      references student (student_id) on delete restrict on update restrict;

alter table homework add constraint FK_Reference_8 foreign key (teacher_id)
      references teacher (teacher_id) on delete restrict on update restrict;

alter table homework add constraint FK_Reference_9 foreign key (student_id)
      references student (student_id) on delete restrict on update restrict;

alter table message_board add constraint FK_Reference_5 foreign key (teacher_id)
      references teacher (teacher_id) on delete restrict on update restrict;

alter table message_board add constraint FK_Reference_6 foreign key (student_id)
      references student (student_id) on delete restrict on update restrict;

alter table presonspace add constraint FK_Reference_7 foreign key (student_id)
      references student (student_id) on delete restrict on update restrict;

alter table student add constraint FK_Relationship_3 foreign key (id)
      references user (id) on delete restrict on update restrict;

alter table teacher add constraint FK_Relationship_1 foreign key (id)
      references user (id) on delete restrict on update restrict;

alter table user add constraint FK_Relationship_2 foreign key (teacher_id)
      references teacher (teacher_id) on delete restrict on update restrict;

alter table user add constraint FK_Relationship_4 foreign key (student_id)
      references student (student_id) on delete restrict on update restrict;

