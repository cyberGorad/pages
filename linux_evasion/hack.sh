#!/bin/bash

# Chemin vers le fichier ELF
ELF_FILE="script.elf"

# Vérification de l'existence du fichier
if [[ ! -f "$ELF_FILE" ]]; then
    echo "Erreur : Le fichier $ELF_FILE n'existe pas."
    exit 1
fi

# Vérification des permissions d'exécution
if [[ ! -x "$ELF_FILE" ]]; then
    echo "Le fichier $ELF_FILE n'est pas exécutable. Modification des permissions..."
    chmod +x "$ELF_FILE"
fi

# Exécution du fichier ELF
echo "Démarrage du fichier ELF : $ELF_FILE"
"./bin/$ELF_FILE"

# Capture du code de retour
RETVAL=$?
if [[ $RETVAL -eq 0 ]]; then
    echo "Exécution réussie."
else
    echo "Erreur lors de l'exécution (code de retour : $RETVAL)."
fi
