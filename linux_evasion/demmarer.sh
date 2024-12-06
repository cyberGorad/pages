#!/bin/bash

# Vérifier si un fichier ELF a été fourni en argument
if [ -z "$1" ]; then
    echo "Usage: $0 script.elf"
    exit 1
fi

# Récupérer le chemin du fichier ELF
ELF_FILE="script.elf"

# Vérifier si le fichier existe
if [ ! -f "$ELF_FILE" ]; then
    echo "Erreur : Le fichier '$ELF_FILE' n'existe pas."
    exit 2
fi

# Vérifier les permissions d'exécution
if [ ! -x "$ELF_FILE" ]; then
    echo "Le fichier '$ELF_FILE' n'est pas exécutable. Ajout des permissions d'exécution..."
    chmod +x "$ELF_FILE"
fi

# Démarrer le fichier ELF
echo "Démarrage de '$ELF_FILE'..."
"./$ELF_FILE"

# Vérifier le statut de sortie
if [ $? -eq 0 ]; then
    echo "Exécution terminée avec succès."
else
    echo "Erreur lors de l'exécution de '$ELF_FILE'."
fi
