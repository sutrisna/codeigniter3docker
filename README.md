# Absensi Sekolah
Palikasi absensi sekolah menggunakan codeigniter 3 dan docker dan juga di sinkronisasi dengan microcontroller
# Install Project
- Clone this project:
```bash
git clone https://github.com/sutrisna/codeigniter3docker.git
cd codeigniter3docker
```
# Build & Run using Docker
```bash
docker-compose up -d
```
# Stop Service using Docker
```bash
docker-compose down
```
# Re-Build using Docker [Jika ada update config atau code di local]
```bash
docker-compose up -d --build
```
# Login to Terminal using Docker
```bash
docker exec -it CONTAINER ID /bin/bash
```
# Docker upload to Docker Hub Repo
```bash
- docker tag local_image_name username/repository_name:tag
- docker push username/repository_name:tag
```
## Detail
- username adalah username Docker Hub Anda.
- repository_name adalah nama yang Anda inginkan untuk repository di Docker Hub.
- tag adalah versi dari image (misalnya, latest, v1.0, dll).
- Titik . di akhir perintah menunjukkan bahwa Dockerfile berada di direktori saat ini.

# Docker List, Stop & Remove Container
```bash
- docker ps
- docker stop CONTAINER ID
- docker rm CONTAINER ID
```
# Docker Remove Images
```bash
- docker rmi IMAGE ID
- docker rmi IMAGE ID -f // force
```
# Docker Remove Volumes
```bash
- docker volume list
- docker volume rm VOLUME NAME
```
# Docker Pull & Running with Team
```bash
- docker pull username/myapp:v1.0
- docker run -d -p 8080:80 username/myapp:v1.0
```
# Run migration
```bash
site/migrationgenerator/run
```
- OR
```bash
site/migrationgenerator/run/[version]
```

