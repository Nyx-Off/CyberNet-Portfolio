
# CyberNet Portfolio 

![screenshot](screenshot.png)

## Description

Ce projet est un template de site portfolio entièrement codé en HTML, CSS et JavaScript, avec une intégration PHP pour afficher automatiquement vos projets GitHub. Idéal pour les développeurs, administrateurs réseau, ou tout professionnel de la tech souhaitant présenter ses compétences, son parcours et ses projets dans un format simple et élégant.

## Fonctionnalités

- **Responsive Design :** S'adapte parfaitement aux différentes tailles d'écrans, du mobile au desktop.
- **Intégration GitHub :** Les projets sont automatiquement récupérés depuis GitHub via une API PHP.
- **Effets animés :** Fond animé avec des étoiles, animations au survol des cartes de projet.
- **Menu burger :** Menu de navigation responsive avec un effet de transformation.
- **Section Contact :** Inclut un bouton discret menant à un mini-jeu caché.

## Utilisation

1. **Clonez le repository :**
   ```bash
   git clone https://github.com/votre-nom-utilisateur/portfolio-samy-template.git
   ```

2. **Personnalisez le contenu :**
   - Modifiez le fichier `index.html` pour ajouter vos informations personnelles.
   - Remplacez les liens vers vos propres images, logos, et informations de contact.

3. **Configuration de l'API GitHub :**
   - aller dans le fichier `get_github_projects.php`.
   - Remplacez `TOKEN_GITHUB` par votre token GitHub personnel.
   - Ajoutez vos propres liens de projet dans le tableau `$projectLinks` dans `get_github_projects.php`.

4. **Déployez sur votre serveur :**
   - Uploadez tous les fichiers sur votre serveur web.
   - Vérifiez que PHP est activé pour permettre l'exécution du script d'intégration GitHub.

## Structure des Fichiers

```plaintext
public/
│
├── images/                  # Images du portfolio (logo, photos, etc.)
├── get_github_projects.php  # Script PHP pour récupérer les projets GitHub
└── index.html               # Page principale du portfolio
```

## Contribution

Les contributions sont les bienvenues ! Si vous avez des idées d'améliorations ou trouvez des bugs, n'hésitez pas à créer une issue ou une pull request.

## Licence

Ce projet est sous licence MIT. Vous pouvez l'utiliser librement pour vos projets personnels et professionnels, à condition de créditer l'auteur original.

---

*Conçu avec ❤️ par [Nyx-Off](https://github.com/Nyx-Off).*
```
