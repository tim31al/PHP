CREATE TABLE IF NOT EXISTS films (
   id SERIAL PRIMARY KEY,
   title varchar(50) UNIQUE NOT NULL
);