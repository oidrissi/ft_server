# Checks if Nginx is running, reloads it if it's the case and sets autoindex to off

if (( $(ps -ef | grep -v grep | grep nginx | wc -l) > 0 ))
then
    if [ "$AUTOINDEX" = "off" ] ;
    then cp /etc/nginx/sites-available/default_off /etc/nginx/sites-available/default ;
    else cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default ; fi
service nginx reload
else
    if [ "$AUTOINDEX" = "off" ] ;
    then cp /etc/nginx/sites-available/default_off /etc/nginx/sites-available/default ;
    else cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default ; fi
fi