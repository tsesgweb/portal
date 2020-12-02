# Passos para criação do ambiente de desenvolvimento do portal
## Clonar repositório
```
git  clone https://github.com/tsesgweb/portal
 portal
```
### Ir até a pasta do projeto
```
cd portal
```
### Para melhor compatibilidade use o Node 10
```
node -v v10.XX.X
```
### Instalar dependências do projeto
```
npm install
```
### Instalar gulp-cli globalmente
```
npm -i gulp-cli -g
```
#### ou
```
yarn global add gulp-cli
```
## Comandos do gulp (Tasks)

```
npm start
gulp (deprecated)
```
### Observa a pasta de scss e passa o jshint nos arquivos caso esteja em um servidor PHP
```
gulp server
```
### Cria um servidor local PHP Observa à pasta de scss e passa o jshint nos arquivos.
```
 npm run teste 
 gulp build –-env test (deprecated)
```
```
npm run prod 
gulp build –-env production (deprecated)
```
## Internacional
```
npm run en-teste
gulp build:en –-env test (deprecated)
```
```
npm run en-prod
gulp build:en –-env production (deprecated)
```
# Observação
## Cria os arquivos HTML/CSS/JS para test/production (é necessário que o php esteja no PATH do Windows)


