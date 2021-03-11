-- создать таблицу

CREATE TABLE `ved` (
                       `id` int(11) NOT NULL,
                       `fio` varchar(50) COLLATE utf8_bin DEFAULT NULL,
                       `zp` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Индексы таблицы `ved`
--
ALTER TABLE `ved`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для таблицы `ved`
--
ALTER TABLE `ved`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- заполнить таблицу

INSERT INTO `ved` (`fio`,`zp`)
VALUES('иван иваныч',700);
INSERT INTO `ved` (`fio`,`zp`)
VALUES('Петров Вася',1700);
INSERT INTO `ved` (`fio`,`zp`)
VALUES('пупкин Гриша',21700);
INSERT INTO `ved` (`fio`,`zp`)
VALUES('Иванова Глаша',2500);
INSERT INTO `ved` (`fio`,`zp`)
VALUES('Маша но не наша',200);

-- увеличить з/п на 10%
UPDATE ved SET zp = zp*1.1
WHERE zp<500

-- поменять зарплату
UPDATE ved SET zp = 900
WHERE id = 3;

-- удалить запись(кортеж)
DELETE FROM `ved` WHERE id=5;

-- удалить всю таблицу
DROP TABLE `ved`;

-- найти по первой букве
SELECT *
FROM `vedomost`
WHERE `fio` LIKE 'Л%'

-- % - любое количество любых символов
-- _ - один любой символ

-- найти слово
SELECT *
FROM `vedomost`
WHERE `fio` LIKE '%Петрович'

-- ищет окончание
SELECT *
FROM `vedomost`
WHERE `fio` LIKE '%ов % %'

-- BETWEEN промежуток от 300 до 800 включительно
SELECT *
FROM `vedomost`
WHERE `zp` BETWEEN 300 and 800

-- IN означает "в". Ищет id 2,4,5 в nomer
SELECT *
FROM `vedomost`
WHERE `nomer` IN (2,4,5)

--
SELECT SUM(`zp`) AS 'ОБЩАЯ ЗАРПЛАТА'
FROM `vedomost`

--
SELECT
    SUM(`zp`) AS 'Общая сумма',
    MIN(`zp`) AS 'Минимальная зарплата',
    MAX(`zp`) AS 'Максимальная зарплата',
    AVG(`zp`) AS 'Средняя зарплата',
    COUNT(`zp`) AS 'Кол-во зарплат' -- ищет кол-во заполненных кортежей в поле zp
FROM
    `vedomost`

--ищет общее кол-во кортежей
SELECT
    COUNT(*)
FROM
    `vedomost`
