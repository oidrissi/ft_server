#!/bin/bash
docker run -it --env AUTOINDEX=on --name webserver -p 443:443 -p 80:80 webserver
