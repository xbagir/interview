create table evaluations
(
    respondent_id varchar(255) not null,
    department_id varchar(255) not null,
    gender        boolean      not null,
    value         integer      not null
);

-- Выбрать все департаменты, в которых есть мужчины и все они поставили высокую оценку (строго выше 10)