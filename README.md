Build Image Baru
docker build -t <docker_hub_username>/<image_name>:<new_tag> .
docker build -t myusername/myapp:v2 .

<docker_hub_username>: Nama pengguna Docker Hub Anda.
<image_name>: Nama image yang digunakan.
<new_tag>: Tag baru untuk versi image (misalnya v2, latest, dll.).

Push Image ke Docker Hub
docker push <docker_hub_username>/<image_name>:<new_tag>
docker push myusername/myapp:v2

Check container list
docker ps
docker stop <container_id>
docker rm <container_id>

Tarik image terbaru dari Docker Hub:
docker pull <docker_hub_username>/<image_name>:<new_tag>
docker pull myusername/myapp:v2

Jalankan container baru dengan image yang diperbarui:
docker-compose pull
docker-compose up -d





CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,           -- Primary Key (Unique Identifier)
    username VARCHAR(50) NOT NULL UNIQUE,                -- Username, harus unik
    email VARCHAR(100) DEFAULT NULL,                  -- Email, harus unik
    password VARCHAR(255) NOT NULL,                      -- Password, di-hash (hash bcrypt, argon2, dll.)
    full_name VARCHAR(100) DEFAULT NULL,                 -- Nama lengkap user
    phone_number VARCHAR(15) DEFAULT NULL UNIQUE,               -- Nomor telepon, opsional
    role ENUM('admin', 'user', 'superuser') DEFAULT 'user', -- Role user, dengan default 'user'
    status ENUM('active', 'inactive', 'banned') DEFAULT 'active', -- Status akun
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,       -- Waktu akun dibuat
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Waktu terakhir diupdate
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);