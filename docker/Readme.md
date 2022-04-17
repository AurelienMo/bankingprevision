# API Smartpush

## Requirements

- Docker
- Docker-compose

## Stack tech

- PHP 7.4 + Apache
- Database Percona
- Keycloak instance
- Database Postgres for keycloak

## How to build api project

1. Clone API repository
2. At the root folder on smartpush api folder, clone this repository with name `docker`
   1. ```
      git clone git@github.com:Smart-Push/docker-images.git docker
      ```
3. Just launch following command provide by a Makefile `make init`
4. Run migrations doctrine with following command `make migrations-migrate`
5. Add necessary host into your `hosts` local file
   1. `127.0.0.1 phoenix.api.dev.smartpush.fr studentbeans.api.dev.smartpush.fr api.dev.smartpush.fr smartpush.api.dev.smartpush.fr`

## Makefile

A Makefile is provide on this repository.
You can list all commands provide with command `make` or `make help`
