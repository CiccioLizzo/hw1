CREATE  DATABASE IF NOT EXISTS apple_store;

USE apple_store;



CREATE TABLE IF NOT EXISTS utenti (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);




CREATE TABLE IF NOT EXISTS prodotti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR(20), 
    name VARCHAR(100),
    image VARCHAR(255),
    chip VARCHAR(100),
    description TEXT,
    price DECIMAL(10,2),
    specs TEXT 
);

INSERT INTO prodotti (categoria, name, image, chip, description, price, specs) VALUES
('watch', 'Apple Watch SE', 'immagini watch/SE.png', 'S8 SiP', 'Sa fare proprio tutto. Anche costarti meno.', 259, '["GPS","Display Retina","Resistente all\'acqua"]'),
('watch', 'Apple Watch Series 10', 'immagini watch/SERIE10.png', 'S10 SiP', 'Il più sottile, con il display più grande e funzioni evolute per la salute.', 459, '["Display Always-On","ECG","Rilevamento cadute"]'),
('watch', 'Apple Watch Ultra 2', 'immagini watch/ULTRA2.png', 'S9 SiP', 'L\'orologio ideale per lo sport e l\'avventura.', 909, '["GPS doppia frequenza","Autonomia 36h","Cassa in titanio"]');
INSERT INTO prodotti (categoria, name, image, chip, description, price, specs) VALUES
('mac',  'MacBook Air', 'immagini mac/MACAIR.png', 'M3', 'Leggero e potente.', 1299, '["13\\" e 15\\"","Fino a 18 ore di autonomia"]'),
('mac',  'MacBook Pro', 'immagini mac/MACPRO.png', 'M3 Pro', 'Prestazioni professionali.', 1999, '["14\" e 16\"","Fino a 22 ore di autonomia"]'),
('mac', 'iMac', 'immagini mac/IMAC.png', 'M3', 'Colorato e tutto in uno.', 1599, '["24\" Retina","6 altoparlanti"]'),
('mac',  'Mac Pro', 'immagini mac/MAC.png', 'M2 Ultra', 'Una workstation di livello pro.', 8499, '["Professionale","Potentissimo"]'),
('mac',  'Studio Display', 'immagini mac/DISPLAY.png', '', 'Display Retina 5K.', 1799, '["27\" 5K","True Tone"]'),
('mac',  'Pro Display XDR', 'immagini mac/DISPLAYXDR.png', '', 'Display Retina 6K.', 5599, '["27\" 6K","True Tone"]');
INSERT INTO prodotti (categoria, name, image, chip, description, price, specs) VALUES
('iphone',  'iPhone 16 Pro', 'immagini iphone/16PRO.png', 'A18 Pro', 'Il nuovo iPhone 16 Pro con fotocamera avanzata.', 1399, '["6.7\" ProMotion","Tripla fotocamera","Face ID"]'),
('iphone',  'iPhone 16', 'immagini iphone/16.png', 'A18', 'Il nuovo iPhone 16, potente e colorato.', 1099, '["6.1\" Super Retina","Doppia fotocamera","Face ID"]'),
('iphone',  'iPhone SE', 'immagini iphone/SE.png', 'A15', 'Compatto e conveniente.', 549, '["4.7\" Retina","Touch ID"]'),
('iphone',  'iPhone 15', 'immagini iphone/15.png', 'A18', 'Grande schermo, grande batteria.', 879, '["6.1\" Super Retina","Doppia fotocamera","Face ID"]');
INSERT INTO prodotti (categoria,  name, image, chip, description, price, specs) VALUES
('ipad',  'iPad Pro', 'immagini ipad/PRO.png', 'M4', 'Il più potente di sempre.', 1399, '["12.9\" Liquid Retina","Face ID","Thunderbolt"]'),
('ipad',  'iPad Air', 'immagini ipad/AIR.png', 'M2', 'Leggero e versatile.', 899, '["10.9\" Liquid Retina","Touch ID"]'),
('ipad',  'iPad', 'immagini ipad/IPAD.png', 'A14', 'Il classico, per tutti.', 589, '["10.2\" Retina","Touch ID"]'),
('ipad',  'iPad mini', 'immagini ipad/MINI.png', 'A15', 'Piccolo, portatile, potente.', 659, '["8.3\" Liquid Retina","Touch ID"]');





