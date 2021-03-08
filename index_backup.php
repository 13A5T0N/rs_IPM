<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function create_database($conn)
{
    $sql = "CREATE DATABASE ipm";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully<br>";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

function creat_admin_table($conn)
{
    $sql = ' create table ipm.admin(
        admin_id int primary key auto_increment,
        admin_voornaam varchar(100),
        admin_naam varchar(100),
        admin_status varchar(50) default "actief",
        admin_email varchar(50),
        admin_pwd text default "$argon2i$v=19$m=65536,t=4,p=1$eGdsWW5GZElVSE83ZmpYaw$Hq/kEc+fRfCfzWwjrWXI40hu04P2BQT0neU86OW3wKo"
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Admin Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function log_table($conn)
{
    $sql = 'create table ipm.log(
        log_id int primary key auto_increment , 
        log_action varchar(50),
        admin int,
        log_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        constraint FK_admin_log foreign key(admin) references admin(admin_id) ON DELETE CASCADE
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Log Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_student_table($conn)
{
    $sql = 'create table ipm.studenten(
        student_nr int primary key auto_increment,
        student_voornaam varchar(50) not null,
        student_naam varchar(50) not null,
        student_leeftijd int,
        student_adres varchar(100),
        student_tel varchar(50),
        student_email varchar(50) unique,
        student_saldo int default 100,
        student_password text default "$2y$10$vKU05hV.g3S4GkmLh6ftNuQ3ONsobx3sQh4eirITaI7h32xOyxCV2",
        student_emergency_contact varchar(50),
        student_emergency_relatie varchar(50),
        student_emergency_nummer varchar(50),
        student_emergency_email varchar(50)
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Student Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_docent_table($conn)
{
    $sql = 'create table ipm.docenten(
        docent_id int primary key auto_increment,
        docent_naam varchar(50),
        docent_voornaam varchar(50),
        docent_tel varchar(50),
        docent_email varchar(50)
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Docent Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_richting_table($conn)
{
    $sql = 'create table ipm.richting(
        richting_id int primary key auto_increment,
        richting_naam varchar(50),
        richting_afkorting varchar(20)
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Richting Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_vak_table($conn)
{
    $sql = 'create table ipm.vak(
        vak_id int primary key auto_increment,
        vak_naam varchar(50),
        vak_afkorting varchar(20),
        vak_jaar int(5),
        vak_richting int(10),
        
        constraint FK_vak_richting foreign key (vak_richting) references richting(richting_id) ON DELETE CASCADE 
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Vak Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_klas_table($conn)
{
    $sql = ' create table ipm.klassen(
        klas_id int primary key auto_increment,
        klas_naam varchar(50) not null unique,
        klas_richting int,
        klas_jaar int, 
        
        constraint klas_richting foreign key (klas_richting) references richting(richting_id) ON DELETE CASCADE
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Klas Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_document_table($conn)
{
    $sql = 'create table ipm.document(
        document_id int primary key auto_increment,
        document_naam varchar(50),
        document_tarief double,
        document_path text
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Document Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_rooster_table($conn)
{
    $sql = 'create table ipm.rooster(
        rooster_id int auto_increment primary key, 
        rooster_periode int, 
        rooster_richting int,
        rooster_start date, 
        rooster_eind date, 
        rooster_path text, 
        
        constraint FK_rooster_richting foreign key (rooster_richting) references richting(richting_id)  ON DELETE CASCADE
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Rooster Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function creat_formatie_table($conn)
{
    $sql = 'create table ipm.klas_formatie(
        formatie_id int auto_increment primary key, 
        formatie_klas int, 
        formatie_schooljaar varchar(50),
        
        constraint foreign key (formatie_klas) references klassen(klas_id) ON DELETE CASCADE
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Klas formatie Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_studentF_table($conn)
{
    $sql = 'create table ipm.klassen_formaties(
        formatie_id int auto_increment primary key, 
        klf_formatie int,
        klf_stud int, 
        
        constraint FK_klf_formatie foreign key (klf_formatie) references klas_formatie(formatie_id) ON DELETE CASCADE,
        constraint FK_kl_student foreign key (klf_stud) references studenten(student_nr) ON DELETE CASCADE
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Student Formatie Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

function create_klas_cijfer_table($conn)
{
    $sql = 'create table ipm.cijfers_klas(
        cf_kl int primary key auto_increment,
        cf_klas int, 
        cf_vak int, 
        cf_periode int,
        
        constraint FK_cijfer_klas foreign key (cf_klas) references klassen(klas_id) ON DELETE CASCADE, 
        constraint FK_cijfers_vak foreign key (cf_vak) references vak(vak_id) ON DELETE CASCADE
        );';

    if ($conn->query($sql) === TRUE) {
        echo "Klas cijfer Table created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}


function create_student_cijfer_table($conn)
{
    $sql = '  
    create table ipm.cijfers_student(
    cf_st int auto_increment primary key, 
    cf_klas int,
    cf_student int, 
    cf_cijfer double,
    
    constraint FK_cijer_student foreign key (cf_student) references studenten(student_nr) ON DELETE CASCADE,
    constraint FK_cijfer_klas_student foreign key (cf_klas) references cijfers_klas(cf_kl)  ON DELETE CASCADE
    );';

    if ($conn->query($sql) === TRUE) {
        echo "Student Cijfers created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

function create_admin_accout()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ipm";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    $sql = "INSERT INTO `admin`(`admin_voornaam`, `admin_naam`, `admin_email`) 
    VALUES ('admin','admin','admin')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

create_database($conn);
creat_admin_table($conn);
create_student_table($conn);
log_table($conn);
create_docent_table($conn);
create_richting_table($conn);
create_vak_table($conn);
create_klas_table($conn);
create_document_table($conn);
create_rooster_table($conn);
creat_formatie_table($conn);
create_studentF_table($conn);
create_klas_cijfer_table($conn);
create_student_cijfer_table($conn);
create_admin_accout();
rename("index.php","index_old.php");
rename("index.php.txt","index.php");
// unlink("index_old.php");
header("index.php");
header("Refresh:0");