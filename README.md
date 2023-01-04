# GBAF_site

## Réalisez l'extranet d'un groupe bancaire.

Généralités. Le Groupement Banque Assurance Français (GBAF) est une fédération représentant les 6 grands groupes français : ● BNP Paribas ; ● BPCE ; ● Crédit Agricole ; ● Crédit Mutuel-CIC ; ● Société Générale ; ● La Banque Postale.

Même s’il existe une forte concurrence entre ces entités, elles vont toutes travailler de la même façon pour gérer près de 80 millions de comptes sur le territoire national. Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.

Contexte du projet. Les produits et services bancaires sont nombreux et très variés. Afin de renseigner au mieux les clients, les salariés des 340 agences des banques et assurances en France (agents, chargés de clientèle, conseillers financiers, etc.) recherchent sur Internet des informations portant sur des produits bancaires et des financeurs, entre autres. Aujourd’hui, il n’existe pas de base de données pour chercher ces informations de manière fiable et rapide ou pour donner son avis sur les partenaires et acteurs du secteur bancaire, tels que les associations ou les financeurs solidaires. Pour remédier à cela, le GBAF souhaite proposer aux salariés des grands groupes français un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers. Chaque salarié pourra ainsi poster un commentaire et donner son avis. Le but du projet est donc de développer un extranet donnant accès à ces informations.

Détails du projet. À réaliser : ● développement du produit ; ● présentation de la liste des différents acteurs du système bancaire français.

Détails de la mission. Éléments techniques à respecter : ● conception du frontend ; ● développement en HTML5 ; ● mise en forme et mise en page en CSS3, en respectant le zoning et le wireframe fournis ; ● modélisation de la base de données via phpMyAdmin ; ● importation des données dans la base de données ; ● gestion de la base de données en SQL ; ● connexion à la base de données en PHP ; ● consommation des données de la base SQL grâce au langage PHP ; ● utilisation de requêtes SQL pour permettre l’acquisition et la gestion des données.

Particularités du site. ● Site responsive : possibilité de consulter le site au bureau ou en itinérance à partir de différentes supports (tablettes et smartphones).

Fonctionnalités de l’application. La structure du site sera développée en HTML5, la mise en forme et la mise en page seront faites en CSS3. Le site sera proposé à tous les utilisateurs en situation de mobilité et/ou sédentarisés dans un bureau. Il est donc impératif de mettre en place au moins un breakpoint pertinent. La connexion avec la base de données s’effectuera via PDO en PHP. Les langages PHP et SQL seront utilisés pour traiter les interactions entre le site et la base de données.

Connexion/déconnexion : ● Connexion requise pour accéder aux informations du site via un UserName et un Password. ● Au chargement de la page, les champs UserName et Password prennent toute la largeur de l’écran, entre le header et le footer. ● À la première connexion, l'utilisateur peut créer son compte via une page d’inscription. ● L’utilisateur peut modifier ses informations personnelles à tout moment via la page « Paramètres du compte ». ● Champs requis sur la page d’inscription : ○ Nom ; ○ Prénom ; ○ UserName ; ○ Password ; ○ Question secrète ; ○ Réponse à la question secrète. ● Si l'utilisateur oublie son mot de passe, il peut saisir son UserName et répondre à la question secrète pour en créer un nouveau. ● Quand l’utilisateur est connecté, son nom et son prénom sont indiqués dans le header sur l’ensemble des pages. ● Un bouton « Se déconnecter » est présent dans le header. ● Si l'utilisateur est déconnecté, il est redirigé automatiquement vers la première page pour une nouvelle connexion via un UserName et un Password.

Utilisateur connecté : Sont présents sur la page : ● présentation succincte du GBAF ; ● liste des différents acteurs/partenaires du système bancaire français comprenant : ○ logo ; ○ titre ; ○ présentation de l’entreprise avec affichage de la première ligne de texte ; ○ bouton « Afficher la suite » (permettant d’ouvrir une nouvelle page pour chaque acteur/partenaire).

Détails de la page partenaire comprenant : ● logo ; ● titre ; ● texte de description complet ; ● bouton Like/Dislike permettant de donner un avis (professionnel et constructif) en un clic sur l’acteur/partenaire ; ● indication du nombre de Like/Dislike ; ● bouton pour poster un nouveau commentaire ; ● liste des commentaires sur cet acteur/partenaire incluant : ○ le prénom de l’utilisateur qui a laissé le commentaire ; ○ la date de publication ; ○ le texte.

Informations complémentaires : pour chaque nouveau commentaire, le prénom (de la personne connectée) et la date (du jour) seront remplis automatiquement.

[Partenaires_tables+2.zip](https://github.com/TonyVice-cpu/GBAF_site/files/10275233/Partenaires_tables%2B2.zip)
[wireframeZoning-20190705T132228Z-001+(1).zip](https://github.com/TonyVice-cpu/GBAF_site/files/10275234/wireframeZoning-20190705T132228Z-001%2B.1.zip)
[Compte-rendu+réunion+de+lancement.pdf](https://github.com/TonyVice-cpu/GBAF_site/files/10275235/Compte-rendu%2Breunion%2Bde%2Blancement.pdf)
[Cahier+des+charges+-+Extranet.pdf](https://github.com/TonyVice-cpu/GBAF_site/files/10275236/Cahier%2Bdes%2Bcharges%2B-%2BExtranet.pdf)
