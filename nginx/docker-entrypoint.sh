#!/usr/bin/env sh
set -eu

envsubst '${VESTA_USERNAME}' < /etc/nginx/nginx.conf.template > /etc/nginx/nginx.conf
envsubst '${VESTA_USERNAME}' < /usr/share/nginx/html/index.html.template > /usr/share/nginx/html/index.html

exec "$@"