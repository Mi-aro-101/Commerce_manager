create table Diplome(
    id_diplome serial primary key not null,
    des_diplome varchar(30) not null,
    niv_diplome int not null
);

create table Utilisateur(
    id_uilisateur serial primary key not null,
    nom_utilisateur varchar(30) not null,
    prenom_utilisateur varchar(30) not null,
    mail varchar(50) not null,
    mot_de_passe varchar(50) not null,
    date_de_naissance date not null,
    is_admin boolean default false
);

create table Service(
    id_service serial primary key not null,
    des_service varchar(30) not null
);
