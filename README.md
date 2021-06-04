## DOCKER 

**Compose file** : docker-compose.yml

1. **docker-compose up** to run the Compose file
2. It runs php-apache , mysql images 
3. Exposed port 80,6033 for apache,mysql respectively
                  
**Php folder**   : php application

---

## PHP

**Php**        : mysql-connection.php

                 Used for php-mqsql Validation

**Dockerfile** : Dockerfile

                 Used for custom image

---

## Docker Swarm

1. **Docker swarm init** to initialize Docker swarm
2. **Docker node ls** to check the nodes running
3. **DOcker swarm join-token worker** to create token for worker-1
4. With the provided token , we can launch a new woker node on another system


