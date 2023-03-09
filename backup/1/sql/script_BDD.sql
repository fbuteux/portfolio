drop database portfolio;
create database portfolio;
show databases;
use portfolio;
 
drop table if exists documentation;

CREATE TABLE DOCUMENTATION
(iddoc INTEGER (5) auto_increment,
nomdoc varchar (40),
dateimport varchar (10), 
description varchar (1500),
categorie INTEGER (10),
chemin varchar (99),
constraint PK_DOC primary key (iddoc)
)Engine = Innodb;
desc documentation;


INSERT INTO DOCUMENTATION (iddoc,nomdoc,dateimport,description,categorie,chemin) 
VALUES (2,'DAMN VLAN','10/08/20','administration détaillée de vlan',1,'http://localhost/portfolio/docs/fiche_HSRP.pdf');

INSERT INTO DOCUMENTATION (iddoc,nomdoc,dateimport,description,categorie) 
VALUES (2,'how to install nagios','15/08/20','installation nagios sur Linux',2,);

INSERT INTO DOCUMENTATION (iddoc,nomdoc,dateimport,description,categorie) 
VALUES (3,'what is HSRP ','10/08/20','cours et administration HSRP',3,);
SELECT * FROM DOCUMENTATION;

