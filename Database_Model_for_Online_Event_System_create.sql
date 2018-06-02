-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-05-19 01:18:15.776

-- tables
-- Table: Venue
CREATE TABLE Venue (
    id integer NOT NULL CONSTRAINT Venue_pk PRIMARY KEY AUTOINCREMENT,
    name varchar(20) NOT NULL
);

-- Table: customer
CREATE TABLE customer (
    id integer NOT NULL CONSTRAINT customer_pk PRIMARY KEY AUTOINCREMENT,
    full_name varchar(255) NOT NULL,
    email varchar(255) NOT NULL
);

-- Table: event_information
CREATE TABLE event_information (
    id integer NOT NULL CONSTRAINT event_information_pk PRIMARY KEY AUTOINCREMENT,
    name varchar(255) NOT NULL,
    Venue_id integer NOT NULL,
    event_name varchar(255) NOT NULL,
    event_date date NOT NULL,
    event_price decimal(12,2) NOT NULL,
    event_contact varchar(10) NOT NULL,
    event_description varchar(1000) NOT NULL,
    CONSTRAINT event_information_Venue FOREIGN KEY (Venue_id)
    REFERENCES Venue (id)
);

-- Table: order
CREATE TABLE "order" (
    id integer NOT NULL CONSTRAINT order_pk PRIMARY KEY AUTOINCREMENT,
    order_no character(12) NOT NULL,
    client_id integer NOT NULL,
    amount integer NOT NULL,
    discount integer NOT NULL,
    event_information_id integer NOT NULL,
    CONSTRAINT client_order FOREIGN KEY (client_id)
    REFERENCES customer (id),
    CONSTRAINT order_event_information FOREIGN KEY (event_information_id)
    REFERENCES event_information (id)
);

-- views
-- View: ShowTicketsPurchased
CREATE VIEW ShowTicketsPurchased AS
SELECT * FROM order_ticket;

-- View: ShowCustomers
CREATE VIEW ShowCustomers AS
SELECT * FROM customer;

-- View: ViewEvents
CREATE VIEW ViewEvents AS
SELECT event_name, event_date, event_price, event_contact, event_description FROM event_information;

-- End of file.

