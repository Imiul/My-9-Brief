CREATE DATABASE IF NOT EXISTS Insurance;
USE Insurance;

CREATE TABLE client (
    id INT(80) PRIMARY KEY NOT NULL,
    pic VARCHAR(80) NOT NULL,
    firstName VARCHAR(80) NOT NULL,
    lastName VARCHAR(80) NOT NULL,
    cnie VARCHAR(80) NOT NULL,
    address VARCHAR(80) NOT NULL,
    date DATE NOT NULL,
    softDelete TIMESTAMP NULL
);

CREATE TABLE insurer (
    id INT(80) PRIMARY KEY NOT NULL,
    pic VARCHAR(80) NOT NULL,
    name VARCHAR(80) NOT NULL,
    address VARCHAR(80) NOT NULL,
    softDelete TIMESTAMP NULL
);

CREATE TABLE article (
    id INT(80) PRIMARY KEY NOT NULL,
    title VARCHAR(80) NOT NULL,
    description VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    insurerId INT NOT NULL,
    clientId INT NOT NULL,
    FOREIGN KEY (insurerId) REFERENCES insurer(id) ON DELETE CASCADE,
    FOREIGN KEY (clientId) REFERENCES client(id) ON DELETE CASCADE,
    softDelete TIMESTAMP NULL
);

CREATE TABLE claim (
    id INT(80) PRIMARY KEY NOT NULL,
    relatedFile VARCHAR(80) NOT NULL,
    description VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    articleId INT NOT NULL,
    FOREIGN KEY (articleId) REFERENCES article(id) ON DELETE CASCADE,
    softDelete TIMESTAMP NULL
);

CREATE TABLE premium (
    id INT(80) PRIMARY KEY NOT NULL,
    amount VARCHAR(80) NOT NULL,
    date DATE NOT NULL,
    claimId INT NOT NULL,
    FOREIGN KEY (claimId) REFERENCES claim(id) ON DELETE CASCADE,
    softDelete TIMESTAMP NULL
);