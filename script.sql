create table spsc.subscriptions
(
    id                       int auto_increment comment 'Id of subscription'
        primary key,
    email                    varchar(255)                   not null comment 'Email address',
    first_name               varchar(255)                   not null comment 'First name',
    last_name                varchar(255)                   not null comment 'Last name',
    password                 varchar(255) default '123@SPS' not null comment 'password',
    zip                      varchar(10)                    not null comment 'Zip code',
    organization_name        varchar(255)                   not null comment 'Organization name',
    organization_address     varchar(255)                   not null comment 'Organization address',
    country                  varchar(255)                   not null comment 'Country',
    city                     varchar(255)                   not null comment 'City',
    organization_description varchar(255)                   not null comment 'Organization description',
    increase_teleworking     tinyint(1)   default 0         not null comment 'We would like to increase teleworking',
    distance_learning        tinyint(1)   default 0         not null comment 'We would like to prepare students with distance learning',
    corona_virus             tinyint(1)   default 0         not null comment 'Our office are closed cause to Corona virus',
    verifiedFlag             tinyint(1)   default 0         not null comment 'Verified flag',
    language                 varchar(50)                    not null comment 'Language',
    createdAt                timestamp                      not null comment 'Created at'
);


