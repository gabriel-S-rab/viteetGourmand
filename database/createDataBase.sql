CREATE DATABASE  vite_et_gourmand; 
USE vite_et_gourmand ;




CREATE TABLE regime 
(
    regime_id INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(50) NOT NULL
   
);  


CREATE TABLE theme 
(
    theme_id INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(50) NOT NULL 
); 


CREATE TABLE menu 
(
    menu_id INT PRIMARY KEY AUTO_INCREMENT, 
    titre VARCHAR(50) NOT NULL, 
    nombre_personne_minimum INT NOT NULL, 
    prix_par_personne DECIMAL(10,2) NOT NULL,  
    regime_id INT NOT NULL, 
    description TEXT NOT NULL, 
    quantite_restante INT NOT NULL , 
    theme_id INT NOT NULL, 

    CONSTRAINT regime_info
    FOREIGN KEY (regime_id) REFERENCES regime(regime_id),
    CONSTRAINT theme_info
    FOREIGN KEY (theme_id) REFERENCES theme(theme_id)
); 




CREATE TABLE plat 
(
    plat_id INT PRIMARY KEY AUTO_INCREMENT, 
    titre_plat VARCHAR(50) NOT NULL, 
    photo_chemin TEXT
) ; 


CREATE TABLE allergene 
(
    allergene_id INT  PRIMARY KEY AUTO_INCREMENT, 
    libelle VARCHAR(50) NOT NULL
); 
 

CREATE TABLE commande 
(
    id_commande INT PRIMARY KEY AUTO_INCREMENT,
    numero_commande VARCHAR(12) NOT NULL, 
    date_commande DATE NOT NULL, 
    date_prestation DATE NOT NULL,
    heure_livraison TIME NOT NULL , 
    prix_menu DOUBLE NOT NULL, 
    nombre_personne INT NOT NULL , 
    prix_livraison DOUBLE NOT NULL , 
    status_commande VARCHAR(50) NOT NULL ,
    pret_materiel BOOLEAN NOT NULL, 
    restitution_materiel BOOLEAN NOT NULL 

); 

CREATE TABLE role 
(
    role_id INT PRIMARY KEY AUTO_INCREMENT, 
    libelle VARCHAR(50)
);

INSERT INTO role(libelle) VALUES ("utilisateur"),("employer"),("administrateur");

CREATE TABLE utilisateur 
(
utilisateur_id INT PRIMARY KEY AUTO_INCREMENT, 
email VARCHAR(50) , 
password VARCHAR(255) , 
prenom VARCHAR(50) , 
nom VARCHAR(50) , 
date_naissance DATE , 
telephone VARCHAR(50) ,
ville VARCHAR(50) , 
pays VARCHAR(50) , 
rue VARCHAR(50) , 
code_postal VARCHAR(5) ,
role INT , 


CONSTRAINT role_info 
FOREIGN KEY (role) REFERENCES role(role_id)
);




CREATE TABLE avis 
(
    avis_id INT PRIMARY KEY AUTO_INCREMENT, 
    utilisateur_id INT NOT NULL, 
    note INT NOT NULL CHECK (note BETWEEN 1 and 5), 
    description VARCHAR(250) NOT NULL, 
    date_avis VARCHAR(20) NOT NULL,
    status VARCHAR(50) NOT NULL, 

    CONSTRAINT avis_info
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(utilisateur_id)
); 



CREATE TABLE horaire 
(
    horaire_id INT PRIMARY KEY, 
    jour VARCHAR(50) NOT NULL , 
    heure_ouverture TIME NOT NULL, 
    heure_fermeture TIME NOT NULL
); 
-- remplir les horaires 
CREATE TABLE message 
(
    id INT PRIMARY KEY AUTO_INCREMENT, 
    prenom VARCHAR(50) NOT NULL, 
    nom VARCHAR(50) NOT NULL,
    mail VARCHAR(50) NOT NULL, 
    message TEXT NOT NULL 
); 
