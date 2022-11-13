#!/usr/bin/env bash

echo ""

labels=(
    'lint:typescript'
    'lint:python'
    'lint:php'
    'lint:go'
)
dirs=(
    'typescript'
    'python'
    'php'
    'go'
)
cmds=(
    'npm run lint'
    'pipenv run lint'
    'composer run lint'
    './scripts/lint.sh'
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
