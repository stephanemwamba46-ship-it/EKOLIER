EKOLIER

EKOLIER : est une plateforme web dédiée à la gestion et à la présentation des établissements scolaires.

Le projet est organisé autour d'un **backend Laravel** et d'un **frontend React**, avec une architecture séparée permettant de faire évoluer indépendamment les différentes parties de l'application.

Fonctionnalités

* 🏫 Gestion des établissements scolaires
* 👤 Gestion des utilisateurs
* 🔐 Gestion des rôles
* 🗄️ Gestion des données avec une base de données relationnelle
* ⚙️ API et logique métier avec Laravel
* 💻 Interface utilisateur avec React
* 📱 Interface adaptable aux différents écrans

Technologies utilisées

Backend

* PHP
* Laravel
* Laravel Eloquent
* MySQL
* Composer

Frontend

* React
* JavaScript
* Vite
* HTML
* CSS
* npm

Outils

* Git
* GitHub
* Visual Studio Code

Structure du projet

EKOLIER/
├── backend/
│   ├── app/
│   ├── config/
│   ├── database/
│   ├── resources/
│   ├── routes/
│   ├── tests/
│   ├── artisan
│   └── composer.json
│
├── frontend/
│   ├── public/
│   ├── src/
│   ├── package.json
│   └── vite.config.js
│
└── .gitignore

Installation

1. Cloner le projet

git clone https://github.com/stephanemwamba46-ship-it/EKOLIER.git
cd EKOLIER

2. Installer le backend

cd backend
composer install

Créer ensuite le fichier .env à partir de .env.example, puis configurer la base de données.

php artisan key:generate

3. Installer le frontend

Dans un autre terminal :

cd frontend
npm install

4. Lancer le projet

Backend :

cd backend
php artisan serve

Frontend :

cd frontend
npm run dev

Sécurité

Les fichiers contenant des informations sensibles, notamment les variables d'environnement et les identifiants de connexion, ne doivent pas être publiés sur GitHub.

Le fichier .env est exclu du dépôt grâce au .gitignore.

Aperçu

Des captures d'écran et une démonstration du projet pourront être ajoutées ultérieurement.

Auteur

Stéphane Mwamba

Développeur web & logiciel — solutions digitales et entrepreneuriat numérique.
Je transforme des idées en solutions digitales concrètes.

Licence

Projet publié à des fins de présentation, d'apprentissage et de développement.
