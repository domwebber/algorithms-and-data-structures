#!/usr/bin/env bash

echo ""

labels=(
    'lint:go'
    'lint:php'
    'lint:python'
    'lint:typescript'
)
dirs=(
    'go'
    'php'
    'python'
    'typescript'
)
cmds=(
    './scripts/lint.sh'
    'composer run lint'
    'pipenv run lint'
    'npm run lint'
)

for i in "${!cmds[@]}"; do
    echo "> ${labels[$i]}"
    echo "> ${cmds[$i]}"
    echo ""

    cd "${dirs[$i]}"
    ${cmds[$i]}

    EXITCODE=$?

    cd -

    if ! [ $EXITCODE == 0 ]; then
        echo ""
        echo "ERROR: \"${labels[$i]}\" exited with ${EXITCODE}"
        break
    fi
done
