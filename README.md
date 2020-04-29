# Au_lac_des_cygnes
Projet de mini site de e-commerce en PHP natif

Ce projet est le fruit d'un challenge : constuire une mini boutique en ligne, dans un délai de trois jours, 
selon un cahier des charges fourni par notre formateur.
L'application web permet de voir la liste des produits sur le site et d'avoir une interface d'administration protégée par mot de passe 
pour administrer les produits (Ajouter, consulter, modifier, supprimer). 

- Le site devait être construit en PHP natif et HTML/CSS.

Pour la base de données, deux tables : 
- Produit (nom, image d'illustration, prix HT, description, champ "visible" pour l'afficher ou non sur le site, date de création, champ pour l'afficher en page d'accueil ou non) 
- Catégorie (nom, couleur)
- Un produit peut avoir une ou plusieurs catégories.

Pour le front-office :
- une page d'accueil présentant l'application et les produits mis en avant, 
- une page de liste des produits, avec pour chaque élément un lien vers une page produit individuelle. 
- La page produit individuelle présentera les différentes caractéristiques du produit, et ses catégories sous forme de petits "badges" avec la couleur d'arrière-plan de la catégorie. 
- Sur une page produit individuelle, tout comme sur la liste, on pourra ajouter un produit à son "panier". 
- Le panier contiendra différents produits, une icône permettra d'y accéder depuis le menu principal. 
- Depuis le panier, on pourra supprimer un produit, ou bien vider le panier en intégralité. 

Pour le back-office, protégé par un formulaire d'authentification :
- une page présentant la liste de tous les produits (donc visibles ou non). 
- Pour chaque produit, un lien de modification amènera vers une page avec un formulaire pour modifier le produit. 
- Depuis la liste des produits on pourra aussi ajouter un nouveau produit ou en supprimer un.



