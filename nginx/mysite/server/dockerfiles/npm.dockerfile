FROM node:23

WORKDIR /app

USER node

ENTRYPOINT [ "npm" ]
