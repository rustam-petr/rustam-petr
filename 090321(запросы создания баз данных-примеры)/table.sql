CREATE TABLE `auto_class` (
                              `id` int(10) UNSIGNED NOT NULL,
                              `Сar model` varchar(50) COLLATE utf8mb4_bin NOT NULL,
                              `Мileage` int(11) NOT NULL,
                              `Еngine volume` float NOT NULL,
                              `Color` varchar(50) COLLATE utf8mb4_bin NOT NULL,
                              `Year of issue` smallint(10) UNSIGNED NOT NULL,
                              `Fuel type` varchar(50) COLLATE utf8mb4_bin NOT NULL,
                              `Price` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='дом.зад.09032021';


INSERT INTO `auto_class` (`id`, `Сar model`, `Мileage`, `Еngine volume`, `Color`, `Year of issue`, `Fuel type`, `Price`) VALUES
(1, 'Toyota', 150250, 2.4, 'gray', 2015, 'petrol', 12000),
(2, 'Opel', 203000, 1.8, 'red', 2010, 'diesel', 8700),
(3, 'BMW', 89000, 3, 'black', 2012, 'diesel', 15000),
(4, 'Acura', 50000, 2.4, 'white', 2011, 'petrol', 17000),
(5, 'Volkswagen', 101000, 2, 'blue', 2010, 'diesel', 5000),
(6, 'Ford', 250000, 3.5, 'red', 2012, 'petrol', 22000),
(7, 'Mazda', 190000, 2.5, 'white', 2009, 'petrol', 10000),
(8, 'Volvo', 77000, 3, 'black', 2016, 'diesel', 18000),
(9, 'Audi', 130500, 2.7, 'gray', 2011, 'diesel', 13000),
(10, 'Honda', 35000, 2, 'black', 2017, 'petrol', 25000);

ALTER TABLE `auto_class`
    ADD PRIMARY KEY (`id`);


ALTER TABLE `auto_class`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
