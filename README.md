<div align="center">
    <h1>Spawn</h1>
    <p>Se téléporter au spawn</p>
</div>

--------------------

# Installation
1. Vous devez mettre le plugin en .phar [.phar](https://pmt.mcpe.fun/create/) ou en dossier avec le plugin [devtools](https://poggit.pmmp.io/p/DevTools/) dans le dossier **plugins**

# Configuration:
| **Type**         | **Configuration**          | **Informations**                                                                                       |
|------------------|----------------------------|--------------------------------------------------------------------------------------------------------|
| **__Config__**   | `resources\config.yml`     | Ce fichier de configuration contrôle les coordonnées du spawn ainsi                                    |

## Config
```yaml
spawn:
  world: "default"
  x: 0
  y: 70
  z: 0
  teleport_message: "Vous avez été téléporté au spawn !"

```
- **time** → Délai du clearlag
- **worlds** → Liste des mondes ou le clearlag peut être effectué
- **broadcast** → tout ce qui concerne les messages automatiques ainsi que leur délai
- **sound** → Son lors d'un broadcast et à la fin du clearlag
- **clear_entities** → Activer pour supprimer les entités autres que les items

### Commandes : *(plugin.yml)*
| Commande    | Description          | Permission                          |
|-------------|----------------------|-------------------------------------|
| `/clearlag` | Executer le clearlag | `nepheliashop.permissions.clearlag` |

# Features :
Contactez-nous sur discord pour les ajouter
