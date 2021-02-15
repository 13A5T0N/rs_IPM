create schema ipm;

create table ipm.admin(
admin_id int primary key auto_increment,
admin_voornaam varchar(100),
admin_naam varchar(100),
admin_email varchar(50),
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
student_email varchar(50),
student_emergency_contact varchar(50),
student_emergency_relatie varchar(50),
student_emergency_nummer varchar(50)
);