--ny nom no mitondra ny photo
create table produit(
    idproduit serial primary key,
    nom varchar(100),
    prix numeric,
    description varchar(3000)
);

create table photoproduit(
    idphotoproduit serial primary key,
    path varchar(100)
);

create table detailproduitphoto(
    idproduit int,
    idphotoproduit int,

);