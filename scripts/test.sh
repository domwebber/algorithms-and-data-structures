#!/usr/bin/env bash

echo ""

labels=(
    'test:typescript'
    'test:python'
    'test:php'
    'test:go'
)
dirs=(
    'typescript'
    'python'
    'php'
    'go'
)
cmds=(
    'npm run test'
    'pipenv run test'
    'composer run test'
    './scripts/test.sh'
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
