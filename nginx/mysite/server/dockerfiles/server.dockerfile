FROM node:23

WORKDIR /app

COPY package*.json .

RUN npm install

COPY . .

CMD [ "npm", "start" ]
