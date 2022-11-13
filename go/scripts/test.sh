#!/usr/bin/env bash

echo ""

labels=(
    'test:gotest'
)
cmds=(
    'go test ./...'
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
