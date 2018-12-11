# Challenge

## Lecture
Lire/Parcourir [les conventions de codage et de nommage de Symfony](https://symfony.com/doc/current/contributing/code/standards.html). Elles vous permettront d'avoir **une base pour l'écriture de votre code**.

## Getting started

A partir de [la documentation Symfony : Getting Started](https://symfony.com/doc/current/index.html) (que nous avons utilisée cet après-midi), **effectuer les actions ci-dessous**.

> :hand: **Toutes les infos sont contenues dans les chapitres du _Getting Started_**. Pas besoin d'aller chercher les infos sur Google pour le moment.

> :hand: **La plupart des packages (ou bundles) sont déjà installés avec le website skeleton** mais si vous essayez de les installer il vous le dira, no problem.

> Astuce : Pour vous retrouver plus facilement dans la documentation des chapitres _Getting Started_ , ne pas hésiter à effectuer le cheminement suivant _"Ou est ce que je récupère / modifie le plus souvent ma session ?"_ -> Controller

### Setup

- Installer une version fraîche de Symfony (website-skeleton), via Composer.

### Creating Pages

- Créer une page dont l'URL est `/howifeel` qui renvoie via **une simple `Response` sous forme de texte**, _"Je me sens "_ suivi d'un mot **choisi au hasard parmi** : `bien, mal, au top, au fond du trou`.
- Créer une seconde page `'/howifeel/emoji'` dont la vue est **sous forme de template `Twig`** et qui affiche l'emoji **choisi au hasard** sous forme d'image (voir dossier `sources` de ce repo). (voir Templating > `asset()`). Utilisez le _base.html.twig_ déjà présent comme layout principal.

### Routing/Controllers/Templates

Depuis les données fournies (voir fichier `data.php` fourni) :

- Créer un nouveau controller, disons `ClassroomController`, dont les routes seront définies dans `config/routes.yml` **en YML et non via annotations** (pour essayer au moins une fois ce format).
- **Trouver un moyen d'intégrer ces données dans le contrôleur** (simple copier-coller dans chaque méthode, propriété du contrôleur utilisable dans chaque méthode via `$this`, autre ?...).
- **Créer une route** `/students` qui affiche la liste des étudiants dans un template Twig (avec la syntaxe HTML de votre choix pour le rendu).
- **Créer une route** `/students/{id}` qui affiche dans une vue Twig le nom et la description de l'étudiant choisi.
  - **Bonus** : Cet `id` doit être un entier (voir _"requirements"_) et correspondra à l'index des datas à afficher.

### Controllers

- **Gérer l'affichage d'une erreur** `404` si un id n'est pas présent dans le tableau, sur la route `/students/{id}` (pensez à vérifier si l'id demandé est bien existant dans le tableau).
- Créer une URL `/pdf` **qui renvoie le calendrier en PDF** présent dans ce repo **(_pas_ de lien _a href_ on veut _streamer_ le fichier)**.
- Créer une URL `/api/students` qui renvoie un JSON des étudiants.
- **Bonus :** **Stocker en session** le nom du dernier étudiant affiché, puis sur la liste des étudiants afficher _"Dernier étudiant affiché : {{ lastStudent }}"_

> Note : Pour le bonus **Stocker en session** , effectuer la mise en session à partir du **controller** et non du fichier contenant vos données.

### Templates suite

- **Générer un lien** _"Retour liste"_, de la page `/students/{id}` vers la page `/students` dans le template à l'aide du nom de la route.
- CSS : inclure un fichier CSS custom **dans le layout principal** (voir `asset()`).
  - Dans ce fichier css, **créer 2 classes** dont la propriété de background est soit blanc, soit gris clair.
  - Dans le template qui affiche la liste des étudiants (`/students`), **faire en sorte que le fond de chaque étudiant alterne de couleur une ligne sur deux** (voir `cycle()`).
  - **Bonus :** Pour la page de détail des étudiants (`/students/{id}`), **faire en sorte que le fond de page soit d'une autre couleur** que la page _students_, à l'aide du `{% block stylesheets %}` présent dans cette page donc UNIQUEMENT sur cette page (voir _Including Stylesheets_).
