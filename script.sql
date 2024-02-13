create database tea;
use tea;
create table user (
    id int primary key  auto_increment,
    email varchar (30) not null ,
    pswd VARCHAR (255) not null ,
    status int ,
    check (status=0 or status=1) 
);
--0 admin et 1 simple-user
create table teaCategory ( 
    id int primary key  auto_increment,
    name varchar(30) not null,
    output double default 10, -- (rendement) nasiana default mba hitovy daholo
    CHECK (output>=0)
);

create table output (
    id int primary key auto_increment,
    value double,
    theDate date
);

create table parcel (
    id int primary key  auto_increment,
    size double ,
    idTeaCategory int REFERENCES teaCat,
    startDate date not null
);

--cueilleur
create table picker ( 
    id int primary key  auto_increment,
    name varchar (40)
);


create table picking ( --cueillette
    id int primary key  auto_increment,
    idParcel int REFERENCES parcel(id),
    qty double DEFAULT 0 ,
    theDate date not null ,
    idPicker int REFERENCES picker(id),
    CHECK (qty>=0)
);

create table salary (
    salary double DEFAULT 5000, -- salaire pour 1 kg
    salaryDate date not null
);
--catégorie dépense
create table categSpent ( 
    id int primary key  auto_increment,
    name VARCHAR (30)
);
--dépenses
create table spent ( 
    id int primary key  auto_increment,
    idcategSpent int references categSpent(id),
    spent double,
    theDate date,
    CHECK (spent>=0)
);