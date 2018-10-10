--
-- Create table books: name, address, phone
--

CREATE TABLE notes (
  id int(3) NOT NULL AUTO_INCREMENT,
  name     varchar(100)  NOT NULL,
  body  varchar(200)  NOT NULL,
  PRIMARY KEY (id)
);

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `address`, `phone`) VALUES
(1, 'Bill Gates', 'Seattle', 'Richest guy in the world');

