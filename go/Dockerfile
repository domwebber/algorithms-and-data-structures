FROM golang:alpine

WORKDIR /usr/src/app

COPY go.mod go.sum ./
RUN go mod download && \
  apk update && \
  apk upgrade && \
  apk add build-base && \
  apk add bash

COPY . .
CMD ./scripts/test.sh
