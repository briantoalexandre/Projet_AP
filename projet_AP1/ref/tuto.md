### Tuto : mise en ligne sur GitHub Pages via glisser‑déposer (drag & drop)

Durée estimée : 10–20 min. Pré‑requis : compte GitHub.

1. Préparer les fichiers

   - Assurez‑vous d’avoir un fichier index.html à la racine du site, et que tous les chemins relatifs (css/, js/, images/) sont corrects.
   - Optionnel : mettre tous les fichiers dans un dossier `docs/` si vous préférez publier depuis cette racine.

2. Créer le dépôt GitHub

   - Connectez‑vous sur github.com.
   - Cliquez sur "New repository".
   - Donnez un nom (ex. hotel-chambord), description facultative.
   - Choisissez Public (GitHub Pages gratuit pour les dépôts publics).
   - Ne cochez pas "Initialize this repository with a README" si vous voulez téléverser tout le site intact.

3. Téléverser les fichiers (drag & drop)

   - Ouvrez le dépôt nouvellement créé.
   - Cliquez sur "Add file" → "Upload files".
   - Glissez‑déposez l’ensemble des fichiers et dossiers du site dans la zone prévue.
   - Vérifiez que `index.html` se trouve bien à la racine (ou dans `docs/` si vous avez choisi cette option).
   - Ajoutez un message de commit (par ex. "Initial upload site") et cliquez sur "Commit changes".

4. Activer GitHub Pages

   - Allez dans "Settings" du dépôt → section "Pages" (ou "Code and automation" → "Pages" selon l’interface).
   - Sous "Build and deployment", choisissez la source :
     - Branch: `main` (ou `master`) et Folder: `/ (root)` si index.html est à la racine.
     - OU Branch: `main` and Folder: `/docs` si vous avez utilisé `docs/`.
   - Cliquez sur "Save" (ou "Save and deploy"). GitHub lancera le déploiement.

5. Obtenir l’URL du site

   - Après déploiement (quelques minutes), l’URL apparaîtra : https://<votre‑pseudo>.github.io/<nom‑du‑repo> (ou https://<votre‑pseudo>.github.io si dépôt nommé `<votre‑pseudo>.github.io`).
   - Ouvrez l’URL pour vérifier le rendu.

6. Mettre à jour le site

   - Pour modifier le site via l’interface web : retournez dans "Add file" → "Upload files" et glissez les nouveaux fichiers (remplacez les précédents), puis commit.
   - Vous pouvez aussi utiliser Git en local pour push si vous préférez le contrôle de version.

7. Problèmes fréquents

   - Page 404 : vérifier la présence d’un `index.html` dans la racine ou `docs/` selon la source choisie.
   - Changements non visibles : attendre quelques minutes puis vider le cache du navigateur.
   - Ressources manquantes : vérifier chemins relatifs et majuscules/minuscules (GitHub Pages est sensible à la casse).

Notes finales

- Le drag & drop via l’interface web est simple pour des sites statiques. Pour évolutions fréquentes ou équipes, privilégiez Git (commit/push) et workflows (branches, PR).
- Conserver une copie locale du projet pour développement et sauvegarde.

### Test du site

- Effectuer une batterie de tests pour détecter et corriger les erreurs éventuelles :
  - Navigation et liens : vérifier que tous les liens internes/externes et les assets (images, CSS, JS) fonctionnent en production (chemins relatifs/absolus).
  - Responsive : tester sur plusieurs largeurs (desktop, tablette, mobile) et corriger les ruptures de mise en page.
  - Formulaires : tester la validation HTML5/JS, les messages d’erreur, et l’envoi (côté frontend) ; vérifier les placeholders et labels.
  - Composants Bootstrap : vérifier le comportement des modals, dropdowns, carrousels, colapses, etc., et corriger les conflits JS/CSS.
  - Compatibilité navigateurs : tester au minimum Chrome, Firefox et Edge (et Safari si possible).
  - Accessibilité basique : vérifier textes alternatifs, ordre de tabulation, labels pour les champs de formulaire et contraste des couleurs.
  - Performances : vérifier le poids des images, minification des fichiers CSS/JS et temps de chargement de pages critiques.
  - Tests JavaScript : vérifier les fonctions interactives, la gestion des erreurs JS et l’absence d’exceptions dans la console.
  - Déploiement LAMP / GitHub : tester l’affichage et les liens une fois déployés sur la machine Linux et sur GitHub Pages (ou dépôt public).
- Procédure de remontée et correction des bugs :
  - Créer une carte/issue par anomalie dans Trello/GitHub avec : titre, description, étapes pour reproduire, capture d’écran et priorité.
  - Répartir les tâches de correction, indiquer l’auteur de la correction et estimer la durée.
  - Faire des commits atomiques avec messages explicites et référencer la carte/issue (ex. "Fix formulaire contact — résout #12").
  - Tester la correction sur la branche avant fusion/push en production.
- Checklist de validation (à cocher une fois testé) :
  - [ ] Tous les liens et assets fonctionnent en production
  - [ ] Responsive validé sur 3 tailles
  - [ ] Formulaires testés et messages d’erreur cohérents
  - [ ] Composants Bootstrap opérationnels
  - [ ] Tests navigateurs effectués
  - [ ] Contrôles d’accessibilité de base passés
  - [ ] Déploiement sur Linux et GitHub vérifié
- Remettre un rapport de tests synthétique dans la documentation (liste des bugs trouvés/corrigés, captures d’écran, étapes manquantes).
