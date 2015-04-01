CREATE DATABASE IF NOT EXISTS expungement;

USE expungement;

CREATE TABLE IF NOT EXISTS users (
    user_id int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
    user_name varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
    user_password_hash varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
    user_email varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
    PRIMARY KEY (user_id),
    UNIQUE KEY user_name (user_name),
    UNIQUE KEY user_email (user_email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

DROP TABLE IF EXISTS InboxContacts;
CREATE TABLE InboxContacts (
    id int(11) NOT NULL AUTO_INCREMENT,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    firstname varchar(30) NOT NULL,
    lastname varchar(30) NOT NULL,
    email varchar(100) NULL,
    phone varchar(10) NULL,
    contactattempts int(11) NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS CoHContact;
CREATE TABLE CoHContact (
    id int(11) NOT NULL AUTO_INCREMENT,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    firstname varchar(30) NOT NULL,
    lastname varchar(30) NOT NULL,
    email varchar(100) NOT NULL,
    phone varchar(10) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS InitialFormStats;
CREATE TABLE InitialFormStats (
    id int(11) NOT NULL AUTO_INCREMENT,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    tanfq1 bool NOT NULL,
    tanfq2 bool NOT NULL,
    q1 bool NOT NULL,
    q2 bool NOT NULL,
    q3 bool NOT NULL,
    q4 bool NOT NULL,
    q5 bool NOT NULL,
    q6 bool NOT NULL,
    q7 bool NOT NULL,
    q8 bool NOT NULL,
    q9 bool NOT NULL,
    q10 bool NOT NULL,
    q11 bool NOT NULL,
    q12 bool NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS ExpungementFormStats;
CREATE TABLE ExpungementFormStats (
    id int(11) NOT NULL AUTO_INCREMENT,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    tanfq1 bool NOT NULL,
    tanfq2 bool NOT NULL,
    q1 bool NOT NULL,
    q2 bool NOT NULL,
    q3 bool NOT NULL,
    q4 bool NOT NULL,
    q5 bool NOT NULL,
    q6 bool NOT NULL,
    q7 bool NOT NULL,
    q8 bool NOT NULL,
    q9 bool NOT NULL,
    q10 bool NOT NULL,
    q11 bool NOT NULL,
    q12 bool NOT NULL,
    q13 bool NOT NULL,
    q14 bool NOT NULL,
    q15 bool NOT NULL,
    q16 bool NOT NULL,
    q17 bool NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;