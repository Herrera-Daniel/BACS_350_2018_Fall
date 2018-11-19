-- Notes Table SQL

CREATE TABLE notes (
    
    id          INT             NOT NULL  AUTO_INCREMENT,
    title       VARCHAR(255)    NOT NULL,    
    date        VARCHAR(100)    NOT NULL,
    body        TEXT,
    PRIMARY KEY (id)
    
);


CREATE TABLE slides (
    
    id          INT             NOT NULL  AUTO_INCREMENT,
    title       VARCHAR(255)    NOT NULL, 
    author       VARCHAR(255),
    date        VARCHAR(255),
    body        TEXT,
    PRIMARY KEY (id)
    
);