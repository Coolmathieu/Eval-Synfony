# Projet d'évaluation : Eval-Synfony

> Une application web Symfony pour créer, consulter, modifier et supprimer des citations (auteur, source, date, genre, langue, tags).

## Fonctionnalités

- Lister toutes les citations enregistrées
- Ajouter une nouvelle citation (texte, auteur, source, date, genre, type, langue, tags)
- Consulter le détail d'une citation
- Modifier une citation existante
- Supprimer une citation
- Validation des champs (longueur du texte, auteur obligatoire, langue parmi une liste fermée, etc.)
- Catégorisation par tags multiples (Philosophie, Humour, Amour, Motivation, Cinéma, Littérature)

## Stack technique

| Composant       | Technologie              |
|-----------------|---------------------------|
| Langage         | PHP >= 8.4                |
| Framework       | Symfony 8.1               |
| ORM             | Doctrine ORM 3.7           |
| Migrations      | Doctrine Migrations Bundle 4.0 |
| Templates       | Twig                       |
| Base de données | MySQL / MariaDB 		|
| Conteneurisation| Docker Compose (service `database`) |

## Prérequis

- PHP 8.4 ou supérieur
- Composer
- [Symfony CLI](https://symfony.com/download) (recommandé)
- Une base de données MySQL/MariaDB
- Docker et Docker Compose (optionnel, pour la base de données)

## Installation

1. Cloner le dépôt :
```bash
git clone https://github.com/Coolmathieu/Eval-Synfony.git
cd Eval-Synfony
```

2. Installer les dépendances PHP :
```bash
composer install
```

3. Configurer la base de données dans `.env.local` (ne pas modifier `.env` directement) :
```bash
DATABASE_URL="mysql://root:@127.0.0.1:3306/EvalSynfony?serverVersion=10.6.12-MariaDB&charset=utf8mb4"
```

4. (Optionnel) Démarrer la base de données via Docker :
```bash
docker compose up -d
```

5. Créer la base de données et exécuter les migrations :
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

## Utilisation

Lancer le serveur de développement :
```bash
symfony serve -d
```

Ou avec le serveur PHP intégré :
```bash
php -S localhost:8000 -t public
```

L'application est ensuite accessible sur [http://localhost:8000/citation](http://localhost:8000/citation).

### Routes principales

| Méthode    | Route                    | Description                     |
|------------|---------------------------|----------------------------------|
| GET        | `/citation`               | Liste des citations             |
| GET/POST   | `/citation/new`           | Ajouter une citation            |
| GET        | `/{id}`                   | Détail d'une citation           |
| GET/POST   | `/citation/edit/{id}`     | Modifier une citation           |
| GET/POST   | `/delete/{id}`            | Supprimer une citation          |

## Arborescence du projet

```
htdocs/
├── config/              # Configuration Symfony (routes, packages, bundles)
├── migrations/          # Migrations Doctrine
├── public/              # Point d'entrée web (index.php)
├── src/
│   ├── Controller/      # CitationController
│   ├── Entity/          # Citation
│   ├── Enum/            # Genre
│   ├── Form/            # CitationType
│   ├── Repository/      # CitationRepository
│   └── Service/         # CitationManager
├── templates/
│   ├── base.html.twig
│   └── citation/        # index, new, edit, show
├── compose.yaml          # Configuration Docker (base de données)
└── composer.json
```

## Contribuer

1. Forker le dépôt
2. Créer une branche pour votre fonctionnalité (`git checkout -b feature/ma-fonctionnalite`)
3. Committer vos changements (`git commit -m 'Ajout de ma fonctionnalité'`)
4. Pousser la branche (`git push origin feature/ma-fonctionnalite`)
5. Ouvrir une Pull Request

Merci de respecter les conventions de code Symfony (`@Symfony` php-cs-fixer ruleset) et d'ajouter des tests pour toute nouvelle fonctionnalité.