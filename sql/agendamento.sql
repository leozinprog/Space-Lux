-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS spacelux DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE spacelux;

-- Criar a tabela de agendamentos
CREATE TABLE IF NOT EXISTS agendamentos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  data DATE NOT NULL,
  hora TIME NOT NULL,
  servico VARCHAR(50) NOT NULL,
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserir dados de exemplo
INSERT INTO agendamentos (nome, data, hora, servico) VALUES
('Ana Clara', '2025-05-10', '14:00:00', 'Corte'),
('Beatriz Silva', '2025-05-11', '09:30:00', 'Manicure'),
('Carlos Mendes', '2025-05-12', '11:00:00', 'Sobrancelha'),
('Daniela Souza', '2025-05-12', '15:00:00', 'Maquiagem'),
('Eduarda Lima', '2025-05-13', '13:00:00', 'Corte');
