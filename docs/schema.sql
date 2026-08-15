
Fournisseur(id SERIAL PRIMARY KEY, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, telephone VARCHAR(20) NOT NULL UNIQUE, email VARCHAR(100) NOT NULL UNIQUE);

Approvisionnement(id SERIAL PRIMARY KEY, montantTotal NUMERIC(10,2) NOT NULL, fournisseur_id INT NOT NULL REFERENCES Fournisseur(id));

Produit(id SERIAL PRIMARY KEY, nom VARCHAR(50) NOT NULL, prix NUMERIC(10,2) NOT NULL, quantite INT NOT NULL);

Ligne_Approvisionnement(id SERIAL PRIMARY KEY, prix NUMERIC(10,2) NOT NULL, quantite INT NOT NULL, approvisionnement_id INT NOT NULL REFERENCES Approvisionnement(id), produit_id INT NOT NULL REFERENCES Produit(id));

Client(id SERIAL PRIMARY KEY, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, telephone VARCHAR(20) NOT NULL UNIQUE, email VARCHAR(100) NOT NULL UNIQUE);

Dette(id SERIAL PRIMARY KEY, client_id INT NOT NULL REFERENCES Client(id));

Commande(id SERIAL PRIMARY KEY, nom VARCHAR(50) NOT NULL, montantTotal NUMERIC(10,2) NOT NULL, client_id INT NOT NULL REFERENCES Client(id));

Paiement(id SERIAL PRIMARY KEY, modePaiement VARCHAR(50) NOT NULL, commande_id INT NOT NULL REFERENCES Commande(id));

Ligne_Commande(id SERIAL PRIMARY KEY, quantite INT NOT NULL, commande_id INT NOT NULL REFERENCES Commande(id), produit_id INT NOT NULL REFERENCES Produit(id));