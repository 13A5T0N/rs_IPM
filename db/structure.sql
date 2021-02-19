create schema ipm;

create table ipm.admin(
admin_id int primary key auto_increment,
admin_voornaam varchar(100),
admin_naam varchar(100),
admin_status varchar(50) default 'actief',
admin_email varchar(50),
admin_pwd text default '$argon2i$v=19$m=65536,t=4,p=1$eGdsWW5GZElVSE83ZmpYaw$Hq/kEc+fRfCfzWwjrWXI40hu04P2BQT0neU86OW3wKo'
);

create table ipm.log(
log_id int auto_increment primary key, 
log_action varchar(50),
admin int,
log_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

constraint FK_admin_log foreign key (admin) references admin(admin_id) on delete cascade
);

create table ipm.studenten(
student_nr int primary key auto_increment,
student_voornaam varchar(50) not null,
student_naam varchar(50) not null,
student_leeftijd int,
student_adres varchar(100),
student_tel varchar(50),
student_email varchar(50) unique,
student_password text default '$2y$10$vKU05hV.g3S4GkmLh6ftNuQ3ONsobx3sQh4eirITaI7h32xOyxCV2',
student_emergency_contact varchar(50),
student_emergency_relatie varchar(50),
student_emergency_nummer varchar(50),
student_emergency_email varchar(50)
);

create table ipm.docenten(
docent_id int primary key auto_increment,
docent_naam varchar(50),
docent_voornaam varchar(50),
docent_tel varchar(50),
docent_email varchar(50)
);

create table ipm.richting(
richting_id int primary key auto_increment,
richting_naam varchar(50),
richting_afkorting varchar(20)
);

create table ipm.vak(
vak_id int primary key auto_increment,
vak_naam varchar(50),
vak_afkorting varchar(20),
vak_jaar int(5),
vak_richting int(10),

constraint FK_cak_richting foreign key (vak_richting) references richting(richting_id)
);

create table ipm.klassen(
klas_id int primary key auto_increment,
klas_naam varchar(50),
klas_richting int,
klas_jaar int, 

constraint klas_richting foreign key (klas_richting) references richting(richting_id)
);