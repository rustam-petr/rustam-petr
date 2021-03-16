-- Найти человека у которого самая большая зп
SELECT`fio`
FROM `vedomost`
WHERE `zp` =(
        SELECT
            MAX(`zp`)
        FROM
            `vedomost`
    )

-- Найти  человека у которого самая малая зп
SELECT `fio`
FROM `vedomost`
WHERE `zp` =(
        SELECT
            min(`zp`)
        FROM
            `vedomost`
    )

-- Найти всех у кого зарплата выше среднего
SELECT  *
FROM `vedomost`
WHERE `zp` >(
        SELECT
            AVG(`zp`)
        FROM
            `vedomost`
    )

-- Посчитать количество людей в каждом отделе
SELECT `otdel`,COUNT(*)
FROM vedomost
GROUP BY `otdel`

-- Выводит кол-во человек в отделах гдеработают 2 и более человек
SELECT `otdel`,COUNT(*)
FROM vedomost
GROUP BY `otdel` HAVING COUNT(*)>=2

-- Найти среднюю зп в каждом отделе
SELECT `otdel`, AVG(`zp`)
FROM vedomost
GROUP BY `otdel`

-- Найти максимальную и минимальную ЗП во всехотделах
SELECT `otdel`, min(`zp`) as "Минимальная ЗП", MAX(`zp`) as "Максимальная ЗП"
FROM vedomost
GROUP BY `otdel`

-- найти максимальную зарплату в отделах , где работает больше одного человека
SELECT `otdel` as "отдел", MAX(`zp`) as "Максимальная ЗП"
FROM vedomost
GROUP BY `otdel` HAVING COUNT(*)>1

--выводит кол-во клиентов в каждом городе
SELECT
    `CITY`,
    COUNT(*)
FROM
    `customers`
GROUP BY
    `CITY`
-- выводит продавца с минимальными комиссинными
SELECT
    *
FROM
    salespeople
WHERE
        `COMM` =(
        SELECT
            MIN(`COMM`)
        FROM
            salespeople
    )

-- выводит покупателя с самым высоким рейтингом
SELECT
    *
FROM
    `customers`
WHERE
        `RATING` =(
        SELECT
            MAX(`RATING`)
        FROM
            customers
    )

-- выводит клиентов с рейтингом от 150 до 250
SELECT
    *
FROM
    `customers`
WHERE
    `RATING` BETWEEN 150 AND 250

-- выводит клиентов из "London","Berlin","Rome"
SELECT
    *
FROM
    `customers`
WHERE
        `CITY` IN ("London", "Berlin", "Rome")

--выводит клиентов с номером 2002,2006,2008
SELECT
    *
FROM
    `customers`
WHERE
        `CNUM` IN (2002, 2006, 2008)

--выводит клиентов с окончанием в имени на 's'
SELECT
    *
FROM
    `customers`
WHERE
        `CNAME` LIKE '%s'

--Найти продавца обслужившего самый большой заказ
SELECT
    SNAME
FROM
    salespeople
WHERE
        SNUM =(
        SELECT
            `SNUM`
        FROM
            orders
        WHERE
                `AMT` =(
                SELECT
                    MAX(`AMT`)
                FROM
                    orders
            )
    )
--Найти все заказы клиента по имени Grass
SELECT
    *
FROM
    `orders`
WHERE
        CNUM =(
        SELECT
            CNUM
        FROM
            `customers`
        WHERE
                cname = "Grass"
    )

