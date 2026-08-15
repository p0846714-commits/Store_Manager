# 1. Suivi Chronologique des Phases

Vendredi - Phase 1

 **Heure de réalisation :**

   14h - 17h : Travail sur les diagrammes de cas d'utilisation.
   18h - 20h : Travail sur le diagramme de classes et le schéma relationnel.

 **Ce qui a été fait :**

  De 14h à 17h, j'ai travaillé sur les diagrammes de cas d'utilisation.

  J'ai créé 4 diagrammes de Use Case :

  UseCaseAdmin
  UseCaseInventaire
  UseCaseStock
  UseCaseVente

  Pour chaque diagramme, j'ai essayé d'identifier les fonctionnalités principales et les fonctionnalités secondaires de chaque utilisateur.

  Pour UseCaseAdmin, j'ai identifié les différentes fonctionnalités que l'administrateur peut faire dans l'application.

  Pour UseCaseInventaire, j'ai identifié les fonctionnalités liées à la gestion de l'inventaire.

  Pour UseCaseStock, j'ai identifié les fonctionnalités liées à la gestion du stock.

  Pour UseCaseVente, j'ai identifié les fonctionnalités liées à la vente.

  Ensuite, de 18h à 20h, j'ai travaillé sur le diagramme de classes. Je me suis basé sur les classes que le coach nous a données ainsi que sur les différents Use Case que j'avais réalisés.

  Après avoir terminé le diagramme de classes, j'ai commencé à faire le schéma relationnel de la base de données à partir de celui-ci.

  Enfin, j'ai commencé la partie connexion à la base de données PostgreSQL avec :

   la création de src/Core/Database.php
   la connexion à PostgreSQL avec PDO
   la mise en place de try/catch

 Difficultés / Obstacles

  J'ai surtout eu des difficultés avec le  UseCaseAdmin  parce qu'il y avait beaucoup de fonctionnalités à gérer. Au début, je ne savais pas vraiment comment les organiser.

  J'ai donc essayé de commencer par les fonctionnalités principales, puis de voir les fonctionnalités secondaires qui étaient liées à chacune d'elles.

  J'ai également dû prendre un peu de temps pour comprendre comment passer du diagramme de classes au schéma relationnel de la base de données.

  Livrable : Classes src/Model/Entity/ (Produit.php, Client.php, Dette.php, Commande.php, etc.).
  Commit Git à exécuter :
  git commit -m "feat(entity): creation des entites POO avec encapsulation et methodes metier"

    J’ai créé une classe pour chaque table de ma base de données.

  J’ai utilisé les colonnes de chaque table pour créer les attributs de mes classes.

  J’ai utilisé public pour déclarer mes attributs.

  J’ai ajouté une fonction __construct() dans chaque classe.

  Le constructeur me permet de donner des valeurs aux attributs lorsque je crée un objet.

  Par exemple, dans la classe Produit, j’ai les attributs id, nom, prix et quantite.

  J’ai fait la même chose pour les autres tables comme Fournisseur, Client, Commande, Paiement et Dette.
