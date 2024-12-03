-- Utilitzar la base de dades
USE my_database;

-- Inserir usuaris a la taula `users`
INSERT INTO users (name, email) VALUES
('Alice Smith', 'alice@example.com'),
('Bob Johnson', 'bob@example.com'),
('Charlie Brown', 'charlie@example.com');

-- Inserir comandes a la taula `orders`
INSERT INTO orders (user_id, product_name, quantity) VALUES
(1, 'Laptop', 1),
(2, 'Phone', 2),
(1, 'Headphones', 1),
(3, 'Keyboard', 3);
