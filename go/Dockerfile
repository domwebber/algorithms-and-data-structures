FROM golang:alpine

WORKDIR /usr/src/app

COPY go.mod go.sum ./
RUN go mod download
RUN apk update && apk upgrade
RUN apk add build-base
RUN apk add bash

COPY . .

CMD ./scripts/test.sh