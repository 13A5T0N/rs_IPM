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
