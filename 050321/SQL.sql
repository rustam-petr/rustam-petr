-- Найти работников у которых заработная плата  больше  100 и меньше 420
SELECT fio,zp
FROM `vedomost`
WHERE zp>100 and zp<420
-- Найти тех,кто в бух получает зарплату больше 300 руб
SELECT *
FROM `vedomost`
WHERE otdel="bux" and zp>300
-- Найти работников склада и бух
SELECT *
FROM `vedomost`
WHERE otdel="sklad" or otdel="bux"
-- Найти тех у кого зп больше 500 и работает не в бух
SELECT *
FROM `vedomost`
WHERE not otdel="bux" and zp>500
-- отсортировать по зп по возрастанию
SELECT *
FROM `vedomost`
order BY zp
-- отсортировать по зп в обратном порядке
SELECT *
FROM `vedomost`
order BY zp DESC
-- Вывести список по алфавиту
SELECT *
FROM `vedomost`
order BY fio
-- отсортировать по отделам и зарплате
SELECT *
FROM `vedomost`
order BY otdel,zp
-- переименовать поле
SELECT `fio` AS 'name',`zp`
FROM `vedomost`
-- столбец - это поле, а строка - это запись
-- столбец - это атрибут, а строка - это кортеж

-- переименовать поля в русский язык
SELECT `nomer` AS 'номер', `fio` as 'ФИО',`otdel` as 'отдел',`zp` as 'ЗП'
FROM `vedomost`
--  выводили ЗП в долларах
SELECT `fio`,`zp`/2.6 as 'usd'
FROM `vedomost`
-- округлить до 2 знаков после запятой
SELECT `fio`,round(`zp`/2.6,2) as 'usd'
FROM `vedomost`
-- вывести работников бух и их ЗП в росс.рублях
SELECT `fio`,`otdel`,round(`zp`/0.035,2) as 'usd'
FROM `vedomost`
WHERE otdel="bux"
-- вывести ЗП работников склада во всех валютах (4-рех)
SELECT `fio`,round(`zp`/2.6,2) as 'usd', round(`zp`/0.035,2) as 'rur', round(`zp`/3.2,2) as 'euro',  zp as 'belki'
FROM `vedomost`WHERE otdel="sklad"
