FROM node:alpine
RUN mkdir /app
WORKDIR /app
COPY package.json /app
RUN npm install
COPY /backend /app
EXPOSE 3001
CMD ["npm", "start"]