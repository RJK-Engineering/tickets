
CREATE TABLE ticket_categories
(
  id   BIGINT  NOT NULL,
  name VARCHAR NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE ticket_has_category
(
  id          BIGINT NOT NULL,
  ticket_id   BIGINT NOT NULL,
  category_id BIGINT NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE ticket_notes
(
  id        BIGINT NOT NULL,
  ticket_id BIGINT NOT NULL,
  note      TEXT   NULL    ,
  PRIMARY KEY (id)
);

CREATE TABLE tickets
(
  id          BIGINT   NOT NULL,
  created_by  BIGINT   NOT NULL,
  assigned_to BIGINT   NULL    ,
  created_at  DATETIME NOT NULL,
  updated_at  DATETIME NULL    ,
  title       VARCHAR  NOT NULL,
  status      VARCHAR  NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE users
(
  id         BIGINT  NOT NULL,
  first_name VARCHAR NOT NULL,
  last_name  VARCHAR NOT NULL,
  email      VARCHAR NOT NULL,
  password   VARCHAR NOT NULL,
  role       VARCHAR NULL    ,
  phone      VARCHAR NULL    ,
  PRIMARY KEY (id)
);

ALTER TABLE ticket_has_category
  ADD CONSTRAINT FK_ticket_categories_TO_ticket_has_category
    FOREIGN KEY (category_id)
    REFERENCES ticket_categories (id);

ALTER TABLE ticket_has_category
  ADD CONSTRAINT FK_tickets_TO_ticket_has_category
    FOREIGN KEY (ticket_id)
    REFERENCES tickets (id);

ALTER TABLE ticket_notes
  ADD CONSTRAINT FK_tickets_TO_ticket_notes
    FOREIGN KEY (ticket_id)
    REFERENCES tickets (id);

ALTER TABLE tickets
  ADD CONSTRAINT FK_users_TO_tickets
    FOREIGN KEY (created_by)
    REFERENCES users (id);

ALTER TABLE tickets
  ADD CONSTRAINT FK_users_TO_tickets1
    FOREIGN KEY (assigned_to)
    REFERENCES users (id);

