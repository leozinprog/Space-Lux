-- Criação da tabela para armazenar imagens da galeria
CREATE TABLE galeria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_imagem VARCHAR(255) NOT NULL,
    caminho_imagem VARCHAR(255) NOT NULL,
    data_upload TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
