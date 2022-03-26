# Products App

## To Setup

### First create a database and set the .env file to connect to it
```
DATABASE_URL="postgresql://username:password@127.0.0.1:5432/productdb?serverVersion=13&charset=utf8"
```

### Next run fixture
```
php bin/console doctrine:fixtures:load
```

## To run:

```
docker-compose up --build
```

### OR

```
symfony server:start
```

## To test:
```
./bin/phpunit
```

## Usage

```
localhost:8000/products
```

### For filter

```
localhost:8000/products?category=sneakers
```
### OR

```
localhost:8000/products?category=sneakers&priceLessThan=50000
```