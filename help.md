# 💡 Note perso :
# WordPress doit pouvoir écrire dans le dossier d’installation.
# 777 apres avoir unzip sinon le container peut pas ecrire dedans.

Quand on unzip il faut renomer et donner les permisison d'ecriture pour docker.


# Commande MAMP avec Docker

## 1. Créer le script

Créer un fichier `mamp` dans `~/bin` :

```bash
mkdir -p ~/bin
nano ~/bin/mamp

#!/bin/bash

COMPOSE_PATH="/home/mavrick/DAMP/docker-compose.yml"

case $1 in
  up)
    docker-compose -f "$COMPOSE_PATH" up -d
    ;;
  down)
    docker-compose -f "$COMPOSE_PATH" down
    ;;
  logs)
    docker-compose -f "$COMPOSE_PATH" logs -f
    ;;
  *)
    echo "Usage: mamp {up|down|logs}"
    ;;
esac


chmod +x ~/bin/mamp

## 2. Ajouter ~/bin au PATH

Éditez ~/.bashrc :


Ajoutez à la fin :

export PATH="$HOME/bin:$PATH"


Rechargez la config :

source ~/.bashrc ou reload le terminal


