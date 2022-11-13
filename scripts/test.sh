#!/usr/bin/env bash

echo ""

labels=(
    'test:go'
    'test:php'
    'test:python'
    'test:typescript'
)
dirs=(
    'go'
    'php'
    'python'
    'typescript'
)
cmds=(
    './scripts/test.sh'
    'composer run test'
    'pipenv run test'
    'npm run test'
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
