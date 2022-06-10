CREATE TABLE `item` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `type_id` int,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` int NOT NULL,
  `is_avalible` boolean DEFAULT true,
  CHECK (price > 0)
);

CREATE TABLE `type` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `type_discount` float DEFAULT 1,
  CHECK (type_discount > 0)
);

ALTER TABLE `item` ADD FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE SET NULL;

INSERT INTO type (type, type_discount) VALUES( "напій", 0.90);
INSERT INTO type (type, type_discount) VALUES( "бургер", 0.95);
select * from type;

INSERT INTO item (type_id, name, path, description, price) VALUES( 2, "Бургер на сніданок", "1.png",
"Булка, масло вершкове, котлета, сир Чедр, бочок копчений, яйце, листя салату, соус BBQ, картоплянi дiпи, Сирний соус з пармезаном", 120);
INSERT INTO item (type_id, name, path, description, price) VALUES( 2, "Рибний бургер", "2.png", 
"Булка, масло вершкове, риба Хек в хрусткiй панiровцi, соус Цезарiон, iкра масаго, помiдори, лимон, картоплянi дiпи, соус Тар-тар", 155);
INSERT INTO item (type_id, name, path, description, price) VALUES( 2, "Бургер з куркою", "2.png", 
"Булка, масло вершкове, карамелiзована курка, сир Чедер, листя салату, соус Айолi, картоплянi дiпи, Сирний соус з пармезаном", 140);
INSERT INTO item (type_id, name, path, description, price) VALUES( 2, "Пікантний бургер", "4.png",
"Булка, масло вершкове, котлета, сир Чедр, сир Блакитний, листя салату, соус смородиновий, картоплні діпи, Сирний сос з пармезаном", 150);
INSERT INTO item (type_id, name, path, description, price) VALUES( 2, "Подвійний бургер", "5.png",
"Булка, масло вершкове, подвiйна котлета, сир Чедр, карамелiзовани цибуля, картоплянi дiпи, Сирний соус з пармезаном", 175);
INSERT INTO item (type_id, name, path, description, price) VALUES( 2, "Класичний бургер", "6.png",
"Булка, масло вершкове, котлета, сир Чедр, беконовий джем, листя салату, хрустка цибуля, соус BBQ, картоплянi дiпи, Сирний соус з памезаном", 130);
INSERT INTO item (type_id, name, path, description, price) VALUES( 2, "Домашній бургер", "7.png",
"Булка, масло вершкове, котлета, сир Блакитний, листя салату, соус смородиновий, картоплні діпи, Сирний сос з пармезаном", 160);
INSERT INTO item (type_id, name, path, description, price) VALUES( 2, "Бургер BBQ", "8.png",
"Булка, масло вершкове, котлета, сир Чедр, беконовий джем, соус BBQ, картоплянi дiпи, Сирний соус з пармезаном", 190);

INSERT INTO item (type_id, name, path, price) VALUES( 1, "Coca cola", "cola.png", 40);
INSERT INTO item (type_id, name, path, price) VALUES( 1, "Coca cola Zero", "Coca-ColaZeroSugarCanada.png", 38);
INSERT INTO item (type_id, name, path, price) VALUES( 1, "Fanta", "fantalogo.png", 35);
INSERT INTO item (type_id, name, path, price) VALUES( 1, "Pepsi", "pepsi.png", 40);
INSERT INTO item (type_id, name, path, price) VALUES( 1, "Borjomi", "borjomi.png", 60);
INSERT INTO item (type_id, name, path, price) VALUES( 1, "Sprite", "sprite.png", 40);
INSERT INTO item (type_id, name, path, price) VALUES( 1, "Schweppes", "Schweppes.png", 42);
INSERT INTO item (type_id, name, path, price) VALUES( 1, "7up", "7up.jpg", 35);






CREATE TABLE `branch` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
);

CREATE TABLE `employee` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patromymic` varchar(255) NOT NULL,
  `position` varchar(255)
);










