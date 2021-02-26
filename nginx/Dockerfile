FROM nginx:alpine

COPY nginx.conf /etc/nginx/nginx.conf

COPY docker-entrypoint.sh /
COPY index.html /usr/share/nginx/html/index.html.template
ENTRYPOINT ["/docker-entrypoint.sh"]
CMD ["nginx", "-g", "daemon off;"]