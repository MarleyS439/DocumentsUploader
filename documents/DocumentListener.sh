#!/bin/bash

directory="/home/marley-de-sousa-santos/Downloads/"

function processar_novo_arquivo() {
    new_file="$1"
    echo "Novo arquivo detectado: $new_file"
    if [ -f "$new_file" ]; then
        echo "Conteúdo do arquivo:"
        cat "$new_file"
    else
        echo "O arquivo não pode ser lido ou não é um arquivo regular."
    fi
}

inotifywait -m "$directory" -e create -e moved_to |
    while read dir action file; do
        if [ "$action" = "CREATE" ] || [ "$action" = "MOVED_TO" ]; then
            processar_novo_arquivo "$directory$file"
        fi
    done
