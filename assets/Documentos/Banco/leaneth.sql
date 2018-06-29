-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2018 às 14:08
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leaneth`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `razao_social` varchar(150) DEFAULT NULL,
  `cnpj` varchar(150) DEFAULT NULL,
  `idUsuarios` int(11) DEFAULT NULL,
  `idAdministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_loja`
--

CREATE TABLE `cliente_loja` (
  `nomeFantasia` varchar(150) DEFAULT NULL,
  `cnpj` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `razao_social` varchar(150) DEFAULT NULL,
  `telefone` varchar(150) DEFAULT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma_pagamento`
--

CREATE TABLE `forma_pagamento` (
  `descricao` varchar(150) DEFAULT NULL,
  `idFormaPagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `dataHora` varchar(150) DEFAULT NULL,
  `idPedido` int(11) NOT NULL,
  `idFormaPagamento` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `preco` varchar(150) DEFAULT NULL,
  `estoque_min` int(11) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `idProdutos` int(11) NOT NULL,
  `cor` varchar(150) DEFAULT NULL,
  `idTipoProduto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prod_tamanho`
--

CREATE TABLE `prod_tamanho` (
  `idTamanho` int(11) DEFAULT NULL,
  `idProdutos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_venda`
--

CREATE TABLE `status_venda` (
  `descricao` varchar(150) DEFAULT NULL,
  `idStatusVenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_venda_pedido`
--

CREATE TABLE `status_venda_pedido` (
  `idPedido` int(11) DEFAULT NULL,
  `idStatusVenda` int(11) DEFAULT NULL,
  `data_hora` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho`
--

CREATE TABLE `tamanho` (
  `tamanho` varchar(5) DEFAULT NULL,
  `idTamanho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `tipo` varchar(150) DEFAULT NULL,
  `idTipoProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `telefone` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `idUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas_produto`
--

CREATE TABLE `vendas_produto` (
  `idPedido` int(11) DEFAULT NULL,
  `idProdutos` int(11) DEFAULT NULL,
  `preco_negociado` varchar(10) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `cpf` varchar(150) DEFAULT NULL,
  `idUsuarios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`),
  ADD KEY `idUsuarios` (`idUsuarios`);

--
-- Indexes for table `cliente_loja`
--
ALTER TABLE `cliente_loja`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  ADD PRIMARY KEY (`idFormaPagamento`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idFormaPagamento` (`idFormaPagamento`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProdutos`),
  ADD KEY `idTipoProduto` (`idTipoProduto`);

--
-- Indexes for table `prod_tamanho`
--
ALTER TABLE `prod_tamanho`
  ADD KEY `idTamanho` (`idTamanho`),
  ADD KEY `idProdutos` (`idProdutos`);

--
-- Indexes for table `status_venda`
--
ALTER TABLE `status_venda`
  ADD PRIMARY KEY (`idStatusVenda`);

--
-- Indexes for table `status_venda_pedido`
--
ALTER TABLE `status_venda_pedido`
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idStatusVenda` (`idStatusVenda`);

--
-- Indexes for table `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`idTamanho`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`idTipoProduto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- Indexes for table `vendas_produto`
--
ALTER TABLE `vendas_produto`
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProdutos` (`idProdutos`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD KEY `idUsuarios` (`idUsuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente_loja`
--
ALTER TABLE `cliente_loja`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  MODIFY `idFormaPagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProdutos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_venda`
--
ALTER TABLE `status_venda`
  MODIFY `idStatusVenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `idTamanho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `idTipoProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idFormaPagamento`) REFERENCES `forma_pagamento` (`idFormaPagamento`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente_loja` (`idCliente`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`idTipoProduto`) REFERENCES `tipo_produto` (`idTipoProduto`);

--
-- Limitadores para a tabela `prod_tamanho`
--
ALTER TABLE `prod_tamanho`
  ADD CONSTRAINT `prod_tamanho_ibfk_1` FOREIGN KEY (`idTamanho`) REFERENCES `tamanho` (`idTamanho`),
  ADD CONSTRAINT `prod_tamanho_ibfk_2` FOREIGN KEY (`idProdutos`) REFERENCES `produtos` (`idProdutos`);

--
-- Limitadores para a tabela `status_venda_pedido`
--
ALTER TABLE `status_venda_pedido`
  ADD CONSTRAINT `status_venda_pedido_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`),
  ADD CONSTRAINT `status_venda_pedido_ibfk_2` FOREIGN KEY (`idStatusVenda`) REFERENCES `status_venda` (`idStatusVenda`);

--
-- Limitadores para a tabela `vendas_produto`
--
ALTER TABLE `vendas_produto`
  ADD CONSTRAINT `vendas_produto_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`),
  ADD CONSTRAINT `vendas_produto_ibfk_2` FOREIGN KEY (`idProdutos`) REFERENCES `produtos` (`idProdutos`);

--
-- Limitadores para a tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
