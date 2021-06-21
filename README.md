# Welcome to SaludYaApp!

SISTEMA DE REGISTRO DE PACIENTES Y MEDICAMENTOS.

## Instalación

**Instalación manual linux!**
>  - Clone the repository with:
>  git clone https://github.com/ramostfg/sistema_saludya.git
>  - cd sistema_saludya
> - Copy **.env.example** file to **.env** and edit database credentials there
> create database <database_name> character set utf8mb4 collate utf8mb4_unicode_ci;
> - Run composer install
> - Run php artisan key:generate
> - Run php artisan migrate --seed (it has some seeded data for your testing)
> - Run php artisan passport:install (for API authentication)
