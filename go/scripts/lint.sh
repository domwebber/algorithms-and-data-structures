#!/usr/bin/env bash

echo ""

labels=(
    'lint:govet'
    'lint:staticcheck'
)
cmds=(
    'go vet ./...'
    'staticcheck ./...'
)

for i in "${!cmds[@]}"; do
    echo "> ${labels[$i]}"
    echo "> ${cmds[$i]}"
    echo ""

    ${cmds[$i]}

    EXITCODE=$?

    if ! [ $EXITCODE == 0 ]; then
        echo ""
        echo "ERROR: \"${labels[$i]}\" exited with ${EXITCODE}"
        break
    fi
done
