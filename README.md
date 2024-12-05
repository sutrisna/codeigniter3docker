# Absensi Sekolah
Palikasi absensi sekolah menggunakan codeigniter 3 dan docker dan juga di sinkronisasi dengan microcontroller
## Install Project
- Clone this project:
```bash
git clone https://github.com/sutrisna/codeigniter3docker.git
cd codeigniter3docker
```
## Run via Docker Compose
```bash
docker-compose up -d
```
## Stop Service using Docker
```bash
docker-compose down
```
## Re-Build using Docker via Docker Compose [Jika ada update config atau code di local]
```bash
docker-compose up -d --build
```
## OR Re-Build using Docker via DockerFile & Push ke Docker Hub [Jika ada update config atau code di local dan update versi image]
```bash
- docker build -t username/myapp:v2.0 .
- docker push username/myapp:v2.0
```
## Gunakan `docker-compose up -d --build` Jika:
- Anda ingin menjalankan seluruh aplikasi lengkap (misalnya, dengan database, cache, dll.) yang didefinisikan di file `docker-compose.yml`.
- Anda mengelola aplikasi multi-container dan ingin semuanya berjalan secara otomatis sesuai konfigurasi.
## Gunakan `docker build` Jika:
- Anda hanya ingin membangun/memperbarui image Docker untuk diunggah ke registry (misalnya, Docker Hub).
- Tidak perlu menjalankan container setelah membangun image.
## Login to Terminal using Docker
```bash
docker exec -it CONTAINER ID /bin/bash
```
## Docker upload to Docker Hub Repo Jika Baru
```bash
- docker tag local_image_name username/repository_name:tag
- docker push username/repository_name:tag
```
### Detail
- username adalah username Docker Hub Anda.
- repository_name adalah nama yang Anda inginkan untuk repository di Docker Hub.
- tag adalah versi dari image (misalnya, latest, v1.0, dll).
- Titik . di akhir perintah menunjukkan bahwa Dockerfile berada di direktori saat ini.

## Docker List, Stop & Remove Container
```bash
- docker ps
- docker stop CONTAINER ID
- docker rm CONTAINER ID
```
## Docker Remove Images
```bash
- docker rmi IMAGE ID
- docker rmi IMAGE ID -f // force
```
## Docker Remove Volumes
```bash
- docker volume list
- docker volume rm VOLUME NAME
```
## Docker Pull & Running with Team
```bash
- docker pull username/myapp:v1.0
- docker run -d -p 8080:80 username/myapp:v1.0
```
## Create Network on Docker
```bash
docker network create nama-jaringan
```
## Check Network on Docker
```bash
docker network inspect nama-jaringan
```
## Add Container to Network on Docker
```bash
docker network connect nama-jaringan nama-container
```
## Run Image with spesific network
```bash
docker run -d --name mysql-container --network nama-jaringan -e MYSQL_ROOT_PASSWORD=root mysql:5.7
```

## Run migration
```bash
site/migrasi
```
- OR
```bash
site/migrasi/[version]
```
## Run Data Faker
```bash
site/faker
```

