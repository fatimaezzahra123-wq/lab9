# 📱 ProjetWS — Application Android avec Web Service PHP

> Application Android permettant de gérer une liste d'étudiants via un Web Service PHP REST, avec Volley et Gson.

---

## 🎯 Objectifs

- Créer une base de données MySQL pour gérer les étudiants
- Développer un Web Service PHP capable d'ajouter et de renvoyer des données en JSON
- Construire une application Android qui consomme ce service via **Volley**
- Utiliser **Gson** pour parser la réponse JSON et afficher les résultats

---

## 🛠️ Technologies utilisées

| Côté | Technologie |
|------|------------|
| Base de données | MySQL (XAMPP) |
| Backend | PHP 8 (PDO) |
| Frontend Mobile | Android (Java) |
| Requêtes HTTP | Volley 1.2.1 |
| Parsing JSON | Gson 2.10.1 |
| IDE Android | Android Studio |
| IDE PHP | VS Code |

---

## 📁 Structure du projet PHP

```
C:\xampp\htdocs\projet\
├── classes/
│   └── Etudiant.php
├── connexion/
│   └── Connexion.php
├── dao/
│   └── IDao.php
├── service/
│   └── EtudiantService.php
└── ws/
    ├── createEtudiant.php
    └── loadEtudiant.php
```

---

## 📁 Structure du projet Android

```
projetws/
├── app/src/main/
│   ├── java/com/example/projetws/
│   │   ├── beans/
│   │   │   └── Etudiant.java
│   │   ├── AddEtudiant.java
│   │   └── MainActivity.java
│   ├── res/
│   │   ├── layout/
│   │   │   └── activity_add_etudiant.xml
│   │   ├── values/
│   │   │   ├── strings.xml
│   │   │   └── themes.xml
│   │   └── xml/
│   │       └── network_security_config.xml
│   └── AndroidManifest.xml
└── build.gradle
```

---

## 🗄️ Base de données

```sql
CREATE DATABASE school1;

CREATE TABLE Etudiant (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    ville VARCHAR(50),
    sexe VARCHAR(10)
);
```

---

## 🚀 Installation et démarrage

### Prérequis
- XAMPP installé
- Android Studio installé
- Java JDK 11+

### Étapes

**1. Démarrer XAMPP**
```
Apache + MySQL → Start
```

**2. Configurer la base de données**
- Ouvrir http://localhost/phpmyadmin
- Créer la base `school1`
- Exécuter le script SQL ci-dessus

**3. Copier les fichiers PHP**
```
Copier le dossier projet/ dans C:\xampp\htdocs\
```

**4. Tester le Web Service**
```
http://localhost/projet/ws/loadEtudiant.php
```

**5. Lancer l'application Android**
- Ouvrir le projet dans Android Studio
- Lancer sur émulateur ou appareil physique

---

## 📡 Web Services

| Endpoint | Méthode | Description |
|----------|---------|-------------|
| `/ws/createEtudiant.php` | POST | Ajouter un étudiant |
| `/ws/loadEtudiant.php` | GET | Récupérer tous les étudiants |

### Exemple de réponse JSON
```json
[
  {"id":"1","nom":"ENNASSIRI","prenom":"FATIMAEZZAHRA","ville":"Marrakech","sexe":"femme"},
  {"id":"2","nom":"MISBAH","prenom":"OMAR","ville":"Agadir","sexe":"homme"}
]
```

---

## 📱 Fonctionnalités

- ✅ Ajouter un étudiant (Nom, Prénom, Ville, Sexe)
- ✅ Envoi des données via requête HTTP POST
- ✅ Affichage de la liste des étudiants en JSON dans Logcat
- ✅ Parsing JSON avec Gson






