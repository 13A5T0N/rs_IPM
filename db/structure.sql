create schema ipm;

create table ipm.admin(
admin_id int primary key auto_increment,
admin_voornaam varchar(100),
admin_naam varchar(100),
admin_emacreate table ipm.admin(
admin_id int primary key auto_increment,
admin_voornaam varchar(100),
admin_naam varchar(100),
admin_status varchar(50) default 'actief',
admin_email varchar(50),
admin_pwd text default '$argon2i$v=19$m=65536,t=4,p=1$eGdsWW5GZElVSE83ZmpYaw$Hq/kEc+fRfCfzWwjrWXI40hu04P2BQT0neU86OW3wKo'
);il varchar(50),
admin_pwd varchar(255)
);

create table ipm.log(
log_id int auto_increment primary key, 
log_action varchar(50),
log_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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