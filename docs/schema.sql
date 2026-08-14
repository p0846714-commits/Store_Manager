Fournisseur(id SERIAL, nom VARCHAR(50),prenom VARCHAR(50),telephone VARCHAR(50),email VARCHAR(50));
approvisionnement(id SERIAL,montantTotal NUMERIC(10,2));
produit(id SERIAL, nom VARCHAR(50), prix NUMERIC(10,2),quantite NUMERIC(10,2));
commande(id SERIAL, nom VARCHAR(50),montantTotal NUMERIC(10,2));
paiement(id SERIAL,modePaiement VARCHAR(50));
client(id SERIAL,nom VARCHAR(50),prenom VARCHAR(50),telephone VARCHAR(50) ,email VARCHAR(50));
Dette(id SERIAL);