<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


Page / Layout,Détails de la migration (Max 5 points)
Base layout,• Migration des slots vers la nouvelle syntaxe Vue 3.• Refactorisation de la structure en Composition API.• Mise à jour des hooks du cycle de vie (ex: mounted vers onMounted).• Validation de la stabilité de l'ossature globale de l'app.• Test de la réactivité des éléments de navigation.
Datatable layout,"• Migration de la logique complexe de tri et pagination.• Adaptation des composants de tableau aux nouvelles API.• Optimisation de la réactivité des jeux de données volumineux.• Séparation de la logique de fetch dans des ""Composables"".• Tests de non-régression sur l'affichage des colonnes."
Form layout,• Migration complète du système de validation (ex: Vuelidate).• Adaptation des v-model (changement majeur en Vue 3).• Centralisation de la logique de soumission asynchrone.• Nettoyage des watchers pour une meilleure performance.• Standardisation de la gestion des messages d'erreur.
Home,• Passage au format <script setup> pour plus de clarté.• Migration des appels API vers le nouveau standard.• Mise à jour du store (Vuex vers Pinia ou Composition API).• Vérification des redirections et du routage.• Tests de chargement initial de l'application.
Profile,• Refactorisation de la gestion des données utilisateur.• Simplification de la logique réactive de modification.• Mise à jour des formulaires de changement de mot de passe.• Adaptation du stockage local (Local/Session Storage).• Validation de la sécurité des accès.
My authorizations,• Refonte de la logique de calcul des droits d'accès.• Création d'un composable dédié aux permissions réutilisable.• Gestion du chargement asynchrone des droits.• Nettoyage de la dette technique (code obsolète Vue 2).• Tests de l'interface utilisateur (UI).
Request new auth.,• Tâche critique : Réécriture de la logique de formulaire complexe.• Migration des validations imbriquées et conditionnelles.• Gestion des états multi-étapes (steppers).• Optimisation du rendu pour éviter les ralentissements.• Tests complets du workflow de soumission.
Audit / Resources,"• Factorisation des patterns répétitifs via des ""Composables"".• Optimisation de l'affichage des gros volumes de logs.• Adaptation des filtres de recherche temporels.• Sécurisation de la récupération des données sensibles.• Mise à jour des composants de visualisation (graphiques/listes)."
